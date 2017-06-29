<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {


    if (isset($_POST['idSolicitud'])) {
        $idSolicitudAudiencia = $_POST['idSolicitud'];
    }
    ?>

    <style>

    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Imputado(s) Solicitud                        
            </h5>
            <input type="hidden" readonly class="form-control" id="hddIdSolicitudAudiencia" value="<?php echo $idSolicitudAudiencia ?> ">
            <input type="hidden" readonly class="form-control" id="hddIdImputadoSolicutd">
            <input type="hidden" readonly class="form-control" id="hddIdDomicilioImputadoSolicitud" name="hddIdDomicilioImputadoSolicitud">
            <input id="hddIdTelefonoImputadosSolicitud"  name="hddIdTelefonoImputadosSolicitud"  type="hidden" readonly class="form-control">
            <input id="hddIdDefensorImputado" name="hddIdDefensorImputado" type="hidden" readonly class="form-control">
            <input id="hddIdImputadoDroga" name="hddIdImputadoDroga" type="hidden" readonly>
            <input id="hddIdTutorImputado" name="hddIdTutorImputado" type="hidden" readonly class="form-control">
            <input id="hddIdNacionalidadImputado" name="hddIdNacionalidadImputado"  readonly type="hidden" class="form-control">
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <div class="tab-content tabs-flat">
                    <p class="col-lg-12" style="color:darkred;">
                        Los campos marcados con (*) son obligatorios.
                    </p>
                    <div class="tabbable tabs-left col-md-12" >
                        <ul id="myTab3" class="nav nav-tabs">
                            <li class="tab-sky active">
                                <a href="#divGeneralImputado" data-toggle="tab" aria-expanded="true"><span class="requerido">(*)</span>General</a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divDomicilios" data-toggle="tab" aria-expanded="false">Domicilio(s)</a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divTelefonos" data-toggle="tab" aria-expanded="false">Tel&eacute;fono(s)</a>
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
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane active" id="divGeneralImputado">
                                <div id="NombreGeneral" style="margin-left:15px; margin-bottom: 25px; "></div>
                                <div class="col-lg-12" >
                                    <label class="control-label" for="cmbTipoPersonaImputado">Tipo de Persona <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbTipoPersonaImputado" class="form-control mayuscula" name="cmbTipoPersonaImputado" onchange="validaPersona();">
                                            <option value="0">Seleccione una opcion</option>
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
                                        <label class="control-label" for="txAliasImputado">Alias</label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txAliasImputado" name="txAliasImputado">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divGeneroImputado">
                                        <label class="control-label" for="cmbGeneroImputado">G&eacute;nero <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbGeneroImputado" class="form-control" name="cmbGeneroImputado">
                                                <option value="0">Seleccione una opcion</option>
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
                                        <label class="control-label" for="txtFechaNacimientoImputado">Fecha Nacimiento (dd/mm/aaaa)</label>
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
                                        <label class="control-label" for="cmbPaisNacimientoImputado">Pa&iacute;s de Nacimiento <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbPaisNacimientoImputado" class="form-control" name="cmbPaisNacimientoImputado" onchange="comboEstadoNacimientoImputado();">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divEstadoNacimientoImputado">
                                        <label class="control-label" for="cmbEstadoNacimientoImputado">Estado de Nacimiento <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbEstadoNacimientoImputado" class="form-control mayuscula" name="cmbEstadoNacimientoImputado" onchange="comboMunicipioNacimientoImputado();">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                            <input id="txtestadoNacimientoImputado" name="txtestadoNacimientoImputado " type="text" class="form-control mayuscula" style="display: none">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divMunicipioNacimientoImputado">
                                        <label class="control-label" for="cmbMunicipioNacimientoImputado">Municipio de Nacimiento <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbMunicipioNacimientoImputado" class="form-control" name="cmbMunicipioNacimientoImputado">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                            <input id="txtmunicipioNacimientoImputado" name="txtmunicipioNacimientoImputado" type="text" class="form-control mayuscula" style="display: none">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divEstudioImputado">
                                        <label class="control-label" for="cmbEstudioImputado">Estudio Imputado <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbEstudioImputado" class="form-control mayuscula" name="cmbEstudioImputado">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divEstadoCivilImputado">
                                        <label class="control-label" for="cmbEstadoCivilImputado">Estado Civil <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbEstadoCivilImputado" class="form-control mayuscula" name="cmbEstadoCivilImputado">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divOcupacionImputado">
                                        <label class="control-label" for="cmbOcupacionImputado">Ocupaci&oacute;n <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbOcupacionImputado" class="form-control mayuscula" name="cmbOcupacionImputado">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divEspanolImputado">
                                        <label class="control-label" for="cmbEspanolImputado">&#191;Habla espa&ntilde;ol? <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbEspanolImputado" class="form-control mayuscula" name="cmbEspanolImputado">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divAlfabetismoImputado">
                                        <label class="control-label" for="cmbAlfabetismoImputado">Nivel de alfabetismo <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbAlfabetismoImputado" class="form-control mayuscula" name="cmbAlfabetismoImputado">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divDielectoIndigenaImputado">
                                        <label class="control-label" for="cmbDielectoIndigenaImputado">&#191;Habla dialecto Ind&iacute;gena? <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbDielectoIndigenaImputado" class="form-control mayuscula" name="cmbDielectoIndigenaImputado">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divFamilialinguistica">
                                        <label class="control-label" for="cmbFamilialinguistica">Familia ling&uuml;&iacute;stica <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbFamiliaLinguistica" class="form-control mayuscula" name="cmbFamiliaLinguistica">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divInterpreteImputado">
                                        <label class="control-label" for="cmbInterpreteImputado"> &#191;Necesita interprete? <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbInterpreteImputado" class="form-control mayuscula" name="cmbInterpreteImputado">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3" id="divPsicofisicoImputado">
                                        <label class="control-label" for="cmbPsicofisicoImputado"> Estado psicof&iacute;sico en el momento de la detenci&oacute;n <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbPsicofisicoImputado" class="form-control mayuscula" name="cmbPsicofisicoImputado">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divGrupoEdnico">
                                        <label class="control-label" for="cmbGrupoEdnico"> Grupo &eacute;tnico <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbGrupoEdnico" class="form-control mayuscula" name="cmbGrupoEdnico">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divReligion">
                                        <label class="control-label" for="cmbReligion"> Religi&oacute;n</label>
                                        <div>
                                            <select id="cmbReligion" class="form-control mayuscula" name="cmbReligion">
                                                <option value="">Seleccione una opcion</option>
                                            </select>
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
                                        <label class="control-label" for="txtingresoMensual">Ingreso Mensual <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtingresoMensual" name="txtingresoMensual" onkeypress="return justNumbers(event);">
                                        </div> 
                                    </div> 
                                    <div class=" col-lg-3" id="divDetenidoImputado">
                                        <label class="control-label" for="chkDetenidoImputado" >&#191;Se encuentra detenido?</label>
                                        <div>
                                            <input type="checkbox" class="form-control" id="chkDetenidoImputado" name="chkDetenidoImputado" onclick="javascript:validaDetenido();">
                                        </div> 
                                    </div> 
                                    <div id="divDetenido" class="col-lg-12">
                                        <div class="col-lg-3" id="divFechaControlDet">
                                            <label class="control-label" for="txtFechaControlDet">Fecha de ingreso al cereso (dd/mm/aaaa)</label>
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
                                                    <option value="0">Seleccione una opcion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="divReincidencias">
                                            <label class="control-label" for="cmbReincidencias">Tipo de reincidencia <span class="requerido">(*)</span></label>
                                            <div>
                                                <select id="cmbReincidencias" class="form-control mayuscula" name="cmbReincidencias">
                                                    <option value="0">Seleccione una opcion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3" id="divTipoDetencion">
                                            <label class="control-label" for="cmbTipoDetencion">Cereso<span class="requerido">(*)</span></label>
                                            <div>
                                                <select id="cmbCeresos" class="form-control mayuscula" name="cmbCeresos">
                                                    <option value="0">Seleccione una opcion</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br><br><br>
                                <div class="col-lg-12">
                                    <button id="btnAgregarImputado" class="btn btn-primary" onclick="agregaImputado();">Agregar Imputado</button>
                                    <button id="btnLimpiarImputado" class="btn btn-primary" onclick="limpiar();">Limpiar</button>
                                </div> 
                            </div>
                            <!--/////////////////PASO 2 - DIRECCI�N////////////////// -->
                            <div class="tab-pane" id="divDomicilios">
                                <div id="NombreDomicilios" style="margin-left:15px; margin-bottom: 25px; "></div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="cmbPaisDomicilioImputado">Pa&iacute;s Domicilio <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbPaisDomicilioImputado" class="form-control" name="cmbPaisDomicilioImputado" onchange="comboEstadoDomicilioImputado();">
                                            <option value="0">Seleccione una opcion</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="cmbEstadoDomicilioImputado">Estado Domicilio <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbEstadoDomicilioImputado" class="form-control" name="cmbEstadoDomicilioImputado" onchange="comboMunicipioDomicilioImputado();">
                                            <option value="0">Seleccione una opcion</option>
                                        </select>
                                        <input id="estadoDomicilioImputado" name="estadoDomicilioImputado" type="text" class="form-control mayuscula" style="display: none">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="cmbMunicipioDomicilioImputado">Municipio Domicilio <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbMunicipioDomicilioImputado" class="form-control datoTipoCadena" name="cmbMunicipioDomicilioImputado">
                                            <option value="0">Seleccione una opcion</option>
                                        </select>
                                        <input id="municipioDomicilioImputado" name="municipioDomicilioImputado" type="text" class="form-control mayuscula" style="display: none">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="cmbConvivenciaImputado">Convivencia <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbConvivenciaImputado" class="form-control mayuscula" name="cmbConvivenciaImputado">
                                            <option value="0">Seleccione una opcion</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="control-label" for=""> Domicilio <span class="requerido">(*)</span></label>
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
                                    <label class="control-label" for="">N&uacute;mero Exterior</label>
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
                                    <label class="control-label" for="">Domicilio procesal</label>
                                    <div>
                                        <input type="checkbox" class="form-control mayuscula" id="cbDomicilioProcesal">
                                    </div> 
                                </div> 
                                <div class="col-lg-2">
                                    <label class="control-label" for="cmbTipoViviendaImputado"> Tipo de domicilio <span class="requerido">(*)</span></label>
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
                                <div id="NombreTelefonos" style="margin-left:15px; margin-bottom: 25px; "></div>
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
                                    <label class="control-label" for="">Correo electr&oacute;nico</label>
                                    <div>
                                        <input id="emailTel" class="form-control" type="email" name="emailTel">
                                    </div> 
                                </div> 
                                <div class="col-lg-12"></div>
                                <br><br><br><br>
                                <div class="col-lg-12">
                                    <button id="btnAgregaTelImput" class="btn btn-primary" onclick="agregaTelImputado()">Agregar Tel&eacute;fono</button>
                                    <button id="btnLimpiarTelImput" class="btn btn-primary" onclick="limpiarTelefonos()" >Limpiar</button>
                                </div> 
                                <div class="form-group col-lg-12">
                                    <div id="divResultadosTelefono"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="divDefendores">
                                <div id="NombreDefensores" style="margin-left:15px; margin-bottom: 25px; "></div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="cmbTipoDefensorImputado"> Tipo Defensor <span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbTipoDefensorImputado" class="form-control mayuscula" name="cmbTipoDefensorImputado" onChange="validaTipoTutor();">
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
                                    <label class="control-label" for="">Correo electr&oacute;nico</label>
                                    <div>
                                        <input id="emailDefensor" name="emailDefensor" type="email" class="form-control">
                                    </div> 
                                </div> 
                                <div class="col-lg-12">
                                    <label class="control-label" for=""><b>NOTA: Al seleccionar tipo de defensor "SIN DEFENSOR" o "NO IDENTIFICADO", se realizar&aacute; la petici&oacute;n a la Defensor&iacute;a de Oficio al momento del env&iacute;o de la solicitud de audiencia. </b><br></label>
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
                                <div id="NombreDrogas" style="margin-left:15px; margin-bottom: 25px; "></div>
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
                                <div id="NombreTutores" style="margin-left:15px; margin-bottom: 25px; "></div>
                                <!--<div class="container">-->
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
                                    <label class="control-label" for="fechaNacimientoTutorImputados">Fecha de nacimiento (dd/mm/aaaa)</label>
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

                                <div class="col-lg-2">
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
                                <!--</div>-->
                            </div>
                            <div class="tab-pane" id="divNacionalidades">
                                <div id="NombreNacionalidad" style="margin-left:15px; margin-bottom: 25px; "></div>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-12"></div> 
        </div>
        <br><br>
        <div class="form-group">
            <div id="divAlertWarningImputado" class="alert alert-warning alert-dismissable" style="display:none;">                    
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
    </div>
    <!--</div>-->                
    <!--            </div>
            </div>-->

    <!--    </body>
    </html>-->
    <script type="text/javascript">
        function justNumbers(e) {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
                return true;
            return /\d/.test(String.fromCharCode(keynum));
        }

        validaPersona = function () {
            if ($("#cmbTipoPersonaImputado").val() == 1) {
                $('#divPersonaMoralImputado').hide();
                muestraOcultaCampos(2);
            } else if ($("#cmbTipoPersonaImputado").val() == 2) {
                $('#divPersonaMoralImputado').show();
                muestraOcultaCampos(1);
            } else if ($("#cmbTipoPersonaImputado").val() == 3) {
                $('#divPersonaMoralImputado').show();
                muestraOcultaCampos(3);
            }
        }

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
                $('#divDetenido').show('');
                $('#divFechaControlDet').show('');
                $('#divFechaDeclaracion').show('');
                $('#divbTipoDetencion').show('');
                $('#divReincidencias').show('');
                $('#divTipoDetencion').show('');
                $('#txtFechaImputacion').removeAttr('disabled');
                $('#txtFechaControlDet').removeAttr('disabled');
                $('#txtFechaDeclaracion').removeAttr('disabled');
                $('#cmbTipoDetencion').removeAttr('disabled');
                $('#cmbReincidencias').removeAttr('disabled');
                $('#cmbCeresos').removeAttr('disabled');
                $('#chkDetenidoImputado').val('S');
            } else {
                $('#chkDetenidoImputado').val('N');
                $('#txtFechaControlDet').attr('disabled', 'disabled');
                $('#txtFechaDeclaracion').attr('disabled', 'disabled');
                $('#cmbTipoDetencion').attr('disabled', 'disabled');
                $('#cmbReincidencias').attr('disabled', 'disabled');
                $('#cmbCeresos').attr('disabled', 'disabled');
                $('#txtFechaControlDet').val('');
                $('#txtFechaDeclaracion').val('');
                $("#cmbTipoDetencion").val(0);
                $("#cmbReincidencias").val(0);
                $("#cmbCeresos").val(0);
                $('#divDetenido').hide('');
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
                0
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
                if (edad <= 0 || edad < 18) {
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
        fechaNacimiento = function (curp) {

            var m = curp.match(/^\w{4}(\w{2})(\w{2})(\w{2})/);
            var anio = parseInt(m[1]) + 1900;
            if (anio <= 1915) {
                anio += 100;
            }

            var mes = m[2];
            var dia = m[3];
            var fecha = dia + "/" + mes + "/" + anio;
            $("#txtFechaNacimientoImputado").data("DateTimePicker").date(fecha);
            $("#txtFechaNacimientoImputado").trigger('blur');
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
                $("#divFechaControlDet").hide();
                $("#divCeresos").hide();
                $("#divestadoNacimientoImputado").hide();
                $("#divmunicipioNacimientoImputado").hide();
                $("#divRelacionPersonaMoralImputado").hide();
                $("#divPersonaMoralImputadoRel").hide();
                $("#divingresoMensual").hide();
                $("#divGrupoEdnico").hide();
                $("#divReligion").hide();
                $("#divbTipoDetencion").hide();
                $("#divReincidencias").hide();
            } else if (cve == 2) {
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
                $("#divFechaControlDet").show();
                $("#divCeresos").show();
                $("#divestadoNacimientoImputado").show();
                $("#divmunicipioNacimientoImputado").show();
                $("#divRelacionPersonaMoralImputado").show();
                $("#divPersonaMoralImputadoRel").show();
                $("#divingresoMensual").show();
                $("#divGrupoEdnico").show();
                $("#divReligion").show();
                $("#divbTipoDetencion").show();
                $("#divReincidencias").show();
            } else if (cve == 3) {
                $("#divDetenidoImputado").show();
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
                $("#divFechaControlDet").hide();
                $("#divCeresos").hide();
                $("#divestadoNacimientoImputado").hide();
                $("#divmunicipioNacimientoImputado").hide();
                $("#divRelacionPersonaMoralImputado").hide();
                $("#divPersonaMoralImputadoRel").hide();
                $("#divingresoMensual").hide();
                $("#divGrupoEdnico").hide();
                $("#divReligion").hide();
                $("#divbTipoDetencion").hide();
                $("#divReincidencias").hide();
                validaDetenido();
            }
        }

    //////////////////CARGA COMBOS////////////////////////////////////////////

        comboTipoPersonaImputado = function () {
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbTipoPersonaImputado').empty();
             $('#cmbTipoPersonaImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             if (object.cveTipoPersona != "4" && object.cveTipoPersona != "5") {
             $('#cmbTipoPersonaImputado').append('<option value="' + object.cveTipoPersona + '">' + object.desTipoPersona + '</option>');
             }
             });
             }
             } catch (e) {
             alert("Error al cargar Tipos Personas Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de tipos personas imputados:\n\n" + otroobj);
             }
             });*/


            if (catTiposPersonasJson != "") {
                try {
                    $('#cmbTipoPersonaImputado').empty();
                    $('#cmbTipoPersonaImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTiposPersonasJson.totalCount > 0) {
                        $.each(catTiposPersonasJson.data, function (count, object) {
                              if (object.cveTipoPersona != "4" && object.cveTipoPersona != "5") {
                                $('#cmbTipoPersonaImputado').append('<option value="' + object.cveTipoPersona + '">' + object.desTipoPersona + '</option>');
                              }
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catTiposPersonasJson Ofendido:" + e);
                }
            } else {
                $('#cmbTipoPersonaImputado').empty();
                $('#cmbTipoPersonaImputado').append('<option value="0">No carga catalogo</option>');

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
                        $('#cmbCeresos').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbCeresos').append('<option value="' + object.cveCereso + '">' + object.desCereso + '</option>');
                            });
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
            /*  $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/gruposednicos/GruposednicosFacade.Class.php",
             async: false,
             global: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbGrupoEdnico').empty();
             $('#cmbGrupoEdnico').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbGrupoEdnico').append('<option value="' + object.cveGrupoEdnico + '">' + object.desGrupoEdnico + '</option>');
             });
             $('#cmbGrupoEdnico').val(72);
             }
             } catch (e) {
             alert("Error al cargar ceresos:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de ceresos:\n\n" + otroobj);
             }
             });*/
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
        comboReligion = function () {
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/tiposreligiones/TiposreligionesFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbReligion').empty();
             $('#cmbReligion').append('<option value="">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbReligion').append('<option value="' + object.cveTipoReligion + '">' + object.desTipoReligion + '</option>');
             });
             $('#cmbReligion').val(8);
             }
             } catch (e) {
             alert("Error al cargar ceresos:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de religion:\n\n" + otroobj);
             }
             });*/


            if (catTiposReligionesJson != "") {
                try {
                    $('#cmbReligion').empty();
                    $('#cmbReligion').append('<option value="">Seleccione una opci&oacute;n </option>');
                    if (catTiposReligionesJson.totalCount > 0) {
                        $.each(catTiposReligionesJson.data, function (count, object) {
                            $('#cmbReligion').append('<option value="' + object.cveTipoReligion + '">' + object.desTipoReligion + '</option>');
                        });
                    }
                    $('#cmbReligion').val(8);

                } catch (e) {
                    alert("Error al cargar catTiposReligionesJson Ofendido:" + e);
                }
            } else {
                $('#cmbReligion').empty();
                $('#cmbReligion').append('<option value="">No carga catalogo</option>');

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
                        $('#cmbTipoDetencion').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTipoDetencion').append('<option value="' + object.cveTipoDetencion + '">' + object.desTipoDetencion + '</option>');
                            });
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
            /*$.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbGeneroImputado').empty();
             $('#cmbGeneroImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbGeneroImputado').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Genero Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Genero imputados:\n\n" + otroobj);
             }
             });*/

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
            /*    $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbPaisNacionalidadImputado').empty();
             $('#cmbPaisNacionalidadImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbPaisNacionalidadImputado').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
             });
             $("#cmbPaisNacionalidadImputado").val(119).trigger('change');
             }
             } catch (e) {
             alert("Error al cargar Pais Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de pais imputados:\n\n" + otroobj);
             }
             });*/


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
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbPaisNacimientoImputado').empty();
             $('#cmbPaisNacimientoImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbPaisNacimientoImputado').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
             });
             $("#cmbPaisNacimientoImputado").val(119).trigger('change');
             }
             } catch (e) {
             alert("Error al cargar Pais Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de pais imputados:\n\n" + otroobj);
             }
             });*/

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
            $('#cmbEstadoNacimientoImputado').append('<option value="0">Seleccione una opcion</option>');
            $('#cmbMunicipioNacimientoImputado').empty();
            $('#cmbMunicipioNacimientoImputado').append('<option value="0">Seleccione una opcion</option>');
            $("#txtestadoNacimientoImputado").val("");
            $("#txtmunicipioNacimientoImputado").val("");
            if ($('#cmbPaisNacimientoImputado').val() == "119") { //Mexico
                $("#cmbEstadoNacimientoImputado").show();
                $("#cmbMunicipioNacimientoImputado").show();
                $("#txtestadoNacimientoImputado").hide();
                $("#txtmunicipioNacimientoImputado").hide();
                /* $.ajax({
                 type: "POST",
                 url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                 global: false,
                 async: false,
                 dataType: "json",
                 data: {accion: "consultar", obligaPermiso: "false", cvePais: $('#cmbPaisNacimientoImputado').val()},
                 beforeSend: function (objeto) {
                 },
                 success: function (datos) {
                 try {
                 $('#cmbEstadoNacimientoImputado').empty();
                 $('#cmbEstadoNacimientoImputado').append('<option value="0">Seleccione una opcion</option>');
                 if (datos.totalCount > 0) {
                 $.each(datos.data, function (count, object) {
                 if (object.cveEstado != "97") {
                 $('#cmbEstadoNacimientoImputado').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                 }
                 });
                 $('#cmbEstadoNacimientoImputado').val(15).trigger('change');
                 }
                 } catch (e) {
                 alert("Error al cargar Estado Imputados:" + e);
                 }
                 },
                 error: function (objeto, quepaso, otroobj) {
                 alert("Error en la peticion de Estado imputados:\n\n" + otroobj);
                 }
                 });*/

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
            /*  $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false", cveEstado: $('#cmbEstadoNacimientoImputado').val()},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbMunicipioNacimientoImputado').empty();
             $('#cmbMunicipioNacimientoImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbMunicipioNacimientoImputado').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Municipio Nacimiento Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Municipio Nacimiento imputados:\n\n" + otroobj);
             }
             });*/

            if (catMunicipiosJson != "") {
                try {
                    $('#cmbMunicipioNacimientoImputado').empty();
                    $('#cmbMunicipioNacimientoImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catMunicipiosJson.totalCount > 0) {
                        $.each(catMunicipiosJson.data, function (count, object) {
                            if (object.cveEstado == $('#cmbEstadoNacimientoImputado').val()) {
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
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/nivelesinstrucciones/NivelesinstruccionesFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbEstudioImputado').empty();
             $('#cmbEstudioImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbEstudioImputado').append('<option value="' + object.cveNivelInstruccion + '">' + object.desNivelInstruccion + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Estudio Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Estudio imputados:\n\n" + otroobj);
             }
             });*/
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
            /*  $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/estadosciviles/EstadoscivilesFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbEstadoCivilImputado').empty();
             $('#cmbEstadoCivilImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbEstadoCivilImputado').append('<option value="' + object.cveEstadoCivil + '">' + object.desEstadoCivil + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Estado Civil Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Estado Civil imputados:\n\n" + otroobj);
             }
             });*/


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
            /*$.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/espanol/EspanolFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbEspanolImputado').empty();
             $('#cmbEspanolImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbEspanolImputado').append('<option value="' + object.cveEspanol + '">' + object.desEspanol + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Espa�ol Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Espa�ol imputados:\n\n" + otroobj);
             }
             });*/


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
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/alfabetismo/AlfabetismoFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbAlfabetismoImputado').empty();
             $('#cmbAlfabetismoImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbAlfabetismoImputado').append('<option value="' + object.cveAlfabetismo + '">' + object.desAlfabetismo + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Alfabetismo Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Alfabetismo imputados:\n\n" + otroobj);
             }
             });*/

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
            /*$.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/dialectoindigena/DialectoindigenaFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbDielectoIndigenaImputado').empty();
             $('#cmbDielectoIndigenaImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbDielectoIndigenaImputado').append('<option value="' + object.cveDialectoIndigena + '">' + object.desDialectoIndigena + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Dialecto Indigena Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Dialecto Indigena imputados:\n\n" + otroobj);
             }
             });*/

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
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/ocupaciones/OcupacionesFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbOcupacionImputado').empty();
             $('#cmbOcupacionImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbOcupacionImputado').append('<option value="' + object.cveOcupacion + '">' + object.desOcupacion + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Ocupacion Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Ocupacion imputados:\n\n" + otroobj);
             }
             });*/


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
            /*  $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/interpretes/InterpretesFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbInterpreteImputado').empty();
             $('#cmbInterpreteImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbInterpreteImputado').append('<option value="' + object.cveInterprete + '">' + object.desInterprete + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Interprete Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Interprete imputados:\n\n" + otroobj);
             }
             });*/

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
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/estadospsicofisicos/EstadospsicofisicosFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbPsicofisicoImputado').empty();
             $('#cmbPsicofisicoImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbPsicofisicoImputado').append('<option value="' + object.cveEstadoPsicofisico + '">' + object.desEstadoPsicofisico + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Psicofisico Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Psicofisico imputados:\n\n" + otroobj);
             }
             });*/


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
            /*  $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbPaisDomicilioImputado').empty();
             $('#cmbPaisDomicilioImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbPaisDomicilioImputado').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
             });
             $("#cmbPaisDomicilioImputado").val(119).trigger('change');
             }
             } catch (e) {
             alert("Error al cargar Pais Domicilio Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Pais Domicilio imputados:\n\n" + otroobj);
             }
             });*/

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
            $('#cmbEstadoDomicilioImputado').append('<option value="0">Seleccione una opcion</option>');
            $('#cmbMunicipioDomicilioImputado').empty();
            $('#cmbMunicipioDomicilioImputado').append('<option value="0">Seleccione una opcion</option>');
            $("#estadoDomicilioImputado").val("");
            $("#municipioDomicilioImputado").val("");
            if ($('#cmbPaisDomicilioImputado').val() == "119") { //Mexico
                $("#cmbEstadoDomicilioImputado").show();
                $("#cmbMunicipioDomicilioImputado").show();
                $("#estadoDomicilioImputado").hide();
                $("#municipioDomicilioImputado").hide();
                /* $.ajax({
                 type: "POST",
                 url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                 global: false,
                 async: false,
                 dataType: "json",
                 data: {accion: "consultar", obligaPermiso: "false", cvePais: $('#cmbPaisDomicilioImputado').val()},
                 beforeSend: function (objeto) {
                 },
                 success: function (datos) {
                 try {
                 $('#cmbEstadoDomicilioImputado').empty();
                 $('#cmbEstadoDomicilioImputado').append('<option value="0">Seleccione una opcion</option>');
                 if (datos.totalCount > 0) {
                 $.each(datos.data, function (count, object) {
                 if (object.cveEstado != "97") {
                 $('#cmbEstadoDomicilioImputado').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                 }
                 });
                 $("#cmbEstadoDomicilioImputado").val(15).trigger('change');
                 }
                 } catch (e) {
                 alert("Error al cargar Estado Domicilio Imputados:" + e);
                 }
                 },
                 error: function (objeto, quepaso, otroobj) {
                 alert("Error en la peticion de Estado Domicilio imputados:\n\n" + otroobj);
                 }
                 });*/

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
            /*  $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false", cveEstado: $('#cmbEstadoDomicilioImputado').val()},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbMunicipioDomicilioImputado').empty();
             $('#cmbMunicipioDomicilioImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbMunicipioDomicilioImputado').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Municipio Domicilio Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Municipio Domicilio imputados:\n\n" + otroobj);
             }
             });*/

            if (catMunicipiosJson != "") {
                try {
                    $('#cmbMunicipioDomicilioImputado').empty();
                    $('#cmbMunicipioDomicilioImputado').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catMunicipiosJson.totalCount > 0) {
                        $.each(catMunicipiosJson.data, function (count, object) {
                            if (object.cveEstado == $('#cmbEstadoDomicilioImputado').val()) {
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
            /*$.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/convivencias/ConvivenciasFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbConvivenciaImputado').empty();
             $('#cmbConvivenciaImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbConvivenciaImputado').append('<option value="' + object.cveConvivencia + '">' + object.desConvivencia + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Convivencia Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Convivencia imputados:\n\n" + otroobj);
             }
             });*/

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
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/tiposdeviviendas/TiposdeviviendasFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbTipoViviendaImputado').empty();
             $('#cmbTipoViviendaImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbTipoViviendaImputado').append('<option value="' + object.cveTipoDeVivienda + '">' + object.desTipoDeVivienda + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Tipo Vivienda Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de  Tipo Vivienda  imputados:\n\n" + otroobj);
             }
             });*/


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
        validaTipoTutor = function () {
            if ($('#cmbTipoDefensorImputado').val() == '6') {
                $('#nombreDefensor').val("REQUIERE DEFENSOR P\u00daBLICO");
            } else {
                $('#nombreDefensor').val("");
            }
        };
        comboTipoDefensorImputado = function () {
            /*  $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/tiposdefensores/TiposdefensoresFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", activo: "S"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbTipoDefensorImputado').empty();
             $('#cmbTipoDefensorImputado').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             if (object.cveTipoDefensor != '4') {
             $('#cmbTipoDefensorImputado').append('<option value="' + object.cveTipoDefensor + '">' + object.desTipoDefensor + '</option>');
             }
             });
             }
             } catch (e) {
             alert("Error al cargar Tipo Vivienda Imputados:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de  Tipo Vivienda  imputados:\n\n" + otroobj);
             }
             });*/


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
                        $('#cmbDrogasImputado').append('<option value="0">Seleccione una opcion</option>');
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
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbGeneroTutorImputados').empty();
             $('#cmbGeneroTutorImputados').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbGeneroTutorImputados').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Genero Tutor Imputado:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Genero Tutor Imputado:\n\n" + otroobj);
             }
             });*/
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
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/tipostutores/TipostutoresFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbTipoTutorImputados').empty();
             $('#cmbTipoTutorImputados').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbTipoTutorImputados').append('<option value="' + object.cveTipoTutor + '">' + object.desTipoTutor + '</option>');
             });
             }
             } catch (e) {
             alert("Error al cargar Genero Tutor Imputado:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de Genero Tutor Imputado:\n\n" + otroobj);
             }
             });*/
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
                        $('#cmbReincidencias').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbReincidencias').append('<option value="' + object.cveTipoReincidencia + '">' + object.desTipoReincidencia + '</option>');
                            });
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
            /*  $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/tipofamilialinguistica/TipofamilialinguisticaFacade.Class.php",
             global: false,
             async: false,
             dataType: "json",
             data: {accion: "consultar", obligaPermiso: "false"},
             beforeSend: function (objeto) {
             },
             success: function (datos) {
             try {
             $('#cmbFamiliaLinguistica').empty();
             $('#cmbFamiliaLinguistica').append('<option value="0">Seleccione una opcion</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbFamiliaLinguistica').append('<option value="' + object.cveTipoFamiliaLinguistica + '">' + object.desTipoFamiliaLinguistica + '</option>');
             });
             $('#cmbFamiliaLinguistica').val(15);
             }
             } catch (e) {
             alert("Error al cargar tipo cmbFamiliaLinguistica:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de tipo cmbFamiliaLinguistica:\n\n" + otroobj);
             }
             });*/

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
    //////////////////FIN COMBOS////////////////////////////////////////////
    //////////////////fUNCION VALIDA / Agregar////////////////////////////////////////////

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
                    mensaje += "*Seleccione Pa\u00eds Nacimiento del Imputado\n";
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
                    mensaje += "*Selecciona  Ingreso Mensual\n";
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
                if ($('#chkDetenidoImputado').is(':checked')) {
    //                if ($('#txtFechaControlDet').val() == "" || $('#txtFechaControlDet').val() == "0") {
    //                    mensaje += "*Seleccione una fecha de detenci\u00f3n\n";
    //                    error = false;
    //                }
    //                if ($('#txtFechaDeclaracion').val() == "" || $('#txtFechaDeclaracion').val() == "0") {
    //                    mensaje += "*Seleccione una fecha de declaraci\u00f3n\n";
    //                    error = false;
    //                }
                    if ($('#cmbTipoDetencion').val() == "" || $('#cmbTipoDetencion').val() == "0") {
                        mensaje += "*Seleccione un tipo de detenci\u00f3n\n";
                        error = false;
                    }
                    if ($('#cmbCeresos').val() == "" || $('#cmbCeresos').val() == "0") {
                        mensaje += "*Seleccione un cereso\n";
                        error = false;
                    }
                    if ($('#cmbReincidencias').val() == "" || $('#cmbReincidencias').val() == "0") {
                        mensaje += "*Seleccione tipo de reincidencia\n";
                        error = false;
                    }
                }
            } else if ($("#cmbTipoPersonaImputado").val() == "2" || $("#cmbTipoPersonaImputado").val() == "3") {
                if ($('#txtnombreMoralImputado').val() == "" || $('#txtnombreMoralImputado').val() == "0") {
                    mensaje += "*Escribe el Nombre Persona Moral\n";
                    error = false;
                }
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
                if ($("#cmbTipoPersonaImputado").val() == "3" && $('#chkDetenidoImputado').is(':checked')) {
    //                if ($('#txtFechaControlDet').val() == "" || $('#txtFechaControlDet').val() == "0") {
    //                    mensaje += "*Seleccione una fecha de detenci\u00f3n\n";
    //                    error = false;
    //                }
    //                if ($('#cmbTipoDetencion').val() == "" || $('#cmbTipoDetencion').val() == "0") {
    //                    mensaje += "*Seleccione un tipo de detenci\u00f3n\n";
    //                    error = false;
    //                }
                    if ($('#cmbCeresos').val() == "" || $('#cmbCeresos').val() == "0") {
                        mensaje += "*Seleccione un cereso\n";
                        error = false;
                    }
                    if ($('#cmbReincidencias').val() == "" || $('#cmbReincidencias').val() == "0") {
                        mensaje += "*Seleccione tipo de reincidencia\n";
                        error = false;
                    }
                }



            } else if ($("#cmbTipoPersonaImputado").val() == "0") {
                mensaje += "*Seleccione el Tipo de Persona\n";
                error = false;
            }
            if (!error) {
                alert(mensaje);
            }
            return error;
        }

        agregaImputado = function () {
            if ($("#hddIdSolicitudAudiencia").val() != "") {
                var error = true;
                if (validateImputadoStep2()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/imputadossolicitudes/ImputadossolicitudesadminFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {action: "guardarImputado",
                            idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
                            idSolicitudAudiencia: $("#hddIdSolicitudAudiencia").val(),
                            activo: 'S',
                            detenido: $("#chkDetenidoImputado").val(),
                            nombre: $("#txtNombreImputado").val(),
                            paterno: $("#txtPaternoImputado").val(),
                            materno: $("#txtMaternoImputado").val(),
                            rfc: $("#txtRfcImputado").val(),
                            curp: $("#txtCurpImputado").val(),
                            cveTipoDetencion: $("#cmbTipoDetencion").val(),
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
    //                        fechaImputacion: $("#txtFechaImputacion").val(),
                            fechaControlDet: $("#txtFechaControlDet").val(),
                            cveCereso: $("#cmbCeresos").val(),
                            estadoNacimiento: $("#txtestadoNacimientoImputado").val(),
                            municipioNacimiento: $("#txtmunicipioNacimientoImputado").val(),
                            relacionMoral: $("#chkRelacionPersonaMoralImputado").val(),
                            personaMoral: $("#txtPersonaMoralImputado").val(),
                            ingresoMensual: $("#txtingresoMensual").val(),
                            nombreMoral: $("#txtnombreMoralImputado").val(),
                            cveGrupoEdnico: $("#cmbGrupoEdnico").val(),
                            CveTipoReligion: $("#cmbReligion").val(),
                            cveTipoReincidencia: $("#cmbReincidencias").val()
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
                                consultarImputados();
                                limpiarImputado();
                            } else {
                                $("#divAlertWarningImputado").html("");
                                $("#divAlertWarningImputado").html(datos.msj);
                                $("#divAlertWarningImputado").show("");
                                setTimeAlert("divAlertWarningImputado");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                } else {
                    error = false;
                }
                return error;
            } else {
                alert("Seleccione una audiencia");
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
    //        if ($('#numeroExtDomicilio').val() == "" || $('#numeroExtDomicilio').val() == "0") {
    //            mensaje += "*Ingrese no. Exterior \n";
    //            error = false;
    //        }
    //        if ($("#cpDomicilio").val() == "" || $("#cpDomicilio").val() == "0") {
    //            mensaje += "*Ingrese C.P. \n";
    //            error = false;
    //        }
    //        if ($('#cpDomicilio').val().length != 5) {
    //            mensaje += "*El  C.P. debe ser de 5 d\u00edgitos\n";
    //            error = false;
    //        }
            if ($('#cmbTipoViviendaImputado').val() == "" || $('#cmbTipoViviendaImputado').val() == "0") {
                mensaje += "*Seleccione tipo de domicilio \n";
                error = false;
            }
            if (!error) {
                alert(mensaje);
            }
            return error;
        }

        agregaDomicilioImputado = function () {
            if ($("#hddIdImputadoSolicutd").val() != "") {
                var error = true;
                if (validateDomiclioStep2()) {
                    if ($("#cbResidenciaHabitualImp").is(":checked")) {
                        var auxVivienda = 'S';
                    } else {
                        var auxVivienda = 'N';
                    }
                    if ($("#cbDomicilioProcesal").is(":checked")) {
                        var auxDomicilio = 'S';
                    } else {
                        var auxDomicilio = 'N';
                    }
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesadminFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardar",
                            idDomicilioImputadoSolicitud: $('#hddIdDomicilioImputadoSolicitud').val(),
                            idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
                            cvePais: $("#cmbPaisDomicilioImputado").val(),
                            cveEstado: $("#cmbEstadoDomicilioImputado").val(),
                            cveMunicipio: $("#cmbMunicipioDomicilioImputado").val(),
                            direccion: $("#direccionDomicilio").val(),
                            colonia: $("#coloniaDireccion").val(),
                            numInterior: $("#numeroIntDomicilio").val(),
                            numExterior: $("#numeroExtDomicilio").val(),
                            cp: $("#cpDomicilio").val(),
                            recidenciaHabitual: auxVivienda,
                            DomicilioProcesal: auxDomicilio,
                            estado: $("#estadoDomicilioImputado").val(),
                            municipio: $("#municipioDomicilioImputado").val(),
                            cveTipoDeVivienda: $("#cmbTipoViviendaImputado").val(),
                            cveConvivencia: $("#cmbConvivenciaImputado").val(),
                            longitud: $("#longitud").val(),
                            latitud: $("#latitud").val()
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
                                $("#divAlertWarningImputado").html("");
                                $("#divAlertWarningImputado").html(datos.msj);
                                $("#divAlertWarningImputado").show("");
                                setTimeAlert("divAlertWarningImputado");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            if (($('#telefonoTel').val() == "") && ($("#celTel").val() == "") && ($("#emailTel").val() == "")) {
                mensaje += "*Ingrese tel\u00e9fono y/o celular y/o e.mail \n";
                error = false;
            }
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
                    mensaje += "*Correo electronico no valido \n";
                    error = false;
                }
            }

            if (!error) {
                alert(mensaje);
            }
            return error;
        }

        agregaTelImputado = function () {
            if ($("#hddIdImputadoSolicutd").val() != "") {
                var error = true;
                if (validateTelStep2()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/telefonosimputadossolicitudes/TelefonosimputadossolicitudesadminFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardar",
                            idTelefonoImputadosSolicitud: $("#hddIdTelefonoImputadosSolicitud").val(),
                            idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
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
                                $("#divAlertSuccesImputado").html("Registro dado de alta exitosamente");
                                $("#divAlertSuccesImputado").show("");
                                setTimeAlert("divAlertSuccesImputado");
                                consultarTelefonos();
                                limpiarTelefonos();
                            } else {
                                $("#divAlertWarningImputado").html("");
                                $("#divAlertWarningImputado").html(datos.msj);
                                $("#divAlertWarningImputado").show("");
                                setTimeAlert("divAlertWarningImputado");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
                    mensaje += "*Correo electronico no valido \n";
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
            if ($("#hddIdImputadoSolicutd").val() != "") {
                var error = true;
                if (validateDefensorStep2()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/defensoresimputadossolicitudes/DefensoresimputadossolicitudesadminFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardar",
                            idDefensorImputadoSolicitud: $("#hddIdDefensorImputado").val(),
                            idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
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
                                $("#divAlertWarningImputado").html("");
                                $("#divAlertWarningImputado").html(datos.msj);
                                $("#divAlertWarningImputado").show("");
                                setTimeAlert("divAlertWarningImputado");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            if ($("#hddIdImputadoSolicutd").val() != "") {
                var error = true;
                if (validateDrogasStep2()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/imputadosdrogas/ImputadosdrogasadminFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardar",
                            idImputadoDroga: $("#hddIdImputadoDroga").val(),
                            idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
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
                                $("#divAlertWarningImputado").html("");
                                $("#divAlertWarningImputado").html(datos.msj);
                                $("#divAlertWarningImputado").show("");
                                setTimeAlert("divAlertWarningImputado");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            if ($("#hddIdImputadoSolicutd").val() != "") {
                var error = true;
                if (validateTutorStep2()) {

                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/tutoresimputados/TutoresimputadosadminFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardar",
                            idTutorImputado: $("#hddIdTutorImputado").val(),
                            idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
                            cveTipoTutor: $("#cmbTipoTutorImputados").val(),
                            ProvDef: $('input:radio[name=rdtutores]:checked').val(),
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
                                $("#divAlertSuccesImputado").html("Registro dado de alta exitosamente");
                                $("#divAlertSuccesImputado").show("");
                                setTimeAlert("divAlertSuccesImputado");
                                consultarTutores();
                                limpiarTutor();
                            } else {
                                $("#divAlertWarningImputado").html("");
                                $("#divAlertWarningImputado").html(datos.msj);
                                $("#divAlertWarningImputado").show("");
                                setTimeAlert("divAlertWarningImputado");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            if ($("#hddIdImputadoSolicutd").val() != "") {
                var error = true;
                if (validateNacionalidadStep2()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesadminFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardar",
                            idNacionalidadImputadoSolicitud: $("#hddIdNacionalidadImputado").val(),
                            idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
                            cvePais: $("#cmbPaisNacionalidadImputado").val()
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
                                consultarNacionalidad();
                                limpiarNacionalidad();
                            } else {
                                $("#divAlertWarningImputado").html("");
                                $("#divAlertWarningImputado").html(datos.msj);
                                $("#divAlertWarningImputado").show("");
                                setTimeAlert("divAlertWarningImputado");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
                url: "../fachadas/sigejupe/imputadossolicitudes/ImputadossolicitudesadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {action: "consultar",
                    idSolicitudAudiencia: $("#hddIdSolicitudAudiencia").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    $('#divResultadosGeneral').html("");
                    if (datos.status == 'Ok') {
                        var table = "";
                        table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega">';
                        table += '<th width="5%">No</th>';
                        table += '<th width="40%">Tipo de persona</th>';
                        table += '<th width="40%" >Nombre</th>';
                        table += '<th width="40%" >G\u00e9nero</th>';
                        table += '<th width="10%">Eliminar</td></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr class="trSeleccion" ><td id="' + datos.data[i].idImputadoSolicitud + '" style="cursor:pointer;" onclick="seleccionaImputado(' + datos.data[i].idImputadoSolicitud + ')" >' + (i + 1) + "</td>";
                            table += '<td id="' + datos.data[i].idImputadoSolicitud + '" style="cursor:pointer;" onclick="seleccionaImputado(' + datos.data[i].idImputadoSolicitud + ')" >' + datos.data[i].desTipoPersona + "</td>";
                            if (datos.data[i].cveTipoPersona == '1') {
                                table += '<td style="cursor:pointer;" onclick="seleccionaImputado(' + datos.data[i].idImputadoSolicitud + ')" >' + datos.data[i].nombre + " " + datos.data[i].paterno + " " + datos.data[i].materno + '</th>';
                            } else {
                                table += '<td style="cursor:pointer;" onclick="seleccionaImputado(' + datos.data[i].idImputadoSolicitud + ')" >' + datos.data[i].nombreMoral + '</td>';
                            }
                            if (datos.data[i].cveGenero == "0") {
                                table += '<td style="cursor:pointer;" onclick="seleccionaImputado(' + datos.data[i].idImputadoSolicitud + ')" >NO IDENTIFICADO</td>';
                            } else {
                                table += '<td style="cursor:pointer;" onclick="seleccionaImputado(' + datos.data[i].idImputadoSolicitud + ')" >' + datos.data[i].desGenero + '</td>';
                            }
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminaImputado(" + datos.data[i].idImputadoSolicitud + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosGeneral').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
        consultarDomicilios = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
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
                        table += '<th width="15%">Pais</th>';
                        table += '<th width="15%" >Estado</th>';
                        table += '<th width="15%" >Municipio</th>';
                        table += '<th width="15%">Direccion</th>';
                        table += '<th width="15%">Eliminar</th></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idDomicilioImputadoSolicitud + '">';
                            table += '<td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoSolicitud + ')">' + datos.data[i].desPais + '</td>';
                            if (datos.data[i].cveEstado != 0) {
                                table += '<td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoSolicitud + ')">' + datos.data[i].desEstado + '</td>';
                            } else {
                                table += '<td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoSolicitud + ')">' + datos.data[i].estado + '</td>';
                            }
                            if (datos.data[i].cveMunicipio != 0) {
                                table += '<td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoSolicitud + ')">' + datos.data[i].desMunicipio + '</td>';
                            } else {
                                table += '<td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoSolicitud + ')">' + datos.data[i].municipio + '</td>';
                            }
                            table += '<td onclick="seleccionaDireccion(' + datos.data[i].idDomicilioImputadoSolicitud + ')">' + datos.data[i].direccion + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarDireccion(" + datos.data[i].idDomicilioImputadoSolicitud + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadoDireccion').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
        consultarTelefonos = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/telefonosimputadossolicitudes/TelefonosimputadossolicitudesadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
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
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idTelefonoImputadosSolicitud + '"><td onclick="seleccionaTelefono(' + datos.data[i].idTelefonoImputadosSolicitud + ')">' + datos.data[i].telefono + '</td>';
                            table += '<td onclick="seleccionaTelefono(' + datos.data[i].idTelefonoImputadosSolicitud + ')">' + datos.data[i].celular + '</td>';
                            table += '<td onclick="seleccionaTelefono(' + datos.data[i].idTelefonoImputadosSolicitud + ')">' + datos.data[i].email + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarTelefono(" + datos.data[i].idTelefonoImputadosSolicitud + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosTelefono').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
        consultarDefensor = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/defensoresimputadossolicitudes/DefensoresimputadossolicitudesadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
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
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idDefensorImputadoSolicitud + '"><td onclick="seleccionaDefensor(' + datos.data[i].idDefensorImputadoSolicitud + ')">' + datos.data[i].desDefensor + '</td>';
                            table += '<td onclick="seleccionaDefensor(' + datos.data[i].idDefensorImputadoSolicitud + ')">' + datos.data[i].nombre + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarDefensor(" + datos.data[i].idDefensorImputadoSolicitud + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosDefensor').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
        consultarDrogas = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadosdrogas/ImputadosdrogasadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
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
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idImputadoDroga + '"><td onclick="seleccionaDroga(' + datos.data[i].idImputadoDroga + ')">' + datos.data[i].desDroga + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarDroga(" + datos.data[i].idImputadoDroga + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosDrogas').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
        consultarTutores = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tutoresimputados/TutoresimputadosadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
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
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idTutorImputado + '"><td onclick="seleccionaTutor(' + datos.data[i].idTutorImputado + ')">' + datos.data[i].desTipoTutor + '</td>';
                            table += '<td onclick="seleccionaTutor(' + datos.data[i].idTutorImputado + ')">' + datos.data[i].nombre + " " + datos.data[i].paterno + " " + datos.data[i].materno + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarTutor(" + datos.data[i].idTutorImputado + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosTutores').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
        consultarNacionalidad = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoSolicitud: $("#hddIdImputadoSolicutd").val(),
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
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idNacionalidadImputadoSolicitud + '"><td onclick="seleccionaNacionalidad(' + datos.data[i].idNacionalidadImputadoSolicitud + ')">' + datos.data[i].desPais + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarNacionalidad(" + datos.data[i].idNacionalidadImputadoSolicitud + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosNacionalidad').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };

    /////////////////////Selecciones//////////////////////////////////
        seleccionaImputado = function (id) {
            limpiar();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadossolicitudes/ImputadossolicitudesadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {action: "consultar",
                    idImputadoSolicitud: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $('#myTab3 a:first').tab('show');
                        $("#btnAgregarImputado").text("Modificar Imputado");
                        $("#hddIdImputadoSolicutd").val(datos.data[0].idImputadoSolicitud);
                        $("#hddIdSolicitudAudiencia").val(datos.data[0].idSolicitudAudiencia);
                        $("#cmbTipoPersonaImputado").val(datos.data[0].cveTipoPersona);
                        validaPersona();

                        if (datos.data[0].cveTipoPersona == 1 || datos.data[0].cveTipoPersona == 3) {
                            if (datos.data[0].detenido == 'S') {
                                $("#chkDetenidoImputado").prop("checked", true)
                            } else {
                                $("#chkDetenidoImputado").prop("checked", false)
                            }
                            validaDetenido();
                            $("#cmbReincidencias").val(datos.data[0].cveTipoReincidencia);
                            if (datos.data[0].fechaControlDet == "00/00/0000 00:00:00") {
                                $("#txtFechaControlDet").val("");
                            } else {
                                $("#txtFechaControlDet").val(datos.data[0].fechaControlDet);
                            }
                            $("#cmbCeresos").val(datos.data[0].cveCereso);
                            if (datos.data[0].relacionMoral == 'S') {
                                $("#chkRelacionPersonaMoralImputado").prop("checked", true)
                            } else {
                                $("#chkRelacionPersonaMoralImputado").prop("checked", false)
                            }
                            if (datos.data[0].fechaDeclaracion == "00/00/0000") {
                                $("#txtFechaDeclaracion").val("");
                            } else {
                                $("#txtFechaDeclaracion").val(datos.data[0].fechaDeclaracion);
                            }
                            $("#cmbTipoDetencion").val(datos.data[0].cveTipoDetencion);
                        }

                        if (datos.data[0].cveTipoPersona == 1) {
                            $("#txtNombreImputado").val(datos.data[0].nombre);
                            $("#txtPaternoImputado").val(datos.data[0].paterno);
                            $("#txtMaternoImputado").val(datos.data[0].materno);
                            $("#txtCurpImputado").val(datos.data[0].curp);
                            $("#cmbGeneroImputado").val(datos.data[0].cveGenero);
                            $("#txAliasImputado").val(datos.data[0].alias);
                            $("#txtFechaNacimientoImputado").val(datos.data[0].fechaNacimiento);
                            $("#txtEdadImputado").val(datos.data[0].edad);
                            $("#cmbEstudioImputado").val(datos.data[0].cveNivelInstruccion);
                            $("#cmbEstadoCivilImputado").val(datos.data[0].cveEstadoCivil);
                            $("#cmbEspanolImputado").val(datos.data[0].cveEspanol);
                            $("#cmbAlfabetismoImputado").val(datos.data[0].cveAlfabetismo);
                            $("#cmbDielectoIndigenaImputado").val(datos.data[0].cveDialectoIndigena);
                            $("#cmbFamiliaLinguistica").val(datos.data[0].cveTipoFamiliaLinguistica);
                            $("#cmbOcupacionImputado").val(datos.data[0].cveOcupacion);
                            $("#cmbInterpreteImputado").val(datos.data[0].cveInterprete);
                            $("#cmbPsicofisicoImputado").val(datos.data[0].cveEstadoPsicofisico);

                            validaRelacionMoral();
                            $("#txtPersonaMoralImputado").val(datos.data[0].personaMoral);
                            $("#txtingresoMensual").val(datos.data[0].ingresoMensual);
                            $("#cmbGrupoEdnico").val(datos.data[0].cveGrupoEdnico);
                            $("#cmbReligion").val(datos.data[0].CveTipoReligion);
                        } else {
                            $("#txtnombreMoralImputado").val(datos.data[0].nombreMoral);
                        }
                        $("#txtRfcImputado").val(datos.data[0].rfc);
                        $("#cmbPaisNacimientoImputado").val(datos.data[0].cvePaisNacimiento);
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
                        consultarDomicilios();
                        consultarTelefonos();
                        consultarDefensor();
                        consultarDrogas();
                        consultarTutores();
                        consultarNacionalidad();
    //                    cveTipoReincidencia: '1'

                        if (datos.data[0].cveTipoPersona == 1) {
                            var nombre = datos.data[0].nombre + " " + datos.data[0].paterno + " " + datos.data[0].materno;
                        } else {
                            var nombre = datos.data[0].nombreMoral;
                        }


                        var referencia = "";
                        if (datos.data[0].cveTipoCarpeta != "") {
                            referencia += "  <br>Carpeta: " + datos.data[0].desCarpeta + " No: " + datos.data[0].numero + "/" + datos.data[0].anio;
                        } else if (datos.data[0].nuc != "" && datos.data[0].carpetaInv != "") {
                            referencia += "  <br>Carpeta de inv: " + datos.data[0].carpetaInv + " NUC: " + datos.data[0].nuc;
                        } else if (datos.data[0].nuc != "" && datos.data[0].carpetaInv == "") {
                            referencia += " <br> NUC: " + datos.data[0].nuc;
                        } else if (datos.data[0].nuc == "" && datos.data[0].carpetaInv != "") {
                            referencia += "  <br>Carpeta de inv: " + datos.data[0].carpetaInv;
                        }
                        $('#NombreGeneral').html("<b>Capture los datos generales del imputado " + nombre + "." + referencia + ".<b><br>");
                        $('#NombreDomicilios').html("<b>Capture el domicilio del imputado " + nombre + "." + referencia + ".<b><br>");
                        $('#NombreTelefonos').html("<b>Capture el tel\u00e9fono del imputado " + nombre + "." + referencia + ".<b><br>");
                        $('#NombreDefensores').html("<b>Capture el defensor del imputado " + nombre + "." + referencia + ".<b><br>");
                        $('#NombreDrogas').html("<b>Capture la droga del imputado " + nombre + "." + referencia + ".<b><br>");
                        $('#NombreTutores').html("<b>Capture el tutor del imputado " + nombre + "." + referencia + ".<b><br>");
                        $('#NombreNacionalidad').html("<b>Capture la nacionalidad del imputado " + nombre + "." + referencia + ".<b><br>");
                    } else {
                        alert(datos.msj);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
        seleccionaDireccion = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idDomicilioImputadoSolicitud: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#btnAgregaDomicilio").text("Modificar Domicilios");
                        $('#hddIdDomicilioImputadoSolicitud').val(datos.data[0].idDomicilioImputadoSolicitud);
                        $("#hddIdImputadoSolicutd").val(datos.data[0].idImputadoSolicitud);
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
                            $("#cbResidenciaHabitualImp").prop("checked", true)
                        } else {
                            $("#cbResidenciaHabitualImp").prop("checked", false)

                        }
                        if (datos.data[0].DomicilioProcesal == 'S') {
                            $("#cbDomicilioProcesal").prop("checked", true)
                        } else {
                            $("#cbDomicilioProcesal").prop("checked", false)

                        }
                        $("#cmbTipoViviendaImputado").val(datos.data[0].cveTipoDeVivienda);
                        $("#cmbConvivenciaImputado").val(datos.data[0].cveConvivencia);
                        $("#btnUbicar").trigger("click");
                    } else {
                        alert(datos.msj);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
        seleccionaTelefono = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/telefonosimputadossolicitudes/TelefonosimputadossolicitudesadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idTelefonoImputadosSolicitud: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#btnAgregaTelImput").text("Modificar Tel\u00e9fono");
                        $("#hddIdTelefonoImputadosSolicitud").val(datos.data[0].idTelefonoImputadosSolicitud);
                        $("#hddIdImputadoSolicutd").val(datos.data[0].idImputadoSolicitud);
                        $("#telefonoTel").val(datos.data[0].telefono);
                        $("#celTel").val(datos.data[0].celular);
                        $("#emailTel").val(datos.data[0].email);
                    } else {
                        alert("Error. Verifique");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
        seleccionaDefensor = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/defensoresimputadossolicitudes/DefensoresimputadossolicitudesadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idDefensorImputadoSolicitud: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#btnAgregaDefensorImput").text("Modificar Defensor");
                        $("#hddIdDefensorImputado").val(datos.data[0].idDefensorImputadoSolicitud);
                        $("#hddIdImputadoSolicutd").val(datos.data[0].idImputadoSolicitud);
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
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
        seleccionaDroga = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadosdrogas/ImputadosdrogasadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idImputadoDroga: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#btnAgregaDroga").text("Modificar Droga");
                        $("#hddIdImputadoDroga").val(datos.data[0].idImputadoDroga);
                        $("#hddIdImputadoSolicutd").val(datos.data[0].idImputadoSolicitud);
                        $("#cmbDrogasImputado").val(datos.data[0].cveDroga);
                    } else {
                        alert("Error. Verifique");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
        seleccionaTutor = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tutoresimputados/TutoresimputadosadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idTutorImputado: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#btnAgregaTutoresImput").text("Modificar Tutor");
                        $("#hddIdTutorImputado").val(datos.data[0].idTutorImputado);
                        $("#hddIdImputadoSolicutd").val(datos.data[0].idImputadoSolicitud);
                        $("#cmbTipoTutorImputados").val(datos.data[0].cveTipoTutor);
                        $("input[name=rdtutores][value='" + datos.data[0].ProvDef + "']").prop("checked", true);
                        $("#nombreTutorImputados").val(datos.data[0].nombre);
                        $("#paternoTutorImputados").val(datos.data[0].paterno);
                        $("#maternoTutorImputados").val(datos.data[0].materno);
                        if (datos.data[0].fechaNacimiento != "0000-00-00" && datos.data[0].fechaNacimiento != "") {
                            var tmp = datos.data[0].fechaNacimiento.split("-");
                            var fecha = tmp[2] + "/" + tmp[1] + "/" + tmp[0]
                            $("#fechaNacimientoTutorImputados").val(fecha);
                        } else {
                            $("#fechaNacimientoTutorImputados").val("");
                        }
                        if (datos.data[0].edad != "0") {
                            $("#txtEdadTutorImputado").val(datos.data[0].edad);
                        } else {
                            $("#txtEdadTutorImputado").val("");
                        }
                        $("#cmbGeneroTutorImputados").val(datos.data[0].cveGenero);
                    } else {
                        alert("Error. Verifique");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };

        seleccionaNacionalidad = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesadminFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idNacionalidadImputadoSolicitud: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#bntAgregaNacionalidad").text("Modificar Nacionalidad");
                        $("#hddIdNacionalidadImputado").val(datos.data[0].idNacionalidadImputadoSolicitud);
                        $("#hddIdImputadoSolicutd").val(datos.data[0].idImputadoSolicitud);
                        $("#cmbPaisNacionalidadImputado").val(datos.data[0].cvePais);
                    } else {

                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };
    ///////////////////////// FUNCIONES ELMINAR //////////////////////////////////////////////
        eliminaImputado = function (id) {
            if ($("#hddIdSolicitudAudiencia").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al imputado? Se eliminaran las relaciones (paso 5)",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {

                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/imputadossolicitudes/ImputadossolicitudesadminFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {action: "elimina",
                                        idImputadoSolicitud: id
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
                                            $("#divAlertWarningImputado").html("");
                                            $("#divAlertWarningImputado").html(datos.msj);
                                            $("#divAlertWarningImputado").show("");
                                            setTimeAlert("divAlertWarningImputado");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
                alert("Seleccione una audiencia");
            }
        };

        eliminarDireccion = function (id) {
            if ($("#hddIdImputadoSolicutd").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al domicilio?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesadminFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idDomicilioImputadoSolicitud: id
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
                                            $("#divAlertWarningImputado").html("");
                                            $("#divAlertWarningImputado").html("'" + datos.msj + "'");
                                            $("#divAlertWarningImputado").show("");
                                            setTimeAlert("divAlertWarningImputado");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            if ($("#hddIdImputadoSolicutd").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al tel\u00e9fono?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/telefonosimputadossolicitudes/TelefonosimputadossolicitudesadminFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idTelefonoImputadosSolicitud: id
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
                                            $("#divAlertWarningImputado").html("");
                                            $("#divAlertWarningImputado").html("'" + datos.msj + "'");
                                            $("#divAlertWarningImputado").show("");
                                            setTimeAlert("divAlertWarningImputado");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            if ($("#hddIdImputadoSolicutd").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al defensor?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/defensoresimputadossolicitudes/DefensoresimputadossolicitudesadminFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idDefensorImputadoSolicitud: id
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
                                            $("#divAlertWarningImputado").html("");
                                            $("#divAlertWarningImputado").html("'" + datos.msj + "'");
                                            $("#divAlertWarningImputado").show("");
                                            setTimeAlert("divAlertWarningImputado");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            if ($("#hddIdImputadoSolicutd").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar la droga?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/imputadosdrogas/ImputadosdrogasadminFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idImputadoDroga: id
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
                                            $("#divAlertWarningImputado").html("");
                                            $("#divAlertWarningImputado").html("'" + datos.msj + "'");
                                            $("#divAlertWarningImputado").show("");
                                            setTimeAlert("divAlertWarningImputado");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            if ($("#hddIdImputadoSolicutd").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al tutor?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/tutoresimputados/TutoresimputadosadminFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idTutorImputado: id
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
                                            consultarTutores();
                                            limpiarTutor();
                                        } else {
                                            $("#divAlertWarningImputado").html("");
                                            $("#divAlertWarningImputado").html("'" + datos.msj + "'");
                                            $("#divAlertWarningImputado").show("");
                                            setTimeAlert("divAlertWarningImputado");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            if ($("#hddIdImputadoSolicutd").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar la nacionalidad?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesadminFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idNacionalidadImputadoSolicitud: id
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
                                            $("#divAlertWarningImputado").html("");
                                            $("#divAlertWarningImputado").html("'" + datos.msj + "'");
                                            $("#divAlertWarningImputado").show("");
                                            setTimeAlert("divAlertWarningImputado");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            $("#divResultadoDireccion").html("");
            $("#divResultadosTelefono").html("");
            $("#divResultadosDefensor").html("");
            $("#divResultadosDrogas").html("");
            $("#divResultadosTutores").html("");
            $("#divResultadosNacionalidad").html("");
            $("#btnAgregarImputado").text("Agregar Imputado");
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

        };

        limpiarImputado = function () {
            $("#hddIdImputadoSolicutd").val("");
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
            $("#cmbEstadoNacimientoImputado").val(15);
            $("#cmbMunicipioNacimientoImputado").val(0);
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
    //        $("#txtFechaImputacion").val("");
            $("#txtFechaControlDet").val("");
            $("#cmbCeresos").val(0);
            $("#txtestadoNacimientoImputado").val("");
            $("#txtmunicipioNacimientoImputado").val("");
            $("#chkRelacionPersonaMoralImputado").prop("checked", false)
            $("#txtPersonaMoralImputado").val("");
            validaRelacionMoral();
            $("#txtingresoMensual").val("");
            $("#txtnombreMoralImputado").val("");
            $("#cmbFamiliaLinguistica").val(15);

            $("#cmbReligion").val(8);
            $("#cmbGrupoEdnico").val(72);
            $('#divPersonaMoralImputado').hide();
            validaDetenido();
            muestraOcultaCampos(2);
            $("#btnAgregarImputado").text("Agregar Imputado");
        };
        limpiarDomicilios = function () {
            $('#hddIdDomicilioImputadoSolicitud').val("");
            $("#cmbPaisDomicilioImputado").val(119).trigger('change');
            $("#cmbEstadoDomicilioImputado").val(15);
            $("#cmbMunicipioDomicilioImputado").val(0);
            $("#direccionDomicilio").val("");
            $("#coloniaDireccion").val("");
            $("#numeroIntDomicilio").val("");
            $("#numeroExtDomicilio").val("");
            $("#cpDomicilio").val("");
            $("#cbResidenciaHabitualImp").prop("checked", false);
            $("#cbDomicilioProcesal").prop("checked", false);
            $("#estadoDomicilioImputado").val("");
            $("#municipioDomicilioImputado").val("");
            $("#cmbTipoViviendaImputado").val(0);
            $("#cmbConvivenciaImputado").val(0);
            $("#btnAgregaDomicilio").text("Agregar Domicilios");
            $("#ubicacion").empty();
        };
        limpiarTelefonos = function () {
            $("#hddIdTelefonoImputadosSolicitud").val("");
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
    //        $("#hddIdImputadoSolicutd").val("");
            $("#cmbTipoTutorImputados").val(0);
    //        $("#cbDomicilioProcesal").prop("checked", false);
            $('input:radio[name=rdtutores]:checked').prop("checked", false);
            $("#nombreTutorImputados").val("");
            $("#paternoTutorImputados").val("");
            $("#maternoTutorImputados").val("");
            $("#fechaNacimientoTutorImputados").val("");
            $("#txtEdadTutorImputado").val("");
            $("#cmbGeneroTutorImputados").val(0);
            $("#btnAgregaTutoresImput").text("Agregar Tutor");

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

        $(function () {
            var currentDate = new Date();
            var maxDate = currentDate.setDate(currentDate.getDate());

            $("#txtFechaNacimientoImputado").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                maxDate: maxDate
            });
            $("#txtFechaControlDet").datetimepicker({
    //            sideBySide: false,
                locale: 'es',
                maxDate: maxDate
    //            format: "DD/MM/YYYY"
            });
            $("#txtFechaDeclaracion").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                maxDate: maxDate
            });
            $("#fechaNacimientoTutorImputados").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                maxDate: maxDate
            });
    //        $("#txtFechaNacimientoImputado").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy",
    //        });
    //        $("#fechaInicial").datepicker().on('changeDate', function (e) {
    //            $("#fechaInicial").datepicker('hide');
    //        });

    //        $("#txtFechaImputacion").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //        });
    //        $("#txtFechaControlDet").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //        });
    //        $("#txtFechaDeclaracion").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //        });
    //        $("#fechaNacimientoTutorImputados").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //        });
    //        $("#txtFecTermCons").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //        });
    //        $("#txtFecTermInv").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //        });
            $('#cpDomicilio').validaCampo('0123456789');
            $('#telefonoTel').validaCampo('0123456789');
            $('#celTel').validaCampo('0123456789');
            $('#telDefensor').validaCampo('0123456789');
            $('#celDefensor').validaCampo('0123456789');
            comboTipoPersonaImputado();
            comboReligion();
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
            /////CARGAR CONSULTAS
            consultarImputados();
        });

    </script>    
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>