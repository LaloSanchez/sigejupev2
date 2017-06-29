<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idActuacionArbol = '';
    $idCarpetaJudicialArbol = '';
    //POST para arbol
    $procedencia = 0;
    $idActuacionArbol = ( isset($_POST['idActuacion']) ? @$_POST['idActuacion'] : '' );
    $idCarpetaJudicialArbol = ( isset($_POST['idReferencia']) ? @$_POST['idReferencia'] : '' );
    $cveTipoCarpetaArbol = ( isset($_POST['cveTipoCarpeta']) ? @$_POST['cveTipoCarpeta'] : '' );
    if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "")) {
        $idActuacionArbol = ( ($idActuacionArbol != 0 && $idActuacionArbol != "") ? $idActuacionArbol : 0 );
        $idCarpetaJudicialArbol = ( ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") ? $idCarpetaJudicialArbol : 0 );
        $cveTipoCarpetaArbol = ( ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") ? $cveTipoCarpetaArbol : 0 );
        $procedencia = 1; // viene de arbol
    } else if ($idCarpetaJudicialArbol == "" && $cveTipoCarpetaArbol == 0 && $cveTipoCarpetaArbol != "") {
        $procedencia = 1; // viene de arbol el formulario general
    }
    //parAmetros digitalizaciOn
    $digitalizacion = "";
    $subirArchivos = "";
    include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");
    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULODIGITALIZACION");
    $digitalizacion = $host->getConnect();
    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULOSUBIRARCHIVOS");
    $subirArchivos = $host->getConnect();
    ?>
    <style type="text/css">
        .tblGridAgrega{ margin-top: 20px; font-family: arial; font-size: 11px; text-align: center; }
        .trGridAgrega{ color: #ffffff; background-color: #881518; }
        .mayuscula{   text-transform: uppercase; }  
        .trSeleccion:hover{ background-color:#dff0d8; cursor: pointer; } 
        .requerido { color: darkred; }
        .alert{ display: none; }
        #divHideForm{ display: none; position: absolute; width: 100%; height: 100vh; opacity: .5; z-index: 99999; background: #427468; }
        #divMenssage{ width: 100%; height: 40px; padding-top: 10px; padding-bottom: 10px; text-align: center; margin-top: 40vh; margin-bottom: auto; color: #284740; background: #FFFFFF; text-transform: uppercase; }
        #divImgloading{ background: #FFFFFF url(img/cargando_1.gif) no-repeat; background-position: center; width: 100%; height: 70px; margin-left: auto; margin-right: auto; }
        .panel panel-default{ background: #427468; color: #ebf3f1; }
        .panel-heading{ background: #427468; color: #ebf3f1; }
        .panel-group .panel-heading{ background: #427468; color: #ebf3f1; }
        .panel-default > .panel-heading{ background: #427468; color: #ebf3f1; }
        .optionprom{ height: 10px; }
        .required{ color: darkred; }
        input[type=checkbox],[type=radio]
        {
            /* Double-sized Checkboxes */
            -ms-transform: scale(1.5); /* IE */
            -moz-transform: scale(1.5); /* FF */
            -webkit-transform: scale(1.5); /* Safari and Chrome */
            -o-transform: scale(1.5); /* Opera */
            padding: 10px;
        }
        .checkboxtext {   /* Checkbox text */   font-size: 110%;   display: inline; margin-left: 5px; }
        .margenIzquierdo { padding-left: 50px; }
    </style>

    <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="" >
    <input type="hidden" id="hiddenCveAdscripcion" value="<?php echo $_SESSION["cveAdscripcion"]; ?>" >
    <input type="hidden" id="hiddenIntentoGuardar" value="0" >
    <input type="hidden" id="idReferencia" value="" >
    <input type="hidden" id="fechaHoy" value="<?php echo date('d/m/Y'); ?>"/>
    <input type="hidden" id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt"/>
    <input type="hidden" id="idCarpetaJudicialArbol" name="idCarpetaJudicialArbol" value="<?= $idCarpetaJudicialArbol ?>" />
    <input type="hidden" id="cveTipoCarpetaArbol" name="cveTipoCarpetaArbol" value="<?= $cveTipoCarpetaArbol ?>" />
    <input type="hidden" id="procedencia" name="procedencia" value="<?= $procedencia ?>" />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Registro de queja
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <div id="divCampos">
                    <div class="form-group"> 
                        <label class="control-label col-md-3" >Asignaci&oacute;n de N&uacute;mero: </label>
                        <div class="col-md-5">
                            <label class="radio-inline">
                                <input type="radio" id="asigNumeroAutomatico" class="form-control asignacionNumero" checked value="1" name="asigNumero" onclick="javascript:queja.promocionManual(this)"> <span class="checkboxtext">Automatico</span>
                            </label>
                            <label class="radio-inline margenIzquierdo">
                                <input type="radio" class="form-control asignacionNumero" value="2" name="asigNumero" onclick="javascript:queja.promocionManual(this)"> <span class="checkboxtext">Manual</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3 ">No.<br>Promoci&oacute;n:</label>
                        <div class="col-md-2">
                            <input  disabled="disabled" type="text" id="txtNumActuacion2" placeholder="" class="form-control" value=""  />
                        </div>                 
                        <label class="control-label col-md-1 ">A&ntilde;o Promoci&oacute;n:</label>
                        <div class="col-md-2">
                            <input disabled="disabled" type="text" id="txtAniActuacion2" placeholder="" class="form-control" value="" maxlength="4"  />
                        </div>  
                    </div>  
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 ">Juzgado:  <b style="color: darkred">(*)</b></label>
                        <div class="col-md-6">
                            <form name="selectedJuzgado" >
                                <select class="form-control " name="cveTipoJuzgado" id="cveTipoJuzgado" onchange="javascript:queja.cargaTipoCarpeta(1);">
                                    <option value="0">Seleccione una opcion</option>
                                </select>
                            </form>
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 ">Relacionado con: <b style="color: darkred">(*)</b></label>
                        <div class="col-md-6">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control " name="cmbTipoCarpeta" id="cmbTipoCarpeta">
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3" id="">No. <b style="color: darkred">(*)</b></label>
                        <div class="col-md-4">
                            <input type="text" id="txtNumero" class="form-inline " id="txtNumero" placeholder="N&uacute;mero" maxlength="8" size="10">
                            /
                            <input type="text" class="form-inline " id="txtAnio" maxlength="4" size="10" id="txtAnio" placeholder="A&ntilde;o">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary" onclick="javascript:queja.buscaRelacion()">Buscar informaci&oacute;n</button>
                            &nbsp;&nbsp;
                            <span class="glyphicon" id="msjQuejosos"></span>
                        </div>
                    </div>
                    <!-- SecciOn de resoluciOn del consejo -->
                    <div class="form-group" id="divResolucionConsejo" style="display:none;">
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-9 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseResolucionConsejo" aria-expanded="true" aria-controls="collapseResolucionConsejo">
                                            Resoluci&oacute;n del Consejo - <span id="fechaResolucionConsejo"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseResolucionConsejo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body" id="listaQuejosos">
                                        <p>Respuesta del Consejo</p>
                                        <p id="resolucionConsejo"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /SecciOn de resoluciOn del consejo -->
                    <!-- SecciOn de resoluciOn de Juez -->
                    <div class="form-group" id="divResolucionJuez" style="display:none;">
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-9 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseResolucionJuez" aria-expanded="true" aria-controls="collapseResolucionJuez">
                                            Resoluci&oacute;n del Juez - <span id="fechaResolucionJuez"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseResolucionJuez" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body" id="listaQuejosos">
                                        <p>Respuesta del Juez</p>
                                        <p id="resolucionJuez"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /SecciOn de resoluciOn de Juez -->
                    <div class="form-group">
                        <label class="control-label col-md-3">No. Fojas <b style="color: darkred">(*)</b></label>
                        <div class="col-md-2">
                            <input type="text" id="txtFojas" placeholder="No Fojas" class="form-control" value=""/>
                        </div>
                    </div>

                    <div class="form-group">     
                        <!--<div class="col-md-6">-->
                        <label class="control-label col-md-3">Sintesis:  <b style="color: darkred">(*)</b></label>
                        <div class="col-md-6">
                            <input type="text" id="txtSintesis" placeholder="Sintesis" class="form-control mayuscula" value=""/>
                        </div>
                        <!--</div>-->
                    </div>
                    <div class="form-group">     
                        <label class="control-label col-md-3">¿Quien emite la queja?  <b style="color: darkred">(*)</b></label>
                        <div class="col-md-6">
                            <label class="radio-inline">
                                <input type="radio" name="radioQuienEmiteQueja" id="quejaImputados" data-tipoQuejoso="Imputados" data-listaQuejosos="" value="1" onclick="javascript:queja.muestraAcordeon(this)" class="radioQuienEmite"> <span class="checkboxtext">Imputados</span>
                            </label>
                            <label class="radio-inline margenIzquierdo">
                                <input type="radio" name="radioQuienEmiteQueja" id="quejaOfendidos" data-tipoQuejoso="Ofendidos" data-listaQuejosos="" value="2" onclick="javascript:queja.muestraAcordeon(this)" class="radioQuienEmite"> <span class="checkboxtext">Ofendidos</span>
                            </label>
                            <label class="radio-inline margenIzquierdo">
                                <input type="radio" name="radioQuienEmiteQueja" id="quejaOtros" data-tipoQuejoso="Otros" data-listaQuejosos="" value="3" onclick="javascript:queja.muestraAcordeon(this)" class="radioQuienEmite"> <span class="checkboxtext">Otros</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-9 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseQuejosos" aria-expanded="true" aria-controls="collapseQuejosos">
                                            Quejosos
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseQuejosos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body" id="listaQuejosos">
                                        <fieldset>
                                            <legend id="subtituloQuejosos"></legend>
                                            <table id="tblQuejosos" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 80%;">Nombre</th>
                                                        <th style="width: 15%;">Tipo Persona</th>
                                                        <th style="width: 5%;">&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tblQuejososBody"></tbody>
                                            </table>
                                            <div class="form-group" id="quejosoManual" style="display:none;">
                                                <div class="form-group">
                                                    <label class="control-label col-md-2">[+] Agregar Persona</label>
                                                    <div class="col-md-10">
                                                        <label class="radio-inline">
                                                            <input type="radio" class="form-control" value="1" name="tipoPersona" data-tipoPersona="Persona F&iacute;sica" onclick="javascript:queja.cambiaTipoPersona(this)" id="tipoPersona1"> <span class="checkboxtext">F&iacute;sica</span>
                                                        </label>
                                                        <label class="radio-inline margenIzquierdo">
                                                            <input type="radio" class="form-control" value="2" name="tipoPersona" data-tipoPersona="Persona Moral" onclick="javascript:queja.cambiaTipoPersona(this)" id="tipoPersona2"> <span class="checkboxtext">Moral</span>
                                                        </label>
                                                        <label class="radio-inline margenIzquierdo">
                                                            <input type="radio" class="form-control" value="3" name="tipoPersona" data-tipoPersona="Persona: Otra" onclick="javascript:queja.cambiaTipoPersona(this)" id="tipoPersona3"> <span class="checkboxtext">Otra</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="divInfoPersona" style="display: none;">
                                                <fieldset class="col-md-11 col-md-offset-1">
                                                    <legend id="legendTipoPersona"></legend>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">Nombre completo  <b style="color: darkred">(*)</b></label>
                                                        <div class="col-md-10">
                                                            <input type="text" id="quejosoPaterno" placeholder="Apellido Paterno" class="form-inline col-md-3 mayuscula"/>
                                                            &nbsp;&nbsp;
                                                            <input type="text" id="quejosoMaterno" placeholder="Apellido Materno" class="form-inline col-md-3 mayuscula"/>
                                                            &nbsp;&nbsp;
                                                            <input type="text" id="quejosoNombre" placeholder="Nombre" class="form-inline col-md-4 mayuscula" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="divGenero">
                                                        <label class="control-label col-md-2">G&eacute;nero  <b style="color: darkred">(*)</b></label>
                                                        <div class="col-md-3">
                                                            <select id="cmbGenero" class="form-control"></select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">Municipio  <b style="color: darkred">(*)</b></label>
                                                        <div class="col-md-3">
                                                            <select id="cmbMunicipio" class="form-control"></select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">Domicilio  <b style="color: darkred">(*)</b></label>
                                                        <div class="col-md-9">
                                                            <input id="quejosoDomicilio" type="text" placeholder="Localidad, Colonia, Calle, N&uacute;mero y CP" class="form-control" maxlength="500"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">Correo de notificaci&oacute;n  <b style="color: darkred">(*)</b></label>
                                                        <div class="col-md-4">
                                                            <input id="quejosoCorreo" type="text" placeholder="email" class="form-control" maxlength="100"/>
                                                        </div>
                                                        <label class="control-label col-md-1 col-md-offset-1">Tel&eacute;fono celular  <b style="color: darkred">(*)</b></label>
                                                        <div class="col-md-2">
                                                            <input id="quejosoTelefono" type="text" placeholder="Tel&eacute;fono a 10 digitos" class="form-control" maxlength="10"/>
                                                            <input id="idRenglon" type="hidden"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="divBtnAgregarQuejoso">
                                                        <div class="col-md-4 col-md-offset-2">
                                                            <!-- <button class="btn btn-primary" id="btnAgregarQuejoso" onclick="javascript:queja.agregarQuejosoManual()">Agregar quejoso</button> -->
                                                            <input type="button" class="btn btn-primary btn-adaptar" id="btnAgregarQuejoso" value="Agregar quejoso" onclick="javascript:queja.agregarQuejosoManual();">
                                                        </div>
                                                        <div class="col-md-2" id="divBtnCancelaQuejoso">
                                                            <button class="btn btn-primary" id="btnCancelaQuejoso" onclick="javascript:queja.cancelaQuejosoManual();">Cancelar</button>
                                                        </div>
                                                    </div>
                                                    <!-- SecciOn de notificaciones -->
                                                    <div class="form-group">
                                                        <div id="divAdvertencia_quejoso" class="alert alert-warning alert-dismissable" style="display: none">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <strong id="strAdvertencia"></strong> 
                                                        </div>
                                                        <div id="divCorrecto_quejoso" class="alert alert-success alert-dismissable" style="display: none">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <strong id="strCorrecto"></strong> 
                                                        </div>
                                                        <div id="divError_quejoso" class="alert alert-danger alert-dismissable" style="display: none">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <strong id="strError"></strong>
                                                        </div>
                                                        <div id="divInformacion_quejoso" class="alert alert-info alert-dismissable" style="display: none">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <strong id="strInformacion"></strong>
                                                        </div>
                                                    </div>  
                                                    <!-- /SecciOn de notificaciones -->
                                                </fieldset>
                                            </div>
                                            <div class="form-group" id="divCorreoNotificacion">
                                                <label class="control-label col-md-2">Correo de notificací&oacute;n:  <b style="color: darkred">(*)</b></label>
                                                <div class="col-md-6">
                                                    <input type="text" id="emailNotificacion" placeholder="email" class="form-control" value=""  maxlength="100"/>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Juez: <b style="color: darkred">(*)</b></label>
                        <div class="col-md-6">
                            <select id="cmbJuzgadores" class="form-control">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>
                    </div>
                    <div id="divNotas" class="form-group">
                        <label class="control-label col-md-3">Queja: <b style="color: darkred">(*)</b></label>
                        <div class="col-md-9">
                            <script id="txtQueja" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <div class="col-md-2 botonesAdaptar"> 
                                <input type="submit" class="btn btn-primary  btn-adaptar" id="inputGuardar" value="Guardar" onclick="javascript:queja.guardarQueja();"> 
                            </div>
                            <div class="col-md-2 botonesAdaptar"> 
                                <input type="submit" class="btn btn-primary  btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="javascript:queja.limpiarFormulario();">
                            </div>
                            <div class="col-md-2 botonesAdaptar"> 
                                <input type="submit" class="btn btn-primary  btn-adaptar" id="inputConsultar" value="Consultar" onclick="javascript:queja.cambiaSeccion('consulta')">
                            </div>
                            <div class="col-md-2 botonesAdaptar" style="display:none;" id="divEliminar">
                                <input type="submit" class="btn btn-primary  btn-adaptar" id="btnEliminar" value="Eliminar" onclick="javascript:queja.eliminaQueja()">
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:queja.visorDocumentos();" style="display: none">Visor</button>
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="javascript:queja.enviar();" style="display: none">Generar PDF</button>
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <button class="btn btn-primary btn-adaptar" id="inputDigitalizar" onclick="javascript:digitalizarPromocionQueja();" style="display: none">Digitalizar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="divConsulta" class="form-horizontal" style="display: none">
                <div class="form-group">
                    <div class="col-md-1">                       
                        <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="javascript:queja.cambiaSeccion('principal')" style="display: block">
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Juzgado:</label>
                    <div class="col-md-6">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control " name="cveTipoJuzgado_busqueda" id="cveTipoJuzgado_busqueda" onchange="javascript:queja.cargaTipoCarpeta(2);">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Relacionado con:</label>
                    <div class="col-md-6">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control " name="cmbTipoCarpeta_busqueda" id="cmbTipoCarpeta_busqueda">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3" id="">No. / A&ntilde;o</label>
                    <div id="divSinRelacion" class="col-md-6">
                        <input type="text"  class="form-inline " id="txtNumero_busqueda" placeholder="N&uacute;mero">
                        /
                        <input type="text" maxlength="4" class="form-inline " id="txtAnio_busqueda"  placeholder="A&ntilde;o">
                    </div>                                
                    <div id="divSinRelacionMsg" class="col-md-6">

                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3" id="">Promocion</label>
                    <div id="divSinRelacion" class="col-md-6">
                        <input type="text"  class="form-inline " id="txtNumeroActuacion_busqueda" placeholder="N&uacute;mero">
                        /
                        <input type="text" maxlength="4" class="form-inline " id="txtAnioActuacion_busqueda" placeholder="A&ntilde;o">
                    </div>                    
                </div>
                <div class="form-group">
                    <div class="col-md-9">
                        <label class="control-label col-md-4" id="">Fecha Inicial</label>
                        <div class="col-md-3">
                            <input type="text" id="fechaInicial" class="form-control fecha" placeholder="dd/mm/aaaa">
                            <!-- <input type="text" id="txtfechaInicial_busqueda" name="txtfechaInicial_busqueda" class="form-control fecha" placeholder="dd/mm/aaaa" /> -->
                        </div>
                        <label class="control-label col-md-1" id="">Fecha Final</label>
                        <div class="col-md-3">
                            <input type="text" id="fechaFinal" class="form-control fecha" placeholder="dd/mm/aaaa"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" id="inputBuscar" value="Buscar" onclick="javascript:queja.buscarQuejas()" style="display: block">
                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" id="inputLimpiarB" value="Limpiar" onclick="javascript:queja.limpiarFormulario('capturaBusqueda');">
                        </div>
                    </div>
                </div>
            </div>

            <div id="divResultados" style="display: none" class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="javascript:queja.cambiaSeccion('consulta');
                                $('#cmbPaginacion').val(1);">                                                    
                    </div>
                    <div class="form-group col-md-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>
                    <div id="divPaginador" class="form-group col-md-2" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="javascript:queja.buscarQuejas()">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="javascript:queja.buscarQuejas()">
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

                <div id="divTablaResultados" class="col-md-12">
                </div>
            </div>
        </div>

        <div>
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
        <script src="sigejupe/promocionesqueja/promocionesQueja.js" charset="UTF-8" ></script>
        <script>
                            if (editor != undefined) {
                                editor.destroy();
                            }
                            var editor = null;

                            llenareditor = function (value) {
                                try {
                                    editor.ready(function () {
                                        setTimeout(function () {
                                            editor.setContent(value, true);
                                        }, 500);
                                    });
                                } catch (e) {
                                    alert(e);
                                }
                            };


                            var queja = new promocionesQueja();
                            $(function () {
                                queja.bloqueaCampos('principal', true);
                                queja.cargaJuzgados(); //carga los Juzgados
                                queja.obtieneMunicipos('15'); //obtencion de los municipios del edomex
                                llenaCombo(['cmbGenero'], 'generos/GenerosFacade', 'S', 'cveGenero', 'desGenero', '', 'Combo -Generos-');
                                queja.obtieneJuzgadores();
                                editor = UE.getEditor('txtQueja');
                                editor.ready(function () {
                                    editor.setContent();
                                });

                                $('.fecha').datetimepicker({
                                    locale: 'es',
                                    sideBySide: false,
                                    format: "DD/MM/YYYY",
                                    ignoreReadonly: true
                                });
                                var desAdscripcion = '<?php echo $_SESSION["desAdscripcion"]; ?>';
                                var cveUsuarioSistema = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
                                digitalizarPromocionQueja = function () {
                                    var strl;
                                    strl = "0-" + $("#hiddenIdActuacion").val() + "-PROMOCIONQUEJA-" + desAdscripcion + "-" + $("#txtNumero").val() + "-" + $("#txtAnio").val() + "-27-" + cveUsuarioSistema;
                                    strl += "-<?php echo $subirArchivos; ?>";
                                    strl += "-<?php echo $digitalizacion; ?>";
                                    launchDigitalizador(strl);
                                }
                                $('#quejosoTelefono').keypress(validateNumber);

                                if ($('#procedencia').val() == 1) {
                                    if ($('#hiddenIdActuacion').val() != '' && $('#hiddenIdActuacion').val() != 0) { //hiddenIdActuacionArbol
                                        queja.buscarQuejas($('#hiddenIdActuacion').val()); //idActuacionArbol
                                    } else if ($('#idCarpetaJudicialArbol').val() != '' && $('#cveTipoCarpetaArbol').val() != '') { //no es de actuacion
                                        queja.obtieneDatosCarpeta();
                                    }
                                    // $('.botonesArbol').hide();
                                    // bloqueaCamposLlave();
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