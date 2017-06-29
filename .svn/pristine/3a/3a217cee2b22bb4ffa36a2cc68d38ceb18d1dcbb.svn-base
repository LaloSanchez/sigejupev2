<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idCarpetaJudicial = (isset($_POST['idCarpetajudicial'])) ? $_POST['idCarpetajudicial'] : '';
    ?>

    <style>
        .tblGridAgrega{
            margin-top: 20px;
            font-family: arial;
            font-size: 14px;
            text-align: center;
        }
        .trGridAgrega{
            color: #ffffff;
            background-color: #881518;
        }
        .mayuscula{  
            text-transform: uppercase;  
        }  
        .trSeleccion:hover{
            background-color:#FFECED;
            cursor: pointer;
        } 
        .requerido {
            color: darkred;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Imputado(s) Tocas                        
            </h5>
            <input type="hidden" readonly class="form-control" id="hddIdCarpetaJudicial" value="<?php echo $idCarpetaJudicial ?> ">
            <input type="hidden" readonly class="form-control" id="hddIdImputadoCarpeta">
            <input type="hidden" readonly class="form-control" id="hddIdDomicilioImputadoCarpeta" name="hddIdDomicilioImputadoCarpeta">
            <input id="hddIdTelefonoImputadosCarpeta"  name="hddIdTelefonoImputadosCarpeta"  type="hidden" readonly class="form-control">
            <input id="hddIdDefensorImputado" name="hddIdDefensorImputado" type="hidden" readonly class="form-control">
            <input id="hddIdImputadoDroga" name="hddIdImputadoDroga" type="hidden" readonly>
            <input id="hddIdTutorImputado" name="hddIdTutorImputado" type="hidden" readonly class="form-control">
            <input id="hddIdNacionalidadImputado" name="hddIdNacionalidadImputado"  readonly type="hidden" class="form-control">
            <input id="hddIdImputadoCarpetaConclusion" name="hddIdImputadoCarpetaConclusion"  readonly type="hidden" class="form-control">
            <input id="hddCveEtapaProcesal" name="hddCveEtapaProcesal" type="hidden" readonly>
            <input id="hddCveTipoCarpeta" name="hddCveTipoCarpeta" type="hidden" readonly>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <div class="tab-content tabs-flat">
                    <p class="col-lg-12" style="color:darkred;">
                        Los campos marcados con (*) son obligatorios.
                    </p>
                    <div class="tabbable tabs-left">
                        <ul id="myTab3" class="nav nav-tabs">
                            <li class="tab-sky active">
                                <a href="#divGeneralImputado" data-toggle="tab" aria-expanded="true"><span class="requerido">(*)</span>General</a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divDomicilios" data-toggle="tab" aria-expanded="false">Domicilio(s)</a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divTelefonos" data-toggle="tab" aria-expanded="false"> Tel&eacute;fono(s)</a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divDefendores" data-toggle="tab" aria-expanded="false"><span class="requerido">(*)</span>Defensor </a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divDrogas" data-toggle="tab" aria-expanded="false">Droga(s) </a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divTutores" data-toggle="tab" aria-expanded="false">Tutor / Representante </a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divNacionalidades" data-toggle="tab" aria-expanded="false"><span class="requerido">(*)</span>Nacionalidades</a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divTerminaciones" data-toggle="tab" aria-expanded="false"> Conclusi&oacute;n</a>
                            </li>
                        </ul>
                        <div class="tab-content" style="margin-top: 50px;">
                            <div class="tab-pane active" id="divGeneralImputado">

                                <div id="NombreGeneral" style="margin-left:15px; margin-bottom: 25px; "></div>
                                <div class="col-lg-12">
                                    <label class="control-label col-xs-3" for="cmbTipoPersonaImputado">Tipo de Persona <span class="requerido">(*)</span></label>
                                    <div class="col-lg-12">
                                        <select id="cmbTipoPersonaImputado" class="form-control mayuscula" name="cmbTipoPersonaImputado" onchange="validaPersona();">
                                            <option value="0">Seleccione una opci&Oacute;n</option>
                                        </select>
                                    </div>  
                                </div>  
                                <div id="divPersonaMoralImputado" style="display:none;">
                                    <div class="col-lg-12">
                                        <label class="control-label" for="txtnombreMoralImputado">Nombre Persona Moral <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtnombreMoralImputado" name="txtnombreMoralImputado">
                                        </div> 
                                    </div> 
                                </div>
                                <div id="divPersonaFisicaImputado">
                                    <div class="col-lg-3" id="divNombreImputado">
                                        <label class="control-label" for="txtNombreImputado">Nombre <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtNombreImputado" name="txtNombreImputado">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divPaternoImputado">
                                        <label class="control-label" for="txtPaternoImputado">Paterno <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtPaternoImputado" name="txtPaternoImputado">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divMaternoImputado">
                                        <label class="control-label" for="txtMaternoImputado">Materno <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtMaternoImputado" name="txtMaternoImputado">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divAliasImputado">
                                        <label class="control-label" for="txAliasImputado">Alias <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txAliasImputado" name="txAliasImputado">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divGeneroImputado">
                                        <label class="control-label" for="cmbGeneroImputado">G&eacute;nero <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbGeneroImputado" class="form-control" name="cmbGeneroImputado">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divRfcImputado">
                                        <label class="control-label" for="txtRfcImputado">RFC</label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtRfcImputado" name="txtRfcImputado" maxlength="13" onblur="validaRfc('txtRfcImputado');">
                                        </div> 
                                    </div> 
                                    <div class="col-lg-3" id="divCurpImputado">
                                        <label class="control-label" for="txtCurpImputado" >CURP</label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtCurpImputado" name="txtCurpImputado" maxlength="18" onblur="validaCurp('txtCurpImputado');">
                                        </div> 
                                    </div> 
                                    <div class="col-lg-3" id="divFechaNacimientoImputado">
                                        <label class="control-label" for="txtFechaNacimientoImputado">Fecha Nacimiento </label>
                                        <div>
                                            <input id="txtFechaNacimientoImputado" class="form-control mayuscula" type="text" tabindex="4" data-toggle="tooltip" title="" placeholder="" name="txtFechaNacimientoImputado" data-original-title="" onblur="calcularEdad(this.value, 'txtFechaNacimientoImputado', 'txtEdadImputado');" >
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divEdadImputado">
                                        <label class="control-label" for="txtEdadImputado">Edad </label>
                                        <div>
                                            <input type="text" class="form-control" id="txtEdadImputado" name="txtEdadImputado" maxlength="3" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divPaisNacimientoImputado">
                                        <label class="control-label" for="cmbPaisNacimientoImputado">Pa&iacute;s Nacimiento <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbPaisNacimientoImputado" class="form-control" name="cmbPaisNacimientoImputado" onchange="comboEstadoNacimientoImputado();">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divEstadoNacimientoImputado">
                                        <label class="control-label" for="cmbEstadoNacimientoImputado">Estado Nacimiento <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbEstadoNacimientoImputado" class="form-control mayuscula" name="cmbEstadoNacimientoImputado" onchange="comboMunicipioNacimientoImputado();">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                            <input id="txtestadoNacimientoImputado" name="txtestadoNacimientoImputado " type="text" class="form-control mayuscula" style="display: none">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divMunicipioNacimientoImputado">
                                        <label class="control-label" for="cmbMunicipioNacimientoImputado">Municipio Nacimiento <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbMunicipioNacimientoImputado" class="form-control" name="cmbMunicipioNacimientoImputado">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                            <input id="txtmunicipioNacimientoImputado" name="txtmunicipioNacimientoImputado" type="text" class="form-control mayuscula" style="display: none">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divEstudioImputado">
                                        <label class="control-label" for="cmbEstudioImputado">Estudio Imputado <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbEstudioImputado" class="form-control mayuscula" name="cmbEstudioImputado">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divEstadoCivilImputado">
                                        <label class="control-label" for="cmbEstadoCivilImputado">Estado Civil <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbEstadoCivilImputado" class="form-control mayuscula" name="cmbEstadoCivilImputado">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divOcupacionImputado">
                                        <label class="control-label" for="cmbOcupacionImputado">Ocupaci&oacute;n <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbOcupacionImputado" class="form-control mayuscula" name="cmbOcupacionImputado">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divEspanolImputado">
                                        <label class="control-label" for="cmbEspanolImputado">&#191;Habla espa&ntilde;ol? <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbEspanolImputado" class="form-control mayuscula" name="cmbEspanolImputado">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divAlfabetismoImputado">
                                        <label class="control-label" for="cmbAlfabetismoImputado">Nivel de Alfabetismo <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbAlfabetismoImputado" class="form-control mayuscula" name="cmbAlfabetismoImputado">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divDielectoIndigenaImputado">
                                        <label class="control-label" for="cmbDielectoIndigenaImputado">&#191;Habla dialecto Ind&iacute;gena? <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbDielectoIndigenaImputado" class="form-control mayuscula" name="cmbDielectoIndigenaImputado">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divFamilialinguistica">
                                        <label class="control-label" for="cmbFamilialinguistica">Familia ling&uuml;&iacute;stica <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbFamiliaLinguistica" class="form-control mayuscula" name="cmbFamiliaLinguistica">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divInterpreteImputado">
                                        <label class="control-label" for="cmbInterpreteImputado"> &#191;Necesita interprete? <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbInterpreteImputado" class="form-control mayuscula" name="cmbInterpreteImputado">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3" id="divPsicofisicoImputado">
                                        <label class="control-label" for="cmbPsicofisicoImputado"> Estado psicof&iacute;sico en el momento de la detenci&oacute;n <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbPsicofisicoImputado" class="form-control mayuscula" name="cmbPsicofisicoImputado">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divGrupoEdnico">
                                        <label class="control-label" for="cmbGrupoEdnico"> Grupo &eacute;tnico <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbGrupoEdnico" class="form-control mayuscula" name="cmbGrupoEdnico">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divReligion">
                                        <label class="control-label" for="cmbCveTipoReligion"> Religi&oacute;n </label>
                                        <div>
                                            <select id="cmbCveTipoReligion" class="form-control mayuscula" name="cmbCveTipoReligion">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divFecTermCons">
                                        <label class="control-label" for="txtFecTermCons">Fecha T&eacute;rmino Constitucional (dd/mm/aaaa)</label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtFecTermCons" name="txtFecTermCons">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divFecTermInv">
                                        <label class="control-label" for="txtFecTermCons">Fecha Cierre de Investigaci&oacute;n (dd/mm/aaaa)</label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtFecTermInv" name="txtFecTermInv">
                                        </div>
                                    </div>
                                    <div class="col-lg-12"></div>
                                    <div class="col-lg-3" id="divRelacionPersonaMoralImputado">
                                        <label class="control-label" for="chkRelacionPersonaMoralImputado">&#191;Tiene relaci&oacute;n con alguna persona moral?</label>
                                        <div>
                                            <input type="checkbox" class="form-control mayuscula" id="chkRelacionPersonaMoralImputado" name="chkRelacionPersonaMoralImputado" onclick="javascript:validaRelacionMoral()">
                                        </div> 
                                    </div> 
                                    <div class="col-lg-3" id="divPersonaMoralImputadoRel">
                                        <label class="control-label" for="txtPersonaMoralImputado">Persona Moral</label>
                                        <div>
                                            <input type="text" class="form-control mayuscula"  id="txtPersonaMoralImputado" name="txtPersonaMoralImputado">
                                        </div> 
                                    </div> 
                                    <div class="col-lg-3" id="divingresoMensual">
                                        <label class="control-label" for="txtingresoMensual"> Ingreso Mensual <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtingresoMensual" name="txtingresoMensual">
                                        </div> 
                                    </div> 
                                    <div class=" col-lg-3" id="divDetenidoImputado">
                                        <label class="control-label" for="chkDetenidoImputado" >Detenido</label>
                                        <div>
                                            <input type="checkbox" class="form-control" id="chkDetenidoImputado" name="chkDetenidoImputado" onclick="javascript:validaDetenido();">
                                        </div> 
                                    </div>
                                    <div class="col-lg-12"></div>
                                    <div class="col-lg-3">
                                        <label class="control-label" for="cveEtapaProcesal">Etapa Procesal</label>
                                        <div id="etapaProcesal">
                                            <select name="cmbCveEtapaProcesal" id="cmbCveEtapaProcesal" class="form-control" onchange="mostrarCarpeta()">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="carpeta" style="display: none;">
                                        <label class="control-label" for="cveCarpeta">Carpeta Destino</label>
                                        <div id="etapaProcesal">
                                            <select name="cmbCarpeta" id="cmbCarpeta" class="form-control">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="control-label" for="sobreseimiento">Tiene Sobreseimiento?</label>
                                        <div>
                                            <input type="checkbox" id="sobreseimiento" disabled="disabled">
                                            <input type="hidden" id="TieneSobreseimiento" name="TieneSobreseimiento" value="N">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divFechaSobreseimiento" style="display: none;">
                                        <label class="control-label" for="fechaSobreseimiento">Fecha Sobreseimiento <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" id="fechaSobreseimiento" name="fechaSobreSeimiento" class="form-control">
                                        </div>
                                    </div>
                                    <div id="divDetenido" class="col-lg-12">
                                        <div class="col-lg-3" id="divFechaImputacion">
                                            <label class="control-label" for="txtFechaImputacion">Fecha Imputaci&oacute;n (dd/mm/aaaa)</label>
                                            <div>
                                                <input type="text" class="form-control mayuscula" id="txtFechaImputacion" name="txtFechaImputacion" >
                                            </div> 
                                        </div> 
                                        <div class="col-lg-3" id="divFechaControlDet">
                                            <label class="control-label" for="txtFechaControlDet">Fecha Detenci&oacute;n (dd/mm/aaaa) <span class="requerido">(*)</span></label>
                                            <div>
                                                <input type="text" class="form-control mayuscula" id="txtFechaControlDet" name="txtFechaControlDet" >
                                            </div> 
                                        </div> 
                                        <div class="col-lg-3" id="divFechaDeclaracion">
                                            <label class="control-label" for="txtFechaDeclaracion">Fecha Declaraci&oacute;n (dd/mm/aaaa)</label>
                                            <div>
                                                <input type="text" class="form-control mayuscula" id="txtFechaDeclaracion" name="txtFechaDeclaracion" >
                                            </div> 
                                        </div> 
                                        <div class="col-lg-3" id="divbTipoDetencion">
                                            <label class="control-label" for="cmbTipoDetencion">Tipo Detenci&oacute;n <span class="requerido">(*)</span></label>
                                            <div>
                                                <select id="cmbTipoDetencion" class="form-control mayuscula" name="cmbTipoDetencion">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="divReincidencias">
                                            <label class="control-label" for="cmbReincidencias">Tipo de reincidencia <span class="requerido">(*)</span></label>
                                            <div>
                                                <select id="cmbReincidencias" class="form-control mayuscula" name="cmbReincidencias">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="divTipoDetencion">
                                            <label class="control-label" for="cmbTipoDetencion">Cereso <span class="requerido">(*)</span></label>
                                            <div>
                                                <select id="cmbCeresos" class="form-control mayuscula" name="cmbCeresos">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" col-lg-3" id="divLegalDetencion">
                                            <label class="control-label" for="chkLegalDetencion" >Legal Detenci&oacute;n</label>
                                            <div>
                                                <input type="checkbox" class="form-control" id="chkLegalDetencion" name="chkLegalDetencion" >
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <br><br><br><br>
                                <div class="col-lg-12">
                                    <button id="btnGuardarImputado" class="btn btn-primary" onclick="agregaImputado();">Guardar Imputado</button>
                                    <button id="btnLimpiarImputado" class="btn btn-primary" onclick="limpiar();">Limpiar</button>
                                </div> 
                            </div>
                            <!--/////////////////PASO 2 - DIRECCI�N////////////////// -->
                            <div class="tab-pane" id="divDomicilios">

                                <div id="NombreDomicilios" style="margin-left:15px; margin-bottom: 25px; "></div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="cmbPaisDomicilioImputado"> Pa&iacute;s Domicilio <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbPaisDomicilioImputado" class="form-control" name="cmbPaisDomicilioImputado" onchange="comboEstadoDomicilioImputado();">
                                            <option value="0">Seleccione una opcion</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="cmbEstadoDomicilioImputado"> Estado Domicilio <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbEstadoDomicilioImputado" class="form-control" name="cmbEstadoDomicilioImputado" onchange="comboMunicipioDomicilioImputado();">
                                            <option value="0">Seleccione una opcion</option>
                                        </select>
                                        <input id="estadoDomicilioImputado" name="estadoDomicilioImputado" type="text" class="form-control mayuscula" style="display: none">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="cmbMunicipioDomicilioImputado"> Municipio Domicilio <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbMunicipioDomicilioImputado" class="form-control datoTipoCadena" name="cmbMunicipioDomicilioImputado">
                                            <option value="0">Seleccione una opcion</option>
                                        </select>
                                        <input id="municipioDomicilioImputado" name="municipioDomicilioImputado" type="text" class="form-control mayuscula" style="display: none">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="cmbConvivenciaImputado"> Convivencia <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbConvivenciaImputado" class="form-control mayuscula" name="cmbConvivenciaImputado">
                                            <option value="0">Seleccione una opcion</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="control-label" for=""> Calle <span class="requerido">(*)</span></label>
                                    <div>
                                        <input id="direccionDomicilio" name="direccionDomicilio" type="text" class="form-control mayuscula">
                                    </div> 
                                </div> 
                                <div class="col-lg-6">
                                    <label class="control-label" for=""> Colonia <span class="requerido">(*)</span></label>
                                    <div>
                                        <input id="coloniaDireccion" name="coloniaDireccion" type="text" class="form-control mayuscula">
                                    </div> 
                                </div> 

                                <div class="col-lg-2">
                                    <label class="control-label" for=""> N&uacute;mero Interior</label>
                                    <div>
                                        <input id="numeroIntDomicilio" name="numeroIntDomicilio" type="text" class="form-control mayuscula" maxlength="5">
                                    </div> 
                                </div> 
                                <div class="col-lg-2">
                                    <label class="control-label" for="">N&uacute;mero Exterior <span class="requerido">(*)</span></label>
                                    <div>
                                        <input id="numeroExtDomicilio" name="numeroExtDomicilio" type="text" class="form-control mayuscula" maxlength="5">
                                    </div> 
                                </div> 
                                <div class="col-lg-2">
                                    <label class="control-label" for=""> CP </label>
                                    <div>
                                        <input id="cpDomicilio" name="cpDomicilio" type="text" class="form-control mayuscula" maxlength="5">
                                    </div> 
                                </div> 

                                <div class="col-lg-2">
                                    <label class="control-label" for="">Residencia Habitual</label>
                                    <div>
                                        <input type="checkbox" class="form-control mayuscula" id="cbResidenciaHabitualImp">
                                    </div> 
                                </div>
                                <div class="col-lg-2">
                                    <label class="control-label" for="">Domicilio Procesal</label>
                                    <div>
                                        <input type="checkbox" class="form-control mayuscula" id="cbDomicilioProcesal">
                                    </div> 
                                </div>
                                <div class="col-lg-2">
                                    <label class="control-label" for="cmbTipoViviendaImputado"> Tipo Domicilio <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbTipoViviendaImputado" class="form-control mayuscula" name="cmbTipoViviendaImputado">
                                            <option value="0">Seleccione una opcion</option>
                                        </select>
                                    </div>
                                </div>
                                <br><br><br><br>
                                <div class="col-lg-12">
                                    <button id="btnAgregaDomicilio" class="btn btn-primary" onclick="agregaDomicilioImputado();">Guarda Domiclio</button>
                                    <button id="btnLimpiarDomicilio" class="btn btn-primary" onclick="limpiarDomicilios();">Limpiar</button>
                                    <button id="btnUbicar" name="btnUbicar" class="btn btn-primary" onclick="ubica();">Ubicar</button>
                                </div>
                                <div class="col-lg-12">
                                    <br><br>
                                    <div id="ubicacion" style="display:none;">
                                    </div>
                                </div>
                                <input type="hidden" name="latitud" id="latitud" value="19.2464696" />
                                <input type="hidden" name="longitud" id="longitud" value="-99.10134979999998" />
                                <br><br>
                                <div class="col-lg-12">
                                    <div id="divResultadoDireccion"></div>
                                </div> 
                            </div>

                            <div class="tab-pane" id="divTelefonos">
                                <p class="col-lg-12" style="color: darkred;">Para guardar un registro tienes que ingresar al menos un campo</p>
                                <div id="NombreTelefonos" style="margin-left: 15px; margin-bottom: 25px;"></div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="">Tel&eacute;fono</label>      
                                    <div>
                                        <input id="telefonoTel"  name="telefonoTel"  type="text" class="form-control mayuscula" maxlength="10">
                                    </div> 
                                </div> 
                                <div class="col-lg-4">
                                    <label class="control-label" for="">Celular</label>
                                    <div>
                                        <input id="celTel" name="celTel" type="text" class="form-control mayuscula" maxlength="10">
                                    </div> 
                                </div> 
                                <div class="col-lg-4">
                                    <label class="control-label" for="">Correo Electr&oacute;nico</label>
                                    <div>
                                        <input id="emailTel" class="form-control" type="email" name="emailTel">
                                    </div> 
                                </div> 
                                <div class="col-lg-12"></div>
                                <br><br><br><br>
                                <div class="col-lg-12">
                                    <button id="btnAgregaTelImput" class="btn btn-primary" onclick="agregaTelImputado()">Guardar Tel&eacute;fono</button>
                                    <button id="btnLimpiarTelImput" class="btn btn-primary" onclick="limpiarTelefonos()" >Limpiar</button>
                                </div> 
                                <div class="form-group col-lg-12">
                                    <div id="divResultadosTelefono"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="divDefendores">

                                <div id="NombreDefensores" style="margin-left: 15px; margin-bottom: 25px;"></div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="cmbTipoDefensorImputado"> Tipo Defensor <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbTipoDefensorImputado" class="form-control mayuscula" name="cmbTipoDefensorImputado" onchange="textoDefensor()">
                                            <option value="0">Seleccione una opcion</option>
                                        </select>
                                    </div> 
                                </div> 
                                <div class="col-lg-12">
                                    <label class="control-label" for=""> Nombre <span class="requerido">(*)</span></label>
                                    <div>
                                        <input id="nombreDefensor" name="nombreDefensor" type="text" class="form-control mayuscula">
                                    </div> 
                                </div> 
                                <div class="col-lg-4">
                                    <label class="control-label" for="">Tel&eacute;fono</label>
                                    <div>
                                        <input id="telDefensor" name="telDefensor" type="text" class="form-control mayuscula" maxlength="10">
                                    </div> 
                                </div> 
                                <div class="col-lg-4">
                                    <label class="control-label" for="">Celular</label>
                                    <div>
                                        <input id="celDefensor" name="celDefensor" type="text" class="form-control mayuscula" maxlength="10">
                                    </div> 
                                </div> 
                                <div class="col-lg-4">
                                    <label class="control-label" for="">Correo Electr&oacute;nico</label>
                                    <div>
                                        <input id="emailDefensor" name="emailDefensor" type="email" class="form-control">
                                    </div> 
                                </div> 
                                <br><br><br><br>
                                <div class="col-lg-12">
                                    <button id="btnAgregaDefensorImput" class="btn btn-primary" onclick="agregaDefensorImputado();">Guarda Defensor</button>
                                    <button id="btnLimpiarDefensorImput" class="btn btn-primary" onclick="limpiarDefensores();" >Limpiar</button>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div id="divResultadosDefensor"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="divDrogas">

                                <div id="NombreDrogas" style="margin-left:15px; margin-bottom: 25px;"></div>
                                <div class="col-lg-9">
                                    <label class="control-label" for="cmbDrogasImputado"> Droga <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbDrogasImputado" class="form-control mayuscula" name="cmbDrogasImputado">
                                        </select>
                                    </div>
                                </div>
                                <br><br><br><br>
                                <div class="col-lg-12">
                                    <button class="btn btn-primary" id="btnAgregaDroga" onclick="agregarDrogas();">Guarda Droga</button>
                                    <button class="btn btn-primary" onclick="limpiarDrogas();">Limpiar</button>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div id="divResultadosDrogas"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="divTutores">

                                <div id="NombreTutores" style="margin-left: 15px; margin-bottom: 25px;"></div>
                                <div class="container">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="nombreTutorImputados">Nombre <span class="requerido">(*)</span></label>
                                        <div>
                                            <input id="nombreTutorImputados" name="nombreTutorImputados" type="text" class="form-control mayuscula">
                                        </div> 
                                    </div> 
                                    <div class="col-lg-4">
                                        <label class="control-label" for="paternoTutorImputados">Paterno <span class="requerido">(*)</span></label>
                                        <div>
                                            <input id="paternoTutorImputados" name="paternoTutorImputados" type="text" class="form-control mayuscula">
                                        </div> 
                                    </div> 
                                    <div class="col-lg-4">
                                        <label class="control-label" for="maternoTutorImputados">Materno <span class="requerido">(*)</span></label>
                                        <div>
                                            <input id="maternoTutorImputados" name="maternoTutorImputados" type="text" class="form-control mayuscula">
                                        </div> 
                                    </div> 
                                    <div class="col-lg-4">
                                        <label class="control-label" for="cmbGeneroTutorImputados">G&eacute;nero <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbGeneroTutorImputados" class="form-control mayuscula" name="cmbGeneroTutorImputados">
                                                <option value="0" selected>Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="fechaNacimientoTutorImputados">Fecha de nacimiento (dd/mm/aaaa) </label>
                                        <div>
                                            <input id="fechaNacimientoTutorImputados" name="fechaNacimientoTutorImputados" type="text" class="form-control mayuscula" onblur="calcularEdad(this.value, 'fechaNacimientoTutorImputados', 'txtEdadTutorImputado');">
                                        </div> 
                                    </div> 
                                    <div class="col-lg-4">
                                        <label class="control-label" for="txtEdadTutorImputado">Edad</label>
                                        <div>
                                            <input id="txtEdadTutorImputado" name="txtEdadTutorImputado" type="text" class="form-control mayuscula" maxlength="3" readonly="">
                                        </div> 
                                    </div> 

                                    <div class="col-lg-4">
                                        <label class="control-label" for="cmbTipoTutorImputados">Tipo Tutor <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbTipoTutorImputados" class="form-control mayuscula" name="cmbTipoTutorImputados">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="control-label" for="">Tutor Provisional<span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="radio"  id="P" value="P" name="rdtutores" class="form-control mayuscula" maxlength="3">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="control-label" for="">Tutor Definitivo<span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="radio"  id="D" value="D" name="rdtutores" class="form-control mayuscula" >
                                        </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-lg-12">
                                        <button id="btnAgregaTutoresImput" class="btn btn-primary" onclick="agregaTutoresImputados();">Guarda Tutores</button>
                                        <button id="btnLimpiarTutoresImput" class="btn btn-primary" onclick="limpiarTutor();">Limpiar</button>
                                    </div> 
                                    <div class="form-group col-lg-12">
                                        <table id="tableResultadosTutoresImputados" border='1' align='center' width='90%' class='tblGridAgrega'>
                                            <div id="divResultadosTutores"></div>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>
                            </div>
                            <div class="tab-pane" id="divNacionalidades">

                                <div id="NombreNacionalidad" style="margin-left: 15px; margin-bottom: 25px;"></div>
                                <div class="col-lg-9">
                                    <label class="control-label" for="cmbPaisNacionalidadImputado">Nacionalidad <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbPaisNacionalidadImputado" class="form-control mayuscula" name="cmbPaisNacionalidadImputado">
                                        </select>
                                    </div>
                                </div>
                                <br><br><br><br>
                                <div class="col-lg-12">
                                    <button class="btn btn-primary" id="bntAgregaNacionalidad" onclick="agregarNacionalidad();">Guarda Nacionalidad</button>
                                    <button class="btn btn-primary" onclick="limpiarNacionalidad();">Limpiar</button>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div id="divResultadosNacionalidad"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="divTerminaciones">

                                <div id="NombreTerminacion" style="margin-left: 15px; margin-bottom: 25px;"></div>
                                <div class="col-lg-4">
                                    <label class="control-label">Conclusi&oacute;n <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cveConclusion" name="cveConclusion" class="form-control">
                                            <option value="0">Selecciona una opci&oacute;n</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="divFechaCumplimiento" style="display: none;" class="col-lg-4">
                                    <label class="control-label">Fecha pactada de cumplimiento <span class="requerido">(*)</span></label>
                                    <div>
                                        <input type="text" name="fechaPactadaCumplimiento" id="fechaPactadaCumplimiento" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12"></div>
                                <div id="divCumplimiento" style="display: none;">
                                    <div class="col-lg-4">
                                        <label class="control-label">Monto total acordado</label>
                                        <div>
                                            <input type="text" name="montoTotalAcordado" id="montoTotalAcordado" class="form-control" maxlength="19" onkeypress="return justNumbers(event);">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label">Monto total pagado</label>
                                        <div>
                                            <input type="text" name="montoTotalPagado" id="montoTotalPagado" class="form-control"  maxlength="19" onkeypress="return justNumbers(event);">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label">Acuerdo cumplido</label>
                                        <div>
                                            <input type="checkbox" name="cumplimiento" id="cumplimiento" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12"></div>
                                <div class="col-lg-12">
                                    <label class="control-label">Observaciones</label>
                                    <div>
                                        <textarea id="observaciones" name="observaciones" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12"></div>
                                <br><br><br><br>
                                <div class="col-lg-12">
                                    <button class="btn btn-primary" id="bntAgregaTerminacion" onclick="agregarConclusion();">Guarda Conclusi&oacute;n</button>
                                    <button class="btn btn-primary" onclick="limpiarTerminacion();">Limpiar</button>
                                </div>
                                <div class="form-group col-lg-12">
                                    <div id="divResultadosTerminacion"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-12"></div> 
            <br><br>
            <div class="form-group" >
                <div id="divAlertWarning" class="alert alert-warning alert-dismissable" style="display:none;">                    
                    <strong>Advertencia!</strong> Mensaje
                </div>
                <div id="divAlertSuccesImputado" class="alert alert-success alert-dismissable" style="display:none;">

                    <strong>Correcto!</strong> Mensaje
                </div>
                <div id="divAlertDager" class="alert alert-danger alert-dismissable" style="display:none;">

                    <strong>Error!</strong> Mensaje
                </div>
                <div id="divAlertInfoImputado" class="alert alert-info alert-dismissable" style="display:none;">

                    <strong>Informaci&oacute;n!</strong> Mensaje
                </div>
            </div>    
            <div class="form-group col-lg-12">
                <div class="form-group col-lg-12">
                    <div style="text-align: center">
                        <label class="caption">LISTADO DE IMPUTADOS</label>
                    </div>
                    <div id="divResultadosGeneral"></div>
                </div> 
            </div>
            <div  id="modalSuspencionCondicional" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content" style="min-width: 800px !important;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div id="contenidoSuspencionCondicional">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--</div>-->                
    <!--            </div>
            </div>-->

    <!--    </body>
    </html>-->
    <script type="text/javascript">


        validaPersona = function () {
            if ($("#cmbTipoPersonaImputado").val() == 1) {
                $('#divPersonaMoralImputado').hide();
                muestraOcultaCampos(2);
            } else if ($("#cmbTipoPersonaImputado").val() == 2) {
                $('#divPersonaMoralImputado').show();
                muestraOcultaCampos(1);
                $("#chkDetenidoImputado").prop("checked", false);
                validaDetenido();
            } else if ($("#cmbTipoPersonaImputado").val() == 3) {
                $('#divPersonaMoralImputado').show();
                muestraOcultaCampos(1);
                $("#divDetenidoImputado").show();
                $("#divFechaControlDet").show();
                $("#divFechaDeclaracion").show();
                $("#divFechaImputacion").show();
                $("#divReincidencias").show();
                $("#divbTipoDetencion").show();
                $("#divTipoDetencion").show();
            }
        };

        validaRelacionMoral = function () {
            if ($('#chkRelacionPersonaMoralImputado').is(":checked")) {
                $('#chkRelacionPersonaMoralImputado').val('S');
                $('#txtPersonaMoralImputado').removeAttr('disabled');
            } else {
                $('#txtPersonaMoralImputado').attr('disabled', 'disabled');
                $('#chkRelacionPersonaMoralImputado').val('N');
                $('#txtPersonaMoralImputado').val('');
            }
        }

        validaDetenido = function () {
            if ($('#chkDetenidoImputado').is(':checked')) {
                $('#txtFechaImputacion').removeAttr('disabled');
                $('#txtFechaControlDet').removeAttr('disabled');
                $('#txtFechaDeclaracion').removeAttr('disabled');
                $('#cmbTipoDetencion').removeAttr('disabled');
                $('#cmbReincidencias').removeAttr('disabled');
                $("#chkLegalDetencion").removeAttr('disabled');
                $('#cmbCeresos').removeAttr('disabled');
                $('#chkDetenidoImputado').val('S');
                $('#divDetenido').show('');
            } else {
                $('#chkDetenidoImputado').val('N');
                $('#txtFechaImputacion').val('');
                $('#txtFechaControlDet').val('');
                $('#txtFechaDeclaracion').val('');
                $('#txtFechaImputacion').attr('disabled', 'disabled');
                $('#txtFechaControlDet').attr('disabled', 'disabled');
                $('#txtFechaDeclaracion').attr('disabled', 'disabled');
                $('#cmbTipoDetencion').attr('disabled', 'disabled');
                $('#cmbReincidencias').attr('disabled', 'disabled');
                $('#cmbCeresos').attr('disabled', 'disabled');
                $("#cmbTipoDetencion").val(0);
                $("#cmbReincidencias").val(0);
                $("#cmbCeresos").val(0);
                $('#divDetenido').hide('');
                $("#chkLegalDetencion").val("");
                $("#chkLegalDetencion").prop("checked", false);
                $("#chkLegalDetencion").attr('disabled', 'disabled');
            }
        };

        validaCurp = function (campoValida) {
            if ($("#" + campoValida + "").val() != "") {
                var curpStr = $("#" + campoValida + "").val().toUpperCase();
                var valid = "[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,�,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]";
                var validCurp = new RegExp(valid);
                var matchArray = curpStr.match(validCurp);
                if (matchArray == null) {
                    alert('Por favor verifique su CURP');
                    //$("#" + campoValida + "").val("");
                    return false;
                } else {
                    fechaNacimiento(curpStr);
                    return true;
                }
            }
        }

        validaRfc = function (campoValida) {
            if ($("#" + campoValida + "").val() != "") {
                var rfcStr = $("#" + campoValida + "").val();
                var regex = /^([A-Z|a-z|&amp;]{3}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)(\w{2})([A|a|0-9]{1})$|^([A-Z|a-z]{4}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)((\w{2})([A|a|0-9]{1})){0,3}$/;

                if (!regex.test(rfcStr)) {
                    alert('Rfc no válido');
                }
            }
        }

        fechaNacimiento = function (curp) {
            var m = curp.match(/^\w{4}(\w{2})(\w{2})(\w{2})/);
            console.log(m);
            var anio = parseInt(m[1]) + 1900;
            if (anio <= 1920) {
                anio += 100;
            }
            //anio += 100;
            console.log(anio);
            var mes = m[2];
            console.log(mes);
            var dia = m[3];
            console.log(dia);
            var fecha = dia + "/" + mes + "/" + anio;
            $("#txtFechaNacimientoImputado").data("DateTimePicker").date(fecha);
            $("#txtFechaNacimientoImputado").trigger('blur');
        };

        calcularEdad = function (fecha, campoFecha, campoEdad) {
            if ($("#" + campoFecha + "").val() != "") {
                var fechaActual = new Date();
                var diaActual = fechaActual.getDate();
                var mmActual = fechaActual.getMonth() + 1;
                var yyyyActual = fechaActual.getFullYear();
                FechaNac = fecha.split("/");
                var diaCumple = FechaNac[0];
                var mmCumple = FechaNac[1];
                var yyyyCumple = FechaNac[2];

                if (mmCumple.substr(0, 1) == 0) {
                    mmCumple = mmCumple.substring(1, 2);
                }
                if (diaCumple.substr(0, 1) == 0) {
                    diaCumple = diaCumple.substring(1, 2);
                }
                var edad = yyyyActual - yyyyCumple;
                if ((mmActual < mmCumple) || (mmActual == mmCumple && diaActual < diaCumple)) {
                    edad--;
                }
                if (edad < 18) {
                    alert("Verifique su Fecha de Nacimiento, debe ser mayor a 18");
                    $("#" + campoFecha + "").val("");
                    $("#" + campoFecha + "").focus();
                    $("#" + campoEdad + "").val("");
                    return false;
                } else {
                    $("#" + campoEdad + "").val(edad);
                }
            } else {
                $("#" + campoEdad + "").val("");
            }
        };

        formatoFecha = function (campo) {
            var fecha = campo.split(' ');
            if (fecha.length > 1) {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
            } else {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0];
            }
        };

        muestraOcultaCampos = function (cve) {
            if (cve == 1) {
                $("#divDetenidoImputado").hide();
                $("#divNombreImputado").hide();
                $("#divPaternoImputado").hide();
                $("#divMaternoImputado").hide();
                $("#divCurpImputado").hide();
                $("#divTipoDetencion").hide();
                $("#divGeneroImputado").hide();
                $("#divAliasImputado").hide();
                $("#divFechaDeclaracion").hide();
                $("#divFechaNacimientoImputado").hide();
                $("#divEdadImputado").hide();
                $("#divEstudioImputado").hide();
                $("#divEstadoCivilImputado").hide();
                $("#divEspanolImputado").hide();
                $("#divAlfabetismoImputado").hide();
                $("#divDielectoIndigenaImputado").hide();
                $("#divFamilialinguistica").hide();
                $("#divOcupacionImputado").hide();
                $("#divInterpreteImputado").hide();
                $("#divPsicofisicoImputado").hide();
                $("#divFechaImputacion").hide();
                $("#divFechaControlDet").hide();
                $("#divCeresos").hide();
                $("#divestadoNacimientoImputado").hide();
                $("#divmunicipioNacimientoImputado").hide();
                $("#divRelacionPersonaMoralImputado").hide();
                $("#divPersonaMoralImputadoRel").hide();
                $("#divingresoMensual").hide();
                $("#divFecTermInv").hide();
                $("#divFecTermCons").hide();
                $("#divGrupoEdnico").hide();
                $("#divbTipoDetencion").hide();
                $("#divReincidencias").hide();
                $("#divReligion").val(8);
                $("#divReligion").hide();
            } else {
                $("#divDetenidoImputado").show();
                $("#divNombreImputado").show();
                $("#divPaternoImputado").show();
                $("#divMaternoImputado").show();
                $("#divCurpImputado").show();
                $("#divTipoDetencion").show();
                $("#divGeneroImputado").show();
                $("#divAliasImputado").show();
                $("#divFamilialinguistica").show();
                $("#divFechaDeclaracion").show();
                $("#divFechaNacimientoImputado").show();
                $("#divEdadImputado").show();
                $("#divEstudioImputado").show();
                $("#divEstadoCivilImputado").show();
                $("#divEspanolImputado").show();
                $("#divAlfabetismoImputado").show();
                $("#divDielectoIndigenaImputado").show();
                $("#divOcupacionImputado").show();
                $("#divInterpreteImputado").show();
                $("#divPsicofisicoImputado").show();
                $("#divFechaImputacion").show();
                $("#divFechaControlDet").show();
                $("#divCeresos").show();
                $("#divestadoNacimientoImputado").show();
                $("#divmunicipioNacimientoImputado").show();
                $("#divRelacionPersonaMoralImputado").show();
                $("#divPersonaMoralImputadoRel").show();
                $("#divingresoMensual").show();
                $("#divFecTermInv").show();
                $("#divFecTermCons").show();
                $("#divGrupoEdnico").show();
                $("#divbTipoDetencion").show();
                $("#divReincidencias").show();
                $("#divReligion").show();
            }
        }

    //////////////////CARGA COMBOS////////////////////////////////////////////

        comboEtapaProcesal = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/etapasprocesales/EtapasprocesalesFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbCveEtapaProcesal').empty().prop("disabled", true);
                        $('#cmbCveEtapaProcesal').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                //if ( object.cveEtapaProcesal == "1" || object.cveEtapaProcesal == "2" || object.cveEtapaProcesal == "3" || object.cveEtapaProcesal == "4" ) {
                                $('#cmbCveEtapaProcesal').append('<option value="' + object.cveEtapaProcesal + '">' + object.desEtapaProcesal + '</option>');
                                //}
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar etapas procesales:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de etapas procesales imputados:\n\n" + otroobj);
                }
            });
        };

        mostrarCarpeta = function () {
            var etapaProcesal = $("#cmbCveEtapaProcesal").val();
            var idCarpetaJudicial = $("#hddIdCarpetaJudicial").val();
            if (etapaProcesal < 5) {
                $('#carpeta').show();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    global: false,
                    async: false,
                    dataType: "json",
                    data: {
                        accion: "consultarCarpetaEtapaProcesal",
                        cveEtapaProcesal: etapaProcesal,
                        idCarpetaJudicial: idCarpetaJudicial,
                        obligaPermiso: "false"
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('#cmbCarpeta').empty();
                            $('#cmbCarpeta').append('<option value="0">Seleccione una opci&oacute;n</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('#cmbCarpeta').append('<option value="' + object.idCarpetaJudicial + '">' + object.desEtapaProcesal + ' (Num: ' + object.numero + '/' + object.anio + ' ,NUC: ' + object.nuc + ', Carpeta Inv:' + object.carpetaInv + ')' + '</option>');
                                });
                            }
                        } catch (e) {
                            alert("Error al cargar Carpetas judiciales:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
                    }
                });
            } else {
                $('#cmbCarpeta').empty();
                $('#cmbCarpeta').append('<option value="0">Seleccione una opci&oacute;n</option>');
            }
            if (etapaProcesal == 0) {
                $('#carpeta').hide();
            }
        };

        comboTipoReligion = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/tiposreligiones/TiposreligionesFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbCveTipoReligion').empty();
    //                    $('#cmbCveTipoReligion').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbCveTipoReligion').append('<option value="' + object.cveTipoReligion + '">' + object.desTipoReligion + '</option>');
    //                        });
    //                        $('#cmbCveTipoReligion').val(8);
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Tipos Religiones Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de tipos religiones imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catTiposReligionesJson != "") {
                try {
                    $('#cmbCveTipoReligion').empty();
                    $('#cmbCveTipoReligion').append('<option value="">Seleccione una opci&oacute;n </option>');
                    if (catTiposReligionesJson.totalCount > 0) {
                        $.each(catTiposReligionesJson.data, function (count, object) {
                            $('#cmbCveTipoReligion').append('<option value="' + object.cveTipoReligion + '">' + object.desTipoReligion + '</option>');
                        });
                    }
                    $('#cmbCveTipoReligion').val(8);

                } catch (e) {
                    alert("Error al cargar catTiposReligionesJson Ofendido:" + e);
                }
            } else {
                $('#cmbCveTipoReligion').empty();
                $('#cmbCveTipoReligion').append('<option value="">No carga catalogo</option>');

            }
        };

        comboTipoPersonaImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbTipoPersonaImputado').empty();
    //                    $('#cmbTipoPersonaImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            if ( object.cveTipoPersona == "1" || object.cveTipoPersona == "2" || object.cveTipoPersona == "3" ) {
    //                                $('#cmbTipoPersonaImputado').append('<option value="' + object.cveTipoPersona + '">' + object.desTipoPersona + '</option>');
    //                            }
    //                            
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Tipos Personas Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de tipos personas imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catTiposPersonasJson != "") {
                try {
                    $('#cmbTipoPersonaImputado').empty();
                    $('#cmbTipoPersonaImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTiposPersonasJson.totalCount > 0) {
                        $.each(catTiposPersonasJson.data, function (count, object) {
                            if (object.cveTipoPersona == "1" || object.cveTipoPersona == "2" || object.cveTipoPersona == "3") {
                                $('#cmbTipoPersonaImputado').append('<option value="' + object.cveTipoPersona + '">' + object.desTipoPersona + '</option>');
                            }
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catTiposPersonasJson Ofendido:" + e);
                }
            } else {
                $('#cmbTipoPersonaImputado').empty();
                $('#cmbTipoPersonaImputado').append('<option value="0">No carga cat&aacute;logo</option>');

            }
        };
        comboCereso = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ceresos/CeresosFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbCeresos').empty();
                        $('#cmbCeresos').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbCeresos').append('<option value="' + object.cveCereso + '">' + object.desCereso + '</option>');
                            });
                            $('#cmbCeresos').val(1);
                        }
                    } catch (e) {
                        alert("Error al cargar ceresos:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de ceresos:\n\n" + otroobj);
                }
            });
        };
        comboGruposEdnicos = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/gruposednicos/GruposednicosFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbGrupoEdnico').empty();
    //                    $('#cmbGrupoEdnico').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbGrupoEdnico').append('<option value="' + object.cveGrupoEdnico + '">' + object.desGrupoEdnico + '</option>');
    //                        });
    //                        $('#cmbGrupoEdnico').val(72);
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar ceresos:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de ceresos:\n\n" + otroobj);
    //            }
    //        });
            if (catGruposEdnicosJson != "") {
                try {
                    $('#cmbGrupoEdnico').empty();
                    $('#cmbGrupoEdnico').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catGruposEdnicosJson.totalCount > 0) {
                        $.each(catGruposEdnicosJson.data, function (count, object) {
                            $('#cmbGrupoEdnico').append('<option value="' + object.cveGrupoEdnico + '">' + object.desGrupoEdnico + '</option>');
                        });
                    }
                    $('#cmbGrupoEdnico').val(72);

                } catch (e) {
                    alert("Error al cargar catGruposEdnicosJson Ofendido:" + e);
                }
            } else {
                $('#cmbGrupoEdnico').empty();
                $('#cmbGrupoEdnico').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboTipoDetencion = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposdetenciones/TiposdetencionesFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoDetencion').empty();
                        $('#cmbTipoDetencion').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTipoDetencion').append('<option value="' + object.cveTipoDetencion + '">' + object.desTipoDetencion + '</option>');
                            });
                            $('#cmbTipoDetencion').val(4);
                        }
                    } catch (e) {
                        alert("Error al cargar TipoDetencion:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion tipo Detencion:\n\n" + otroobj);
                }
            });
        };
        comboGeneroImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbGeneroImputado').empty();
    //                    $('#cmbGeneroImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbGeneroImputado').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Genero Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Genero imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catGenerosJson != "") {
                try {
                    $('#cmbGeneroImputado').empty();
                    $('#cmbGeneroImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catGenerosJson.totalCount > 0) {
                        $.each(catGenerosJson.data, function (count, object) {
                            $('#cmbGeneroImputado').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catGenerosJson Ofendido:" + e);
                }
            } else {
                $('#cmbGeneroImputado').empty();
                $('#cmbGeneroImputado').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboPaisNacionalidadImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbPaisNacionalidadImputado').empty();
    //                    $('#cmbPaisNacionalidadImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbPaisNacionalidadImputado').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
    //                        });
    //                        $("#cmbPaisNacionalidadImputado").val(119);
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Pais Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de pais imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catPaisesJson != "") {
                try {
                    $('#cmbPaisNacionalidadImputado').empty();
                    $('#cmbPaisNacionalidadImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catPaisesJson.totalCount > 0) {
                        $.each(catPaisesJson.data, function (count, object) {
                            $('#cmbPaisNacionalidadImputado').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                        });
                        $('#cmbPaisNacionalidadImputado').val(119).trigger('change');
                    }

                } catch (e) {
                    alert("Error al cargar catPaisesJson:" + e);
                }
            } else {
                $('#cmbPaisNacionalidadImputado').empty();
                $('#cmbPaisNacionalidadImputado').append('<option value="0">No carga catalogo</option>');
            }
        };
        comboPaisNacimientoImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbPaisNacimientoImputado').empty();
    //                    $('#cmbPaisNacimientoImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbPaisNacimientoImputado').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
    //                        });
    //                        $("#cmbPaisNacimientoImputado").val(119).trigger('change');
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Pais Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de pais imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catPaisesJson != "") {
                try {
                    $('#cmbPaisNacimientoImputado').empty();
                    $('#cmbPaisNacimientoImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catPaisesJson.totalCount > 0) {
                        $.each(catPaisesJson.data, function (count, object) {
                            $('#cmbPaisNacimientoImputado').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                        });
                        $('#cmbPaisNacimientoImputado').val(119).trigger('change');
                    }

                } catch (e) {
                    alert("Error al cargar catPaisesJson:" + e);
                }
            } else {
                $('#cmbPaisNacimientoImputado').empty();
                $('#cmbPaisNacimientoImputado').append('<option value="0">No carga catalogo</option>');
            }
        };
        comboEstadoNacimientoImputado = function () {
            $('#cmbEstadoNacimientoImputado').empty();
            $('#cmbEstadoNacimientoImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
            $('#cmbMunicipioNacimientoImputado').empty();
            $('#cmbMunicipioNacimientoImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
            $("#txtestadoNacimientoImputado").val("");
            $("#txtmunicipioNacimientoImputado").val("");
            if ($('#cmbPaisNacimientoImputado').val() == "119") { //Mexico
                $("#cmbEstadoNacimientoImputado").show();
                $("#cmbMunicipioNacimientoImputado").show();
                $("#txtestadoNacimientoImputado").hide();
                $("#txtmunicipioNacimientoImputado").hide();
    //            $.ajax({
    //                type: "POST",
    //                url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
    //                global: false,
    //                async: false,
    //                dataType: "json",
    //                data: {accion: "consultar", obligaPermiso: "false", cvePais: $('#cmbPaisNacimientoImputado').val()},
    //                beforeSend: function (objeto) {
    //                },
    //                success: function (datos) {
    //                    try {
    //                        $('#cmbEstadoNacimientoImputado').empty();
    //                        $('#cmbEstadoNacimientoImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                        if (datos.totalCount > 0) {
    //                            $.each(datos.data, function (count, object) {
    //                                if ( object.cveEstado != 97 ) {
    //                                    $('#cmbEstadoNacimientoImputado').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
    //                                }
    //                            });
    //                            $('#cmbEstadoNacimientoImputado').val(15).trigger('change');
    //                        }
    //                    } catch (e) {
    //                        alert("Error al cargar Estado Imputados:" + e);
    //                    }
    //                },
    //                error: function (objeto, quepaso, otroobj) {
    //                    alert("Error en la peticion de Estado imputados:\n\n" + otroobj);
    //                }
    //            });
                if (catEstadosJson != "") {
                    try {
                        $('#cmbEstadoNacimientoImputado').empty();
                        $('#cmbEstadoNacimientoImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                        if (catEstadosJson.totalCount > 0) {
                            $.each(catEstadosJson.data, function (count, object) {
                                if (object.cveEstado != "97") {
                                    $('#cmbEstadoNacimientoImputado').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                                }
                            });
                            $('#cmbEstadoNacimientoImputado').val(15).trigger('change');
                        }

                    } catch (e) {
                        alert("Error al cargar catPaisesJson:" + e);
                    }
                } else {
                    $('#cmbEstadoNacimientoImputado').empty();
                    $('#cmbEstadoNacimientoImputado').append('<option value="0">No carga catalogo</option>');
                }
            } else {
                $("#cmbEstadoNacimientoImputado").hide();
                $("#cmbMunicipioNacimientoImputado").hide();
                $("#txtestadoNacimientoImputado").show();
                $("#txtmunicipioNacimientoImputado").show();
            }
        };
        comboMunicipioNacimientoImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false", cveEstado: $('#cmbEstadoNacimientoImputado').val()},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbMunicipioNacimientoImputado').empty();
    //                    $('#cmbMunicipioNacimientoImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbMunicipioNacimientoImputado').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Municipio Nacimiento Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Municipio Nacimiento imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catMunicipiosJson != "") {
                try {
                    $('#cmbMunicipioNacimientoImputado').empty();
                    $('#cmbMunicipioNacimientoImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catMunicipiosJson.totalCount > 0) {
                        $.each(catMunicipiosJson.data, function (count, object) {
                            if (object.cveEstado === $('#cmbEstadoNacimientoImputado').val()) {
                                $('#cmbMunicipioNacimientoImputado').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
                            }
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catMunicipiosJson:" + e);
                }
            } else {
                $('#cmbMunicipioNacimientoImputado').empty();
                $('#cmbMunicipioNacimientoImputado').append('<option value="0">No carga catalogo</option>');
            }
        };
        comboEstudioImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/nivelesinstrucciones/NivelesinstruccionesFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbEstudioImputado').empty();
    //                    $('#cmbEstudioImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbEstudioImputado').append('<option value="' + object.cveNivelInstruccion + '">' + object.desNivelInstruccion + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Estudio Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Estudio imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catNivelesInstruccionesJson != "") {
                try {
                    $('#cmbEstudioImputado').empty();
                    $('#cmbEstudioImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catNivelesInstruccionesJson.totalCount > 0) {
                        $.each(catNivelesInstruccionesJson.data, function (count, object) {
                            $('#cmbEstudioImputado').append('<option value="' + object.cveNivelInstruccion + '">' + object.desNivelInstruccion + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catNivelesInstruccionesJson:" + e);
                }
            } else {
                $('#cmbEstudioImputado').empty();
                $('#cmbEstudioImputado').append('<option value="0">No carga catalogo</option>');
            }
        };
        comboEstadoCivilImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/estadosciviles/EstadoscivilesFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbEstadoCivilImputado').empty();
    //                    $('#cmbEstadoCivilImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbEstadoCivilImputado').append('<option value="' + object.cveEstadoCivil + '">' + object.desEstadoCivil + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Estado Civil Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Estado Civil imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catEstadoscivilesJson != "") {
                try {
                    $('#cmbEstadoCivilImputado').empty();
                    $('#cmbEstadoCivilImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catEstadoscivilesJson.totalCount > 0) {
                        $.each(catEstadoscivilesJson.data, function (count, object) {
                            $('#cmbEstadoCivilImputado').append('<option value="' + object.cveEstadoCivil + '">' + object.desEstadoCivil + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catEstadoscivilesJson Ofendido:" + e);
                }
            } else {
                $('#cmbEstadoCivilImputado').empty();
                $('#cmbEstadoCivilImputado').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboEspanolImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/espanol/EspanolFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbEspanolImputado').empty();
    //                    $('#cmbEspanolImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbEspanolImputado').append('<option value="' + object.cveEspanol + '">' + object.desEspanol + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Espa�ol Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Espa�ol imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catEspanolJson != "") {
                try {
                    $('#cmbEspanolImputado').empty();
                    $('#cmbEspanolImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catEspanolJson.totalCount > 0) {
                        $.each(catEspanolJson.data, function (count, object) {
                            $('#cmbEspanolImputado').append('<option value="' + object.cveEspanol + '">' + object.desEspanol + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catEspanolJson Ofendido:" + e);
                }
            } else {
                $('#cmbEspanolImputado').empty();
                $('#cmbEspanolImputado').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboAlfabetismoImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/alfabetismo/AlfabetismoFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbAlfabetismoImputado').empty();
    //                    $('#cmbAlfabetismoImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbAlfabetismoImputado').append('<option value="' + object.cveAlfabetismo + '">' + object.desAlfabetismo + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Alfabetismo Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Alfabetismo imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catAlfabetismoJson != "") {
                try {
                    $('#cmbAlfabetismoImputado').empty();
                    $('#cmbAlfabetismoImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catAlfabetismoJson.totalCount > 0) {
                        $.each(catAlfabetismoJson.data, function (count, object) {
                            $('#cmbAlfabetismoImputado').append('<option value="' + object.cveAlfabetismo + '">' + object.desAlfabetismo + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catAlfabetismoJson Ofendido:" + e);
                }
            } else {
                $('#cmbAlfabetismoImputado').empty();
                $('#cmbAlfabetismoImputado').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboDielectoIndigenaImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/dialectoindigena/DialectoindigenaFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbDielectoIndigenaImputado').empty();
    //                    $('#cmbDielectoIndigenaImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbDielectoIndigenaImputado').append('<option value="' + object.cveDialectoIndigena + '">' + object.desDialectoIndigena + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Dialecto Indigena Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Dialecto Indigena imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catDialectoIndigenaJson != "") {
                try {
                    $('#cmbDielectoIndigenaImputado').empty();
                    $('#cmbDielectoIndigenaImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catDialectoIndigenaJson.totalCount > 0) {
                        $.each(catDialectoIndigenaJson.data, function (count, object) {
                            $('#cmbDielectoIndigenaImputado').append('<option value="' + object.cveDialectoIndigena + '">' + object.desDialectoIndigena + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar cmbDielectoIndigenaImputado Ofendido:" + e);
                }
            } else {
                $('#cmbDielectoIndigenaImputado').empty();
                $('#cmbDielectoIndigenaImputado').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboOcupacionImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/ocupaciones/OcupacionesFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbOcupacionImputado').empty();
    //                    $('#cmbOcupacionImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbOcupacionImputado').append('<option value="' + object.cveOcupacion + '">' + object.desOcupacion + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Ocupacion Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Ocupacion imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catOcupacionesJson != "") {
                try {
                    $('#cmbOcupacionImputado').empty();
                    $('#cmbOcupacionImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catOcupacionesJson.totalCount > 0) {
                        $.each(catOcupacionesJson.data, function (count, object) {
                            $('#cmbOcupacionImputado').append('<option value="' + object.cveOcupacion + '">' + object.desOcupacion + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catOcupacionesJson Ofendido:" + e);
                }
            } else {
                $('#cmbOcupacionImputado').empty();
                $('#cmbOcupacionImputado').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboInterpreteImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/interpretes/InterpretesFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbInterpreteImputado').empty();
    //                    $('#cmbInterpreteImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbInterpreteImputado').append('<option value="' + object.cveInterprete + '">' + object.desInterprete + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Interprete Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Interprete imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catInterpretesJson != "") {
                try {
                    $('#cmbInterpreteImputado').empty();
                    $('#cmbInterpreteImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catInterpretesJson.totalCount > 0) {
                        $.each(catInterpretesJson.data, function (count, object) {
                            $('#cmbInterpreteImputado').append('<option value="' + object.cveInterprete + '">' + object.desInterprete + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catInterpretesJson Ofendido:" + e);
                }
            } else {
                $('#cmbInterpreteImputado').empty();
                $('#cmbInterpreteImputado').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboPsicofisicoImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/estadospsicofisicos/EstadospsicofisicosFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbPsicofisicoImputado').empty();
    //                    $('#cmbPsicofisicoImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbPsicofisicoImputado').append('<option value="' + object.cveEstadoPsicofisico + '">' + object.desEstadoPsicofisico + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Psicofisico Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Psicofisico imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catEstadosPsicofisicosJson != "") {
                try {
                    $('#cmbPsicofisicoImputado').empty();
                    $('#cmbPsicofisicoImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catEstadosPsicofisicosJson.totalCount > 0) {
                        $.each(catEstadosPsicofisicosJson.data, function (count, object) {
                            $('#cmbPsicofisicoImputado').append('<option value="' + object.cveEstadoPsicofisico + '">' + object.desEstadoPsicofisico + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catEstadosPsicofisicosJson Ofendido:" + e);
                }
            } else {
                $('#cmbPsicofisicoImputado').empty();
                $('#cmbPsicofisicoImputado').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboPaisDomicilioImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbPaisDomicilioImputado').empty();
    //                    $('#cmbPaisDomicilioImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbPaisDomicilioImputado').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
    //                        });
    //                        $('#cmbPaisDomicilioImputado').val(119);
    //                        $('#cmbPaisDomicilioImputado').trigger('change');
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Pais Domicilio Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Pais Domicilio imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catPaisesJson != "") {
                try {
                    $('#cmbPaisDomicilioImputado').empty();
                    $('#cmbPaisDomicilioImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catPaisesJson.totalCount > 0) {
                        $.each(catPaisesJson.data, function (count, object) {
                            $('#cmbPaisDomicilioImputado').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                        });
                        $('#cmbPaisDomicilioImputado').val(119).trigger('change');
                    }

                } catch (e) {
                    alert("Error al cargar catPaisesJson:" + e);
                }
            } else {
                $('#cmbPaisDomicilioImputado').empty();
                $('#cmbPaisDomicilioImputado').append('<option value="0">No carga catalogo</option>');
            }
        };
        comboEstadoDomicilioImputado = function () {
            $('#cmbEstadoDomicilioImputado').empty();
            $('#cmbEstadoDomicilioImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
            $('#cmbMunicipioDomicilioImputado').empty();
            $('#cmbMunicipioDomicilioImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
            $("#estadoDomicilioImputado").val("");
            $("#municipioDomicilioImputado").val("");
            if ($('#cmbPaisDomicilioImputado').val() == "119") { //Mexico
                $("#cmbEstadoDomicilioImputado").show();
                $("#cmbMunicipioDomicilioImputado").show();
                $("#estadoDomicilioImputado").hide();
                $("#municipioDomicilioImputado").hide();
    //            $.ajax({
    //                type: "POST",
    //                url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
    //                global: false,
    //                async: false,
    //                dataType: "json",
    //                data: {accion: "consultar", obligaPermiso: "false", cvePais: $('#cmbPaisDomicilioImputado').val()},
    //                beforeSend: function (objeto) {
    //                },
    //                success: function (datos) {
    //                    try {
    //                        $('#cmbEstadoDomicilioImputado').empty();
    //                        $('#cmbEstadoDomicilioImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                        if (datos.totalCount > 0) {
    //                            $.each(datos.data, function (count, object) {
    //                                if ( object.cveEstado != 97 ) {
    //                                    $('#cmbEstadoDomicilioImputado').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
    //                                }
    //                                
    //                            });
    //                            $('#cmbEstadoDomicilioImputado').val(15);
    //                            $('#cmbEstadoDomicilioImputado').trigger('change');
    //                        }
    //                    } catch (e) {
    //                        alert("Error al cargar Estado Domicilio Imputados:" + e);
    //                    }
    //                },
    //                error: function (objeto, quepaso, otroobj) {
    //                    alert("Error en la peticion de Estado Domicilio imputados:\n\n" + otroobj);
    //                }
    //            });
                if (catEstadosJson != "") {
                    try {
                        $('#cmbEstadoDomicilioImputado').empty();
                        $('#cmbEstadoDomicilioImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                        if (catEstadosJson.totalCount > 0) {
                            $.each(catEstadosJson.data, function (count, object) {
                                if (object.cveEstado != "97") {
                                    $('#cmbEstadoDomicilioImputado').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                                }
                            });
                            $("#cmbEstadoDomicilioImputado").val(15).trigger('change');
                        }

                    } catch (e) {
                        alert("Error al cargar catEstadosJson:" + e);
                    }
                } else {
                    $('#cmbEstadoDomicilioImputado').empty();
                    $('#cmbEstadoDomicilioImputado').append('<option value="0">No carga catalogo</option>');
                }
            } else {
                $("#cmbEstadoDomicilioImputado").hide();
                $("#cmbMunicipioDomicilioImputado").hide();
                $("#estadoDomicilioImputado").show();
                $("#municipioDomicilioImputado").show();
            }
        };
        comboMunicipioDomicilioImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false", cveEstado: $('#cmbEstadoDomicilioImputado').val()},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbMunicipioDomicilioImputado').empty();
    //                    $('#cmbMunicipioDomicilioImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbMunicipioDomicilioImputado').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Municipio Domicilio Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Municipio Domicilio imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catMunicipiosJson != "") {
                try {
                    $('#cmbMunicipioDomicilioImputado').empty();
                    $('#cmbMunicipioDomicilioImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catMunicipiosJson.totalCount > 0) {
                        $.each(catMunicipiosJson.data, function (count, object) {
                            if (object.cveEstado === $('#cmbEstadoDomicilioImputado').val()) {
                                $('#cmbMunicipioDomicilioImputado').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
                            }
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catMunicipiosJson:" + e);
                }
            } else {
                $('#cmbMunicipioDomicilioImputado').empty();
                $('#cmbMunicipioDomicilioImputado').append('<option value="0">No carga catalogo</option>');
            }
        };
        comboConvivenciaImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/convivencias/ConvivenciasFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbConvivenciaImputado').empty();
    //                    $('#cmbConvivenciaImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbConvivenciaImputado').append('<option value="' + object.cveConvivencia + '">' + object.desConvivencia + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Convivencia Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Convivencia imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catConvivenciasJson != "") {
                try {
                    $('#cmbConvivenciaImputado').empty();
                    $('#cmbConvivenciaImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catConvivenciasJson.totalCount > 0) {
                        $.each(catConvivenciasJson.data, function (count, object) {
                            $('#cmbConvivenciaImputado').append('<option value="' + object.cveConvivencia + '">' + object.desConvivencia + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catConvivenciasJson Ofendido:" + e);
                }
            } else {
                $('#cmbConvivenciaImputado').empty();
                $('#cmbConvivenciaImputado').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboTipoViviendaImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/tiposdeviviendas/TiposdeviviendasFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbTipoViviendaImputado').empty();
    //                    $('#cmbTipoViviendaImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbTipoViviendaImputado').append('<option value="' + object.cveTipoDeVivienda + '">' + object.desTipoDeVivienda + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Tipo Vivienda Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de  Tipo Vivienda  imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catTiposdeViviendasJson != "") {
                try {
                    $('#cmbTipoViviendaImputado').empty();
                    $('#cmbTipoViviendaImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTiposdeViviendasJson.totalCount > 0) {
                        $.each(catTiposdeViviendasJson.data, function (count, object) {
                            $('#cmbTipoViviendaImputado').append('<option value="' + object.cveTipoDeVivienda + '">' + object.desTipoDeVivienda + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catTiposdeViviendasJson Ofendido:" + e);
                }
            } else {
                $('#cmbTipoViviendaImputado').empty();
                $('#cmbTipoViviendaImputado').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboTipoDefensorImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/tiposdefensores/TiposdefensoresFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", activo: "S", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbTipoDefensorImputado').empty();
    //                    $('#cmbTipoDefensorImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            if ( object.cveTipoDefensor != 4 ) {
    //                                $('#cmbTipoDefensorImputado').append('<option value="' + object.cveTipoDefensor + '">' + object.desTipoDefensor + '</option>');
    //                            }
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Tipo Vivienda Imputados:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de  Tipo Vivienda  imputados:\n\n" + otroobj);
    //            }
    //        });
            if (catTiposDefensoresJson != "") {
                try {
                    $('#cmbTipoDefensorImputado').empty();
                    $('#cmbTipoDefensorImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTiposDefensoresJson.totalCount > 0) {
                        $.each(catTiposDefensoresJson.data, function (count, object) {
                            if (object.cveTipoDefensor != '4') {
                                $('#cmbTipoDefensorImputado').append('<option value="' + object.cveTipoDefensor + '">' + object.desTipoDefensor + '</option>');
                            }
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catTiposDefensoresJson Ofendido:" + e);
                }
            } else {
                $('#cmbTipoDefensorImputado').empty();
                $('#cmbTipoDefensorImputado').append('<option value="0">No carga catalogo</option>');

            }
        };

        textoDefensor = function () {
            if ($("#cmbTipoDefensorImputado").val() == 6) {
                $("#nombreDefensor").val("Requiere defensor p\u00DAblico");
            } else {
                $("#nombreDefensor").val("");
            }
        };

        comboDrogasImputado = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/drogas/DrogasFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbDrogasImputado').empty();
                        $('#cmbDrogasImputado').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbDrogasImputado').append('<option value="' + object.cveDroga + '">' + object.desDroga + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Municipios relacion:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Municipios relacion:\n\n" + otroobj);
                }
            });
        };
        comboGeneroTutorImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbGeneroTutorImputados').empty();
    //                    $('#cmbGeneroTutorImputados').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbGeneroTutorImputados').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Genero Tutor Imputado:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Genero Tutor Imputado:\n\n" + otroobj);
    //            }
    //        });
            if (catGenerosJson != "") {
                try {
                    $('#cmbGeneroTutorImputados').empty();
                    $('#cmbGeneroTutorImputados').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catGenerosJson.totalCount > 0) {
                        $.each(catGenerosJson.data, function (count, object) {
                            $('#cmbGeneroTutorImputados').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catGenerosJson Ofendido:" + e);
                }
            } else {
                $('#cmbGeneroTutorImputados').empty();
                $('#cmbGeneroTutorImputados').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboTipoTutorImputado = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/tipostutores/TipostutoresFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbTipoTutorImputados').empty();
    //                    $('#cmbTipoTutorImputados').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbTipoTutorImputados').append('<option value="' + object.cveTipoTutor + '">' + object.desTipoTutor + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Genero Tutor Imputado:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Genero Tutor Imputado:\n\n" + otroobj);
    //            }
    //        });
            if (catTiposTutoresJson != "") {
                try {
                    $('#cmbTipoTutorImputados').empty();
                    $('#cmbTipoTutorImputados').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTiposTutoresJson.totalCount > 0) {
                        $.each(catTiposTutoresJson.data, function (count, object) {
                            $('#cmbTipoTutorImputados').append('<option value="' + object.cveTipoTutor + '">' + object.desTipoTutor + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catTiposTutoresJson Ofendido:" + e);
                }
            } else {
                $('#cmbTipoTutorImputados').empty();
                $('#cmbTipoTutorImputados').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboTipoReincidencia = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposreincidencias/TiposreincidenciasFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbReincidencias').empty();
                        $('#cmbReincidencias').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbReincidencias').append('<option value="' + object.cveTipoReincidencia + '">' + object.desTipoReincidencia + '</option>');
                            });
                            $('#cmbReincidencias').val(5);
                        }
                    } catch (e) {
                        alert("Error al cargar tipo reincidencia:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo reincidencia:\n\n" + otroobj);
                }
            });
        };
        comboTipoFamiliaLinguistica = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/tipofamilialinguistica/TipofamilialinguisticaFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbFamiliaLinguistica').empty();
    //                    $('#cmbFamiliaLinguistica').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbFamiliaLinguistica').append('<option value="' + object.cveTipoFamiliaLinguistica + '">' + object.desTipoFamiliaLinguistica + '</option>');
    //                        });
    //                        $('#cmbFamiliaLinguistica').val(15);
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar tipo cmbFamiliaLinguistica:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de tipo cmbFamiliaLinguistica:\n\n" + otroobj);
    //            }
    //        });
            if (catTipoFamiliaLinguisticaJson != "") {
                try {
                    $('#cmbFamiliaLinguistica').empty();
                    $('#cmbFamiliaLinguistica').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTipoFamiliaLinguisticaJson.totalCount > 0) {
                        $.each(catTipoFamiliaLinguisticaJson.data, function (count, object) {
                            $('#cmbFamiliaLinguistica').append('<option value="' + object.cveTipoFamiliaLinguistica + '">' + object.desTipoFamiliaLinguistica + '</option>');
                        });
                    }
                    $('#cmbFamiliaLinguistica').val(15);
                } catch (e) {
                    alert("Error al cargar catTipoFamiliaLinguisticaJson Ofendido:" + e);
                }
            } else {
                $('#cmbFamiliaLinguistica').empty();
                $('#cmbFamiliaLinguistica').append('<option value="0">No carga catalogo</option>');

            }
        };

        comboConclusiones = function () {
            var etapaProcesal = parseInt($("#hddCveEtapaProcesal").val());
            console.log(etapaProcesal);
            var strDatos = "accion=consultarOrdenado&activo=S";
            strDatos += "&orden=ORDER BY desConclusion";
    //        if ( etapaProcesal == 1 || etapaProcesal == 2 ) {
    //            strDatos += "&juicio=N";
    //        } else if( etapaProcesal >= 3 ) {
    //            strDatos += "&juicio=S";
    //        }
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/conclusiones/ConclusionesFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: strDatos,
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cveConclusion').empty();
                        $('#cveConclusion').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (etapaProcesal == 1 || etapaProcesal == 2) {
                                    if (object.cveConclusion == "1" || object.cveConclusion == "2" ||
                                            object.cveConclusion == "5" || object.cveConclusion == "6" ||
                                            object.cveConclusion == "7" || object.cveConclusion == "8" ||
                                            object.cveConclusion == "9" || object.cveConclusion == "10" ||
                                            object.cveConclusion == "11" || object.cveConclusion == "15") {
                                        $('#cveConclusion').append('<option value="' + object.cveConclusion + '">' + object.desConclusion + '</option>');
                                    }
                                } else if (etapaProcesal >= 3) {
                                    if (object.juicio == "S") {
                                        $('#cveConclusion').append('<option value="' + object.cveConclusion + '">' + object.desConclusion + '</option>');
                                    }
                                }

                            });
                        }
                    } catch (e) {
                        alert("Error al cargar conclusiones:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de conclusiones:\n\n" + otroobj);
                }
            });
        };
    //////////////////FIN COMBOS////////////////////////////////////////////
    //////////////////fUNCION VALIDA / GUARDAR////////////////////////////////////////////

        validateImputadoStep2 = function () {
            var mensaje = "";
            var error = true;
            if ($("#cmbTipoPersonaImputado").val() == "1") {
                if ($('#txtNombreImputado').val() == "" || $('#txtNombreImputado').val() == "0") {
                    mensaje += "*Capture Nombre del imputado\n";
                    error = false;
                }
                if ($('#txtPaternoImputado').val() == "" || $('#txtPaternoImputado').val() == "0") {
                    mensaje += "*Capture apellido del imputado\n";
                    error = false;
                }

                if ($('#cmbGeneroImputado').val() == "" || $('#cmbGeneroImputado').val() == "0") {
                    mensaje += "*Seleccione Genero del Imputado\n";
                    error = false;
                }

    //            if ($('#txtRfcImputado').val() == "" || $('#txtRfcImputado').val() == "0") {
    //                mensaje += "*Capture RFC del Imputado\n";
    //                error = false;
    //            }

    //            if ($('#txtCurpImputado').val() == "" || $('#txtCurpImputado').val() == "0") {
    //                mensaje += "*Capture CURP del Imputado\n";
    //                error = false;
    //            }

    //            if ($('#txtFechaNacimientoImputado').val() == "" || $('#txtFechaNacimientoImputado').val() == "0") {
    //                mensaje += "*Capture Fecha Nacimiento del Imputado\n";
    //                error = false;
    //            }
    //
    //            if ($('#txtEdadImputado').val() == "" || $('#txtEdadImputado').val() == "0") {
    //                mensaje += "*Capture la Edad del Imputado\n";
    //                error = false;
    //            }

                if ($('#cmbPaisNacimientoImputado').val() == "" || $('#cmbPaisNacimientoImputado').val() == "0") {
                    mensaje += "*Seleccione Pais Nacimiento del Imputado\n";
                    error = false;
                }

                if ($('#cmbPaisNacimientoImputado').val() == "119" && $('#cmbEstadoNacimientoImputado').val() == "0") {
                    mensaje += "*Seleccione Estado Nacimiento del Imputado\n";
                    error = false;
                }

                if ($('#cmbPaisNacimientoImputado').val() == "119" && $('#cmbEstadoNacimientoImputado').val() != "0" && $('#cmbMunicipioNacimientoImputado').val() == "0") {
                    mensaje += "*Seleccione Municipio Nacimiento del Imputado\n";
                    error = false;
                }

                if ($('#txtestadoNacimientoImputado').val() == "" && $('#cmbPaisNacimientoImputado').val() != "119" && $('#cmbPaisNacimientoImputado').val() != "0") {
                    mensaje += "*Capture Estado Nacimiento del Imputado\n";
                    error = false;
                }

                if ($('#txtmunicipioNacimientoImputado').val() == "" && $('#cmbPaisNacimientoImputado').val() != "119" && $('#cmbPaisNacimientoImputado').val() != "0") {
                    mensaje += "*Capture Municipio Nacimiento del Imputado\n";
                    error = false;
                }


                if ($('#cmbEstudioImputado').val() == "" || $('#cmbEstudioImputado').val() == "0") {
                    mensaje += "*Selecciona Estudio Imputado\n";
                    error = false;
                }

                if ($('#cmbEstadoCivilImputado').val() == "" || $('#cmbEstadoCivilImputado').val() == "0") {
                    mensaje += "*Selecciona Estado Civil\n";
                    error = false;
                }

                if ($('#cmbOcupacionImputado').val() == "" || $('#cmbOcupacionImputado').val() == "0") {
                    mensaje += "*Selecciona Ocupacion\n";
                    error = false;
                }

                if ($('#cmbEspanolImputado').val() == "" || $('#cmbEspanolImputado').val() == "0") {
                    mensaje += "*Selecciona Espa\u00f1ol\n";
                    error = false;
                }

                if ($('#cmbAlfabetismoImputado').val() == "" || $('#cmbAlfabetismoImputado').val() == "0") {
                    mensaje += "*Selecciona  Alfabetismo\n";
                    error = false;
                }

                if ($('#cmbDielectoIndigenaImputado').val() == "" || $('#cmbDielectoIndigenaImputado').val() == "0") {
                    mensaje += "*Selecciona  Dialecto Indigena\n";
                    error = false;
                }

                if ($('#cmbInterpreteImputado').val() == "" || $('#cmbInterpreteImputado').val() == "0") {
                    mensaje += "*Selecciona  Interprete\n";
                    error = false;
                }

                if ($('#cmbPsicofisicoImputado').val() == "" || $('#cmbPsicofisicoImputado').val() == "0") {
                    mensaje += "*Selecciona  Psicofisico\n";
                    error = false;
                }

                if ($('#txtingresoMensual').val() == "") {
                    mensaje += "*Selecciona  Ingreso Menusal\n";
                    error = false;
                }
                if ($('#cmbFamiliaLinguistica').val() == "" || $('#cmbFamiliaLinguistica').val() == "0") {
                    mensaje += "*Selecciona  tipo de familia linguistica\n";
                    error = false;
                }
                if ($('#cmbGrupoEdnico').val() == "" || $('#cmbGrupoEdnico').val() == "0") {
                    mensaje += "*Selecciona  grupo etnico\n";
                    error = false;
                }
            } else if ($("#cmbTipoPersonaImputado").val() == "2" || $("#cmbTipoPersonaImputado").val() == "3") {
                if ($('#txtnombreMoralImputado').val() == "" || $('#txtnombreMoralImputado').val() == "0") {
                    mensaje += "*Escribe el Nombre Persona Moral\n";
                    error = false;
                }
    //            if ($('#txtRfcImputado').val() == "" || $('#txtRfcImputado').val() == "0") {
    //                mensaje += "*Capture RFC del Imputado\n";
    //                error = false;
    //            }
                if ($('#cmbPaisNacimientoImputado').val() == "" || $('#cmbPaisNacimientoImputado').val() == "0") {
                    mensaje += "*Seleccione Pais Nacimiento del Imputado\n";
                    error = false;
                }
                if ($('#cmbPaisNacimientoImputado').val() == "119" && $('#cmbEstadoNacimientoImputado').val() == "0") {
                    mensaje += "*Seleccione Estado Nacimiento del Imputado\n";
                    error = false;
                }

                if ($('#cmbPaisNacimientoImputado').val() == "119" && $('#cmbEstadoNacimientoImputado').val() != "0" && $('#cmbMunicipioNacimientoImputado').val() == "0") {
                    mensaje += "*Seleccione Municipio Nacimiento del Imputado\n";
                    error = false;
                }

                if ($('#txtestadoNacimientoImputado').val() == "" && $('#cmbPaisNacimientoImputado').val() != "119" && $('#cmbPaisNacimientoImputado').val() != "0") {
                    mensaje += "*Capture Estado Nacimiento del Imputado\n";
                    error = false;
                }

                if ($('#txtmunicipioNacimientoImputado').val() == "" && $('#cmbPaisNacimientoImputado').val() != "119" && $('#cmbPaisNacimientoImputado').val() != "0") {
                    mensaje += "*Capture Municipio Nacimiento del Imputado\n";
                    error = false;
                }

            } else if ($("#cmbTipoPersonaImputado").val() == "0") {
                mensaje += "*Seleccione el Tipo de Persona\n";
                error = false;
            }
            if ($("#chkDetenidoImputado").is(":checked")) {
                if ($("#txtFechaControlDet").val() == "") {
                    mensaje += "*Debe indicar la fecha de detenci\u00F3n del imputado \n";
                    error = false;
                }
                if ($("#cmbTipoDetencion").val() == 0 || $("#cmbTipoDetencion").val() == "") {
                    mensaje += "*Debe indicar el tipo de detenci\u00F3n del imputado \n";
                    error = false;
                }
                if ($("#cmbReincidencias").val() == 0 || $("#cmbReincidencias").val() == "") {
                    mensaje += "*Debe seleccionar el tipo de Reincidencia del imputado \n";
                    error = false;
                }
                if ($("#cmbCeresos").val() == 0 || $("#cmbCeresos").val() == "") {
                    mensaje += "*Debe seleccionar una opci\u00F3n de ingreso a cereso para el imputado \n";
                    error = false;
                }
            }
            if ($("#sobreseimiento").is(":checked")) {
                if ($("#fechaSobreseimiento").val() == "") {
                    mensaje += "*Debe indicar la fecha de sobreseimiento del imputado \n";
                    error = false;
                }
            }
            if (!error) {
                alert(mensaje);
            }
            return error;
        }

        agregaImputado = function () {
            if ($("#hddIdCarpetaJudicial").val() != "") {
                var error = true;
                if (validateImputadoStep2()) {
                    var fechaSobreseimiento = "";
                    var fechaCierreInv = "";
                    var fechaImputacion = "";
                    if ($("#fechaSobreseimiento").val() != "") {
                        var fecha = $("#fechaSobreseimiento").val().split("/");
                        fechaSobreseimiento = fecha[2] + "-" + fecha[1] + "-" + fecha[0];
                    } else {
                        fechaSobreseimiento = "";
                    }
                    if ($("#txtFechaImputacion").val() != "") {
                        var fechaImp = $("#txtFechaImputacion").val().split("/");
                        fechaImputacion = fechaImp[2] + "-" + fechaImp[1] + "-" + fechaImp[0];
                    } else {
                        fechaImputacion = "";
                    }
                    if ($("#txtFecTermInv").val() != "") {
                        var fecTermInv = $("#txtFecTermInv").val().split("/");
                        fechaCierreInv = fecTermInv[2] + "-" + fecTermInv[1] + "-" + fecTermInv[0];
                    } else {
                        fechaCierreInv = "";
                    }
                    if ($("#chkLegalDetencion").is(":checked")) {
                        var legalDetencion = "S";
                    } else {
                        var legalDetencion = "N";
                    }
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardarImputado",
                            idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                            idCarpetaJudicial: $("#hddIdCarpetaJudicial").val(),
                            activo: 'S',
                            detenido: $("#chkDetenidoImputado").val(),
                            nombre: $("#txtNombreImputado").val(),
                            paterno: $("#txtPaternoImputado").val(),
                            materno: $("#txtMaternoImputado").val(),
                            rfc: $("#txtRfcImputado").val(),
                            curp: $("#txtCurpImputado").val(),
                            cveTipoDetencion: $("#cmbTipoDetencion").val(),
                            LegalDetencion: legalDetencion,
                            cveGenero: $("#cmbGeneroImputado").val(),
                            alias: $("#txAliasImputado").val(),
                            fechaDeclaracion: $("#txtFechaDeclaracion").val(),
                            cvePaisNacimiento: $("#cmbPaisNacimientoImputado").val(),
                            cveEstadoNacimiento: $("#cmbEstadoNacimientoImputado").val(),
                            cveMunicipioNacimiento: $("#cmbMunicipioNacimientoImputado").val(),
                            fechaNacimiento: $("#txtFechaNacimientoImputado").val(),
                            edad: $("#txtEdadImputado").val(),
                            cveTipoPersona: $("#cmbTipoPersonaImputado").val(),
                            cveNivelInstruccion: $("#cmbEstudioImputado").val(),
                            cveEstadoCivil: $("#cmbEstadoCivilImputado").val(),
                            cveEspanol: $("#cmbEspanolImputado").val(),
                            cveAlfabetismo: $("#cmbAlfabetismoImputado").val(),
                            cveDialectoIndigena: $("#cmbDielectoIndigenaImputado").val(),
                            cveTipoFamiliaLinguistica: $("#cmbFamiliaLinguistica").val(),
                            cveOcupacion: $("#cmbOcupacionImputado").val(),
                            cveInterprete: $("#cmbInterpreteImputado").val(),
                            cveEstadoPsicofisico: $("#cmbPsicofisicoImputado").val(),
                            fechaImputacion: fechaImputacion,
                            fechaControlDet: $("#txtFechaControlDet").val(),
                            cveCereso: $("#cmbCeresos").val(),
                            estadoNacimiento: $("#txtestadoNacimientoImputado").val(),
                            municipioNacimiento: $("#txtmunicipioNacimientoImputado").val(),
                            relacionMoral: $("#chkRelacionPersonaMoralImputado").val(),
                            personaMoral: $("#txtPersonaMoralImputado").val(),
                            ingresoMensual: $("#txtingresoMensual").val(),
                            nombreMoral: $("#txtnombreMoralImputado").val(),
                            cveEtapaProcesal: $("#cmbCveEtapaProcesal").val(),
                            carpetaDestino: $("#cmbCarpeta").val(),
                            fecTerminoCons: $("#txtFecTermCons").val(),
                            fecCierreInv: fechaCierreInv,
                            cveGrupoEdnico: $("#cmbGrupoEdnico").val(),
                            cveTipoReincidencia: $("#cmbReincidencias").val(),
                            tieneSobreseimiento: $("#TieneSobreseimiento").val(),
                            fechaSobreseimiento: fechaSobreseimiento,
                            cveTipoReligion: $("#cmbCveTipoReligion").val()
                        },
                        beforeSend: function (objeto) {
    //                        ////ToggleLoading(1);
                        },
                        success: function (datos) {
    //                        ////ToggleLoading(2);

                            if (datos.status == 'Ok') {
                                if (datos.msj != "") {
                                    var msg = datos.msj;
                                } else {
                                    var msg = "";
                                }
                                $("#divAlertSuccesImputado").html("");
                                $("#divAlertSuccesImputado").html("Registro guardado exitosamente " + msg);
                                $("#divAlertSuccesImputado").show("");
                                setTimeAlert("divAlertSuccesImputado");
                                consultarImputados();
                                limpiarImputado();
                            } else {
                                $("#divAlertWarning").html("");
                                $("#divAlertWarning").html(datos.msj);
                                $("#divAlertWarning").show("");
                                setTimeAlert("divAlertWarning");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                        }
                    });
                } else {
                    error = false;
                }
                return error;
            } else {
                alert("Seleccione una carpeta");
            }
        };

        validateDomiclioStep2 = function () {
            var mensaje = "";
            var error = true;
            if ($('#cmbPaisDomicilioImputado').val() == "" || $('#cmbPaisDomicilioImputado').val() == "0") {
                mensaje += "*Seleccione un pais \n";
                error = false;
            }

            if ($('#cmbPaisDomicilioImputado').val() == "119") {
                if ($('#cmbEstadoDomicilioImputado').val() == "" || $('#cmbEstadoDomicilioImputado').val() == "0") {
                    mensaje += "*Seleccione un estado \n";
                    error = false;
                }
                if ($('#cmbMunicipioDomicilioImputado').val() == "" || $('#cmbMunicipioDomicilioImputado').val() == "0") {
                    mensaje += "*Seleccione un municipio \n";
                    error = false;
                }
            } else {
                if ($('#estadoDomicilioImputado').val() == "" || $('#estadoDomicilioImputado').val() == "0") {
                    mensaje += "*Ingrese un estado \n";
                    error = false;
                }
                if ($('#municipioDomicilioImputado').val() == "" || $('#municipioDomicilioImputado').val() == "0") {
                    mensaje += "*Ingrese un municipio \n";
                    error = false;
                }
            }
            if ($('#cmbConvivenciaImputado').val() == "" || $('#cmbConvivenciaImputado').val() == "0") {
                mensaje += "*Seleccione convivencia \n";
                error = false;
            }
            if ($('#direccionDomicilio').val() == "" || $('#direccionDomicilio').val() == "0") {
                mensaje += "*Ingrese domicilio \n";
                error = false;
            }
            if ($('#coloniaDireccion').val() == "" || $('#coloniaDireccion').val() == "0") {
                mensaje += "*Ingrese colonia \n";
                error = false;
            }
            if ($('#numeroExtDomicilio').val() == "" || $('#numeroExtDomicilio').val() == "0") {
                mensaje += "*Ingrese no. Exterior \n";
                error = false;
            }
    //        if ($('#cpDomicilio').val() == "" || $('#cpDomicilio').val() == "0") {
    //            mensaje += "*Ingrese C.P. \n";
    //            error = false;
    //        }
            if ($('#cpDomicilio').val() != "") {
                if ($('#cpDomicilio').val().length < 5) {
                    mensaje += "*El  C.P. debe ser de 5 d\u00edgitos\n";
                    error = false;
                }
            }

            if ($('#cmbTipoViviendaImputado').val() == "" || $('#cmbTipoViviendaImputado').val() == "0") {
                mensaje += "*Seleccione tipo de vivienda \n";
                error = false;
            }
            if (!error) {
                alert(mensaje);
            }
            return error;
        };

        agregaDomicilioImputado = function () {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                var error = true;
                if (validateDomiclioStep2()) {
                    if ($("#cbResidenciaHabitualImp").is(":checked")) {
                        var auxVivienda = 'S';
                    } else {
                        var auxVivienda = 'N';
                    }
                    if ($("#cbDomicilioProcesal").is(":checked")) {
                        var domicilioProcesal = 'S';
                    } else {
                        var domicilioProcesal = 'N';
                    }
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guarda",
                            idDomicilioImputadoCarpeta: $('#hddIdDomicilioImputadoCarpeta').val(),
                            idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                            cvePais: $("#cmbPaisDomicilioImputado").val(),
                            cveEstado: $("#cmbEstadoDomicilioImputado").val(),
                            cveMunicipio: $("#cmbMunicipioDomicilioImputado").val(),
                            direccion: $("#direccionDomicilio").val(),
                            colonia: $("#coloniaDireccion").val(),
                            numInterior: $("#numeroIntDomicilio").val(),
                            numExterior: $("#numeroExtDomicilio").val(),
                            cp: $("#cpDomicilio").val(),
                            recidenciaHabitual: auxVivienda,
                            estado: $("#estadoDomicilioImputado").val(),
                            municipio: $("#municipioDomicilioImputado").val(),
                            cveTipoDeVivienda: $("#cmbTipoViviendaImputado").val(),
                            cveConvivencia: $("#cmbConvivenciaImputado").val(),
                            longitud: $("#longitud").val(),
                            latitud: $("#latitud").val(),
                            DomicilioProcesal: domicilioProcesal
                        },
                        beforeSend: function (objeto) {
    //                        ////ToggleLoading(1);
                        },
                        success: function (datos) {
    //                        ////ToggleLoading(2);

                            if (datos.status == 'Ok') {
                                $("#divAlertSuccesImputado").html("");
                                $("#divAlertSuccesImputado").html("Registro dado de alta exitosamente");
                                $("#divAlertSuccesImputado").show("");
                                setTimeAlert("divAlertSuccesImputado");
                                limpiarDomicilios();
                                consultarDomicilios();
                            } else {
                                $(document).scrollTop(1000);
                                $("#divAlertWarning").html("");
                                $("#divAlertWarning").html(datos.msj);
                                $("#divAlertWarning").show("");
                                setTimeAlert("divAlertWarning");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                        }
                    });
                } else {
                    error = false;
                }
                return error;
            } else {
                alert("Seleccione un imputado");
            }
        }

        validateTelStep2 = function () {
            var mensaje = "";
            var error = true;
            if (($('#telefonoTel').val() == "" || $('#telefonoTel').val() == "0") && ($('#celTel').val() == "" || $('#celTel').val() == "0") && ($('#emailTel').val() == "" || $('#emailTel').val() == "0")) {
                mensaje += "*Ingrese tel\u00e9fono y/o celular y/o correo \n";
                error = false;
            } else {
                if ($('#telefonoTel').val() != "") {
                    if ($('#telefonoTel').val().length != 10) {
                        mensaje += "*Tel\u00e9fono  debe de tener 10 Digitos \n";
                        error = false;
                    }
                }
                if ($('#celTel').val() != "") {
                    if ($('#celTel').val().length != 10) {
                        mensaje += "*Celular  debe de tener 10 Digitos \n";
                        error = false;
                    }
                }
                if ($('#emailTel').val() != "") {
                    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
                    if (!regex.test($('#emailTel').val().trim())) {
                        mensaje += "*EMail no valido \n";
                        error = false;
                    }
                }
            }
            if (!error) {
                alert(mensaje);
            }
            return error;
        }

        agregaTelImputado = function () {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                var error = true;
                if (validateTelStep2()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/telefonosimputadoscarpetas/TelefonosimputadoscarpetasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guarda",
                            idTelefonoImputadosCarpeta: $("#hddIdTelefonoImputadosCarpeta").val(),
                            idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                            telefono: $("#telefonoTel").val(),
                            celular: $("#celTel").val(),
                            email: $("#emailTel").val()
                        },
                        beforeSend: function (objeto) {
                            //////ToggleLoading(1);
                        },
                        success: function (datos) {
                            ////ToggleLoading(2);

                            if (datos.status == 'Ok') {
                                $("#divAlertSuccesImputado").html("");
                                $("#divAlertSuccesImputado").html("Registro guardado exitosamente");
                                $("#divAlertSuccesImputado").show("");
                                setTimeAlert("divAlertSuccesImputado");
                                consultarTelefonos();
                                limpiarTelefonos();
                            } else {
                                $("#divAlertWarning").html("");
                                $("#divAlertWarning").html(datos.msj);
                                $("#divAlertWarning").show("");
                                setTimeAlert("divAlertWarning");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                        }
                    });
                } else {
                    error = false;
                }
            } else {
                alert("Seleccione un imputado");
            }
        };

        validateDefensorStep2 = function () {
            var mensaje = "";
            var error = true;
            if ($('#cmbTipoDefensorImputado').val() == "" || $('#cmbTipoDefensorImputado').val() == "0") {
                mensaje += "*Seleccione un tipo de defensor \n";
                error = false;
            }
            if ($('#nombreDefensor').val() == "" || $('#nombreDefensor').val() == "0") {
                mensaje += "*Ingrese el nombre del defensor  \n";
                error = false;
            }
            if ($('#emailDefensor').val() != "") {
                var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
                if (!regex.test($('#emailDefensor').val().trim())) {
                    mensaje += "*EMail no valido \n";
                    error = false;
                }
            }
            if ($('#telDefensor').val() != "") {
                if ($('#telDefensor').val().length != 10) {
                    mensaje += "*Tel\u00e9fono  debe de tener 10 Digitos \n";
                    error = false;
                }
            }
            if ($('#celDefensor').val() != "") {
                if ($('#celDefensor').val().length != 10) {
                    mensaje += "Celular  debe de tener 10 Digitos \n";
                    error = false;
                }
            }
            if (!error) {
                alert(mensaje);
            }
            return error;
        }

        agregaDefensorImputado = function () {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                var error = true;
                if (validateDefensorStep2()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/defensoresimputadoscarpetas/DefensoresimputadoscarpetasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guarda",
                            idDefensorImputadoCarpeta: $("#hddIdDefensorImputado").val(),
                            idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                            cveTipoDefensor: $("#cmbTipoDefensorImputado").val(),
                            nombre: $("#nombreDefensor").val(),
                            telefono: $("#telDefensor").val(),
                            celular: $("#celDefensor").val(),
                            email: $("#emailDefensor").val()
                        },
                        beforeSend: function (objeto) {
                            ////ToggleLoading(1);
                        },
                        success: function (datos) {
                            ////ToggleLoading(2);

                            if (datos.status == 'Ok') {
                                $("#divAlertSuccesImputado").html("");
                                $("#divAlertSuccesImputado").html("Registro dado de alta exitosamente");
                                $("#divAlertSuccesImputado").show("");
                                setTimeAlert("divAlertSuccesImputado");
                                consultarDefensor();
                                limpiarDefensores();
                            } else {
                                $("#divAlertWarning").html("");
                                $("#divAlertWarning").html(datos.msj);
                                $("#divAlertWarning").show("");
                                setTimeAlert("divAlertWarning");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                        }
                    });
                } else {
                    error = false;
                }
                return error;
            } else {
                alert("Seleccione un imputado");
            }
        }

        validateDrogasStep2 = function () {
            var mensaje = "";
            var error = true;
            if ($('#cmbDrogasImputado').val() == "" || $('#cmbDrogasImputado').val() == "0") {
                mensaje += "*Seleccione tipo de droga \n";
                error = false;
            }
            if (!error) {
                alert(mensaje);
            }
            return error;
        }

        agregarDrogas = function () {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                var error = true;
                if (validateDrogasStep2()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/imputadosdrogascarpetas/ImputadosdrogascarpetasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardar",
                            idImputadoDrogaCarpeta: $("#hddIdImputadoDroga").val(),
                            idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                            cveDroga: $("#cmbDrogasImputado").val()
                        },
                        beforeSend: function (objeto) {
                            //ToggleLoading(1);
                        },
                        success: function (datos) {
                            //ToggleLoading(2);

                            if (datos.status == 'Ok') {
                                $("#divAlertSuccesImputado").html("");
                                $("#divAlertSuccesImputado").html("Registro dado de alta exitosamente");
                                $("#divAlertSuccesImputado").show("");
                                setTimeAlert("divAlertSuccesImputado");
                                consultarDrogas();
                                limpiarDrogas();
                            } else {
                                $("#divAlertWarning").html("");
                                $("#divAlertWarning").html(datos.msj);
                                $("#divAlertWarning").show("");
                                setTimeAlert("divAlertWarning");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                        }
                    });
                } else {
                    error = false;
                }
                return error;
            } else {
                alert("Seleccione un imputado");
            }
        };

        validateTutorStep2 = function () {
            var mensaje = "";
            var error = true;
            if ($('#paternoTutorImputados').val() == "" || $('#paternoTutorImputados').val() == "0") {
                mensaje += "*Ingrese apellido paterno del tutor \n";
                error = false;
            }
            if ($('#maternoTutorImputados').val() == "" || $('#maternoTutorImputados').val() == "0") {
                mensaje += "*Ingrese apellido materno del tutor \n";
                error = false;
            }
            if ($('#nombreTutorImputados').val() == "" || $('#nombreTutorImputados').val() == "0") {
                mensaje += "*Ingrese apellido nombre del tutor \n";
                error = false;
            }
            if ($('#cmbTipoTutorImputados').val() == "" || $('#cmbTipoTutorImputados').val() == "0") {
                mensaje += "*Seleccione el tipo de tutor \n";
                error = false;
            }

            if ($("input:radio[name='rdtutores']").is(':checked')) {
            } else {
                mensaje += "*Seleccione si el tutor es definitivo o provisional \n";
                error = false;
            }

            if ($('#cmbGeneroTutorImputados').val() == "" || $('#cmbGeneroTutorImputados').val() == "0") {
                mensaje += "*Seleccione Genero de tutor \n";
                error = false;
            }

    //        if ($('#fechaNacimientoTutorImputados').val() == "" || $('#fechaNacimientoTutorImputados').val() == "0") {
    //            mensaje += "*Seleccione Fecha de Nacimiento de tutor \n";
    //            error = false;
    //        }
    //
    //        if ($('#txtEdadTutorImputado').val() == "" || $('#txtEdadTutorImputado').val() == "0") {
    //            mensaje += "*Seleccione Edad del tutor \n";
    //            error = false;
    //        }
            if (!error) {
                alert(mensaje);
            }

            return error;
        }

        agregaTutoresImputados = function () {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                var error = true;
                if (validateTutorStep2()) {

                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/tutoresimputadoscarpetas/TutoresimputadoscarpetasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guarda",
                            idTutorImputadoCarpeta: $("#hddIdTutorImputado").val(),
                            idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                            ProvDef: $('input:radio[name=rdtutores]:checked').val(),
                            cveTipoTutor: $("#cmbTipoTutorImputados").val(),
                            nombre: $("#nombreTutorImputados").val(),
                            paterno: $("#paternoTutorImputados").val(),
                            materno: $("#maternoTutorImputados").val(),
                            fechaNacimiento: $("#fechaNacimientoTutorImputados").val(),
                            edad: $("#txtEdadTutorImputado").val(),
                            cveGenero: $("#cmbGeneroTutorImputados").val()
                        },
                        beforeSend: function (objeto) {
                            //ToggleLoading(1);
                        },
                        success: function (datos) {
                            //ToggleLoading(2);

                            if (datos.status == 'Ok') {
                                $("#divAlertSuccesImputado").html("");
                                $("#divAlertSuccesImputado").html("Registro guardado exitosamente");
                                $("#divAlertSuccesImputado").show("");
                                setTimeAlert("divAlertSuccesImputado");
                                consultarTutores();
                                limpiarTutor();
                            } else {
                                $("#divAlertWarning").html("");
                                $("#divAlertWarning").html(datos.msj);
                                $("#divAlertWarning").show("");
                                setTimeAlert("divAlertWarning");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                        }
                    });
                } else {
                    error = false;
                }
                return error;
            } else {
                alert("Seleccione un imputado");
            }
        };

        validateNacionalidadStep2 = function () {
            var mensaje = "";
            var error = true;
            if ($('#cmbPaisNacionalidadImputado').val() == "" || $('#cmbPaisNacionalidadImputado').val() == "0") {
                mensaje += "*Seleccione tipo de nacionalidad \n";
                error = false;
            }
            if (!error) {
                alert(mensaje);
            }
            return error;
        }

        agregarNacionalidad = function () {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                var error = true;
                if (validateNacionalidadStep2()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardar",
                            idNacionalidadImputadoCarpeta: $("#hddIdNacionalidadImputado").val(),
                            idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                            cvePais: $("#cmbPaisNacionalidadImputado").val()
                        },
                        beforeSend: function (objeto) {
                            //ToggleLoading(1);
                        },
                        success: function (datos) {
                            //ToggleLoading(2);

                            if (datos.status == 'Ok') {
                                $("#divAlertSuccesImputado").html("");
                                $("#divAlertSuccesImputado").html("Registro guardado exitosamente");
                                $("#divAlertSuccesImputado").show("");
                                setTimeAlert("divAlertSuccesImputado");
                                consultarNacionalidad();
                                limpiarNacionalidad();
                            } else {
                                $("#divAlertWarning").html("");
                                $("#divAlertWarning").html(datos.msj);
                                $("#divAlertWarning").show("");
                                setTimeAlert("divAlertWarning");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                        }
                    });
                } else {
                    error = false;
                }
                return error;
            } else {
                alert("Seleccione un imputado");
            }
        };

        validateConclusionStep2 = function () {
            var mensaje = "";
            var error = true;
            if ($('#cveConclusion').val() == "" || $('#cveConclusion').val() == "0") {
                mensaje += "*Seleccione tipo de conclusi\u00f3n \n";
                error = false;
            }
            if ($('#cveConclusion').val() == "1" || $('#cveConclusion').val() == "7") {
                if ($("#fechaPactadaCumplimiento").val() == "") {
                    mensaje += "*Seleccione la fecha pactada de cumplimiento\n";
                    error = false;
                }
            }

            if ($("#cumplimiento").is(":checked")) {
                if ($("#montoTotalAcordado").val() != "") {
                    if ($("#montoTotalPagado").val() == "") {
                        mensaje += "*Captura el monto total pagado\n";
                        error = false;
                    } else if (parseFloat($("#montoTotalAcordado").val()) > parseFloat($("#montoTotalPagado").val())) {
                        mensaje += "*El acuerdo no puede ser cumplido debido a que el monto pagado es menor al monto acordado\n";
                        error = false;
                    } else if (parseFloat($("#montoTotalAcordado").val()) < parseFloat($("#montoTotalPagado").val())) {
                        mensaje += "*El monto total pagado es mayor al monto acordado, favor de verificar\n";
                        error = false;
                    }
                }
            }
            if (!error) {
                alert(mensaje);
            }
            return error;
        };

        agregarConclusion = function () {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                var error = true;
                if (validateConclusionStep2()) {
                    var cumple = "";
                    if ($("#cumplimiento").is(":checked")) {
                        cumple = "S";
                    } else {
                        cumple = "N";
                    }
                    var fechaCumplimiento = "";
                    if ($("#fechaPactadaCumplimiento").val() != "") {
                        var fecha = $("#fechaPactadaCumplimiento").val().split("/");
                        fechaCumplimiento = fecha[2] + "-" + fecha[1] + "-" + fecha[0];
                    }
                    var montoAcordado = 0;
                    var montoPagado = 0;
                    if ($("#montoTotalAcordado").val() != "") {
                        montoAcordado = $("#montoTotalAcordado").val();
                    }
                    if ($("#montoTotalPagado").val() != "") {
                        montoPagado = $("#montoTotalPagado").val();
                    }
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guarda",
                            idImputadoCarpetaConclusion: $("#hddIdImputadoCarpetaConclusion").val(),
                            idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                            cveConclusion: $("#cveConclusion").val(),
                            cumplimiento: cumple,
                            montoTotalAcordado: montoAcordado,
                            montoTotalPagado: montoPagado,
                            fechaPactadaCumplimiento: fechaCumplimiento,
                            observaciones: $("#observaciones").val(),
                            activo: "S"
                        },
                        beforeSend: function (objeto) {
                            //ToggleLoading(1);
                        },
                        success: function (datos) {
                            //ToggleLoading(2);

                            if (datos.totalCount > 0) {
                                $("#divAlertSuccesImputado").html("");
                                $("#divAlertSuccesImputado").html("Registro guardado exitosamente " + datos.msj);
                                $("#divAlertSuccesImputado").fadeIn("slow").delay(5000).fadeOut("slow");
                                //setTimeAlert("divAlertSuccesImputado");
                                consultarConclusiones();
                                limpiarTerminacion();
                            } else {
                                $("#divAlertWarning").html("");
                                $("#divAlertWarning").html(datos.msj);
                                $("#divAlertWarning").show("");
                                setTimeAlert("divAlertWarning");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                        }
                    });
                } else {
                    error = false;
                }
                return error;
            } else {
                alert("Seleccione un imputado");
            }
        };
    //////////////////////////CONSULTAS//////////////////////////////

        consultarImputados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idCarpetaJudicial: $("#hddIdCarpetaJudicial").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    console.log(datos);
                    $('#divResultadosGeneral').html("");
                    if (datos.totalCount > 0) {
                        var table = "";
                        table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega">';
                        table += '<th width="30%">Tipo de persona</th>';
                        table += '<th width="40%" >Nombre</th>';
                        table += '<th width="10%" >Sobreseimiento</th>';
                        table += '<th width="10%">Sexo</th>';
                        table += '<th width="10%">Eliminar</td></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr class="trSeleccion" ><td id="' + datos.data[i].idImputadoCarpeta + '" style="cursor:pointer;" onclick="seleccionaImputado(' + datos.data[i].idImputadoCarpeta + ')" >' + datos.data[i].desTipoPersona + "</td>";
                            if (datos.data[i].cveTipoPersona == '1') {
                                table += '<td style="cursor:pointer;" onclick="seleccionaImputado(' + datos.data[i].idImputadoCarpeta + ')" >' + datos.data[i].nombre + " " + datos.data[i].paterno + " " + datos.data[i].materno + '</th>';
                            } else {
                                table += '<td style="cursor:pointer;" onclick="seleccionaImputado(' + datos.data[i].idImputadoCarpeta + ')" >' + datos.data[i].nombreMoral + '</td>';

                            }
                            table += "<td>" + datos.data[i].TieneSobreseimiento + "</td>";
                            table += "<td>" + datos.data[i].desGenero + "</td>";
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminaImputado(" + datos.data[i].idImputadoCarpeta + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosGeneral').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        consultarDomicilios = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    //ToggleLoading(2);
                    $('#divResultadoDireccion').html("");
                    if (datos.status == 'Ok') {
                        var table = "";
                        table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega">';
                        table += '<th width="15%">Pa&iacute;s</th>';
                        table += '<th width="15%">Estado</th>';
                        table += '<th width="15%">Municipio</th>';
                        table += '<th width="15%">Direcci&oacute;n</th>';
                        table += '<th width="15%">Eliminar</th></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idDomicilioImputadoCarpeta + '"><td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoCarpeta + ')">' + datos.data[i].desPais + '</td>';
                            if (datos.data[i].cveEstado != 0) {
                                table += '<td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoCarpeta + ')">' + datos.data[i].desEstado + '</td>';
                            } else {
                                table += '<td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoCarpeta + ')">' + datos.data[i].estado + '</td>';
                            }
                            if (datos.data[i].cveMunicipio != 0) {
                                table += '<td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoCarpeta + ')">' + datos.data[i].desMunicipio + '</td>';
                            } else {
                                table += '<td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoCarpeta + ')">' + datos.data[i].municipio + '</td>';
                            }
                            table += '<td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoCarpeta + ')">' + datos.data[i].direccion + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarDireccion(" + datos.data[i].idDomicilioImputadoCarpeta + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadoDireccion').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        consultarTelefonos = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/telefonosimputadoscarpetas/TelefonosimputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    //ToggleLoading(2);
                    $('#divResultadosTelefono').html("");
                    if (datos.status == 'Ok') {
                        var table = "";
                        table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega">';
                        table += '<th width="20%">Telefono</th>';
                        table += '<th width="20%" >Celular</th>';
                        table += '<th width="20%" >Correo</th>';
                        table += '<th width="20%">Eliminar</th></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idTelefonoImputadosCarpeta + '"><td onclick="seleccionaTelefono(' + datos.data[i].idTelefonoImputadosCarpeta + ')">' + datos.data[i].telefono + '</td>';
                            table += '<td onclick="seleccionaTelefono(' + datos.data[i].idTelefonoImputadosCarpeta + ')">' + datos.data[i].celular + '</td>';
                            table += '<td onclick="seleccionaTelefono(' + datos.data[i].idTelefonoImputadosCarpeta + ')">' + datos.data[i].email + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarTelefono(" + datos.data[i].idTelefonoImputadosCarpeta + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosTelefono').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        consultarDefensor = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/defensoresimputadoscarpetas/DefensoresimputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    //ToggleLoading(2);
                    $('#divResultadosDefensor').html("");
                    if (datos.status == 'Ok') {
                        var table = "";
                        table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega">';
                        table += '<th width="25%">Tipo defensor</th>';
                        table += '<th width="25%" >Nombre</th>';
                        table += '<th width="25%">Eliminar</th></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idDefensorImputadoCarpeta + '"><td onclick="seleccionaDefensor(' + datos.data[i].idDefensorImputadoCarpeta + ')">' + datos.data[i].desDefensor + '</td>';
                            table += '<td onclick="seleccionaDefensor(' + datos.data[i].idDefensorImputadoCarpeta + ')">' + datos.data[i].nombre + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarDefensor(" + datos.data[i].idDefensorImputadoCarpeta + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosDefensor').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        consultarDrogas = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadosdrogascarpetas/ImputadosdrogascarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    //ToggleLoading(2);
                    $('#divResultadosDrogas').html("");
                    if (datos.status == 'Ok') {
                        var table = "";
                        table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega">';
                        table += '<th width="50%">Drogas</th>';
                        table += '<th width="25%">Eliminar</th></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idImputadoDrogaCarpeta + '"><td onclick="seleccionaDroga(' + datos.data[i].idImputadoDrogaCarpeta + ')">' + datos.data[i].desDroga + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarDroga(" + datos.data[i].idImputadoDrogaCarpeta + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosDrogas').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        consultarTutores = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tutoresimputadoscarpetas/TutoresimputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    $('#divResultadosTutores').html("");
                    if (datos.status == 'Ok') {
                        var table = "";
                        table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega"><th width="25%">Tipo de tutor</th>';
                        table += '<th width="25%">Nombre</th>';
                        table += '<th width="25%">Eliminar</th></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idTutorImputadoCarpeta + '"><td onclick="seleccionaTutor(' + datos.data[i].idTutorImputadoCarpeta + ')">' + datos.data[i].desTipoTutor + '</td>';
                            table += '<td onclick="seleccionaTutor(' + datos.data[i].idTutorImputadoCarpeta + ')">' + datos.data[i].nombre + " " + datos.data[i].paterno + " " + datos.data[i].materno + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarTutor(" + datos.data[i].idTutorImputadoCarpeta + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosTutores').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        consultarNacionalidad = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                parent.//ToggleLoading(1);
                },
                success: function (datos) {
    //                parent.//ToggleLoading(2);
                    $('#divResultadosNacionalidad').html("");
                    if (datos.status == 'Ok') {
                        var table = "";
                        table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega"><th width="50%">Nacionalidad</th>';
                        table += '<th width="25%">Eliminar</th></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idNacionalidadImputadoCarpeta + '"><td onclick="seleccionaNacionalidad(' + datos.data[i].idNacionalidadImputadoCarpeta + ')">' + datos.data[i].desPais + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarNacionalidad(" + datos.data[i].idNacionalidadImputadoCarpeta + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosNacionalidad').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        consultarConclusiones = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoCarpeta: $("#hddIdImputadoCarpeta").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                parent.//ToggleLoading(1);
                },
                success: function (datos) {
    //                parent.//ToggleLoading(2);
                    $('#divResultadosTerminacion').html("");
                    if (datos.totalCount > 0) {
                        var table = "";
                        var fechaPactada = "";
                        var acuerdoCumplido = "";
                        table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega">';
                        table += '<th width="40%">Conclusi&oacute;n</th>';
                        table += '<th width="30%">Fecha pactada cumplimiento</th>';
                        table += '<th width="15%">Acuerdo Cumplido</th>';
                        table += '<th width="15%">Eliminar</th></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            if (datos.data[i].cveConclusion == "1" || datos.data[i].cveConclusion == "7") {
                                if (datos.data[i].fechaPactadaCumplimiento != "") {
                                    fechaPactada = formatoFecha(datos.data[i].fechaPactadaCumplimiento);
                                } else {
                                    fechaPactada = "";
                                }
                            } else {
                                fechaPactada = "N/A";
                            }
                            if (datos.data[i].cveConclusion == "1" || datos.data[i].cveConclusion == "7") {
                                acuerdoCumplido = datos.data[i].cumplimiento;
                            } else {
                                acuerdoCumplido = "N/A";
                            }
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idNacionalidadImputadoCarpeta + '">';
                            table += '<td onclick="seleccionaConclusion(' + datos.data[i].idImputadoCarpetaConclusion + ')">' + datos.data[i].desConclusion + '</td>';
                            table += '<td onclick="seleccionaConclusion(' + datos.data[i].idImputadoCarpetaConclusion + ')">' + fechaPactada + '</td>';
                            table += '<td onclick="seleccionaConclusion(' + datos.data[i].idImputadoCarpetaConclusion + ')">' + acuerdoCumplido + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarConclusion(" + datos.data[i].idImputadoCarpetaConclusion + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosTerminacion').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        consultarCarpetasJudiciales = function () {
            var idCarpetaJudicial = $("#hddIdCarpetaJudicial").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: "consultar",
                    idCarpetaJudicial: idCarpetaJudicial,
                    activo: "S"
                },
                beforeSend: function (objeto) {

                },
                success: function (datos) {
                    if (datos.totalCount > 0) {
                        $("#hddCveEtapaProcesal").val(datos.data[0].cveEtapaProcesal);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };
    /////////////////////Selecciones//////////////////////////////////
        seleccionaImputado = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoCarpeta: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $('#myTab3 a:first').tab('show');
                        $("#btnGuardarImputado").text("Modificar Imputado");
    //                    $("#divGeneralImputado").addClass("tab-pane active");
                        $("#hddIdImputadoCarpeta").val(datos.data[0].idImputadoCarpeta);
                        $("#hddIdCarpetaJudicial").val(datos.data[0].idCarpetaJudicial);
                        $("#cmbTipoPersonaImputado").val(datos.data[0].cveTipoPersona);
                        validaPersona();
                        if (datos.data[0].cveTipoPersona == 1) {
                            if (datos.data[0].detenido == 'S') {
                                $("#chkDetenidoImputado").prop("checked", true);
                            } else {
                                $("#chkDetenidoImputado").prop("checked", false);
                            }
                            if (datos.data[0].LegalDetencion == 'S') {
                                $("#chkLegalDetencion").prop("checked", true);
                            } else {
                                $("#chkLegalDetencion").prop("checked", false);
                            }
                            validaDetenido();
                            $("#txtNombreImputado").val(datos.data[0].nombre);
                            $("#txtPaternoImputado").val(datos.data[0].paterno);
                            $("#txtMaternoImputado").val(datos.data[0].materno);
                            $("#txtCurpImputado").val(datos.data[0].curp);
                            $("#cmbTipoDetencion").val(datos.data[0].cveTipoDetencion);
                            $("#cmbGeneroImputado").val(datos.data[0].cveGenero);
                            $("#txAliasImputado").val(datos.data[0].alias);
                            if (datos.data[0].fechaDeclaracion != "" && datos.data[0].fechaDeclaracion != "0000-00-00") {
                                $("#txtFechaDeclaracion").val(formatoFecha(datos.data[0].fechaDeclaracion));
                            } else {
                                $("#txtFechaDeclaracion").val("");
                            }
                            if (datos.data[0].fechaNacimiento != "" && datos.data[0].fechaNacimiento != "0000-00-00") {
                                $("#txtFechaNacimientoImputado").val(formatoFecha(datos.data[0].fechaNacimiento));
                            } else {
                                $("#txtFechaNacimientoImputado").val("");
                            }
                            if (datos.data[0].edad != "" && datos.data[0].edad != "0") {
                                $("#txtEdadImputado").val(datos.data[0].edad);
                            } else {
                                $("#txtEdadImputado").val("");
                            }
                            $("#cmbEstudioImputado").val(datos.data[0].cveNivelInstruccion);
                            $("#cmbEstadoCivilImputado").val(datos.data[0].cveEstadoCivil);
                            $("#cmbEspanolImputado").val(datos.data[0].cveEspanol);
                            $("#cmbAlfabetismoImputado").val(datos.data[0].cveAlfabetismo);
                            $("#cmbDielectoIndigenaImputado").val(datos.data[0].cveDialectoIndigena);
                            $("#cmbFamiliaLinguistica").val(datos.data[0].cveTipoFamiliaLinguistica);
                            $("#cmbOcupacionImputado").val(datos.data[0].cveOcupacion);
                            $("#cmbInterpreteImputado").val(datos.data[0].cveInterprete);
                            $("#cmbPsicofisicoImputado").val(datos.data[0].cveEstadoPsicofisico);
                            if (datos.data[0].fechaImputacion != "" && datos.data[0].fechaImputacion != "0000-00-00") {
                                $("#txtFechaImputacion").val(formatoFecha(datos.data[0].fechaImputacion));
                            } else {
                                $("#txtFechaImputacion").val("");
                            }
                            if (datos.data[0].fechaControlDet != "" && datos.data[0].fechaControlDet != "0000-00-00 00:00:00") {
                                $("#txtFechaControlDet").val(formatoFecha(datos.data[0].fechaControlDet));
                            } else {
                                $("#txtFechaControlDet").val("");
                            }

                            $("#cmbCeresos").val(datos.data[0].cveCereso);
                            $("#cmbReincidencias").val(datos.data[0].cveTipoReincidencia);
                            if (datos.data[0].relacionMoral == 'S') {
                                $("#chkRelacionPersonaMoralImputado").prop("checked", true)
                            } else {
                                $("#chkRelacionPersonaMoralImputado").prop("checked", false)
                            }
                            validaRelacionMoral();
                            $("#txtPersonaMoralImputado").val(datos.data[0].personaMoral);
                            $("#txtingresoMensual").val(datos.data[0].ingresoMensual);
                            if (datos.data[0].fecCierreInv != "" && datos.data[0].fecCierreInv != "0000-00-00") {
                                $("#txtFecTermInv").val(formatoFecha(datos.data[0].fecCierreInv));
                            } else {
                                $("#txtFecTermInv").val("");
                            }
                            if (datos.data[0].fecTerminoCons != "" && datos.data[0].fecTerminoCons != "0000-00-00 00:00:00") {
                                $("#txtFecTermCons").val(formatoFecha(datos.data[0].fecTerminoCons));
                            } else {
                                $("#txtFecTermCons").val("");
                            }

                            $("#cmbGrupoEdnico").val(datos.data[0].cveGrupoEdnico);
                            if (datos.data[0].cveTipoReligion != "") {
                                $("#cmbCveTipoReligion").val(datos.data[0].cveTipoReligion);
                            }
                        } else if (datos.data[0].cveTipoPersona == 2) {
                            $("#txtnombreMoralImputado").val(datos.data[0].nombreMoral);

                        } else if (datos.data[0].cveTipoPersona == 3) {
                            $("#txtnombreMoralImputado").val(datos.data[0].nombreMoral);
                            if (datos.data[0].detenido == 'S') {
                                $("#chkDetenidoImputado").prop("checked", true);
                            } else {
                                $("#chkDetenidoImputado").prop("checked", false);
                            }
                            if (datos.data[0].LegalDetencion == 'S') {
                                $("#chkLegalDetencion").prop("checked", true);
                            } else {
                                $("#chkLegalDetencion").prop("checked", false);
                            }
                            validaDetenido();
                            $("#cmbTipoDetencion").val(datos.data[0].cveTipoDetencion);
                            $("#cmbCeresos").val(datos.data[0].cveCereso);
                            $("#cmbReincidencias").val(datos.data[0].cveTipoReincidencia);
                            if (datos.data[0].fechaDeclaracion != "" && datos.data[0].fechaDeclaracion != "0000-00-00") {
                                $("#txtFechaDeclaracion").val(formatoFecha(datos.data[0].fechaDeclaracion));
                            } else {
                                $("#txtFechaDeclaracion").val("");
                            }
                            if (datos.data[0].fechaControlDet != "" && datos.data[0].fechaControlDet != "0000-00-00 00:00:00") {
                                $("#txtFechaControlDet").val(formatoFecha(datos.data[0].fechaControlDet));
                            } else {
                                $("#txtFechaControlDet").val("");
                            }
                            if (datos.data[0].fechaImputacion != "" && datos.data[0].fechaImputacion != "0000-00-00") {
                                $("#txtFechaImputacion").val(formatoFecha(datos.data[0].fechaImputacion));
                            } else {
                                $("#txtFechaImputacion").val("");
                            }
                        }
                        $("#txtRfcImputado").val(datos.data[0].rfc);
                        $("#cmbPaisNacimientoImputado").val(datos.data[0].cvePaisNacimiento);
                        $("#cmbCveEtapaProcesal").val(datos.data[0].cveEtapaProcesal);
                        $("#TieneSobreseimiento").val(datos.data[0].TieneSobreseimiento);
                        if (datos.data[0].TieneSobreseimiento == 'S') {
                            $("#sobreseimiento").prop("checked", true).prop("disabled", false);
                            $("#divFechaSobreseimiento").show();
                            if (datos.data[0].FechaSobreseimiento == "" || datos.data[0].FechaSobreseimiento == null || datos.data[0].FechaSobreseimiento == "0000-00-00") {
                                var fechaSobreseimiento = "";
                            } else {
                                var fechaSobreseimiento = formatoFecha(datos.data[0].FechaSobreseimiento);
                            }
                            $("#fechaSobreseimiento").val(fechaSobreseimiento);
                            $("#cmbCveEtapaProcesal").prop("disabled", true);
                        } else {
                            $("#sobreseimiento").prop("disabled", false).prop("checked", false);
                            $("#fechaSobreseimiento").val("");
                            $("#divFechaSobreseimiento").hide();
                            $("#cmbCveEtapaProcesal").prop("disabled", false);
                        }
                        if (parseInt($("#hddCveEtapaProcesal").val()) != datos.data[0].cveEtapaProcesal) {
                            $("#sobreseimiento").prop("disabled", true);
                            $("#cmbCveEtapaProcesal").prop("disabled", true);
                        }
                        $("#TieneSobreseimiento").val(datos.data[0].TieneSobreseimiento);

                        if (datos.data[0].cvePaisNacimiento == '119') {
                            comboEstadoNacimientoImputado();
                            $("#cmbEstadoNacimientoImputado").val(datos.data[0].cveEstadoNacimiento);
                            comboMunicipioNacimientoImputado();
                            $("#cmbEstadoNacimientoImputado").show();
                            $("#cmbMunicipioNacimientoImputado").show();
                            $("#cmbMunicipioNacimientoImputado").val(datos.data[0].cveMunicipioNacimiento);
                            $("#txtestadoNacimientoImputado").hide();
                            $("#txtmunicipioNacimientoImputado").hide();
                        } else {
                            $("#cmbEstadoNacimientoImputado").hide();
                            $("#cmbMunicipioNacimientoImputado").hide();
                            $("#txtestadoNacimientoImputado").show();
                            $("#txtmunicipioNacimientoImputado").show();
                            $("#txtestadoNacimientoImputado").val(datos.data[0].estadoNacimiento);
                            $("#txtmunicipioNacimientoImputado").val(datos.data[0].municipioNacimiento);

                        }
                        if (datos.data[0].cveTipoPersona == 1) {
                            var nombre = datos.data[0].nombre + " " + datos.data[0].paterno + " " + datos.data[0].materno;
                        } else {
                            var nombre = datos.data[0].nombreMoral;
                        }
                        var referencia = "";
                        if (datos.data[0].cveTipoCarpeta != "") {
                            $("#hddCveTipoCarpeta").val(datos.data[0].cveTipoCarpeta);
                            referencia += "  <br>Carpeta: " + datos.data[0].desCarpeta + " No: " + datos.data[0].numero + "/" + datos.data[0].anio;
                        } else if (datos.data[0].nuc != "" && datos.data[0].carpetaInv != "") {
                            referencia += "  <br>Carpeta de inv: " + datos.data[0].carpetaInv + " NUC: " + datos.data[0].nuc;
                        } else if (datos.data[0].nuc != "" && datos.data[0].carpetaInv == "") {
                            referencia += " <br> NUC: " + datos.data[0].nuc;
                        } else if (datos.data[0].nuc == "" && datos.data[0].carpetaInv != "") {
                            referencia += "  <br>Carpeta de inv: " + datos.data[0].carpetaInv;
                        }
                        $('#NombreGeneral').html("<b>Capture los datos generales del imputado " + nombre + "." + referencia + "<b><br>");
                        $('#NombreDomicilios').html("<b>Capture el domicilio del imputado " + nombre + "." + referencia + "<b><br>");
                        $('#NombreTelefonos').html("<b>Capture el tel\u00e9fono del imputado " + nombre + "." + referencia + "<b><br>");
                        $('#NombreDefensores').html("<b>Capture el defensor del imputado " + nombre + "." + referencia + "<b><br>");
                        $('#NombreDrogas').html("<b>Capture la drogas del imputado " + nombre + "." + referencia + "<b><br>");
                        $('#NombreTutores').html("<b>Capture el tutor del imputado " + nombre + "." + referencia + "<b><br>");
                        $('#NombreNacionalidad').html("<b>Capture la nacionalidad del imputado " + nombre + "." + referencia + "<b><br>");
                        $('#NombreTerminacion').html("<b>Capture la conclusi\u00f3n para el imputado " + nombre + "." + referencia + "<b><br>");
                        consultarDomicilios();
                        consultarTelefonos();
                        consultarDefensor();
                        consultarDrogas();
                        consultarTutores();
                        consultarNacionalidad();
                        consultarConclusiones();
    //                    cveTipoReincidencia: '1'
                    } else {
                        alert(datos.msj);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        seleccionaDireccion = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idDomicilioImputadoCarpeta: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#btnAgregaDomicilio").text("Modificar Domicilios");
                        $('#hddIdDomicilioImputadoCarpeta').val(datos.data[0].idDomicilioImputadoCarpeta);
                        $("#hddIdImputadoCarpeta").val(datos.data[0].idImputadoCarpeta);
                        $("#cmbPaisDomicilioImputado").val(datos.data[0].cvePais);


                        if (datos.data[0].cvePais == '119') {
                            comboEstadoDomicilioImputado();
                            $("#cmbEstadoDomicilioImputado").val(datos.data[0].cveEstado);
                            $("#cmbEstadoDomicilioImputado").show();
                            comboMunicipioDomicilioImputado();
                            $("#cmbMunicipioDomicilioImputado").val(datos.data[0].cveMunicipio);
                            $("#cmbMunicipioDomicilioImputado").show();
                            $("#estadoDomicilioImputado").hide();
                            $("#municipioDomicilioImputado").hide();
                        } else {
                            $("#cmbEstadoDomicilioImputado").hide();
                            $("#cmbMunicipioDomicilioImputado").hide();
                            $("#estadoDomicilioImputado").show();
                            $("#municipioDomicilioImputado").show();
                            $("#estadoDomicilioImputado").val(datos.data[0].estado);
                            $("#municipioDomicilioImputado").val(datos.data[0].municipio);

                        }
                        $("#direccionDomicilio").val(datos.data[0].direccion);
                        $("#coloniaDireccion").val(datos.data[0].colonia);
                        $("#numeroIntDomicilio").val(datos.data[0].numInterior);
                        $("#numeroExtDomicilio").val(datos.data[0].numExterior);
                        $("#cpDomicilio").val(datos.data[0].cp);
                        $("#latitud").val(datos.data[0].latitud);
                        $("#longitud").val(datos.data[0].longitud);
                        if (datos.data[0].recidenciaHabitual == 'S') {
                            $("#cbResidenciaHabitualImp").prop("checked", true);
                        } else {
                            $("#cbResidenciaHabitualImp").prop("checked", false);

                        }
                        if (datos.data[0].DomicilioProcesal == 'S') {
                            $("#cbDomicilioProcesal").prop("checked", true);
                        } else {
                            $("#cbDomicilioProcesal").prop("checked", false);

                        }
                        $("#cmbTipoViviendaImputado").val(datos.data[0].cveTipoDeVivienda);
                        $("#cmbConvivenciaImputado").val(datos.data[0].cveConvivencia);
                        $("#btnUbicar").trigger("click");

                    } else {
                        alert(datos.msj);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        seleccionaTelefono = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/telefonosimputadoscarpetas/TelefonosimputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idTelefonoImputadosCarpeta: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#btnAgregaTelImput").text("Modificar Tel\u00e9fono");
                        $("#hddIdTelefonoImputadosCarpeta").val(datos.data[0].idTelefonoImputadosCarpeta);
                        $("#hddIdImputadoCarpeta").val(datos.data[0].idImputadoCarpeta);
                        $("#telefonoTel").val(datos.data[0].telefono);
                        $("#celTel").val(datos.data[0].celular);
                        $("#emailTel").val(datos.data[0].email);
                    } else {
                        alert("Error. Verifique");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        seleccionaDefensor = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/defensoresimputadoscarpetas/DefensoresimputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idDefensorImputadoCarpeta: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#btnAgregaDefensorImput").text("Modificar Defensor");
                        $("#hddIdDefensorImputado").val(datos.data[0].idDefensorImputadoCarpeta);
                        $("#hddIdImputadoCarpeta").val(datos.data[0].idImputadoCarpeta);
                        $("#cmbTipoDefensorImputado").val(datos.data[0].cveTipoDefensor);
                        $("#nombreDefensor").val(datos.data[0].nombre);
                        $("#telDefensor").val(datos.data[0].telefono);
                        $("#celDefensor").val(datos.data[0].celular);
                        $("#emailDefensor").val(datos.data[0].email);
                    } else {
                        alert("Error. Verifique");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        seleccionaDroga = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadosdrogascarpetas/ImputadosdrogascarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoDrogaCarpeta: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#btnAgregaDroga").text("Modificar Droga");
                        $("#hddIdImputadoDroga").val(datos.data[0].idImputadoDrogaCarpeta);
                        $("#hddIdImputadoCarpeta").val(datos.data[0].idImputadoCarpeta);
                        $("#cmbDrogasImputado").val(datos.data[0].cveDroga);
                    } else {
                        alert("Error. Verifique");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        seleccionaTutor = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tutoresimputadoscarpetas/TutoresimputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idTutorImputadoCarpeta: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#btnAgregaTutoresImput").text("Modificar Tutor");
                        $("#hddIdTutorImputado").val(datos.data[0].idTutorImputadoCarpeta);
                        $("#hddIdImputadoCarpeta").val(datos.data[0].idImputadoCarpeta);
                        $("#cmbTipoTutorImputados").val(datos.data[0].cveTipoTutor);
                        $("#nombreTutorImputados").val(datos.data[0].nombre);
                        $("#paternoTutorImputados").val(datos.data[0].paterno);
                        $("#maternoTutorImputados").val(datos.data[0].materno);
                        $("input[name=rdtutores][value='" + datos.data[0].ProvDef + "']").prop("checked", true);
                        if (datos.data[0].fechaNacimiento == "" || datos.data[0].fechaNacimiento == "0000-00-00") {
                            var fecha = "";
                        } else {
                            var tmp = datos.data[0].fechaNacimiento.split("-");
                            var fecha = tmp[2] + "/" + tmp[1] + "/" + tmp[0];
                        }
                        if (datos.data[0].edad == "" || datos.data[0].edad == 0) {
                            var edad = "";
                        } else {
                            var edad = datos.data[0].edad;
                        }
                        $("#fechaNacimientoTutorImputados").val(fecha);
                        $("#txtEdadTutorImputado").val(edad);
                        $("#cmbGeneroTutorImputados").val(datos.data[0].cveGenero);
                    } else {
                        alert("Error. Verifique");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        seleccionaNacionalidad = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idNacionalidadImputadoCarpeta: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#bntAgregaNacionalidad").text("Modificar Nacionalidad");
                        $("#hddIdNacionalidadImputado").val(datos.data[0].idNacionalidadImputadoCarpeta);
                        $("#hddIdImputadoCarpeta").val(datos.data[0].idImputadoCarpeta);
                        $("#cmbPaisNacionalidadImputado").val(datos.data[0].cvePais);
                    } else {

                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        seleccionaConclusion = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoCarpetaConclusion: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.totalCount > 0) {
                        $("#cumplimiento").prop("disabled", false);
                        $("#montoTotalPagado").prop("disabled", false);
                        $("#bntAgregaTerminacion").text("Modificar Conclusi\u00f3n");
                        $("#hddIdImputadoCarpetaConclusion").val(datos.data[0].idImputadoCarpetaConclusion);
                        $("#hddIdImputadoCarpeta").val(datos.data[0].idImputadoCarpeta);
                        $("#cveConclusion").val(datos.data[0].cveConclusion);
                        if (datos.data[0].fechaPactadaCumplimiento != "") {
                            $("#fechaPactadaCumplimiento").val(formatoFecha(datos.data[0].fechaPactadaCumplimiento));
                        }
                        if (datos.data[0].cveConclusion == 1) {
                            $("#divCumplimiento").show();
                            $("#divFechaCumplimiento").show();
                        } else if (datos.data[0].cveConclusion == 7) {
                            $("#divCumplimiento").hide();
                            $("#divFechaCumplimiento").show();
                        } else {
                            $("#divCumplimiento").hide();
                            $("#divFechaCumplimiento").hide();
                        }
                        $("#montoTotalAcordado").val(datos.data[0].montoTotalAcordado);
                        $("#montoTotalPagado").val(datos.data[0].montoTotalPagado);
                        if (datos.data[0].cumplimiento == "S") {
                            $("#cumplimiento").prop("checked", true);
                        }
                        $("#observaciones").val(datos.data[0].observaciones);
                    } else {

                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };
    ///////////////////////// FUNCIONES ELMINAR //////////////////////////////////////////////
        eliminaImputado = function (id) {
            if ($("#hddIdCarpetaJudicial").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al imputado? Se eliminaran las relaciones (paso 5)",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idImputadoCarpeta: id
                                    },
                                    beforeSend: function (objeto) {
                                        //ToggleLoading(1);
                                    },
                                    success: function (datos) {
                                        //ToggleLoading(2);

                                        if (datos.status == 'Ok') {
                                            $("#divAlertSuccesImputado").html("");
                                            $("#divAlertSuccesImputado").html("El imputado se elimino de forma corrrecta");
                                            $("#divAlertSuccesImputado").show("");
                                            setTimeAlert("divAlertSuccesImputado");
                                            consultarImputados();
                                            limpiar();
                                        } else {
                                            $("#divAlertWarning").html("");
                                            $("#divAlertWarning").html("'" + datos.msj + "'");
                                            $("#divAlertWarning").show("");
                                            setTimeAlert("divAlertWarning");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
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
                alert("Seleccione una carpeta");
            }
        };

        eliminarDireccion = function (id) {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al domicilio?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "elimina",
                                        idDomicilioImputadoCarpeta: id
                                    },
                                    beforeSend: function (objeto) {
                                        //ToggleLoading(1);
                                    },
                                    success: function (datos) {
                                        //ToggleLoading(2);

                                        if (datos.status == 'Ok') {
                                            $("#divAlertSuccesImputado").html("");
                                            $("#divAlertSuccesImputado").html("El domicilio se elimino de forma correcta");
                                            $("#divAlertSuccesImputado").show("");
                                            setTimeAlert("divAlertSuccesImputado");
                                            limpiarDomicilios();
                                            consultarDomicilios();
                                        } else {
                                            $("#divAlertWarning").html("");
                                            $("#divAlertWarning").html("'" + datos.msj + "'");
                                            $("#divAlertWarning").show("");
                                            setTimeAlert("divAlertWarning");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
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
                alert("Seleccione un imputado");
            }
        }

        eliminarTelefono = function (id) {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al tel\u00e9fono?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/telefonosimputadoscarpetas/TelefonosimputadoscarpetasFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idTelefonoImputadosCarpeta: id
                                    },
                                    beforeSend: function (objeto) {
                                        //ToggleLoading(1);
                                    },
                                    success: function (datos) {
                                        //ToggleLoading(2);

                                        if (datos.status == 'Ok') {
                                            $("#divAlertSuccesImputado").html("");
                                            $("#divAlertSuccesImputado").html("El telefono se elimino de forma correcta");
                                            $("#divAlertSuccesImputado").show("");
                                            setTimeAlert("divAlertSuccesImputado");
                                            consultarTelefonos();
                                            limpiarTelefonos();
                                        } else {
                                            $("#divAlertWarning").html("");
                                            $("#divAlertWarning").html("'" + datos.msj + "'");
                                            $("#divAlertWarning").show("");
                                            setTimeAlert("divAlertWarning");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
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
                alert("Seleccione un imputado");
            }
        };

        eliminarDefensor = function (id) {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al defensor?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/defensoresimputadoscarpetas/DefensoresimputadoscarpetasFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idDefensorImputadoCarpeta: id
                                    },
                                    beforeSend: function (objeto) {
                                        //ToggleLoading(1);
                                    },
                                    success: function (datos) {
                                        //ToggleLoading(2);

                                        if (datos.status == 'Ok') {
                                            $("#divAlertSuccesImputado").html("");
                                            $("#divAlertSuccesImputado").html("El defensor se elimino de forma correcta");
                                            $("#divAlertSuccesImputado").show("");
                                            setTimeAlert("divAlertSuccesImputado");
                                            consultarDefensor();
                                            limpiarDefensores();
                                        } else {
                                            $("#divAlertWarning").html("");
                                            $("#divAlertWarning").html("'" + datos.msj + "'");
                                            $("#divAlertWarning").show("");
                                            setTimeAlert("divAlertWarning");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
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
                alert("Seleccione un imputado");
            }
        }

        eliminarDroga = function (id) {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar la droga?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/imputadosdrogascarpetas/ImputadosdrogascarpetasFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "baja",
                                        idImputadoDrogaCarpeta: id
                                    },
                                    beforeSend: function (objeto) {
                                        //ToggleLoading(1);
                                    },
                                    success: function (datos) {
                                        //ToggleLoading(2);

                                        if (datos.status == 'Ok') {
                                            $("#divAlertSuccesImputado").html("");
                                            $("#divAlertSuccesImputado").html("La droga se elimino de forma correcta");
                                            $("#divAlertSuccesImputado").show("");
                                            setTimeAlert("divAlertSuccesImputado");
                                            consultarDrogas();
                                            limpiarDrogas();
                                        } else {
                                            $("#divAlertWarning").html("");
                                            $("#divAlertWarning").html("'" + datos.msj + "'");
                                            $("#divAlertWarning").show("");
                                            setTimeAlert("divAlertWarning");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
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
                alert("Seleccione un imputado");
            }
        };

        eliminarTutor = function (id) {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al tutor?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/tutoresimputadoscarpetas/TutoresimputadoscarpetasFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idTutorImputadoCarpeta: id
                                    },
                                    beforeSend: function (objeto) {
                                        //ToggleLoading(1);
                                    },
                                    success: function (datos) {
                                        //ToggleLoading(2);

                                        if (datos.status == 'Ok') {
                                            $("#divAlertSuccesImputado").html("");
                                            $("#divAlertSuccesImputado").html("El tutor se elimino de forma correcta");
                                            $("#divAlertSuccesImputado").show("");
                                            setTimeAlert("divAlertSuccesImputado");
                                            consultarTutores();
                                            limpiarTutor();
                                        } else {
                                            $("#divAlertWarning").html("");
                                            $("#divAlertWarning").html("'" + datos.msj + "'");
                                            $("#divAlertWarning").show("");
                                            setTimeAlert("divAlertWarning");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
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
                alert("Seleccione un imputado");
            }
        };

        eliminarNacionalidad = function (id) {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar la nacionalidad?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "baja",
                                        idNacionalidadImputadoCarpeta: id
                                    },
                                    beforeSend: function (objeto) {
                                        //ToggleLoading(1);
                                    },
                                    success: function (datos) {
                                        //ToggleLoading(2);

                                        if (datos.status == 'Ok') {
                                            $("#divAlertSuccesImputado").html("");
                                            $("#divAlertSuccesImputado").html("La nacionalidad se elimino de forma correcta");
                                            $("#divAlertSuccesImputado").show("");
                                            setTimeAlert("divAlertSuccesImputado");
                                            consultarNacionalidad();
                                            limpiarNacionalidad();
                                        } else {
                                            $("#divAlertWarning").html("");
                                            $("#divAlertWarning").html("'" + datos.msj + "'");
                                            $("#divAlertWarning").show("");
                                            setTimeAlert("divAlertWarning");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
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
                alert("Seleccione un imputado");
            }
        };

        eliminarConclusion = function (id) {
            if ($("#hddIdImputadoCarpeta").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar la conclusi\u00f3n?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/imputadoscarpetasconclusiones/ImputadoscarpetasconclusionesFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idImputadoCarpetaConclusion: id
                                    },
                                    beforeSend: function (objeto) {
                                        //ToggleLoading(1);
                                    },
                                    success: function (datos) {
                                        //ToggleLoading(2);

                                        if (datos.status == 'Ok') {
                                            $("#divAlertSuccesImputado").html("");
                                            $("#divAlertSuccesImputado").html("La conclusi\u00f3n se elimin\u00f3 de forma correcta");
                                            $("#divAlertSuccesImputado").show("");
                                            setTimeAlert("divAlertSuccesImputado");
                                            consultarConclusiones();
                                            limpiarTerminacion();
                                        } else {
                                            $("#divAlertWarning").html("");
                                            $("#divAlertWarning").html("'" + datos.msj + "'");
                                            $("#divAlertWarning").show("");
                                            setTimeAlert("divAlertWarning");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
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
                alert("Seleccione un imputado");
            }
        };
    ///////////////////////////FUNCIONES LIMPIAR
        limpiar = function () {
            limpiarImputado();
            limpiarDomicilios();
            limpiarTelefonos();
            limpiarDefensores();
            limpiarDrogas();
            limpiarTutor();
            limpiarNacionalidad();
            limpiarTerminacion();
            $("#divResultadoDireccion").html("");
            $("#divResultadosTelefono").html("");
            $("#divResultadosDefensor").html("");
            $("#divResultadosDrogas").html("");
            $("#divResultadosTutores").html("");
            $("#divResultadosNacionalidad").html("");
            $("#btnGuardarImputado").text("Agregar Imputado");
            $("#btnAgregaDomicilio").text("Agregar Domicilios");
            $("#btnAgregaTelImput").text("Agregar Tel\u00e9fono");
            $("#btnAgregaDefensorImput").text("Agregar Defensor");
            $("#btnAgregaDroga").text("Agregar Droga");
            $("#btnAgregaTutoresImput").text("Agregar Tutor");
            $("#bntAgregaNacionalidad").text("Agregar Nacionalidad");
            $('#NombreGeneral').html("");
            $('#NombreDomicilios').html("");
            $('#NombreTelefonos').html("");
            $('#NombreDefensores').html("");
            $('#NombreDrogas').html("");
            $('#NombreTutores').html("");
            $('#NombreNacionalidad').html("");
            $('#NombreTerminacion').html("");
        };

        limpiarImputado = function () {
            $("#hddIdImputadoCarpeta").val("");
            $("#chkDetenidoImputado").prop("checked", false);
            $("#txtNombreImputado").val("");
            $("#txtPaternoImputado").val("");
            $("#txtMaternoImputado").val("");
            $("#txtRfcImputado").val("");
            $("#txtCurpImputado").val("");
            $("#cmbTipoDetencion").val(0);
            $("#cmbGeneroImputado").val(0);
            $("#txAliasImputado").val("");
            $("#txtFechaDeclaracion").val("");
            $("#cmbPaisNacimientoImputado").val(119).trigger('change');
            //$("#cmbEstadoNacimientoImputado").val(0);
            //$("#cmbMunicipioNacimientoImputado").val(0);
            $("#txtFechaNacimientoImputado").val("");
            $("#txtEdadImputado").val("");
            $("#cmbTipoPersonaImputado").val(0);
            $("#cmbEstudioImputado").val(0);
            $("#cmbEstadoCivilImputado").val(0);
            $("#cmbEspanolImputado").val(0);
            $("#cmbAlfabetismoImputado").val(0);
            $("#cmbDielectoIndigenaImputado").val(0);
            $("#cmbOcupacionImputado").val(0);
            $("#cmbInterpreteImputado").val(0);
            $("#cmbPsicofisicoImputado").val(0);
            $("#cmbFamiliaLinguistica").val(15);
            $("#txtFechaImputacion").val("");
            $("#txtFechaControlDet").val("");
            $("#cmbCeresos").val(0);
            $("#txtestadoNacimientoImputado").val("");
            $("#txtmunicipioNacimientoImputado").val("");
            $("#chkRelacionPersonaMoralImputado").prop("checked", false)
            $("#txtPersonaMoralImputado").val("");
            $("#txtingresoMensual").val("");
            $("#txtnombreMoralImputado").val("");
            $("#sobreseimiento").prop("checked", false);
            $("#sobreseimiento").attr("disabled", true);
            $("#TieneSobreseimiento").val('N');
            $("#cmbCveEtapaProcesal").val(0);
            $("#cmbCveEtapaProcesal").attr("disabled", true);
            $("#txtFecTermInv").val("");
            $("#txtFecTermCons").val("");
            $("#cmbGrupoEdnico").val(72);
            $("#cmbCveEtapaProcesal").val(0);
            $('#divPersonaMoralImputado').hide();
            validaDetenido();
            muestraOcultaCampos(2);
            $("#btnGuardarImputado").text("Agregar Imputado");
            $("#carpeta").hide();
            $("#cmbCarpeta").val(0);
            $("#fechaSobreseimiento").val("");
            $("#divFechaSobreseimiento").hide();
            $("#cmbCveTipoReligion").val(8);
        };

        limpiarDomicilios = function () {
            $('#hddIdDomicilioImputadoCarpeta').val("");
            $("#cmbPaisDomicilioImputado").val(119).trigger("change");
            $("#cmbEstadoDomicilioImputado").val(15).trigger("change");
            $("#cmbMunicipioDomicilioImputado").val(0);
            $("#direccionDomicilio").val("");
            $("#coloniaDireccion").val("");
            $("#numeroIntDomicilio").val("");
            $("#numeroExtDomicilio").val("");
            $("#cpDomicilio").val("");
            $("#cbResidenciaHabitualImp").val("");
            $("#cbDomicilioProcesal").val("");
            $("#estadoDomicilioImputado").val("");
            $("#municipioDomicilioImputado").val("");
            $("#cmbTipoViviendaImputado").val(0);
            $("#cmbConvivenciaImputado").val(0);
            $("#btnAgregaDomicilio").text("Agregar Domicilios");
            $("#ubicacion").empty();
            $("#cbResidenciaHabitualImp").prop("checked", false);
            $("#cbDomicilioProcesal").prop("checked", false);
        };

        limpiarTelefonos = function () {
            $("#hddIdTelefonoImputadosCarpeta").val("");
            $("#telefonoTel").val("");
            $("#celTel").val("");
            $("#emailTel").val("");
            $("#btnAgregaTelImput").text("Agregar Tel\u00e9fono");

        }

        limpiarDefensores = function () {
            $("#hddIdDefensorImputado").val("");
            $("#cmbTipoDefensorImputado").val(0);
            $("#nombreDefensor").val("");
            $("#telDefensor").val("");
            $("#celDefensor").val("");
            $("#emailDefensor").val("");
            $("#btnAgregaDefensorImput").text("Agregar Defensor");

        }

        limpiarDrogas = function () {
            $("#hddIdImputadoDroga").val("");
            $("#cmbDrogasImputado").val(0);
            $("#btnAgregaDroga").text("Agregar Droga");

        }

        limpiarTutor = function () {
            $("#hddIdTutorImputado").val("");
            $("#hddIdImputadoSolicutd").val("");
            $("#cmbTipoTutorImputados").val(0);
            $("#nombreTutorImputados").val("");
            $("#paternoTutorImputados").val("");
            $("#maternoTutorImputados").val("");
            $("#fechaNacimientoTutorImputados").val("");
            $("#txtEdadTutorImputado").val("");
            $("#cmbGeneroTutorImputados").val(0);
            $("#btnAgregaTutoresImput").text("Agregar Tutor");
            $('input:radio[name=rdtutores]:checked').prop("checked", false);
        }

        limpiarNacionalidad = function () {
            $("#hddIdNacionalidadImputado").val("");
            $("#cmbPaisNacionalidadImputado").val(119);
            $("#bntAgregaNacionalidad").text("Agregar Nacionalidad");
        }
        ubica = function () {
            $("#ubicacion").empty();
            $("#ubicacion").show();
            $("#ubicacion").append('<iframe src="sigejupe/imputadosSolicitudes/localizaImputado.php" width="50%" height="300" id="frameDemo" align="middle"></iframe>');
        }

        limpiarTerminacion = function () {
            $("#cveConclusion").val(0);
            $("#fechaPactadaCumplimiento").val("");
            $("#montoTotalAcordado").val("");
            $("#montoTotalPagado").val("");
            //$("#montoTotalPagado").prop("disabled", true);
            $("#cumplimiento").prop("checked", false);
            //$("#cumplimiento").prop("disabled", true);
            $("#divFechaCumplimiento").hide();
            $("#divCumplimiento").hide();
            $("#observaciones").val("");
            $("#bntAgregaTerminacion").text("Guarda Conclusi\u00f3n");
        };

        function justNumbers(e) {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
                return true;
            return /\d/.test(String.fromCharCode(keynum));
        }

        $(function () {
            var fecha = new Date();
            var now = new Date(fecha.getFullYear(), fecha.getMonth(), fecha.getDate(), 0, 0, 0, 0);

            $("#sobreseimiento").on('change', function () {
                if ($(this).is(":checked")) {
                    $("#TieneSobreseimiento").val('S');
                    $("#divFechaSobreseimiento").show();
                } else {
                    $("#TieneSobreseimiento").val('N');
                    $("#fechaSobreseimiento").val("");
                    $("#divFechaSobreseimiento").hide();
                }
            });

            $("#txtFechaNacimientoImputado").datetimepicker({
                locale: 'es',
                maxDate: now,
                format: 'DD/MM/YYYY'
            });
            $("#txtFechaNacimientoImputado").on('dp.change', function (e) {
                calcularEdad($(this).val(), 'txtFechaNacimientoImputado', 'txtEdadImputado');
            });
            $("#txtFechaImputacion").datetimepicker({
                locale: 'es',
                maxDate: now,
                format: 'DD/MM/YYYY'
            });
            $("#txtFechaControlDet").datetimepicker({
                //format: "dd/mm/yyyy"
                locale: 'es',
                maxDate: now,
            });

            $("#txtFechaDeclaracion").datetimepicker({
                locale: 'es',
                maxDate: now,
                format: 'DD/MM/YYYY'
            });


            $("#fechaNacimientoTutorImputados").datetimepicker({
                locale: 'es',
                maxDate: now,
                format: 'DD/MM/YYYY'
            });

            $("#fechaSobreseimiento").datetimepicker({
                locale: 'es',
                maxDate: now,
                format: 'DD/MM/YYYY'
            });

            $("#fechaNacimientoTutorImputados").on('dp.change', function (e) {
                if ($(this).val() == "") {
                    $("#txtEdadTutorImputado").val("");
                }

            });
            $("#txtFecTermCons").datetimepicker({
                locale: 'es'
                //maxDate: now,
                //format: 'DD/MM/YYYY'
            });
            $("#txtFecTermInv").datetimepicker({
                locale: 'es',
                //maxDate: now,
                format: 'DD/MM/YYYY'
            });
            $('#cpDomicilio').validaCampo('0123456789');
            $('#telefonoTel').validaCampo('0123456789');
            $('#celTel').validaCampo('0123456789');
            $('#telDefensor').validaCampo('0123456789');
            $('#celDefensor').validaCampo('0123456789');
            $("#txtingresoMensual").validaCampo('0123456789');
            //$("#montoTotalAcordado").validaCampo('0123456789');
            //$("#montoTotalPagado").validaCampo('0123456789');

            $("#cveConclusion").on("change", function () {
                if (parseInt($(this).val()) == 1) {
                    $("#divCumplimiento").show();
                    $("#divFechaCumplimiento").show();
                } else if (parseInt($(this).val()) == 7) {
                    $("#divCumplimiento").hide();
                    $("#divFechaCumplimiento").show();
                    $("#montoTotalAcordado").val("");
                    $("#montoTotalPagado").val("");
                    //$("#montoTotalPagado").prop("disabled", true);
                    $("#cumplimiento").prop("checked", false);
                    $.post("sigejupe/suspensioncondicional/frmSuspensionCondicional.php",
                            {idReferencia: $('#hddIdCarpetaJudicial').val(),
                                cveTipoCarpeta: $("#hddCveTipoCarpeta").val(),
                                formularioImputados: '1'
                            }, function (htmlexterno) {
                        $("#contenidoSuspencionCondicional").html(htmlexterno);
                    });
                    $("#modalSuspencionCondicional").modal();
                } else {
                    $("#divCumplimiento").hide();
                    $("#divFechaCumplimiento").hide();
                    $("#montoTotalAcordado").val("");
                    $("#montoTotalPagado").val("");
                    //$("#montoTotalPagado").prop("disabled", true);
                    $("#cumplimiento").prop("checked", false);
                    //$("#cumplimiento").prop("disabled", true);
                }
            });

            $("#fechaPactadaCumplimiento").datetimepicker({
                locale: 'es',
                format: 'DD/MM/YYYY'
            });
            consultarCarpetasJudiciales();
            comboTipoPersonaImputado();
            comboTipoDetencion();
            comboGeneroImputado();
            comboPaisNacimientoImputado();
            comboEstudioImputado();
            comboEstadoCivilImputado();
            comboEspanolImputado();
            comboAlfabetismoImputado();
            comboDielectoIndigenaImputado();
            comboOcupacionImputado();
            comboInterpreteImputado();
            comboGruposEdnicos();
            comboPsicofisicoImputado();
            comboPaisDomicilioImputado();
            comboEstadoDomicilioImputado();
            comboConvivenciaImputado();
            comboTipoViviendaImputado();
            comboTipoDefensorImputado();
            comboDrogasImputado();
            comboGeneroTutorImputado();
            comboTipoTutorImputado();
            comboCereso();
            comboPaisNacionalidadImputado();
            comboTipoReincidencia();
            validaRelacionMoral();
            validaDetenido();
            comboTipoFamiliaLinguistica();
            comboEtapaProcesal();
            /////CARGAR CONSULTAS
            consultarImputados();
            comboTipoReligion();
            comboConclusiones();
        });

    </script>    
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>