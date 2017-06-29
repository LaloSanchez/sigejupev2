<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
//version 14/01/2016
if (!isset($_SESSION)) {
    @session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $procedencia = 0;
$origen = $_GET["origen"];
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
    //echo "Procedencia: " . $procedencia;
    //echo "cveJuzgado: ".$_SESSION["cveAdscripcion"];
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
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="" >
    <input type="hidden" id="hiddenJudicialAmparoExhorto" value="" >
    <input type="hidden" id="hiddenIdPersonaAutorizada" value="" >
    <input type="hidden" id="hiddenIdRelacionExpedienteJuzgado" value="" >
    <input type="hidden" id="hiddenCveTipoAbogado" value="" >
    <input type="hidden" id="hiddenLetra" value="A" >
    <input type="hidden" id="hiddenFechaHoy" value="">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Autorizar Causas
            </h5>
        </div>
        <div  id="panelPrincipal" class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divRegresar" class="form-group" style="display:none;">
                    <label class="control-label col-xs-1"></label>
                    <div>
                        <input type="submit" class="btn btn-primary" id="inputRegresar2" value="Regresar" onclick="regresar(2);" >                                                   
                    </div>
                </div>
                <!--<div class="form-group" id="divComprobante"> 
                    <label class="control-label col-md-4 needed">Comprobante</label>
                    <div class="col-md-5">
                        <input type="text" id="txtRegistro" class="form-control" maxlength="10" onkeypress="return validarEntrada(event)">
                    </div>                                
                </div>-->
                <div  id="divDetalles" style="display:none;">
                    <div class="form-group">
                        <label class="control-label col-md-4">Nombre: </label>
                        <div class="col-md-5">
                            <label class="control-label" id="nombreCompleto"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">C&eacute;dula: </label>
                        <div class="col-md-5"> 
                            <label id="cedula" class="control-label"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Email: </label>
                        <div class="col-md-5"> 
                            <label id="email" class="control-label"></label>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4" id="idRelacionCon"><?php
                            if ($origen == 1) {
                                echo "Tribunal:";
                            } else {
                                echo "Juzgado:";
                            }
                            ?></label>
                        <div class="col-md-5">
                            <div id="divCmbJuzgados" class="logobox"></div>
                            <select class="form-control" name="cmbJuzgado" id="cmbJuzgado" onchange="filtrarTipoCarpeta();">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                            <select name="cmbTipoJuzgado" id="cmbTipoJuzgado" style="display: none">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4 needed">Tipo de carpeta</label>
                        <div class="col-md-5">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this)">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                            <select name="cmbTipoCarpetaAux" id="cmbTipoCarpetaAux" style="display:none;">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-4 needed" id="lblRelationName">No.</label>
                        <div id="divSinRelacion" class="col-md-5">
                            <input type="text" id="txtNumero" class="form-inline Relacionado" id="txtNumero" placeholder="N&uacute;mero" maxlength="5" onkeypress="return validarNumeros(event);">/<input type="text" class="form-inline Relacionado" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o" onkeypress="return validarNumeros(event);">
                        </div> 
                        <label class="control-label col-xs-4" id="labelEncontrado"></label>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4 needed">Parte</label>
                        <div class="col-md-5">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control" name="cmbTipoParte" id="cmbTipoParte">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div id="divAutorizar" class="form-group" style="display: none">
                        <label class="control-label col-md-4">Autorizar:</label>
                        <div class="col-md-5">
                            <input type="checkbox" id="idAutorizar" class="form-inline" onclick="copia()">
                        </div>
                    </div>
                    <div id="divCopiaA" class="form-group" style="display: none">
                        <label class="control-label col-md-4">Con copia a:</label>
                        <div class="col-md-5">
                            <input type="checkbox" id="idCopia" class="form-inline" onclick="copiaA()">
                        </div>
                    </div>
                </div>
                <div class="form-group"  id="paginacionMP" style="display:none;">
                    <div class="form-group col-xs-3"> 
                        <label class="control-label col-xs-1"></label>
                        <label class="control-label" id="totalRegMP"></label>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-3" >
                        <label class="control-label">P&aacute;gina:</label>
                        <select  name="cmbPaginacionMP" id="cmbPaginacionMP" onchange="ConsultarMP(0);" >
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumRegMP" id="cmbNumRegMP" onchange="ConsultarMP(1);">
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
                <div id="divMP_letras" class="form-group" style="display: none">
                    <label class="control-label col-md-4">&nbsp;</label>
                    <div class="col-md-5">
                        <label class="control-label">
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("A");'>A</span>
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("B");'> B</span>
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("C");'> C</span>
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("D");'> D</span>
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("E");'> E</span>
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("F");'> F</span>
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("G");'> G</span>
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("H");'> H</span>
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("I");'> I</span>
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("J");'> J</span>
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("K");'> K</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("L");'> L</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("M");'> M</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("N");'> N</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("�");'> &Ntilde;</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("O");'> O</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("P");'> P</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("Q");'> Q</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("R");'> R</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("S");'> S</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("T");'> T</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("U");'> U</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("V");'> V</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("W");'> W</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("X");'> X</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("Y");'> Y</span> 
                            <span style='text-decoration: underline; cursor:pointer;' onclick='ConsultarMP("Z");'> Z</span>
                        </label>
                    </div>
                </div>
                <div id="divMP" class="form-group" style="display: none">
                    <label class="control-label col-md-4">MP</label>
                    <div class="col-md-5">
                        <select class="form-control" id="cmbMP" multiple="multiple">
                            <option value="0">Seleccione:</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-primary" id="botonAgregar" value="Agregar" onclick="botonAgregar();"> 
                        </div>
                    </div>
                </div>
                <div id="divMP_seleccionados" class="form-group" style="display: none">
                    <label class="control-label col-md-4">Seleccionados</label>
                    <div class="col-md-5">
                        <select class="form-control" id="cmbMP_seleccionado" multiple="multiple">
                            <option value="0">Agregue del MP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-primary" id="botonQuitar" value="Quitar" onclick="botonQuitar();"> 
                        </div>
                    </div>
                </div>
                <div  id="divBuscar">
                    <!--<div class="form-group">
                        <label class="control-label col-xs-1"></label>
                        <div>
                            <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar(1);" >                                                   
                        </div>
                    </div>-->
                    <div class="form-group" > 
                        <label class="control-label col-md-4">Nombre</label>
                        <div class="col-md-5">
                            <input type="text" id="txtNombre" class="form-control" placeholder="Nombre" maxlength="45" onkeypress="return validarEntrada(event)" style='text-transform:uppercase; resize: none;'>
                        </div>                                
                    </div>
                    <div class="form-group" > 
                        <label class="control-label col-md-4">Paterno</label>
                        <div class="col-md-5">
                            <input type="text" id="txtPaterno" class="form-control" placeholder="Paterno" maxlength="45" onkeypress="return validarEntrada(event)" style='text-transform:uppercase; resize: none;'>
                        </div>                                
                    </div>
                    <div class="form-group" > 
                        <label class="control-label col-md-4">Materno</label>
                        <div class="col-md-5">
                            <input type="text" id="txtMaterno" class="form-control" placeholder="Materno" maxlength="45" onkeypress="return validarEntrada(event)" style='text-transform:uppercase; resize: none;'>
                        </div>                                
                    </div>
                    <div class="form-group" > 
                        <label class="control-label col-md-4">C&eacute;dula</label>
                        <div class="col-md-5">
                            <input type="text" id="txtCedula" class="form-control" placeholder="" maxlength="7" onkeypress="return validarNumeros(event)">
                        </div>                                
                    </div>
                    <div class="form-group" > 
                        <label class="control-label col-md-4">Email</label>
                        <div class="col-md-5">
                            <input id="txtEmail" class="form-control" type="email" maxlength="100" onkeypress="return validarEmail(event)">
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4">Parte</label>
                        <div class="col-md-5">
                            <select class="form-control" name="cmbTipoParteE" id="cmbTipoParteE">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Fecha Inicial (Registro)</label>
                        <div class="col-md-5">
                            <input type="text" id="fechaConsultar" placeholder="FECHA INICIAL" class="form-control datepicker"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Fecha Final (Registro)</label>
                        <div class="col-md-5">
                            <input type="text" id="fechaConsultarEnd" placeholder="FECHA FINAL" class="form-control datepicker"/>
                        </div>
                    </div>
                </div>
                <div id="divImpresion" class="form-group" style="display: none">
                    <div class="form-group" > 
                        <label class="control-label col-md-7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOLICITUD DE EXPEDIENTE AUTORIZADO</label>
                        <br>
                        <br>
                    </div>
                    <div class="form-group" > 
                        <label class="control-label col-md-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de autorizaci&oacute;n:</label>
                        <label id="labelFechaAutorizacion" class="control-label"></label>
                    </div>
                    <div class="form-group" > 
                        <label class="control-label col-md-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre:</label>
                        <label id="labelNombre" class="control-label"></label>
                    </div>
                    <div class="form-group" > 
                        <label class="control-label col-md-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&eacute;dula Profesional:</label>
                        <label id="labelCedula" class="control-label"></label>
                    </div>
                    <div class="form-group" > 
                        <label class="control-label col-md-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo:</label>
                        <label id="labelCorreo" class="control-label"></label>
                    </div>
                    <div class="form-group" > 
                        <label class="control-label col-md-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspExpediente:</label>
                        <label id="labelExpediente" class="control-label"></label>
                    </div>
                    <div class="form-group" > 
                        <label class="control-label col-md-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parte:</label>
                        <label id="labelParte" class="control-label"></label>
                        <br><br><br><br><br><br>
                    </div>
                    <div class="form-group" > 
                        <label class="col-md-4"></label>
                        <div class="col-md-5">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firma:</label>
                            <br><br><br><br><br><br>
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;_____________________________________________</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4"></label>
                        <div class="col-md-5">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                            <label id="labelNombreFirma"></label>
                        </div>    
                        <br><br><br><br><br><br>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2"></label>
                        <div class="col-xs-10">
                            <label class="control-inline">Nota importante:</label><br>
                            <label class="control-inline">Con base en las leyes aplicables a la materia, se autoriza a este juzgado ser Notificado v&iacute;a</label><br>
                            <label class="control-inline">electr&oacute;nica en el expediente solicitado, as&iacute; como la consulta del Expedinte Electr&oacute;nico del</label><br>
                            <label class="control-inline">mismo.</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" id="inputGuardar" value="Guardar" onclick="guardarRegistro();" style="display: none">                                    
                        <input type="submit" class="btn btn-primary" id="inputImprimir" value="Imprimir" onclick="ventanaImprimir();" style="display: none">
                        <input type="submit" class="btn btn-primary" id="inputConsultar" value="Consultar" onclick="consultarRegistro(true)">                                  
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar(true);" >
                        <input type="submit" class="btn btn-primary" id="inputLimpiarD" value="Limpiar" onclick="limpiar(3);" style="display: none">
                    </div>
                </div>
                <div class="form-group"  id="paginacion" style="display:none;">
                    <div class="form-group col-xs-3"> 
                        <label class="control-label col-xs-1"></label>
                        <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar(2);" > 
                        <label class="control-label" id="totalReg"></label>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-3" >
                        <label class="control-label">P&aacute;gina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarRegistro(false);" >
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarRegistro(true);">
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
                <div id="divConsulta" class="form-group" style="display: none">
                    <div id="divTablePersonasAutorizadas" class="col-xs-8" style="width: 100%;">

                    </div>
                </div>

                <div class="form-group"  id="paginacionPermisos" style="display:none;">
                    <div class="form-group col-xs-3"> 
                        <label class="control-label col-xs-1"></label>
                        <label class="control-label" id="totalRegP"></label>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-3" >
                        <label class="control-label">P&aacute;gina:</label>
                        <select  name="cmbPaginacionP" id="cmbPaginacionP" onchange="verPermisosRegistro(false);" >
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumRegP" id="cmbNumRegP" onchange="verPermisosRegistro(true);">
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
                <div id="divConsultaPermisos" class="form-group" style="display: none">
                    <div id="divTablePersonasAutorizadasPermisos" class="col-xs-8" style="width: 100%;">

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
                    <div id="divAlertInfo3" class="alert alert-info alert-dismissable">
                        <strong>Informaci&oacute;n!</strong> Mensaje
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
        var procedencia = <?php echo $procedencia; ?>;
    var origen = "<?php echo $origen; ?>";
        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';
        copia = function () {
            if (($("#idAutorizar").is(':checked') && ($("#hiddenCveTipoAbogado").val() == 2))) {
                $("#divCopiaA").show();
            } else {
                $("#divCopiaA").hide();
                $("#idCopia").attr("checked", false);
                $("#paginacionMP").hide();
                $("#divMP_letras").hide();
                $("#divMP").hide();
                $("#divMP_seleccionados").hide();
                $("#cmbMP_seleccionado option").remove();
                $("#cmbMP_seleccionado").append("<option value=0>Agregue del MP</option>");
            }
        };
        copiaA = function () {
            $("#cmbMP_seleccionado option").remove();
            $("#cmbMP_seleccionado").append("<option value=0>Agregue del MP</option>");
            if ($("#idCopia").is(':checked')) {
                $("#divMP").show();
                $("#divMP_seleccionados").show();
                $("#divMP_letras").show();
                $("#cmbNumRegMP").val(10);
                $("#cmbPaginacionMP").val(1);
                ConsultarMP("A");
            } else {
                $("#divMP").hide();
                $("#divMP_seleccionados").hide();
                $("#divMP_letras").hide();
                $("#paginacionMP").hide();
            }
        };
        detallesRegistro = function (json, i) {
            regresar(1);
            limpiar(true);
            filtrarTipoCarpeta();
            $("#hiddenIdPersonaAutorizada").val(json.data[i].idPersonaAutorizada);
            $("#nombreCompleto").text(json.data[i].titulo + " " + json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno);
            $("#email").text(json.data[i].email);
            $("#cedula").text(json.data[i].cedula);
            confirmacionDetalles();
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2);'>Autorizar Causas</span> / Permisos");
            if (json.data[i].cveTipoAbogado == 2) {
                $("#hiddenCveTipoAbogado").val("2");
            }
        };
        ConsultarMP = function (letra) {
            if ((letra != 0) && (letra != 1)) {
                $("#hiddenLetra").val(letra);
            }
            $("#cmbMP option").remove();
            $("#fechaConsultar").val("10/01/1980");
            $("#hiddenCveTipoAbogado").val("2");
            $("#cmbTipoParteE").val(0);
            if (letra == 0) {
                consultarRegistro(false);
            } else {
                $("#cmbPaginacionMP").val(1);
                consultarRegistro(true);
            }
        }
        buscarCmbSeleccionado = function (clave) {
            if ($("#cmbMP_seleccionado").find("[value=" + clave + "]").val() == null) {
                return false;
            }
            return true;
        };
        botonAgregar = function () {
            if (($("#cmbMP").val() != 0) && ($("#cmbMP").val() != null)) {
                var texto = $("#cmbMP option:selected").text();
                var clave = $("#cmbMP").val();
                if (!buscarCmbSeleccionado(clave)) {
                    $("#cmbMP_seleccionado").append("<option value=" + clave + ">" + texto + "</option>");
                }
            }
        };
        botonQuitar = function () {
            if (($("#cmbMP_seleccionado").val() != 0) && ($("#cmbMP_seleccionado").val() != null)) {
                var clave = $("#cmbMP_seleccionado").val();
                $("#cmbMP_seleccionado option[value='" + clave + "']").remove();
            }
        };

        confirmacionDetalles = function () {
            $("#divDetalles").show();
            $("#divComprobante").hide();
            $("#inputConsultar").hide();
            if (createRecord == 'S') {
                $("#inputGuardar").show();
            }
            $("#inputConfirmar").hide();
            $("#inputLimpiar").show();
            $("#divRegresar").show();
            verPermisosRegistro(true);
            $("#inputLimpiar").hide();
            $("#inputLimpiarD").show();
        };
        quitarPermiso = function (idRelacionExpedienteJuzgado) {
            var strDatos = "accion=guardar_bitacora";
            strDatos += "&idRelacionExpedienteJuzgado=" + idRelacionExpedienteJuzgado;
            strDatos += "&activo=N";
            //console.log(strDatos);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/relacionexpedientejuzgado/RelacionexpedientejuzgadoFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    //console.log(datos);
                    var json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        $("#divAlertSucces").html("Permiso eliminado");
                        $("#divAlertSucces").show("slide");
                        setTimeAlert("divAlertSucces");
                        verPermisosRegistro(true);
                    } else {
                        $("#divAlertDager").html("No s\u00E9 pudo quitar el permiso");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    console.log(quepaso);
                }
            });
        };
        detallesRegistroPermisos = function (json, i) {
            var mensaje = "\u00A1Advertencia! <br><br>\u00BFEst\u00E1 seguro de quitar el permiso?";
            if (deleteRecord == "N") {
                mensaje = "\u00A1Advertencia! <br><br>No tiene PERMISO para quitar el permiso";
            }
            bootbox.dialog({
                message: mensaje,
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            if (deleteRecord == "S") {
                                quitarPermiso(json.resultados[i].idRelacionExpedienteJuzgado);
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
        };
        verPermisosRegistro = function (bandera) {
            if (bandera) {
                $("#cmbPaginacionP").val(1);
            }
            var strDatos = "accion=consultaPermisosPersonaAutorizada";
            strDatos += "&IdPersonaAutorizada=" + $("#hiddenIdPersonaAutorizada").val();
            strDatos += "&activo=S";
            strDatos += "&paginacion=true";
            strDatos += "&cantxPag=" + $("#cmbNumRegP").val();
            strDatos += "&pag=" + $("#cmbPaginacionP").val();
            //console.log(strDatos);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/relacionexpedientejuzgado/RelacionexpedientejuzgadoFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    //console.log(datos);
                    var json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        var table = "";
                        if (bandera) {
                            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2);'>Autorizar Causas</span> / Permisos");
                        } else {
                            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2);'>Autorizar Causas</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2);'>Consulta</span> / Resultados");
                        }
                        table += "<table id='tblPermisosGridAct' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Tipo Carpeta</th>";
                        table += "<th>N&uacute;mero</th>";
                        table += "<th>A&ntilde;o</th>";
                        table += "<th>Tipo parte</th>";
                        table += "<th>Juzgado</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var jsonDatos = JSON.stringify(json);
                        var indice = $("#cmbPaginacionP").val();
                        indice = (indice - 1) * $("#cmbNumRegP").val();
                        //console.log("Indice: "+indice);
                        for (var i = 0; i < json.totalCount; i++) {
                            table += "<tr style='cursor: pointer;' onclick='detallesRegistroPermisos(" + jsonDatos + "," + i + ")'>";
                            table += "<td > " + (i + 1 + indice) + "</td>";
                            table += "<td>" + json.resultados[i].desTipoCarpeta + "</td>";
                            table += "<td>" + json.resultados[i].numero + "</td>";
                            table += "<td>" + json.resultados[i].anio + "</td>";
                            table += "<td>" + json.resultados[i].descTipoParte + "</td>";
                            table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                            table += "</tr> ";
                        }
                        table += "</tbody> ";
                        table += "</table> ";
                        $("#divConsultaPermisos").show();
                        $("#divTablePersonasAutorizadasPermisos").html(table);
                        $("#tblPermisosGridAct").DataTable({
                            paging: false
                        });
                        if ((bandera) && (json.totalCount > 9)) {
                            calcularPaginas(0);
                        }
                    } else {
                        if (bandera) {
                            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2);'>Autorizar Causas</span> / Permisos");
                        }
                        $("#paginacionPermisos").hide();
                        $("#divConsultaPermisos").hide();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    console.log(quepaso);
                }
            });
        };
        confirmarRegistro = function () {
            if ($("#txtRegistro").val() != "") {
                var strDatos = "accion=confirmarRegistroAutorizado";
                strDatos += "&CveRegistroComprobante=" + $("#txtRegistro").val();
                var mensaje;
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/personaautorizadaelectronico/PersonaautorizadaelectronicoFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        //console.log(datos);
                        var json = eval("(" + datos + ")");
                        if (json.Tipo == "OK") {
                            $("#divAlertSucces").html("Confirmaci&oacute;n correcta!\n\n");
                            $("#divAlertSucces").show("slide");
                            setTimeAlert("divAlertSucces");
                            $("#hiddenIdPersonaAutorizada").val(json.data[0].idPersonaAutorizada);
                            $("#nombreCompleto").text(json.data[0].titulo + " " + json.data[0].nombre + " " + json.data[0].paterno + " " + json.data[0].materno);
                            $("#email").text(json.data[0].email);
                            $("#cedula").text(json.data[0].cedula);
                            confirmacionDetalles();
                        } else {
                            if (json.Tipo == "OK2") {
                                if (json.data[0].cveEstatusRegistro == "2") {
                                    mensaje = "El comprobante ya ha sido registrado";
                                }
                                if (json.data[0].cveEstatusRegistro == "0") {
                                    mensaje = "No se encuentra registrado";
                                }
                                $("#divAlertDager").html("Error:\n\n" + mensaje);
                                $("#divAlertDager").show("slide");
                                setTimeAlert("divAlertDager");
                            } else {
                                $("#divAlertDager").html("Error en la petici&oacute;n:\n\n" + json.mensaje);
                                $("#divAlertDager").show("slide");
                                setTimeAlert("divAlertDager");
                            }
                            $("#hiddenIdPersonaAutorizada").val("");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        console.log(quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            } else {
                $("#hiddenIdPersonaAutorizada").val("");
                $("#divAlertDager").html("Error, ingrese el comprobante");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        };
        buscarTipoCarpeta = function () {
            $("#idAutorizar").attr("checked", false);
            $("#idCopia").attr("checked", false);
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var numAct = $("#txtNumero").val();
            var aniAct = $("#txtAnio").val();
            var strDatosCarpeta = "";
            var error = 0;
            var mensaje = "";
            var url = "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php";
            if (cveTipoCarpeta == 0) {
                error = 1;
                mensaje += "   - Relaci&oacute;n con";
            }
            if (numAct == "") {
                error = 2;
                mensaje += "   - N&uacute;mero";
            }
            if (aniAct == "") {
                error = 3;
                mensaje += "   - A&ntilde;o";
            }
            if (error == 0) {
                $("#div_Detalles_Consulta").hide();
                strDatosCarpeta = "accion=consultarCarpetaExhortoAmparo";//consultar
                strDatosCarpeta += "&cveTipoCarpeta=" + cveTipoCarpeta;
                strDatosCarpeta += "&numero=" + numAct;
                strDatosCarpeta += "&anio=" + aniAct;
                strDatosCarpeta += "&activo=S";
                if ($("#cmbJuzgado").val() == 0) {
                    strDatosCarpeta += "&cveJuzgado=" + juzgadoSesion;
                } else {
                    strDatosCarpeta += "&cveJuzgado=" + $("#cmbJuzgado").val();
                }
                $.ajax({
                    type: "POST",
                    url: url,
                    data: strDatosCarpeta,
                    global: false,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        //console.log("MENSAJE: "+datos);
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON
                        if (json.totalCount > 0) {
                            //console.log("carpeta encontrada");
                            if ((cveTipoCarpeta != 7) && (cveTipoCarpeta != 8)) {
                                $("#hiddenIdCarpetaJudicial").val(json.data[0].idCarpetaJudicial);
                            } else {
                                if (cveTipoCarpeta == 8) {//amparo
                                    $("#hiddenIdCarpetaJudicial").val(json.data[0].idAmparo);
                                } else {//exhorto
                                    $("#hiddenIdCarpetaJudicial").val(json.data[0].idExhorto);
                                }
                            }
                            $("#hiddenJudicialAmparoExhorto").val(cveTipoCarpeta);
                            $("#labelEncontrado").text("Carpeta encontrada");
                            $("#labelEncontrado").show();
                            $("#divAutorizar").show();
                            carpeta = true;
                            document.getElementById("cmbJuzgado").disabled = true;
                        } else {
                            //console.log("carpeta no encontrada");
                            $("#labelEncontrado").text("No se encontr\u00F3 la Carpeta");
                            $("#labelEncontrado").show();
                            $("#divAutorizar").hide();
                            $("#divCopiaA").hide();
                            $("#hiddenIdCarpetaJudicial").val("");
                            $("#hiddenJudicialAmparoExhorto").val("");
                        }
                        $('#barCarga').html("");

                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#hiddenIdCarpetaJudicial").val("");
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            } else {
                $("#divInformacion").show();
                $("#strInformacion").html("Informaci&oacute;n! seleccione: " + mensaje);
                setTimeAlert("divInformacion");
            }
        };
        filtrarTipoCarpeta = function () {
            $("#cmbTipoCarpeta option").each(function () {
                $(this).hide();
            });
            $("#cmbTipoCarpeta option[value=0]").show();
            var cveJuzgado = $("#cmbJuzgado").val();
            var cveTipoJuzgado = $("#cmbTipoJuzgado option[value='" + cveJuzgado + "']").text();
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
                        if (cveTipoJuzgado == 5) {//toca
                            $("#cmbTipoCarpeta option[value=6]").show();
                            $("#cmbTipoCarpeta option[value=8]").show();
                            $("#cmbTipoCarpeta option[value=7]").show();
                        } else{//opcion no valida
                            if (cveTipoJuzgado == 8) {//toca
                                $("#cmbTipoCarpeta option[value=6]").show();
                                $("#cmbTipoCarpeta option[value=8]").show();
                                $("#cmbTipoCarpeta option[value=7]").show();
                            } else{//opcion no valida
                                /*$("#cmbTipoCarpeta option[value=8]").show();
                                 $("#cmbTipoCarpeta option[value=6]").show();
                                 $("#cmbTipoCarpeta option[value=7]").show();*/
                            }
                        }
                    }
                }
            }
        }
            $("#cmbTipoCarpeta").val(0);
        };
        cargaJuzgados = function () {
        var accion = "";
            var url = "";
            if (origen == 1) {
                url = "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                        accion = "consultarCombo";

            } else {
                url = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
                accion = "distrito";
            }
            $.ajax({
                type: "POST",
            url: url,
            data: {
                    accion: accion,
                    activo: 'S',
                    obligaPermiso: false
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
                            $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                        if(origen ==1){
                        $("#cmbTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].cveTipoJuzgado));
                        }else{
                            $("#cmbTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].cveTipojuzgado));
                        }
                    }
                        $("#cmbJuzgado").val(juzgadoSesion);
                    }
                    $('#divCmbJuzgados').hide();
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
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
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            if (json.data[i].cveTipoCarpeta != 10) {
                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            }
                        }
                    }
                    $('#divCmbRelaciones').hide();

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        regresar = function (bandera) {
            $("#inputLimpiar").show();
            $("#inputLimpiarD").hide();
            $("#cmbMP_seleccionado option").remove();
            $("#cmbMP_seleccionado").append("<option value=0>Agregue del MP</option>");
            $("#divCopiaA").hide();
            $("#divMP_letras").hide();
            $("#divMP").hide();
            $("#paginacionMP").hide();
            $("#paginacionPermisos").hide();
            $("#hiddenCveTipoAbogado").val("");
            $("#divMP").hide();
            $("#divMP_seleccionados").hide();
            $("#divMP_letras").hide();
            $("#cmbNumRegMP").val(10);
            $("#cmbNumRegP").val(10);
            if (bandera == 1) {
                $("#cmbNumReg").val(10);
                $("#h5titulo").html("Autorizar");
                $("#divConsulta").hide();
                //limpiar(true);
                $("#txtRegistro").val("");
                $("#inputConsultar").show();
                $("#divComprobante").show();
                $("#inputConfirmar").show();
                //$("#inputBuscar").hide();
                $("#inputGuardar").hide();
                $("#inputRegresar").hide();
                $("#divBuscar").hide();
                $("#divDetalles").hide();
                $("#inputLimpiar").show();
                $("#hiddenIdCarpetaJudicial").val("");
                $("#hiddenIdRelacionExpedienteJuzgado").val("");
                $("#divComprobante").show();
            }
            if (bandera == 2) {
                $("#inputGuardar").hide();
                $("#divDetalles").hide();
                $("#divBuscar").show();
                $("#divConsulta").hide();
                $("#inputConsultar").show();
                $("#inputLimpiar").show();
                $("#h5titulo").html("Autorizar Causas");
            }
            $("#inputImprimir").hide();
            $("#paginacion").hide();
            $("#divRegresar").hide();
            $("#divConsultaPermisos").hide();
            $("#paginacionPermisos").hide();
        };
        /*previoConsultar = function () {
         $("#divComprobante").hide();
         $("#inputConfirmar").hide();
         $("#inputRegresar").show();
         $("#inputBuscar").show();
         $("#inputConsultar").hide();
         $("#divComprobante").hide();
         $("#divBuscar").show();
         $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1);'>Confirmaci&oacute;n del registro</span> / Consulta");
         };*/
        calcularPaginas = function (bandera) {
            var strDatos = "accion=getPaginasRelacionExpediente";
            strDatos += "&paginacion=false";
            strDatos += "&cantxPag=" + $("#cmbNumReg").val();
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            var url = "../fachadas/sigejupe/personaautorizadaelectronico/PersonaautorizadaelectronicoFacade.Class.php";
            if ((bandera == 1) || (bandera == 2)) {
                strDatos += "&nombre=" + $("#txtNombre").val();
                if ($("#hiddenCveTipoAbogado").val() != 2) {
                    strDatos += "&nombre=" + $("#txtNombre").val();
                } else {
                    //strDatos += "&nombre=" + $("#hiddenLetra").val();
                    strDatos += "&letra=" + $("#hiddenLetra").val();
                    strDatos += "&cveEstatusRegistro=2";
                    strDatos += "&statusGenercionCorreo=2";
                }
                strDatos += "&paterno=" + $("#txtPaterno").val();
                strDatos += "&materno=" + $("#txtMaterno").val();
                strDatos += "&cedula=" + $("#txtCedula").val();
                strDatos += "&email=" + $("#txtEmail").val();
                strDatos += "&activo=S";
                if (($("#txtNombre").val() == "") && ($("#txtPaterno").val() == "") && ($("#txtMaterno").val() == "") && ($("#txtCedula").val() == "") && ($("#txtEmail").val() == "") && ($("#cmbTipoParteE").val() == 0) && ($("#hiddenCveTipoAbogado").val() == "")) {
                    strDatos += "&fechaDesde=" + $("#fechaConsultar").val();
                    strDatos += "&fechaHasta=" + $("#fechaConsultarEnd").val();
                }
                if ($("#cmbTipoParteE").val() > 0) {
                    strDatos += "&cveTipoAbogado=" + $("#cmbTipoParteE").val();
                } else {
                    strDatos += "&cveTipoAbogado=" + $("#hiddenCveTipoAbogado").val();
                }
            } else {
                strDatos = "accion=getPaginasPermisosPersonaAutorizada";
                strDatos += "&IdPersonaAutorizada=" + $("#hiddenIdPersonaAutorizada").val();
                strDatos += "&paginacion=false";
                strDatos += "&cantxPag=" + $("#cmbNumRegP").val();
                strDatos += "&pag=" + $("#cmbPaginacionP").val();
                url = "../fachadas/sigejupe/relacionexpedientejuzgado/RelacionexpedientejuzgadoFacade.Class.php";
            }
            $.ajax({
                type: "POST",
                url: url,
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var combo = "";
                    var json = "";
                    //console.log("INF: "+datos);
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if ((json.Tipo == "OK") || (json.Estatus == "ok")) {
                        var totalRegistros = json.totalCount;
                        var numReg = $("#cmbNumReg").val();
                        if ((bandera == 1) || (bandera == 2)) {
                            if (bandera == 1) {
                                $("#totalReg").text("Total: " + totalRegistros);
                            } else {
                                numReg = $("#cmbNumRegMP").val();
                                $("#totalRegMP").text("Total: " + totalRegistros);
                            }
                        } else {
                            totalRegistros = json.resultados[0].totalCount;
                            numReg = $("#cmbNumRegP").val();
                            $("#totalRegP").text("Total: " + totalRegistros);
                        }
                        if (totalRegistros / numReg < 0) {
                            combo += "<option value='" + 1 + "'>" + 1 + "</option>";
                        } else {
                            var i;
                            for (i = 0; i < totalRegistros / numReg; i++) {
                                combo += "<option value='" + (i + 1) + "'>" + (i + 1) + "</option>";
                            }
                        }
                        if ((bandera == 1) || (bandera == 2)) {
                            if (bandera == 1) {
                                $("#cmbPaginacion").html(combo);
                                $("#paginacion").show();
                            } else {
                                $("#cmbPaginacioMPn").html(combo);
                                $("#paginacionMP").show();
                            }
                        } else {
                            $("#cmbPaginacionP").html(combo);
                            $("#paginacionPermisos").show();
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    console.log("Ocurrio un error: " + quepaso);
                }
            });
        };
        consultarRegistro = function (bandera) {
            if (bandera) {
                $("#cmbPaginacion").val(1);
            }
            var strDatos = "accion=consultarRelacionExpediente";
            if ($("#hiddenCveTipoAbogado").val() != 2) {
                strDatos += "&nombre=" + $("#txtNombre").val();
            } else {
                //strDatos += "&nombre=" + $("#hiddenLetra").val();
                strDatos += "&letra=" + $("#hiddenLetra").val();
                strDatos += "&cveEstatusRegistro=2";
                strDatos += "&statusGenercionCorreo=2";
                strDatos += "&ORDER_BY=nombre ASC";
            }
            strDatos += "&paterno=" + $("#txtPaterno").val();
            strDatos += "&materno=" + $("#txtMaterno").val();
            strDatos += "&cedula=" + $("#txtCedula").val();
            strDatos += "&email=" + $("#txtEmail").val();
            if ($("#cmbTipoParteE").val() > 0) {
                strDatos += "&cveTipoAbogado=" + $("#cmbTipoParteE").val();
            } else {
                strDatos += "&cveTipoAbogado=" + $("#hiddenCveTipoAbogado").val();
            }
            strDatos += "&activo=S";
            if (($("#txtNombre").val() == "") && ($("#txtPaterno").val() == "") && ($("#txtMaterno").val() == "") && ($("#txtCedula").val() == "") && ($("#txtEmail").val() == "") && ($("#cmbTipoParteE").val() == 0) && ($("#hiddenCveTipoAbogado").val() == "")) {
                strDatos += "&fechaDesde=" + $("#fechaConsultar").val();
                strDatos += "&fechaHasta=" + $("#fechaConsultarEnd").val();
            }
            strDatos += "&paginacion=true";
            strDatos += "&cantxPag=" + $("#cmbNumReg").val();
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/personaautorizadaelectronico/PersonaautorizadaelectronicoFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    //console.log(datos);
                    json = eval("(" + datos + ")"); //Parsear JSON
                    var table = "";
                    if (json.totalCount > 0) {
                        $("#inputConsultar").hide();
                        if ($("#hiddenCveTipoAbogado").val() != 2) {
                            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2);'>Autorizar Causas</span> / Resultados");
                            $("#hiddenIdRelacionExpedienteJuzgado").val(json.data[0].idRelacionExpedienteJuzgado);
                            table += "<table id='tblResultadosGridAct' class='table table-hover table-striped table-bordered'>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>N&uacute;m.</th>";
                            table += "<th>Nombre</th>";
                            table += "<th>Cedula</th>";
                            table += "<th>Correo</th>";
                            table += "<th>Fecha de alta</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            var jsonDatos = JSON.stringify(json);
                            var indice = $("#cmbPaginacion").val();
                            indice = (indice - 1) * $("#cmbNumReg").val();
                            for (var i = 0; i < json.totalCount; i++) {
                                table += "<tr style='cursor: pointer;' onclick='detallesRegistro(" + jsonDatos + "," + i + ")'>";
                                table += "<td > " + (i + 1 + indice) + "</td>";
                                table += "<td>" + json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno + "</td>";
                                table += "<td>" + json.data[i].cedula + "</td>";
                                table += "<td>" + json.data[i].email + "</td>";
                                table += "<td>" + fechaMySQLaNormal(json.data[i].fechaAlta) + "</td>";
                                table += "</tr> ";
                            }
                            table += "</tbody> ";
                            table += "</table> ";
                            $("#divConsulta").show();
                            $("#divBuscar").hide();
                            $("#inputBuscar").hide();
                            $("#inputLimpiar").hide();
                            $("#divTablePersonasAutorizadas").html(table);
                            $("#tblResultadosGridAct").DataTable({
                                paging: false
                            });
                            if ((bandera) && (json.totalCount > 9)) {
                                calcularPaginas(1);
                            }
                        } else {//REsultados MP
                            for (var i = 0; i < json.totalCount; i++) {
                                $("#cmbMP").append("<option value=" + json.data[i].idPersonaAutorizada + ">"
                                        + json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno + "</option>");
                            }
                            if (bandera) {
                                calcularPaginas(2);
                            }
                        }
                    } else {
                        if ($("#hiddenCveTipoAbogado").val() == 2) {
                            $("#cmbMP option").remove();
                            $("#paginacionMP").hide();
                            $("#cmbMP").append("<option value=0>No hay registros con:" + $("#hiddenLetra").val() + "</option>");
                        } else {
                            $("#divAlertDager").html(json.mensaje);
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la petici\u00F3n:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        fechaMySQLaNormal = function (fecha) {
            if ((fecha != "") && (fecha != null)) {
                var fechaHora = fecha.split(" ");
                var vecFecha = fechaHora[0].split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                if (fechaHora[1] == null) {
                    return fechaNormal;
                }
                return fechaNormal + " " + fechaHora[1];
            }
            return "";
        };
        ventanaImprimir = function () {
            var divImpresion = document.getElementById("divImpresion");
            var ventimp = window.open(' ', 'mywindow');
            ventimp.document.write(divImpresion.innerHTML);
            ventimp.document.close();
            ventimp.print();
            ventimp.close();
        };
        llenarVentanaImpresion = function (fechaRegistro) {
            $("#labelFechaAutorizacion").text(fechaRegistro);
            $("#labelNombre").text($("#nombreCompleto").text());
            $("#labelCedula").text($("#cedula").text());
            $("#labelCorreo").text($("#email").text());
            $("#labelExpediente").text($("#txtNumero").val() + "/" + $("#txtAnio").val());
            $("#labelParte").text($("#cmbTipoParte option:selected").html());
            $("#labelNombreFirma").text("  " + $("#nombreCompleto").text());
        };
        guardarAutorizacion = function (strDatos) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/relacionexpedientejuzgado/RelacionexpedientejuzgadoFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos == "registro_existente") {
                        $("#divAlertDager").html("Error. El permiso ya se encuentra autorizado \n\n");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    } else {
                        var json = "";
                        json = eval("(" + datos + ")");
                        if (json.totalCount > 0) {
                            var mensaje = "Autorizaci\u00F3n correcta!\n\n";
                            if ($("#hiddenIdRelacionExpedienteJuzgado").val() != "") {
                                mensaje = "Actualizaci\u00F3n correcta!";
                            }
                            $("#hiddenIdRelacionExpedienteJuzgado").val(json.data[0].idRelacionExpedienteJuzgado);
                            //console.log("hiddenIdRelacion: " + $("#hiddenIdRelacionExpedienteJuzgado").val());
                            $("#divAlertSucces").html(mensaje);
                            $("#divAlertSucces").show("slide");
                            $("#inputImprimir").show();
                            setTimeAlert("divAlertSucces");
                            llenarVentanaImpresion(json.data[0].fechaRegistro);
                            verPermisosRegistro(true);
                            document.getElementById("cmbJuzgado").disabled = true;
                            document.getElementById("cmbTipoCarpeta").disabled = true;
                            document.getElementById("txtNumero").disabled = true;
                            document.getElementById("txtAnio").disabled = true;
                            document.getElementById("cmbTipoParte").disabled = true;
                            document.getElementById("idAutorizar").disabled = true;
                            $("#inputGuardar").hide();
                        } else {
                            $("#divAlertDager").html("Error en la petici\u00F3n: \n\n" + json.text);
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la petici\u00F3n:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        obtenerIdPersonasAutorizadasHijos = function () {
            var lista = "";
            $("#cmbMP_seleccionado option").each(function () {
                if ($(this).val() != 0) {
                    lista += $(this).val() + ",";
                }
            });
            return lista;
        };
        guardarRegistro = function () {
            var strDatos = "accion=guardar_bitacora";
            strDatos += "&idRelacionExpedienteJuzgado=" + $("#hiddenIdRelacionExpedienteJuzgado").val();
            strDatos += "&IdPersonaAutorizada=" + $("#hiddenIdPersonaAutorizada").val();
            strDatos += "&IdCarpetajudicial=" + $("#hiddenIdCarpetaJudicial").val();
            strDatos += "&cveTipoCarpeta=" + $("#hiddenJudicialAmparoExhorto").val();
            strDatos += "&cveTipoParte=" + $("#cmbTipoParte").val();
            strDatos += "&fechaActualizacion=" + fechaHoy();
            strDatos += "&activo=S";
            strDatos += "&hijosPersonasAutorizadas=" + obtenerIdPersonasAutorizadasHijos();
            var error = false;
            var mensaje = "";
            if ($("#cmbTipoCarpeta").val() == 0) {
                error = true;
                mensaje += "Seleccione   - Tipo de carpeta   ";
            }
            if ($("#txtNumero").val() == "") {
                error = true;
                mensaje += "Ingrese   - N&uacute;mero   ";
            }
            if ($("#txtAnio").val() == "") {
                error = true;
                mensaje += "Ingrese   - A&ntilde;o   ";
            }
            if ($("#cmbTipoParte").val() == 0) {
                error = true;
                mensaje += "Seleccione   - Parte   ";
            }
            if ($("#hiddenIdCarpetaJudicial").val() == "") {
                error = true;
                mensaje += "No se ha encontrado ninguna carpeta";
            }
            if (!error) {
                if (document.getElementById("idAutorizar").checked) {
                    guardarAutorizacion(strDatos);
                } else {
                    bootbox.dialog({
                        message: "Advertencia!! <br><br> Debe autorizar el permiso para guardar",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {

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
            } else {
                $("#divAlertDager").html(mensaje);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        };
        cargaTiposPartes = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo='S'";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tipospartes/TipospartesFacade.Class.php",
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
                            $("#cmbTipoParte").append($('<option></option>').val(json.data[i].cveTipoParte).html(json.data[i].descTipoParte));
                            var parte = json.data[i].cveTipoParte;
                            if ((parte == 12) || (parte == 13) || (parte == 14)) {
                                $("#cmbTipoParteE").append($('<option></option>').val(json.data[i].cveTipoParte-10).html(json.data[i].descTipoParte));
                            }
                        }
                    }
                    $('#divCmbRelaciones').hide();
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la petici\u00F3n:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        limpiar = function (bandera) {
            $("#cmbMP_seleccionado option").remove();
            $("#cmbMP_seleccionado").append("<option value=0>Agregue del MP</option>");
            $("#cmbJuzgado").val(juzgadoSesion);
            if (bandera) {
                $("#txtRegistro").val("");
            } else {
                if (updateRecord == "S") {
                    $("#inputGuardar").show();
                }
            }
            if (bandera == 3) {
                $("#inputGuardar").show();
            }
            $("#divCopiaA").hide();
            $("#divMP_letras").hide();
            $("#divMP_seleccionados").hide();
            $("#paginacionMP").hide();
            $("#divMP").hide();
            $("#cmbNumReg").val(10);
            $("#cmbNumRegP").val(10);
            $("#cmbNumRegMP").val(10);
            document.getElementById("cmbJuzgado").disabled = false;
            document.getElementById("cmbTipoCarpeta").disabled = false;
            document.getElementById("txtNumero").disabled = false;
            document.getElementById("txtAnio").disabled = false;
            document.getElementById("cmbTipoParte").disabled = false;
            document.getElementById("idAutorizar").disabled = false;
            $("#inputImprimir").hide();
            $("#hiddenIdRelacionExpedienteJuzgado").val("")
            $("#txtNombre").val("");
            $("#txtPaterno").val("");
            $("#txtMaterno").val("");
            $("#txtCedula").val("");
            $('#fechaConsultar').val("");
            $('#fechaConsultarEnd').val("");
            $("#cmbTipoCarpeta").val(0);
            $("#cmbTipoParte").val(0);
            $("#txtNumero").val("");
            $("#txtAnio").val("");
            $("#idAutorizar").attr("checked", false);
            $("#idCopia").attr("checked", false);
            $("#labelEncontrado").hide();
            $("#divAutorizar").hide();
            $("#divCopiaA").hide();
        };
        validarNumeros = function (evt) {
            var e = evt || event;
            var teclaAscii = e.keyCode || e.which;
            if (((teclaAscii > 47) && (teclaAscii < 58)) || (teclaAscii == 8) || (teclaAscii == 9)) {
                return true;
            }
            return false;
        };
        validarEntrada = function (evt) {
            var e = evt || event;
            var teclaAscii = e.keyCode || e.which;
            if ((teclaAscii > 64) && (teclaAscii < 91)) {//Le tras mayuscu l as
                return  true;
            }
            if ((teclaAscii > 96) && (teclaAscii < 123)) {//Le tras mayuscu la s
                return true;
            }
            if ((teclaAscii == 180) || (teclaAscii == 193) || (teclaAscii == 201) || (teclaAscii == 205) || (teclaAscii == 211) || (teclaAscii == 218)) {
                return true;
            }
            if ((teclaAscii == 180) || (teclaAscii == 225) || (teclaAscii == 233) || (teclaAscii == 237) || (teclaAscii == 243) || (teclaAscii == 250)) {
                return true;
            }
            if ((teclaAscii == 32) || (teclaAscii == 11) || (teclaAscii == 9) || (teclaAscii == 8) || (teclaAscii == 241) || (teclaAscii == 209)) {//Espacio
                return true;
            }
            if ((teclaAscii > 47) && (teclaAscii < 58)) {
                return true;
            }
            return false;
        };
        validarEmail = function (evt) {
            var e = evt || event;
            var teclaAscii = e.keyCode || e.which;
            if ((teclaAscii > 64) && (teclaAscii < 91)) {//Le tras mayuscu l as
                return  true;
            }
            if ((teclaAscii > 96) && (teclaAscii < 123)) {//Le tras mayuscu la s
                return true;
            }
            if ((teclaAscii == 180) || (teclaAscii == 193) || (teclaAscii == 201) || (teclaAscii == 205) || (teclaAscii == 211) || (teclaAscii == 218)) {
                return true;
            }
            if ((teclaAscii == 180) || (teclaAscii == 225) || (teclaAscii == 233) || (teclaAscii == 237) || (teclaAscii == 243) || (teclaAscii == 250)) {
                return true;
            }
            if ((teclaAscii == 32) || (teclaAscii == 11) || (teclaAscii == 9) || (teclaAscii == 8) || (teclaAscii == 241) || (teclaAscii == 209)) {//Espacio
                return true;
            }
            if ((teclaAscii > 47) && (teclaAscii < 58)) {
                return true;
            }
            if ((teclaAscii == 64) || (teclaAscii == 46)) {//@ OR .
                return true;
            }
            return false;
        };
        obtenerPermisos = function () {
            var cveUsuarioSistema = cveUsuarioSesion;
            $.get("../archivos/" + cveUsuarioSistema + ".json",
                    function (response) {
                        for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                            if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                                $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                if(origen==1){
                                    if (vnombre.nomFormulario == "HERRAMIENTAS") {
                                        var hijos = vnombre.hijos;
                                        $.each(hijos, function (k2, nombreHijo) {
                                            if (nombreHijo.nomFormulario == 'AUTORIZAR CAUSAS') {//OFICIOS
                                                var permisoFormulario = nombreHijo.permisoFormulario[0];
                                                createRecord = permisoFormulario.create;
                                                readRecord = permisoFormulario.read;
                                                updateRecord = permisoFormulario.update;
                                                deleteRecord = permisoFormulario.delete;
                                            }
                                        });
                                    }
                                }else{
                                   if (vnombre.nomFormulario == "HERRAMIENTAS") {
                                    var hijos = vnombre.hijos;
                                    $.each(hijos, function (k2, nombreHijo) {
                                        if (nombreHijo.nomFormulario == 'AUTORIZAR CAUSAS') {//OFICIOS
                                            var permisoFormulario = nombreHijo.permisoFormulario[0];
                                            createRecord = permisoFormulario.create;
                                            readRecord = permisoFormulario.read;
                                            updateRecord = permisoFormulario.update;
                                            deleteRecord = permisoFormulario.delete;
                                        }
                                });
                            }
                        }
                                
                            });
                        }
                    }
                        /*if (createRecord == "S") {
                         $("#inputGuardar").show();
                         }*/
                        if (readRecord == "S") {
                            $("#inputConsultar").show();
                        }
                    });
        };
        changeLabel = function (objOption) {
            if ($("#cmbTipoCarpeta").val() != 0) {
                $("#lblRelationName").html("No. " + $("#" + objOption.id + " option:selected").text() + ":");
            } else {
                $("#lblRelationName").html("No. ");
            }
            $("#labelEncontrado").hide();
            $("#txtNumero").val("");
            $("#txtAnio").val("");
        };
        fechaHoy = function () {
            return $("#hiddenFechaHoy").val();
        };
        validarFecha = function (date) {
            var x = new Date();
            var fechaActual = new Date();
            var fecha = date.split("/");
            x.setFullYear(fecha[2], fecha[1] - 1, fecha[0]);
            var vecFA = fechaHoy().split("/");
            fechaActual.setFullYear(vecFA[2], vecFA[1] - 1, vecFA[0]);
            if (x > fechaActual) {
                return fechaHoy();
            } else {
                return date;
            }
        };
        $(function () {
            obtenerPermisos();
            cargaJuzgados();
            cargaTipoCarpeta();
            cargaTiposPartes();
            fechaBaseDatos({
                hiddenFechaHoy: "fecha"
            });
            $("#fechaConsultar").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $("#fechaConsultarEnd").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $('#fechaConsultar').val(fechaHoy());
            $('#fechaConsultarEnd').val(fechaHoy());
            $('#fechaConsultar').on("dp.change", function (e) {
                $('#fechaConsultarEnd').data("DateTimePicker").minDate(e.date);
            });
            $('#fechaConsultarEnd').on("dp.change", function (e) {
                $('#fechaConsultar').data("DateTimePicker").maxDate(e.date);
            });
        });
        $(".Relacionado").focusout(function () {
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var numero = $("#txtNumero").val();
            var anio = $("#txtAnio").val();
            var consulta = true;
            if (numero == "") {
                consulta = false;
            }
            if (anio == "") {
                consulta = false;
            }
            if (cveTipoCarpeta == 0) {
                consulta = false;
            }
            if (consulta) {
                buscarTipoCarpeta();
            }
        });

    </script> 
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>