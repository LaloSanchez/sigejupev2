<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
$idSolicitud = isset($_POST['idSolicitud']) ? $_POST['idSolicitud'] : '';
?>

<style>
    .trGridAgrega {
        color: #ffffff;
        background-color: #427468;
    }

    .trSeleccion:hover {
        background-color: #dff0d8;
        cursor: pointer;
    }

    input[type=text] {
        text-transform: uppercase;
    }

    .requerido {
        color: darkred;
    }
</style>

<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title">
            Ofendidos(s) solicitud
        </h5>
    </div>
    <div class="panel-body">

        <div id="divFormulario" class="form-horizontal">
            <div class="tab-content tabs-flat">
                <div class="tabbable tabs-left">
                    <ul id="myTab3" class="nav nav-tabs">
                        <li class="tab-sky active">
                            <a href="#divGeneralOfendidoPaso3" data-toggle="tab" aria-expanded="true">General</a>
                        </li>
                        <li class="tab-red">
                            <a href="#divDomiciliosPaso3" data-toggle="tab" aria-expanded="false">Domicilio(s)</a>
                        </li>
                        <li class="tab-orange">
                            <a href="#divTelefonosPaso3" data-toggle="tab" aria-expanded="false"> Tel&eacute;fono(s)</a>
                        </li>
                        <li class="tab-orange">
                            <a href="#divDefendoresPaso3" data-toggle="tab" aria-expanded="false">Defensor </a>
                        </li>
                        <li class="tab-orange">
                            <a href="#divTutoresPaso3" data-toggle="tab" aria-expanded="false">Tutor /
                                Representante </a>
                        </li>
                        <li class="tab-orange">
                            <a href="#divNacionalidadesPaso3" data-toggle="tab" aria-expanded="false">
                                Nacionalidades</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- PASO 3 DATOS GENERALES DEL OFENDIDO-->

                        <!--campo de solicitud de audiencia-->


                        <input type="hidden" name="IdSolicitudAudiencia" id="IdSolicitudAudiencia"
                               value="<?php echo $idSolicitud; ?>"/>

                        <div class="tab-pane active" id="divGeneralOfendidoPaso3">
                            <form action="" id="form-ofendido-general">
                                <input type="hidden" name="accion" id="accion" value="agregar"/>
                                <input type="hidden" name="idOfendidoSolicitud" id="idOfendidoSolicitud"/>
                                <input type="hidden" name="activo" id="activo" value="S"/>

                                <p class="col-lg-12" style="color:darkred;">
                                    Los campos marcados con (*) son obligatorios.
                                </p>
                                <hr/>

                                <div>
                                    <div class="col-lg-12">

                                        <label class="control-label col-xs-3" for="cmbTipoPersonaOfendido">
                                            Tipo de Persona <span class="requerido">(*)</span>
                                        </label>

                                        <div class="col-xs-6">
                                            <select id="cmbTipoPersonaOfendido" class="form-control"
                                                    name="cmbTipoPersonaOfendido"
                                                    onchange="validaPersona();">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="divPersonaFisicaOfendido">
                                        <!--<div class="contenedor">-->
                                        <div class="col-lg-6">
                                            <label class="control-label"
                                                   for="txtNombreOfendido">Nombre <span class="requerido">(*)</span></label>

                                            <div>
                                                <input type="text" class="form-control"
                                                       id="txtNombreOfendido"
                                                       name="txtNombreOfendido">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label"
                                                   for="txtPaternoOfendido">Paterno <span class="requerido">(*)</span></label>

                                            <div>
                                                <input type="text" class="form-control datoTipoCadena"
                                                       id="txtPaternoOfendido" name="txtPaternoOfendido">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label"
                                                   for="txtMaternoOfendido">Materno <span class="requerido">(*)</span></label>

                                            <div>
                                                <input type="text" class="form-control"
                                                       id="txtMaternoOfendido"
                                                       name="txtMaternoOfendido">
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-lg-3">
                                            <label class="control-label"
                                                   for="cmbGeneroOfendido">G&eacute;nero <span class="requerido">(*)</span></label>

                                            <div>
                                                <select id="cmbGeneroOfendido" class="form-control"
                                                        name="cmbGeneroOfendido" required=""
                                                        onchange="activaEmbarazada('cmbGeneroOfendido');">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-lg-3">

                                            <label class="control-label" for="embarazada">
                                                Embarazada
                                            </label>

                                            <div>
                                                <input type="checkbox" name="embarazada"
                                                       id="embarazada" class="form-control"
                                                       disabled="true"/>
                                            </div>

                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="txtRfcOfendido">RFC</label>

                                            <div>
                                                <input type="text" class="form-control" id="txtRfcOfendido"
                                                       name="txtRfcOfendido" maxlength="13"
                                                       onblur="validaRfc('txtRfcOfendido');">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="txtCurpOfendido">CURP</label>

                                            <div>
                                                <input type="text" class="form-control" id="txtCurpOfendido"
                                                       name="txtCurpOfendido" maxlength="18"
                                                       onblur="validaCurp('txtCurpOfendido');">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">

                                            <label class="control-label" for="txtFechaNacimientoOfendido">
                                                Fecha de Nacimiento (dd/mm/aaaa) <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <input id="txtFechaNacimientoOfendido" class="form-control"
                                                       type="text" tabindex="4" data-toggle="tooltip"
                                                       title=""
                                                       placeholder="" name="txtFechaNacimientoOfendido"
                                                       data-original-title=""
                                                       onblur="calcularEdad(this.value, 'txtFechaNacimientoOfendido', 'txtEdadOfendido');">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <label class="control-label" for="txtEdadOfendido">Edad <span class="requerido">(*)</span></label>

                                            <div>
                                                <input type="text" class="form-control" id="txtEdadOfendido"
                                                       name="txtEdadOfendido" maxlength="3" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbPaisNacimientoOfendido">
                                                Pais Nacimiento <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbPaisNacimientoOfendido" class="form-control"
                                                        name="cmbPaisNacimientoOfendido"
                                                        onchange="comboEstadoNacimientoOfendido();"
                                                        required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbEstadoNacimientoOfendido">Estado
                                                Nacimiento <span class="requerido">(*)</span></label>

                                            <div>
                                                <select id="cmbEstadoNacimientoOfendido"
                                                        class="form-control"
                                                        name="cmbEstadoNacimientoOfendido"
                                                        onchange="comboMunicipioNacimientoOfendido();"
                                                        required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                                <input id="txtestadoNacimientoOfendido"
                                                       name="txtestadoNacimientoOfendido" type="text"
                                                       class="form-control" style="display: none">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label"
                                                   for="cmbMunicipioNacimientoOfendido">
                                                Municipio Nacimiento <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbMunicipioNacimientoOfendido"
                                                        class="form-control"
                                                        name="cmbMunicipioNacimientoOfendido" required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                                <input id="txtmunicipioNacimientoOfendido"
                                                       name="txtmunicipioNacimientoOfendido" type="text"
                                                       class="form-control" style="display: none">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbEstudioOfendido">
                                                Grado de Estudio <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbEstudioOfendido" class="form-control"
                                                        name="cmbEstudioOfendido" required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbEstadoCivilOfendido">
                                                Estado Civil <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbEstadoCivilOfendido" class="form-control"
                                                        name="cmbEstadoCivilOfendido" required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbOcupacionOfendido">
                                                Ocupación <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbOcupacionOfendido" class="form-control"
                                                        name="cmbOcupacionOfendido" required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbEspanolOfendido">
                                                ¿Habla Espa&ntilde;ol? <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbEspanolOfendido" class="form-control"
                                                        name="cmbEspanolOfendido" required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label"
                                                   for="cmbAlfabetismoOfendido">Alfabetismo <span class="requerido">(*)</span></label>

                                            <div>
                                                <select id="cmbAlfabetismoOfendido" class="form-control"
                                                        name="cmbAlfabetismoOfendido" required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbDielectoIndigenaOfendido">¿Habla Dialecto
                                                Indigena? <span class="requerido">(*)</span></label>

                                            <div>
                                                <select id="cmbDielectoIndigenaOfendido"
                                                        class="form-control"
                                                        name="cmbDielectoIndigenaOfendido" required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label"
                                                   for="cmbFamiliaLinguisticaOfendido">
                                                Tipo de Familia Lingüística <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbFamiliaLinguisticaOfendido"
                                                        class="form-control"
                                                        name="cmbFamiliaLinguisticaOfendido" required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbInterpreteOfendido">
                                                ¿Necesita Interprete? <span class="requerido">(*)</span></label>

                                            <div>
                                                <select id="cmbInterpreteOfendido" class="form-control"
                                                        name="cmbInterpreteOfendido" required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbPsicofisicoOfendido">
                                                Estado Psicofisico <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbPsicofisicoOfendido" class="form-control"
                                                        name="cmbPsicofisicoOfendido" required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <br/>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbGrupoEdnico">
                                                ¿Pertenece a algún Grupo étnico? <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbGrupoEdnico" class="form-control"
                                                        name="cmbGrupoEdnico" required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-lg-3">
                                            <label for="cmbVictimaDelincuenciaOrganizada">
                                                ¿Victima de Delincuencia Organizada? <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select name="cmbVictimaDelincuenciaOrganizada"
                                                        id="cmbVictimaDelincuenciaOrganizada" required
                                                        class="form-control">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-lg-3">
                                            <label for="cmbVictimaViolenciaDeGenero">
                                                ¿Victima de Violencia de Genero? <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select name="cmbVictimaViolenciaDeGenero"
                                                        id="cmbVictimaViolenciaDeGenero" required
                                                        class="form-control">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-lg-3">
                                            <label for="cmbVictimaTrata">
                                                ¿Victima de Trata? <span class="requerido">(*)</span>
                                                <div class="clearfix"></div>
                                                <br/>
                                            </label>



                                            <div>
                                                <select name="cmbVictimaTrata"
                                                        id="cmbVictimaTrata" required
                                                        class="form-control">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="clearfix"></div>
                                        <br/>


                                        <div class="col-lg-3">
                                            <label for="cmbOrdenProteccion">
                                                ¿Tiene Orden de Proteci&oacute;n? <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select name="cmbOrdenProteccion"
                                                        id="cmbOrdenProteccion" required
                                                        class="form-control">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-lg-3">
                                            <label for="numHijos">
                                                Número de Hijos
                                            </label>

                                            <div>
                                                <input type="text" name="numHijos" id="numHijos"
                                                       class="form-control"/>
                                            </div>
                                        </div>


                                        <div class="col-lg-3">

                                            <label for="desaparecido">
                                                ¿Desaparecido?
                                            </label>

                                            <div>
                                                <input type="checkbox" name="desaparecido"
                                                       id="desaparecido" class="form-control"/>
                                            </div>

                                        </div>

                                        <div class="clearfix"></div>

                                    </div>
                                    <div id="divPersonaMoralOfendido" style="display:none;">
                                        <div class="col-lg-8">
                                            <label class="control-label" for="txtnombreMoralOfendido">
                                                Nombre Persona Moral <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <input type="text" class="form-control datoTipoCadena"
                                                       id="txtnombreMoralOfendido"
                                                       name="txtnombreMoralOfendido">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <label class="control-label" for="txtRfcOfendido">RFC</label>

                                            <div>
                                                <input type="text" class="form-control"
                                                       id="txtRfcMoralOfendido"
                                                       name="txtRfcMoralOfendido" maxlength="13"
                                                       onblur="validaRfc('txtRfcMoralOfendido');">
                                            </div>
                                        </div>


                                        <div class="clearfix"></div>

                                        <div class="col-lg-4">
                                            <label class="control-label"
                                                   for="cmbPaisNacimientoMoralOfendido">
                                                País <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbPaisNacimientoMoralOfendido"
                                                        class="form-control"
                                                        name="cmbPaisNacimientoMoralOfendido"
                                                        onchange="comboEstadoNacimientoOfendido();"
                                                        required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label"
                                                   for="cmbEstadoNacimientoMoralOfendido">
                                                Estado <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbEstadoNacimientoMoralOfendido"
                                                        class="form-control"
                                                        name="cmbEstadoNacimientoMoralOfendido"
                                                        onchange="comboMunicipioNacimientoOfendido();"
                                                        required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                                <input id="txtestadoNacimientoMoralOfendido"
                                                       name="txtestadoNacimientoMoralOfendido" type="text"
                                                       class="form-control" style="display: none">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label"
                                                   for="cmbMunicipioNacimientoMoralOfendido">
                                                Municipio <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbMunicipioNacimientoMoralOfendido"
                                                        class="form-control"
                                                        name="cmbMunicipioNacimientoMoralOfendido"
                                                        required="">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                                <input id="txtmunicipioNacimientoMoralOfendido"
                                                       name="txtmunicipioNacimientoMoralOfendido"
                                                       type="text"
                                                       class="form-control" style="display: none">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="clearfix"></div>
                                    <br/><br/>

                                    <div class="col-lg-12">
                                        <button class="btn btn-primary" id="guardar-general-ofendido">
                                            Guardar Datos Generales del Ofendido.
                                        </button>
                                        <a href="#" id="limpiar-general-ofendido" class="btn btn-primary">
                                            Limpiar
                                        </a>
                                    </div>

                                    <div class="clearfix"></div>
                                    <br/>

                                    <div id="alert-general-ofendido" class="alert" style="display: none;">
                                    </div>

                                </div>
                            </form>

                        </div>

                        <!--Domiculio(s) ofendidos-->
                        <div class="tab-pane" id="divDomiciliosPaso3">
                            <form action="" id="form-domicilios-ofendido">
                                <input type="hidden" id="accion" name="accion" value="agregar" readonly/>
                                <input type="hidden" id="idDomicilioOfendidoSolicitud"
                                       name="idDomicilioOfendidoSolicitud" value="" readonly/>
                                <input type="hidden" id="activo" name="activo" value="S"/>

                                <p class="col-lg-12" style="color:darkred;">
                                    Los campos marcados con (*) son obligatorios.
                                </p>
                                <hr/>

                                <div>
                                    <div class="col-lg-3">
                                        <label class="control-label" for="cmbPaisDomicilioOfendido">
                                            País Domicilio <span class="requerido">(*)</span>
                                        </label>

                                        <div>
                                            <select id="cmbPaisDomicilioOfendido" class="form-control"
                                                    name="cmbPaisDomicilioOfendido" required=""
                                                    onchange="comboEstadoDomicilioOfendido();">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="control-label" for="cmbEstadoDomicilioOfendido">
                                            Estado Domicilio <span class="requerido">(*)</span>
                                        </label>

                                        <div>
                                            <select id="cmbEstadoDomicilioOfendido" class="form-control"
                                                    name="cmbEstadoDomicilioOfendido"
                                                    onchange="comboMunicipioDomicilioOfendido();"
                                                    required="">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                            <input id="estadoDomicilioOfendido"
                                                   name="estadoDomicilioOfendido"
                                                   type="text" class="form-control datoTipoCadena"
                                                   style="display: none">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="control-label" for="cmbMunicipioDomicilioOfendido">
                                            Municipio Domicilio <span class="requerido">(*)</span>
                                        </label>

                                        <div>
                                            <select id="cmbMunicipioDomicilioOfendido"
                                                    class="form-control datoTipoCadena"
                                                    name="cmbMunicipioDomicilioOfendido" required="">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                            <input id="municipioDomicilioOfendido"
                                                   name="municipioDomicilioOfendido" type="text"
                                                   class="form-control datoTipoCadena"
                                                   style="display: none">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="control-label" for="cmbConvivenciaOfendido">
                                            Convivencia <span class="requerido">(*)</span>
                                        </label>

                                        <div>
                                            <select id="cmbConvivenciaOfendido" class="form-control"
                                                    name="cmbConvivenciaOfendido" required="">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="control-label" for=""> Calle <span class="requerido">(*)</span></label>

                                        <div>
                                            <input id="direccionDomicilio" name="direccionDomicilio"
                                                   type="text"
                                                   class="form-control datoTipoCadena">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="control-label" for="coloniaDireccion"> Colonia <span class="requerido">(*)</span></label>

                                        <div>
                                            <input id="coloniaDireccion" name="coloniaDireccion" type="text"
                                                   class="form-control datoTipoCadena">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <label class="control-label" for=""> N&uacute;mero Interior</label>

                                        <div>
                                            <input id="numeroIntDomicilio" name="numeroIntDomicilio"
                                                   type="text"
                                                   class="form-control datoTipoEntero" maxlength="5">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="control-label" for="">N&uacute;mero Exterior <span class="requerido">(*)</span></label>

                                        <div>
                                            <input id="numeroExtDomicilio" name="numeroExtDomicilio"
                                                   type="text"
                                                   class="form-control datoTipoEntero" maxlength="5">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="control-label" for=""> CP <span class="requerido">(*)</span></label>

                                        <div>
                                            <input id="cpDomicilio" name="cpDomicilio" type="text"
                                                   class="form-control datoTipoEntero datoTipoCP"
                                                   maxlength="5">
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <label class="control-label" for="">Residencia Habitual</label>

                                        <div>
                                            <input type="checkbox" class="form-control"
                                                   name="cbResidenciaHabitualOfendido"
                                                   id="cbResidenciaHabitualOfendido">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="cmbTipoViviendaOfendido">
                                            Tipo vivienda <span class="requerido">(*)</span>
                                        </label>

                                        <div>
                                            <select id="cmbTipoViviendaOfendido" class="form-control"
                                                    name="cmbTipoViviendaOfendido" required="">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <br/><br/>

                                    <div>

                                        <div class="col-lg-6">
                                            <button id="btn-agregar-modificar-domicilio"
                                                    class="btn btn-primary">
                                                Agregar Domicilio del Ofendido
                                            </button>
                                            <a href="#" id="limpiar-domicilio" class="btn btn-primary">
                                                Limpiar
                                            </a>
                                            <button id="btnUbicar" name="btnUbicar" class="btn btn-primary">Ubicar
                                            </button>
                                        </div>


                                        <input type="hidden" name="latitud" id="latitud" value="19.2464696"/>
                                        <input type="hidden" name="longitud" id="longitud" value="-99.10134979999998"/>


                                    </div>

                                    <div class="clearfix"></div>
                                    <br/>

                                    <div id="alert-domicilios" class="alert" style="display: none;">

                                    </div>

                                    <div class="clearfix"></div>
                                    <br/><br/>

                                    <div class="text-center col-lg-12">
                                        <div id="ubicacion" style="display:none;">
                                        </div>
                                    </div>


                                </div>
                            </form>

                            <div class="clearfix"></div>
                            <br/><br/>

                            <div class="alert alert-success" id="notificacion-domicilios" style="display: none;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                            </div>


                            <div class="col-lg-12">
                                <table id="tableResultadosDomiciliosOfendido"
                                       class='table table-bordered tblGridAgrega' style="display: none;">

                                    <tr class='trGridAgrega'>
                                        <th>Pais</th>
                                        <th>Estado</th>
                                        <th>Municipio</th>
                                        <th>Direcci&oacute;n</th>
                                        <th>Eliminar</th>
                                    </tr>

                                    <tbody id="tabla-domicilios">
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane" id="divTelefonosPaso3">
                            <form action="" id="form-telefonos-ofendido">
                                <input type="hidden" id="accion" name="accion" value="agregar"/>
                                <input type="hidden" id="activo" name="activo" value="S"/>
                                <input type="hidden" id="idTelefonoOfendidoSolicitud"
                                       name="idTelefonoOfendidoSolicitud" value=""/>

                                <div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="">Tel&eacute;fono</label>

                                        <div>
                                            <input id="telefonoTel" name="telefonoTel" type="text"
                                                   class="form-control" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="">Celular</label>

                                        <div>
                                            <input id="celTel" name="celTel" type="text"
                                                   class="form-control"
                                                   maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="">Correo Electr&oacute;nico</label>

                                        <div>
                                            <input id="emailTel" class="form-control" type="email"
                                                   name="emailTel">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br/>

                                    <div class="col-lg-4">
                                        <button id="btn-agregar-modificar-telefono" class="btn btn-primary">
                                            Agregar Tel&eacute;fono
                                        </button>
                                        <a href="#" id="limpiar-telefono" class="btn btn-primary">
                                            Limpiar
                                        </a>
                                    </div>


                                    <div class="clearfix"></div>
                                    <br/>

                                    <div id="alert-telefonos" class="alert" style="display: none;">
                                    </div>

                                </div>
                            </form>
                            <div class="clearfix"></div>
                            <br/><br/>


                            <div class="col-lg-12">
                                <table id="tableResultadosTelefonosOfendido"
                                       class='table table-bordered tblGridAgrega' style="display: none;">
                                    <tr class='trGridAgrega'>
                                        <th>Teléfono</th>
                                        <th>Celular</th>
                                        <th>Correo Electr&oacute;nico</th>
                                        <th>Eliminar</th>
                                    </tr>
                                    <tbody id="tabla-telefonos">
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane" id="divDefendoresPaso3">
                            <form action="" id="form-defensores-ofendido">

                                <input type="hidden" name="accion" id="accion" value="agregar"/>
                                <input type="hidden" name="activo" id="activo" value="S"/>
                                <input type="hidden" name="idDefensorOfendidoSolicitud"
                                       id="idDefensorOfendidoSolicitud" value=""/>

                                <p class="col-lg-12" style="color:darkred;">
                                    Los campos marcados con (*) son obligatorios.
                                </p>
                                <hr/>

                                <div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="cmbTipoDefensorOfendido">
                                            Tipo Defensor <span class="requerido">(*)</span>
                                        </label>

                                        <div>
                                            <select id="cmbTipoDefensorOfendido" class="form-control"
                                                    name="cmbTipoDefensorOfendido" required="">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="control-label" for=""> Nombre <span class="requerido">(*)</span></label>

                                        <div>
                                            <input id="nombreDefensor" name="nombreDefensor" type="text"
                                                   class="form-control datoTipoCadena">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="">Tel&eacute;fono</label>

                                        <div>
                                            <input id="telDefensor" name="telDefensor" type="text"
                                                   class="form-control" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="">Celular</label>

                                        <div>
                                            <input id="celDefensor" name="celDefensor" type="text"
                                                   class="form-control" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="">Correo Electr&oacute;nico</label>

                                        <div>
                                            <input id="emailDefensor" name="emailDefensor" type="email"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br/>

                                    <div class="col-lg-6">
                                        <button id="btn-agregar-modificar-defensor" class="btn btn-primary">
                                            Agregar Defensor
                                        </button>
                                        <a href="#" id="limpiar-defensor" class="btn btn-primary">
                                            Limpiar
                                        </a>
                                    </div>

                                    <div class="clearfix"></div>
                                    <br/>

                                    <div id="alert-defensores" class="alert" style="display: none;">

                                    </div>


                                </div>
                            </form>

                            <div class="clearfix"></div>
                            <br/>


                            <div class="col-lg-12">
                                <table id="tableResultadosDefensoresOfendido"
                                       class='table table-bordered tblGridAgrega' style="display: none;">
                                    <tr class='trGridAgrega'>
                                        <th>Tipo Defensor</th>
                                        <th>Nombre</th>
                                        <th>Tel.</th>
                                        <th>Celular</th>
                                        <th>Correo Electr&oacute;nico</th>
                                        <th>Eliminar</th>
                                    </tr>
                                    <tbody id="tabla-defensores">
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane" id="divTutoresPaso3">
                            <form action="" id="form-tutores-ofendido">
                                <input type="hidden" name="accion" value="agregar"/>
                                <input type="hidden" name="idTutorOfendido" id="idTutorOfendido" value=""/>
                                <input type="hidden" name="activo" id="activo" value="S"/>

                                <p class="col-lg-12" style="color:darkred;">
                                    Los campos marcados con (*) son obligatorios.
                                </p>
                                <hr/>
                                <div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="cmbTipoTutorOfendido">
                                            Tipo Tutor/Representante <span class="requerido">(*)</span>
                                        </label>

                                        <div>
                                            <select id="cmbTipoTutorOfendido" class="form-control"
                                                    name="cmbTipoTutorOfendido" required="">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="col-lg-4">
                                        <label class="control-label"
                                               for="nombreTutorOfendido">Nombre <span class="requerido">(*)</span></label>

                                        <div>
                                            <input id="nombreTutorOfendido" name="nombreTutorOfendido"
                                                   type="text" class="form-control datoTipoCadena">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label"
                                               for="paternoTutorOfendido">Paterno <span class="requerido">(*)</span></label>

                                        <div>
                                            <input id="paternoTutorOfendido" name="paternoTutorOfendido"
                                                   type="text" class="form-control datoTipoCadena">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label"
                                               for="maternoTutorOfendido">Materno <span class="requerido">(*)</span></label>

                                        <div>
                                            <input id="maternoTutorOfendido" name="maternoTutorOfendido"
                                                   type="text" class="form-control datoTipoCadena">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label"
                                               for="cmbGeneroTutorOfendido">Genero <span class="requerido">(*)</span></label>

                                        <div>
                                            <select id="cmbGeneroTutorOfendido" class="form-control"
                                                    name="cmbGeneroTutorOfendido" required="">
                                                <option value="0" selected>Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="fechaNacimientoTutorOfendido">
                                            Fecha de nacimiento <span class="requerido">(*)</span>
                                        </label>

                                        <div>
                                            <input id="fechaNacimientoTutorOfendido"
                                                   name="fechaNacimientoTutorOfendido" type="text"
                                                   class="form-control"
                                                   onblur="calcularEdad(this.value, 'fechaNacimientoTutorOfendido', 'txtEdadTutorOfendido');">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="control-label" for="txtEdadTutorOfendido">Edad <span class="requerido">(*)</span></label>

                                        <div>
                                            <input id="txtEdadTutorOfendido" name="txtEdadTutorOfendido"
                                                   type="text" class="form-control" maxlength="3"
                                                   readonly="">
                                        </div>
                                    </div>


                                    <div class="clearfix"></div>
                                    <br/>

                                    <div class="col-lg-12">
                                        <button id="btn-agregar-modificar-tutor" class="btn btn-primary">
                                            Agregar Tutor/Representante
                                        </button>
                                        <a href="#" id="limpiar-tutores" class="btn btn-primary">
                                            Limpiar
                                        </a>
                                    </div>


                                    <div class="clearfix"></div>
                                    <br/>

                                    <div id="alert-tutores" class="alert" style="display: none;">

                                    </div>


                                </div>
                            </form>
                            <div class="clearfix"></div>
                            <br/>


                            <div class="col-lg-12">

                                <table id="tableResultadosTutoresOfendido"
                                       class='table table-bordered tblGridAgrega' style="display: none;">
                                    <tr class='trGridAgrega'>
                                        <th>Tipo Tutor</th>
                                        <th>Nombre</th>
                                        <th>Genero</th>
                                        <th>Eliminar</th>
                                    </tr>
                                    <tbody id="tabla-tutores">
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="divNacionalidadesPaso3">
                            <form action="" id="form-nacionalidades-ofendido">
                                <input type="hidden" name="accion" value="agregar"/>
                                <input type="hidden" name="idNacionalidadOfendidoSolicitud" value=""/>
                                <input type="hidden" name="activo" value="S"/>

                                <div>
                                    <div class="col-lg-12">
                                        <label class="control-label" for="cmbPaisNacionalidadOfendido">
                                            <strong>Nacionalidad</strong>
                                        </label>
                                        <select id="cmbPaisNacionalidadOfendido" class="form-control"
                                                name="cmbPaisNacionalidadOfendido" required="">
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br/>

                                    <div class="col-lg-12">
                                        <button class="btn btn-primary">
                                            Agregar Nacionalidad
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br/>

                                    <div id="alert-nacionalidades" class="alert" style="display: none;">

                                    </div>
                                    <div class="clearfix"></div>
                                    <br/>


                                </div>
                            </form>


                            <div class="col-lg-12">
                                <table id="tableResultadosNacionalidadOfendido"
                                       class='table table-bordered tblGridAgrega' style="display: none;">
                                    <tr class='trGridAgrega'>
                                        <th>Nacioanlidad</th>
                                        <th>Eliminar</th>
                                    </tr>
                                    <tbody id="tabla-nacionalidades">
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="form-group col-lg-12">
                <div style="text-align: center">
                    <label class="caption">
                        <strong>LISTA DE OFENDIDOS</strong>
                    </label>
                </div>


                <table id="tableResultadosOfendido" class='table table-bordered tblGridAgrega'>
                    <tr class='trGridAgrega'>
                    <span class="label label-success">Registro en Edici&oacute;n.</span>
                    <th>Tipo Persona</th>
                    <th>Nombre</th>
                    <th>Genero</th>
                    <th>Eliminar</th>
                    </tr>
                    <tbody id="tabla-ofendidos">
                    </tbody>
                </table>
            </div>
        </div>
        <!--<div class="form-group col-lg-6">
            <button class="btn btn-success" onclick="saveStepTwo();">Guardar</button>
        </div>-->
    </div>
</div>
<!--</div>-->
</div>


<script type="text/javascript">

    $(function () {
        $("#txtFechaNacimientoOfendido").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY"
        });

        $("#fechaNacimientoTutorOfendido").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY"
        });
    });



    var timeoutMensaje = '';

    validaPersona = function () {
        if ($("#cmbTipoPersonaOfendido").val() == 1) {
            $('#divPersonaFisicaOfendido').show();
            $('#divPersonaMoralOfendido').hide();
            //$('#cmbPaisNacimientoOfendido').val('119').trigger('change');
        } else if ($("#cmbTipoPersonaOfendido").val() == 2 || $("#cmbTipoPersonaOfendido").val() == 3) {
            $('#divPersonaFisicaOfendido').hide();
            $('#divPersonaMoralOfendido').show();
            //$('#cmbPaisNacimientoMoralOfendido').val('119').trigger('change');
        }
    }

    activaEmbarazada = function (idcampo) {
        var valor = $("#" + idcampo).val();
        if (valor == 2) {
            $("#embarazada").prop('disabled', false);
            return;
        }
        $("#embarazada").attr('checked', false).prop('disabled', true);
    }


    validaCurp = function (campoValida) {
        if ($("#" + campoValida + "").val() != "") {
            var curpStr = $("#" + campoValida + "").val();
            var valid = "[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,�,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]";
            var validCurp = new RegExp(valid);
            var matchArray = curpStr.match(validCurp);
            if (matchArray == null) {
                alert('Por favor verifique su CURP');
                $("#" + campoValida + "").val("");
                return false;
            } else {
                fechaNacimiento(curpStr);
                return true;
            }
        }
    }

    fechaNacimiento = function (curp) {
        var m = curp.match(/^\w{4}(\w{2})(\w{2})(\w{2})/);
        console.log(m);
        var anio = parseInt(m[1]) + 1900;
        /*if ( anio <= 1915 ) {
         anio += 100;
         }*/
        console.log(anio);
        var mes = parseInt(m[2]);
        console.log(mes);
        var dia = parseInt(m[3]);
        console.log(dia);
        var fecha = dia + "/" + ((mes > 9) ? mes : '0' + mes) + "/" + anio;
        //$("#txtFechaNacimientoOfendido").datetimepicker('setValue', fecha).datetimepicker('update');
        //$("#txtFechaNacimientoOfendido").data("DateTimePicker").defaultDate(fecha);
        $("#txtFechaNacimientoOfendido").val(fecha).data("DateTimePicker").ignoreReadonly(false);

        $("#txtFechaNacimientoOfendido").trigger('blur');
    };

    validaRfc = function (campoValida) {
        if ($("#" + campoValida + "").val() != "") {
            var rfcStr = $("#" + campoValida + "").val();
            var regex = /^([A-Z|a-z|&amp;]{3}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)(\w{2})([A|a|0-9]{1})$|^([A-Z|a-z]{4}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)((\w{2})([A|a|0-9]{1})){0,3}$/;

            if (!regex.test(rfcStr)) {
                alert('Rfc no válido');
            }
        }
    }


    calcularEdad = function (fecha, campoFecha, campoEdad) {
        if ($("#" + campoFecha + "").val() != "") {
            if (fecha != "") {


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
                //if (edad <= 0 && edad < 18) {
                if (edad < 0) {
                    alert("Verifique su Fecha de Nacimiento, la fecha de nacimiento no puede ser mayor a la fecha actual");
                    $("#" + campoFecha + "").val("");
                    $("#" + campoFecha + "").focus();
                    $("#" + campoEdad + "").val("");
                    return false;
                } else {
                    $("#" + campoEdad + "").val(edad);
                    return true;
                }
            }
        }
    }

    comboTipoPersonaOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false", soloVictima: 'N'},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbTipoPersonaOfendido').empty();
                    $('#cmbTipoPersonaOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbTipoPersonaOfendido').append('<option value="' + object.cveTipoPersona + '">' + object.desTipoPersona + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Tipos Personas Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de tipos personas Ofendido:\n\n" + otroobj);
            }
        });
    };

    comboGruposEdnicos = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/gruposednicos/GruposednicosFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbGrupoEdnico').empty();
                    $('#cmbGrupoEdnico').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbGrupoEdnico').append('<option value="' + object.cveGrupoEdnico + '">' + object.desGrupoEdnico + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar grupos etnicos:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de grupos etnicos:\n\n" + otroobj);
            }
        });
    };

    comboDelincuenciaOrganizada = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/victimadeladelincuenciaorganizada/VictimadeladelincuenciaorganizadaFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false", activo: 'S'},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbVictimaDelincuenciaOrganizada').empty();
                    $('#cmbVictimaDelincuenciaOrganizada').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbVictimaDelincuenciaOrganizada').append('<option value="' + object.cveVictimaDeLaDelincuenciaOrganizada + '">' + object.desVictimaDeLaDelincuenciaOrganizada + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Victima Delincuencia Organiazada:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de victima de delincuencia oraganizada:\n\n" + otroobj);
            }
        });
    };

    comboViolenciaGenero = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/victimadeviolenciadegenero/VictimadeviolenciadegeneroFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false", activo: 'S'},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbVictimaViolenciaDeGenero').empty();
                    $('#cmbVictimaViolenciaDeGenero').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbVictimaViolenciaDeGenero').append('<option value="' + object.cveVictimaDeViolenciaDeGenero + '">' + object.desVictimaDeViolenciaDeGenero + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Violencia de Genero:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de violencia de genero:\n\n" + otroobj);
            }
        });
    };

    comboVictimaTrata = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/victimadetrata/VictimadetrataFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false", activo: 'S'},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbVictimaTrata').empty();
                    $('#cmbVictimaTrata').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbVictimaTrata').append('<option value="' + object.cveVictimaDeTrata + '">' + object.desVictimaDeTrata + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Victima de Trata:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de victima de trata:\n\n" + otroobj);
            }
        });
    };

    comboOrdenesProteccion = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/ordenesprotecciones/OrdenesproteccionesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false", activo: 'S'},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbOrdenProteccion').empty();
                    $('#cmbOrdenProteccion').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbOrdenProteccion').append('<option value="' + object.cveOrdenProteccion + '">' + object.desOrdenProteccion + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Ordenes de Protección:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de ordenes de protección:\n\n" + otroobj);
            }
        });
    };

    comboTipoDetencion = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposdetenciones/TiposdetencionesFacade.Class.php",
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
    comboGeneroOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbGeneroOfendido').empty();
                    $('#cmbGeneroOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbGeneroOfendido').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Genero Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Genero Ofendido:\n\n" + otroobj);
            }
        });
    };
    comboPaisNacionalidadOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbPaisNacionalidadOfendido').empty();
                    $('#cmbPaisNacionalidadOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbPaisNacionalidadOfendido').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar País Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de país Ofendido:\n\n" + otroobj);
            }
        });
    };
    comboPaisNacimientoOfendido = function (elemento) {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#' + elemento).empty();
                    $('#' + elemento).append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#' + elemento).append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar País Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de país Ofendido:\n\n" + otroobj);
            }
        });
    };

    comboEstadoNacimientoOfendido = function () {
        var tipoPersona = $("#cmbTipoPersonaOfendido").val();
        var cmbpais = "";
        var cmbestado = "";
        var cmbmunicipio = "";
        var txtestado = "";
        var txtmunicipio = "";
        if (tipoPersona == 0 || tipoPersona == 1) {
            cmbpais = "cmbPaisNacimientoOfendido";
            cmbestado = "cmbEstadoNacimientoOfendido";
            cmbmunicipio = "cmbMunicipioNacimientoOfendido";
            txtestado = "txtestadoNacimientoOfendido";
            txtmunicipio = "txtmunicipioNacimientoOfendido";
        } else if (tipoPersona == 2 || tipoPersona == 3) {
            cmbpais = "cmbPaisNacimientoMoralOfendido";
            cmbestado = "cmbEstadoNacimientoMoralOfendido";
            cmbmunicipio = "cmbMunicipioNacimientoMoralOfendido";
            txtestado = "txtestadoNacimientoMoralOfendido";
            txtmunicipio = "txtmunicipioNacimientoMoralOfendido";
        }

        $('#' + cmbestado).empty();
        $('#' + cmbestado).append('<option value="0">Seleccione una opci&oacute;n</option>');
        $('#' + cmbmunicipio).empty();
        $('#' + cmbmunicipio).append('<option value="0">Seleccione una opci&oacute;n</option>');
        $("#" + txtestado).val("");
        $("#" + txtmunicipio).val("");
        //si el País es México
        if ($('#' + cmbpais).val() == "119") {
            $("#" + cmbestado).show();
            $("#" + cmbmunicipio).show();
            $("#" + txtestado).hide();
            $("#" + txtmunicipio).hide();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false", cvePais: $('#' + cmbpais).val()},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#' + cmbestado).empty();
                        $('#' + cmbestado).append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#' + cmbestado).append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                            });


                            $('#' + cmbestado).val('15').trigger('change');


                        }
                    } catch (e) {
                        alert("Error al cargar Estado Ofendido:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la petición de Estado Ofendido:\n\n" + otroobj);
                }
            });
        } else {
            $("#" + cmbestado).hide();
            $("#" + cmbmunicipio).hide();
            $("#" + txtestado).show();
            $("#" + txtmunicipio).show();
        }
    };
    comboMunicipioNacimientoOfendido = function () {

        var tipoPersona = $("#cmbTipoPersonaOfendido").val();

        var cmbestado = "";
        var cmbmunicipio = "";

        if (tipoPersona == 1) {
            cmbestado = "cmbEstadoNacimientoOfendido";
            cmbmunicipio = "cmbMunicipioNacimientoOfendido";
        } else if (tipoPersona == 2 || tipoPersona == 3) {
            cmbestado = "cmbEstadoNacimientoMoralOfendido";
            cmbmunicipio = "cmbMunicipioNacimientoMoralOfendido";
        }
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false", cveEstado: $('#' + cmbestado).val()},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#' + cmbmunicipio).empty();
                    $('#' + cmbmunicipio).append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#' + cmbmunicipio).append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
                        });
                    } else {
                        alert('no se encontraron municipios');
                    }
                } catch (e) {
                    alert("Error al cargar Municipio Nacimiento Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Municipio Nacimiento Ofendido:\n\n" + otroobj);
            }
        });
    };
    comboEstudioOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/nivelesinstrucciones/NivelesinstruccionesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbEstudioOfendido').empty();
                    $('#cmbEstudioOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbEstudioOfendido').append('<option value="' + object.cveNivelInstruccion + '">' + object.desNivelInstruccion + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Estudio Ofendidos:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de Estudio ofendidos:\n\n" + otroobj);
            }
        });
    };
    comboEstadoCivilOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/estadosciviles/EstadoscivilesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbEstadoCivilOfendido').empty();
                    $('#cmbEstadoCivilOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbEstadoCivilOfendido').append('<option value="' + object.cveEstadoCivil + '">' + object.desEstadoCivil + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Estado Civil Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Estado Civil Ofendido:\n\n" + otroobj);
            }
        });
    };
    comboEspanolOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/espanol/EspanolFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbEspanolOfendido').empty();
                    $('#cmbEspanolOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbEspanolOfendido').append('<option value="' + object.cveEspanol + '">' + object.desEspanol + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Español Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Español Ofendido:\n\n" + otroobj);
            }
        });
    };
    comboAlfabetismoOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/alfabetismo/AlfabetismoFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbAlfabetismoOfendido').empty();
                    $('#cmbAlfabetismoOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbAlfabetismoOfendido').append('<option value="' + object.cveAlfabetismo + '">' + object.desAlfabetismo + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Alfabetismo Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Alfabetismo Ofendido:\n\n" + otroobj);
            }
        });
    };
    comboDielectoIndigenaOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/dialectoindigena/DialectoindigenaFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbDielectoIndigenaOfendido').empty();
                    $('#cmbDielectoIndigenaOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbDielectoIndigenaOfendido').append('<option value="' + object.cveDialectoIndigena + '">' + object.desDialectoIndigena + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Dialecto Indigena Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Dialecto Indigena Ofendido:\n\n" + otroobj);
            }
        });
    };

    comboFamiliaLinguisticaOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tipofamilialinguistica/TipofamilialinguisticaFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbFamiliaLinguisticaOfendido').empty();
                    $('#cmbFamiliaLinguisticaOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbFamiliaLinguisticaOfendido').append('<option value="' + object.cveTipoFamiliaLinguistica + '">' + object.desTipoFamiliaLinguistica + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Familia Lingüística Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Familia Lingüística Ofendido:\n\n" + otroobj);
            }
        });
    }

    comboOcupacionOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/ocupaciones/OcupacionesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbOcupacionOfendido').empty();
                    $('#cmbOcupacionOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbOcupacionOfendido').append('<option value="' + object.cveOcupacion + '">' + object.desOcupacion + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Ocupacion Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Ocupacion Ofendido:\n\n" + otroobj);
            }
        });
    };
    comboInterpreteOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/interpretes/InterpretesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbInterpreteOfendido').empty();
                    $('#cmbInterpreteOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbInterpreteOfendido').append('<option value="' + object.cveInterprete + '">' + object.desInterprete + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Interprete Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Interprete Ofendido:\n\n" + otroobj);
            }
        });
    };
    comboPsicofisicoOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/estadospsicofisicos/EstadospsicofisicosFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbPsicofisicoOfendido').empty();
                    $('#cmbPsicofisicoOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbPsicofisicoOfendido').append('<option value="' + object.cveEstadoPsicofisico + '">' + object.desEstadoPsicofisico + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Psicofisico Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Psicofisico Ofendido:\n\n" + otroobj);
            }
        });
    };
    comboPaisDomicilioOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbPaisDomicilioOfendido').empty();
                    $('#cmbPaisDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbPaisDomicilioOfendido').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar País Domicilio Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de País Domicilio Ofendido:\n\n" + otroobj);
            }
        });
    };
    comboEstadoDomicilioOfendido = function () {
        $('#cmbEstadoDomicilioOfendido').empty();
        $('#cmbEstadoDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
        $('#cmbMunicipioDomicilioOfendido').empty();
        $('#cmbMunicipioDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
        $("#estadoDomicilioOfendido").val("");
        $("#municipioDomicilioOfendido").val("");
        if ($('#cmbPaisDomicilioOfendido').val() == "119") { //Mexico
            $("#cmbEstadoDomicilioOfendido").show();
            $("#cmbMunicipioDomicilioOfendido").show();
            $("#estadoDomicilioOfendido").hide();
            $("#municipioDomicilioOfendido").hide();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false", cvePais: $('#cmbPaisDomicilioOfendido').val()},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbEstadoDomicilioOfendido').empty();
                        $('#cmbEstadoDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbEstadoDomicilioOfendido').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Estado Domicilio Ofendido:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la petición de Estado Domicilio Ofendido:\n\n" + otroobj);
                }
            });
        } else {
            $("#cmbEstadoDomicilioOfendido").hide();
            $("#cmbMunicipioDomicilioOfendido").hide();
            $("#estadoDomicilioOfendido").show();
            $("#municipioDomicilioOfendido").show();
        }
    };
    comboMunicipioDomicilioOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false", cveEstado: $('#cmbEstadoDomicilioOfendido').val()},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbMunicipioDomicilioOfendido').empty();
                    $('#cmbMunicipioDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbMunicipioDomicilioOfendido').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Municipio Domicilio Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Municipio Domicilio Ofendido:\n\n" + otroobj);
            }
        });
    };

    comboConvivenciaOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/convivencias/ConvivenciasFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbConvivenciaOfendido').empty();
                    $('#cmbConvivenciaOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbConvivenciaOfendido').append('<option value="' + object.cveConvivencia + '">' + object.desConvivencia + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Convivencia Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Convivencia Ofendido:\n\n" + otroobj);
            }
        });
    };

    comboTipoViviendaOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposdeviviendas/TiposdeviviendasFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbTipoViviendaOfendido').empty();
                    $('#cmbTipoViviendaOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbTipoViviendaOfendido').append('<option value="' + object.cveTipoDeVivienda + '">' + object.desTipoDeVivienda + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Tipo Vivienda Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Tipo Vivienda  Ofendido:\n\n" + otroobj);
            }
        });
    };

    comboTipoDefensorOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposdefensores/TiposdefensoresFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbTipoDefensorOfendido').empty();
                    $('#cmbTipoDefensorOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbTipoDefensorOfendido').append('<option value="' + object.cveTipoDefensor + '">' + object.desTipoDefensor + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Tipo Vivienda Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Tipo Vivienda Ofendido:\n\n" + otroobj);
            }
        });
    };

    comboGeneroTutorOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbGeneroTutorOfendido').empty();
                    $('#cmbGeneroTutorOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbGeneroTutorOfendido').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Genero Tutor Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Genero Tutor Ofendido:\n\n" + otroobj);
            }
        });
    };

    comboTipoTutorOfendido = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tipostutores/TipostutoresFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cmbTipoTutorOfendido').empty();
                    $('#cmbTipoTutorOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            $('#cmbTipoTutorOfendido').append('<option value="' + object.cveTipoTutor + '">' + object.desTipoTutor + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar Genero Tutor Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la petición de Genero Tutor Ofendido:\n\n" + otroobj);
            }
        });
    };

    //valida Domicilio
    validateDomiclio = function () {
        var mensaje = "";
        var error = true;

        if ($("#idOfendidoSolicitud").val() == "" || $("#idOfendidoSolicitud").val() == 0) {
            mensaje += "*Tienes que seleccionar un Ofendido\n";
            error = false;
        }

        if ($('#cmbPaisDomicilioOfendido').val() == "" || $('#cmbPaisDomicilioOfendido').val() == "0") {
            mensaje += "*Seleccione un pais \n";
            error = false;
        }

        if ($('#cmbPaisDomicilioOfendido').val() == "119") {
            if ($('#cmbEstadoDomicilioOfendido').val() == "" || $('#cmbEstadoDomicilioOfendido').val() == "0") {
                mensaje += "*Seleccione un estado \n";
                error = false;
            }
            if ($('#cmbMunicipioDomicilioOfendido').val() == "" || $('#cmbMunicipioDomicilioOfendido').val() == "0") {
                mensaje += "*Seleccione un municipio \n";
                error = false;
            }
        } else {
            if ($('#estadoDomicilioOfendido').val() == "" || $('#estadoDomicilioOfendido').val() == "0") {
                mensaje += "*Ingrese un estado \n";
                error = false;
            }
            if ($('#municipioDomicilioOfendido').val() == "" || $('#municipioDomicilioOfendido').val() == "0") {
                mensaje += "*Ingrese un municipio \n";
                error = false;
            }
        }
        if ($('#cmbConvivenciaOfendido').val() == "" || $('#cmbConvivenciaOfendido').val() == "0") {
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
        if ($('#cpDomicilio').val() == "" || $('#cpDomicilio').val() == "0") {
            mensaje += "*Ingrese C.P. \n";
            error = false;
        }
        if ($('#cpDomicilio').val().length < 5) {
            mensaje += "*El  C.P. debe ser de 5 dígitos\n";
            error = false;
        }
        if ($('#cmbTipoViviendaOfendido').val() == "" || $('#cmbTipoViviendaOfendido').val() == "0") {
            mensaje += "*Seleccione tipo de vivienda \n";
            error = false;
        }
        if (!error) {
            alert(mensaje);
        }
        return error;
    }

    //valida telefonos
    validateTel = function () {
        var mensaje = "";
        var error = true;

        if ($("#idOfendidoSolicitud").val() == "" || $("#idOfendidoSolicitud").val() == 0) {
            mensaje += "*Tienes que seleccionar un Ofendido\n";
            error = false;
        }

        if (($('#telefonoTel').val() == "" || $('#telefonoTel').val() == "0") && ($('#celTel').val() == "" || $('#celTel').val() == "0") && ($('#emailTel').val() == "" || $('#emailTel').val() == "0")) {
            mensaje += "*Ingrese tel\u00e9fono y/o celular y/o e.mail \n";
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
                    mensaje += "*Celular debe de tener 10 Digitos \n";
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

    //valida Defensor
    validateDefensor = function () {
        var mensaje = "";
        var error = true;

        if ($("#idOfendidoSolicitud").val() == "" || $("#idOfendidoSolicitud").val() == 0) {
            mensaje += "*Tienes que seleccionar un Ofendido\n";
            error = false;
        }

        if ($('#cmbTipoDefensorOfendido').val() == "" || $('#cmbTipoDefensorOfendido').val() == "0") {
            mensaje += "*Seleccione un tipo de defensor \n";
            error = false;
        }
        if ($('#nombreDefensor').val() == "" || $('#nombreDefensor').val() == "0") {
            mensaje += "*Ingrese el nombre del defensor  \n";
            error = false;
        }

        if ($("#telDefensor").val() != "") {

            if ($('#telDefensor').val().length != 10) {
                mensaje += "*Tel\u00e9fono  debe de tener 10 Digitos \n";
                error = false;
            }

        }
        if ($("#celDefensor").val() != "") {
            if ($('#celDefensor').val().length != 10) {
                mensaje += "*Celular debe de tener 10 Digitos \n";
                error = false;
            }
        }

        if ($('#emailDefensor').val() != "") {
            var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
            if (!regex.test($('#emailDefensor').val().trim())) {
                mensaje += "*EMail no valido \n";
                error = false;
            }
        }

        if (!error) {
            alert(mensaje);
        }
        return error;
    }

    //valida tutores
    validateTutor = function () {
        var mensaje = "";
        var error = true;

        if ($("#idOfendidoSolicitud").val() == "" || $("#idOfendidoSolicitud").val() == 0) {
            mensaje += "*Tienes que seleccionar un Ofendido\n";
            error = false;
        }

        if ($('#cmbTipoTutorOfendido').val() == "" || $('#cmbTipoTutorOfendido').val() == "0") {
            mensaje += "*Seleccione el tipo de tutor \n";
            error = false;
        }

        if ($('#nombreTutorOfendido').val() == "" || $('#nombreTutorOfendido').val() == "0") {
            mensaje += "*Ingrese nombre del tutor \n";
            error = false;
        }

        if ($('#paternoTutorOfendido').val() == "" || $('#paternoTutorOfendido').val() == "0") {
            mensaje += "*Ingrese apellido paterno del tutor \n";
            error = false;
        }
        if ($('#maternoTutorOfendido').val() == "" || $('#maternoTutorOfendido').val() == "0") {
            mensaje += "*Ingrese apellido materno del tutor \n";
            error = false;
        }

        if ($('#cmbGeneroTutorOfendido').val() == "" || $('#cmbGeneroTutorOfendido').val() == "0") {
            mensaje += "*Seleccione el Genero del tutor \n";
            error = false;
        }

        if ($('#fechaNacimientoTutorOfendido').val() == "" || $('#fechaNacimientoTutorOfendido').val() == "0") {
            mensaje += "*Seleccione la Fecha de Nacimiento de tutor \n";
            error = false;
        }

        if ($('#txtEdadTutorOfendido').val() == "" || $('#txtEdadTutorOfendido').val() == "0") {
            mensaje += "*Seleccione la Edad del tutor \n";
            error = false;
        }


        if (!error) {
            alert(mensaje);
        }

        return error;
    }

    //valida nacionalidad
    validateNacionalidad = function () {
        var mensaje = "";
        var error = true;

        if ($("#idOfendidoSolicitud").val() == "" || $("#idOfendidoSolicitud").val() == 0) {
            mensaje += "*Tienes que seleccionar un Ofendido\n";
            error = false;
        }

        if ($('#cmbPaisNacionalidadOfendido').val() == "" || $('#cmbPaisNacionalidadOfendido').val() == "0") {
            mensaje += "*Seleccione tipo de nacionalidad \n";
            error = false;
        }

        if (!error) {
            alert(mensaje);
        }
        return error;
    }

    //valida ofendido general
    validateOfendido = function () {
        var mensaje = "";
        var error = true;

        if ($("#cmbTipoPersonaOfendido").val() == "1") {
            if ($('#txtNombreOfendido').val() == "" || $('#txtNombreOfendido').val() == "0") {
                mensaje += "*Capture Nombre del Ofendido\n";
                error = false;
            }
            if ($('#txtPaternoOfendido').val() == "" || $('#txtPaternoOfendido').val() == "0") {
                mensaje += "*Capture apellido del Ofendido\n";
                error = false;
            }

            if ($('#cmbGeneroOfendido').val() == "" || $('#cmbGeneroOfendido').val() == "0") {
                mensaje += "*Seleccione Genero del Ofendido\n";
                error = false;
            }

            if ($("#txtRfcOfendido").val() != '') {

                var rfcStr = $("#txtRfcOfendido").val();
                var regex = /^([A-Z|a-z|&amp;]{3}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)(\w{2})([A|a|0-9]{1})$|^([A-Z|a-z]{4}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)((\w{2})([A|a|0-9]{1})){0,3}$/;

                if (!regex.test(rfcStr)) {
                    mensaje += "*Ingresa un RFC valido \n";
                    error = false;
                }

            }

            if ($('#txtFechaNacimientoOfendido').val() == "" || $('#txtFechaNacimientoOfendido').val() == "0") {
                mensaje += "*Capture la Fecha Nacimiento del Ofendido\n";
                error = false;
            }

            if ($('#txtEdadOfendido').val() == "" || $('#txtEdadOfendido').val() == "0") {
                mensaje += "*Capture la Edad del Ofendido\n";
                error = false;
            }

            if ($('#cmbPaisNacimientoOfendido').val() == "" || $('#cmbPaisNacimientoOfendido').val() == "0") {
                mensaje += "*Seleccione Pais de Nacimiento del Ofendido\n";
                error = false;
            }

            if ($('#cmbPaisNacimientoOfendido').val() == "119" && $('#cmbEstadoNacimientoOfendido').val() == "0") {
                mensaje += "*Seleccione Estado de Nacimiento del Ofendido\n";
                error = false;
            }

            if ($('#cmbPaisNacimientoOfendido').val() == "119" && $('#cmbEstadoNacimientoOfendido').val() != "0" && $('#cmbMunicipioNacimientoOfendido').val() == "0") {
                mensaje += "*Seleccione Municipio de Nacimiento del Ofendido\n";
                error = false;
            }

            if ($('#txtestadoNacimientoOfendido').val() == "" && $('#cmbPaisNacimientoOfendido').val() != "119" && $('#cmbPaisNacimientoOfendido').val() != "0") {
                mensaje += "*Capture Estado de Nacimiento del Ofendido\n";
                error = false;
            }

            if ($('#txtmunicipioNacimientoOfendido').val() == "" && $('#cmbPaisNacimientoOfendido').val() != "119" && $('#cmbPaisNacimientoOfendido').val() != "0") {
                mensaje += "*Capture Municipio de Nacimiento del Ofendido\n";
                error = false;
            }


            if ($('#cmbEstudioOfendido').val() == "" || $('#cmbEstudioOfendido').val() == "0") {
                mensaje += "*Selecciona el grado de Estudio del Ofendido\n";
                error = false;
            }

            if ($('#cmbEstadoCivilOfendido').val() == "" || $('#cmbEstadoCivilOfendido').val() == "0") {
                mensaje += "*Selecciona su Estado Civil\n";
                error = false;
            }

            if ($('#cmbOcupacionOfendido').val() == "" || $('#cmbOcupacionOfendido').val() == "0") {
                mensaje += "*Selecciona su Ocupación\n";
                error = false;
            }

            if ($('#cmbEspanolOfendido').val() == "" || $('#cmbEspanolOfendido').val() == "0") {
                mensaje += "*Selecciona si habla español\n";
                error = false;
            }

            if ($('#cmbAlfabetismoOfendido').val() == "" || $('#cmbAlfabetismoOfendido').val() == "0") {
                mensaje += "*Selecciona Alfabetismo\n";
                error = false;
            }

            if ($('#cmbDielectoIndigenaOfendido').val() == "" || $('#cmbDielectoIndigenaOfendido').val() == "0") {
                mensaje += "*Selecciona si Habla algún Dialecto Indigena\n";
                error = false;
            }

            if ($("#cmbFamiliaLinguisticaOfendido").val() == "" || $("#cmbFamiliaLinguisticaOfendido").val() == 0) {
                mensaje += "*Selecciona si pertenece a alguna Familia Lingüistica\n";
                error = false;
            }

            if ($('#cmbInterpreteOfendido').val() == "" || $('#cmbInterpreteOfendido').val() == "0") {
                mensaje += "*Selecciona si necesita Interprete\n";
                error = false;
            }

            if ($('#cmbPsicofisicoOfendido').val() == "" || $('#cmbPsicofisicoOfendido').val() == "0") {
                mensaje += "*Selecciona si es su estado Psicofisico\n";
                error = false;
            }

            if ($('#cmbVictimaDelincuenciaOrganizada').val() == "" || $('#cmbVictimaDelincuenciaOrganizada').val() == "0") {
                mensaje += "*Selecciona si es Victima de Delincuencia Organizada\n";
                error = false;
            }

            if ($('#cmbVictimaViolenciaDeGenero').val() == "" || $('#cmbVictimaViolenciaDeGenero').val() == "0") {
                mensaje += "*Selecciona si es Victima de Violencia de Genero\n";
                error = false;
            }

            if ($('#cmbVictimaTrata').val() == "" || $('#cmbVictimaTrata').val() == "0") {
                mensaje += "*Selecciona si es Victima de Trata\n";
                error = false;
            }

            if ($('#cmbOrdenProteccion').val() == "" || $('#cmbOrdenProteccion').val() == "0") {
                mensaje += "*Selecciona si tiene Orden de Protección\n";
                error = false;
            }

        } else if ($("#cmbTipoPersonaOfendido").val() == "2" || $("#cmbTipoPersonaOfendido").val() == "3") {
            if ($('#txtnombreMoralOfendido').val() == "" || $('#txtnombreMoralOfendido').val() == "0") {
                mensaje += "*Escribe el Nombre de la Persona Moral\n";
                error = false;
            }

            if ($("#txtRfcMoralOfendido").val() != "") {

                var rfcStr = $("#txtRfcMoralOfendido").val();
                var regex = /^([A-Z|a-z|&amp;]{3}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)(\w{2})([A|a|0-9]{1})$|^([A-Z|a-z]{4}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)((\w{2})([A|a|0-9]{1})){0,3}$/;

                if (!regex.test(rfcStr)) {
                    mensaje += "*Ingresa un RFC válido para la persona moral \n";
                    error = false;
                }

            }
            if ($("#cmbPaisNacimientoMoralOfendido").val() == "" || $("#cmbPaisNacimientoMoralOfendido").val() == 0) {
                mensaje += "*Selecciona el País de la Persona Moral\n";
                error = false;
            }

            if ($('#cmbPaisNacimientoMoralOfendido').val() == "119") {
                if ($("#cmbEstadoNacimientoMoralOfendido").val() == "" || $("#cmbEstadoNacimientoMoralOfendido").val() == 0) {
                    mensaje += "*Ingresa el Estado de la Persona Moral\n";
                    error = false;
                }
                if ($("#cmbMunicipioNacimientoMoralOfendido").val() == "" || $("#cmbMunicipioNacimientoMoralOfendido").val() == 0) {
                    mensaje += "*Ingresa el Municipio de la Persona Moral\n";
                    error = false;
                }
            } else {
                if ($("#txtestadoNacimientoMoralOfendido").val() == "" || $("#txtestadoNacimientoMoralOfendido").val() == 0) {
                    mensaje += "*Ingresa el Estado de la Persona Moral\n";
                    error = false;
                }
                if ($("#txtmunicipioNacimientoMoralOfendido").val() == "" || $("#txtmunicipioNacimientoMoralOfendido").val() == 0) {
                    mensaje += "*Ingresa el Municipio de la Persona Moral\n";
                    error = false;
                }
            }


        } else if ($("#cmbTipoPersonaOfendido").val() == "0") {
            mensaje += "*Seleccione el Tipo de Persona\n";
            error = false;
        }


        if (!error) {
            alert(mensaje);
        }
        return error;
    }

    showActivo = function (letra) {
        if (letra == 'S')
            return 'Activo';
        if (letra == 'N')
            return 'Inactivo';
    }


    cargarTablaOfendidos = function (idsolicitudaudiencia) {
        console.log("cargarTablaOfendidos");
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/ofendidossolicitudes/OfendidossolicitudesFacade.Class.php",
            data: {accion: 'consulta', idSolicitudAudiencia: idsolicitudaudiencia, activo: 'S'},
            dataType: "json",
            async: false,
            beforeSend: function () {
            },
            success: function (data) {
                try {
                    if (data.totalCount > 0) {
                        var html = "";
                        $.each(data.data, function (k, e) {
                            var success = ($("#idOfendidoSolicitud").val() == e.idOfendidoSolicitud) ? 'success' : '';
                            html += "<tr data-ofendido='" + e.idOfendidoSolicitud + "' class='trSeleccion " + success + "'>";
                            html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.desTipoPersona + "</td>";
                            if (e.cveTipoPersona == 1) {
                                html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.nombre + " " + e.paterno + " " + e.materno + "</td>";
                            } else if (e.cveTipoPersona == 2 || e.cveTipoPersona == 3) {
                                html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.nombreMoral + "</td>";
                            }
                            html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.desGenero + "</td>";
                            html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarOfendido(" + e.idOfendidoSolicitud + ");'></center></td>";

                            html += "</tr>";

                        });
                        $("#tabla-ofendidos").html(html);
                        $("#tableResultadosOfendido").show();

                    } else {
                        $("#idOfendidoSolicitud").val('');
                        $("#tableResultadosOfendido").hide();
                    }


                } catch (e) {
                    alert("Error al consultar Ofendidos:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error al consultar Ofendidos:" + otroobj);
            }
        });


    }

    cargarTablaDomicilios = function (idofendido) {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesFacade.Class.php",
            data: {accion: 'consultar', idOfendidoSolicitud: idofendido, activo: 'S'},
            dataType: "json",
            beforeSend: function () {
            },
            success: function (data) {
                try {
                    if (data.totalCount > 0) {

                        var html = "";
                        $.each(data.data, function (k, e) {
                            html += "<tr class='trSeleccion' data-domicilio='" + e.idDomicilioOfendidoSolicitud + "'>";
                            html += "<td style='cursor:pointer;' onclick='modificarDomicilio(" + JSON.stringify(e) + ");'>" + e.desPais + "</td>";
                            html += "<td style='cursor:pointer;' onclick='modificarDomicilio(" + JSON.stringify(e) + ");'>" + e.estado + "</td>";
                            html += "<td style='cursor:pointer;' onclick='modificarDomicilio(" + JSON.stringify(e) + ");'>" + e.municipio + "</td>";
                            html += "<td style='cursor:pointer;' onclick='modificarDomicilio(" + JSON.stringify(e) + ");'>" + e.direccion + "</td>";
                            html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarDomicilio(" + e.idDomicilioOfendidoSolicitud + ");'></center></td>";
                            html += "</tr>";
                        });
                        $("#tabla-domicilios").html(html);
                        $("#tableResultadosDomiciliosOfendido").show('fast');
                    } else {
                        $("#tableResultadosDomiciliosOfendido").hide('fast');

                    }


                } catch (e) {
                    alert("Error al consultar Domicilios del Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error al consultar Domicilios del Ofendido:" + otroobj);
            }
        });
    };


    $("#btnUbicar").on("click", function (e) {
        e.preventDefault();
        $("#ubicacion").empty();
        $("#ubicacion").show();
        $("#ubicacion").append('<iframe src="sigejupe/ofendidosSolicitudes/localizaOfendido.php" width="50%" height="300" id="frameDemo"></iframe>');
    });

    cargarTablaTelefonos = function (idofendido) {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/telefonosofendidossolicitudes/TelefonosofendidossolicitudesFacade.Class.php",
            data: {accion: 'consultar', idOfendidoSolicitud: idofendido, activo: 'S'},
            dataType: "json",
            beforeSend: function () {
            },
            success: function (data) {
                try {
                    if (data.totalCount > 0) {

                        var html = "";
                        $.each(data.data, function (k, e) {
                            html += "<tr class='trSeleccion' data-telefono='" + e.idTelefonoOfendidoSolicitud + "'>";
                            html += "<td style='cursor:pointer;' onclick='modificarTelefono(" + JSON.stringify(e) + ");'>" + e.telefono + "</td>";
                            html += "<td style='cursor:pointer;' onclick='modificarTelefono(" + JSON.stringify(e) + ");'>" + e.celular + "</td>";
                            html += "<td style='cursor:pointer;' onclick='modificarTelefono(" + JSON.stringify(e) + ");'>" + e.email + "</td>";
                            html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarTelefono(" + e.idTelefonoOfendidoSolicitud + ");'></center></td>";
                            html += "</tr>";
                        });
                        $("#tabla-telefonos").html(html);
                        $("#tableResultadosTelefonosOfendido").show('fast');
                    } else {
                        $("#tableResultadosTelefonosOfendido").hide('fast');

                    }


                } catch (e) {
                    alert("Error al consultar Teléfonos del Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error al consultar Teléfonos del Ofendido:" + otroobj);
            }
        });
    }

    cargarTablaDefensores = function (idofendido) {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/defensoresofendidossolicitudes/DefensoresofendidossolicitudesFacade.Class.php",
            data: {accion: 'consultar', idOfendidoSolicitud: idofendido, activo: 'S'},
            dataType: "json",
            beforeSend: function () {
            },
            success: function (data) {
                try {
                    if (data.totalCount > 0) {

                        var html = "";
                        $.each(data.data, function (k, e) {
                            html += "<tr class='trSeleccion' data-defensor='" + e.idDefensorOfendidoSolicitud + "'>";
                            html += "<td style='cursor:pointer;' onclick='modificarDefensor(" + JSON.stringify(e) + ");'>" + e.desTipoDefensor + "</td>";
                            html += "<td style='cursor:pointer;' onclick='modificarDefensor(" + JSON.stringify(e) + ");'>" + e.nombre + "</td>";
                            html += "<td style='cursor:pointer;' onclick='modificarDefensor(" + JSON.stringify(e) + ");'>" + e.telefono + "</td>";
                            html += "<td style='cursor:pointer;' onclick='modificarDefensor(" + JSON.stringify(e) + ");'>" + e.celular + "</td>";
                            html += "<td style='cursor:pointer;' onclick='modificarDefensor(" + JSON.stringify(e) + ");'>" + e.email + "</td>";
                            html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarDefensor(" + e.idDefensorOfendidoSolicitud + ");'></center></td>";
                            html += "</tr>";
                        });
                        $("#tabla-defensores").html(html);
                        $("#tableResultadosDefensoresOfendido").show('fast');
                    } else {
                        $("#tableResultadosDefensoresOfendido").hide('fast');

                    }


                } catch (e) {
                    alert("Error al consultar Defensores del Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error al consultar Defensores del Ofendido:" + otroobj);
            }
        });
    }

    cargarTablaTutores = function (idofendido) {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tutoresofendidos/TutoresofendidosFacade.Class.php",
            data: {accion: 'consultar', idOfendidoSolicitud: idofendido, activo: 'S'},
            dataType: "json",
            beforeSend: function () {
            },
            success: function (data) {
                try {
                    if (data.totalCount > 0) {

                        var html = "";
                        $.each(data.data, function (k, e) {
                            html += "<tr class='trSeleccion' data-tutor='" + e.idTutorOfendido + "'>";
                            html += "<td style='cursor:pointer;' onclick='modificarTutor(" + JSON.stringify(e) + ");'>" + e.desTipoTutor + "</td>";
                            html += "<td style='cursor:pointer;' onclick='modificarTutor(" + JSON.stringify(e) + ");'>" + e.nombre + " " + e.paterno + " " + e.materno + "</td>";
                            html += "<td style='cursor:pointer;' onclick='modificarTutor(" + JSON.stringify(e) + ");'>" + e.desGenero + "</td>";
                            html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarTutor(" + e.idTutorOfendido + ");'></center></td>";
                            html += "</tr>";
                        });
                        $("#tabla-tutores").html(html);
                        $("#tableResultadosTutoresOfendido").show('fast');
                    } else {
                        $("#tableResultadosTutoresOfendido").hide('fast');

                    }


                } catch (e) {
                    alert("Error al consultar Tutores del Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error al consultar Tutores del Ofendido:" + otroobj);
            }
        });
    }

    cargarTablaNacionalidades = function (idofendido) {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesFacade.Class.php",
            data: {accion: 'consultar', idOfendidoSolicitud: idofendido, activo: 'S'},
            dataType: "json",
            beforeSend: function () {
            },
            success: function (data) {
                try {
                    if (data.totalCount > 0) {

                        var html = "";
                        $.each(data.data, function (k, e) {
                            html += "<tr class='trSeleccion' data-nacionalidad='" + e.idNacionalidadOfendidoSolicitud + "'>";
                            html += "<td>" + e.desPais + "</td>";
                            html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarNacionalidad(" + e.idNacionalidadOfendidoSolicitud + ")'></center></td>";
                            html += "</tr>";
                        });
                        $("#tabla-nacionalidades").html(html);
                        $("#tableResultadosNacionalidadOfendido").show('fast');
                    } else {
                        $("#tableResultadosNacionalidadOfendido").hide('fast');

                    }


                } catch (e) {
                    alert("Error al consultar Nacionalidades del Ofendido:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error al consultar Nacionalides del Ofendido:" + otroobj);
            }
        });
    }

    //acciones para editar

    //editar datos de ofendido
    //al seleccionar el ofendido a editar se deben cargar sus datos personales y todos los datos que correspondan a dicho
    //ofendido como direcicones nacionalidades etc.

    modificarOfendido = function (ofendido) {
        console.log(ofendido);
        $("#idOfendidoSolicitud").val(ofendido.idOfendidoSolicitud);
        $("#tabla-ofendidos > tr").removeClass('success');
        $("tr").filter('[data-ofendido="' + ofendido.idOfendidoSolicitud + '"]').addClass('success');

        $('#myTab3 a:first').tab('show');

        //limpiar todos los formularios
        $("#limpiar-domicilio").trigger('click');
        $("#limpiar-telefono").trigger('click');
        $("#limpiar-defensor").trigger('click');
        $("#limpiar-tutores").trigger('click');

        //cargar datos generales del ofendido

        //cargar tabla domicilios
        cargarTablaDomicilios(ofendido.idOfendidoSolicitud);
        //cargar tabla telefonos
        cargarTablaTelefonos(ofendido.idOfendidoSolicitud);
        //cargar tabla defensores
        cargarTablaDefensores(ofendido.idOfendidoSolicitud);
        //cargar tabla tutores del ofendido
        cargarTablaTutores(ofendido.idOfendidoSolicitud);
        //cargar tabla nacionalidades del ofendido
        cargarTablaNacionalidades(ofendido.idOfendidoSolicitud);

        //cargar datos en el formulario
        $("#cmbTipoPersonaOfendido").val(ofendido.cveTipoPersona).change();
        if (ofendido.cveTipoPersona == 1) {
            $("#txtNombreOfendido").val(ofendido.nombre);
            $("#txtPaternoOfendido").val(ofendido.paterno);
            $("#txtMaternoOfendido").val(ofendido.materno);
            $("#cmbGeneroOfendido").val(ofendido.cveGenero);
            if (ofendido.cveGenero == 2) {
                $("#embarazada").prop('disabled', false);
                if (ofendido.embarazada == 'S') {
                    $("#embarazada").prop('checked', true);
                } else {
                    $("#embarazada").prop('checked', false);
                }
            } else {
                $("#embarazada").prop('checked', false);
                $("#embarazada").prop('disabled', true);
            }
            $("#txtRfcOfendido").val(ofendido.rfc);
            $("#txtCurpOfendido").val(ofendido.curp);
            $("#txtFechaNacimientoOfendido").val(ofendido.fechaNacimiento);
            $("#txtEdadOfendido").val(ofendido.edad);

            $("#cmbPaisNacimientoOfendido").val(ofendido.cvePaisNacimiento).change();

            if (ofendido.cvePaisNacimiento == 119) {
                $("#cmbEstadoNacimientoOfendido").val(ofendido.cveEstadoNacimiento).change();
                $("#cmbMunicipioNacimientoOfendido").val(ofendido.cveMunicipioNacimiento);
            } else {
                $("#txtestadoNacimientoOfendido").val(ofendido.estadoNacimiento);
                $("#txtmunicipioNacimientoOfendido").val(ofendido.municipioNacimiento);
            }

            $("#cmbEstudioOfendido").val(ofendido.cveNivelInstruccion);
            $("#cmbEstadoCivilOfendido").val(ofendido.cveEstadoCivil);
            $("#cmbOcupacionOfendido").val(ofendido.cveOcupacion);
            $("#cmbEspanolOfendido").val(ofendido.cveEspanol);
            $("#cmbAlfabetismoOfendido").val(ofendido.cveAlfabetismo);
            $("#cmbDielectoIndigenaOfendido").val(ofendido.cveDialectoIndigena);
            $("#cmbFamiliaLinguisticaOfendido").val(ofendido.cveTipoFamiliaLinguistica);
            $("#cmbInterpreteOfendido").val(ofendido.cveInterprete);
            $("#cmbPsicofisicoOfendido").val(ofendido.cveEstadoPsicofisico);
            $("#cmbGrupoEdnico").val(ofendido.cveGrupoEdnico);
            $("#cmbVictimaViolenciaDeGenero").val(ofendido.cveVictimaDeViolenciaDeGenero);
            $("#cmbVictimaTrata").val(ofendido.cveVictimaDeTrata);
            $("#cmbVictimaDelincuenciaOrganizada").val(ofendido.cveVictimaDeLaDelincuenciaOrganizada);
            $("#cmbOrdenProteccion").val(ofendido.cveOrdenProteccion);
            $("#numHijos").val(ofendido.numHijos);

            if (ofendido.desaparecido == 'S') {
                $("#desaparecido").prop('checked', true);
            } else if (ofendido.desaparecido == 'N') {
                $("#desaparecido").prop('checked', false);
            }


        } else if (ofendido.cveTipoPersona == 2 || ofendido.cveTipoPersona == 3) {
            $("#txtnombreMoralOfendido").val(ofendido.nombreMoral);
            $("#txtRfcMoralOfendido").val(ofendido.rfc);

            $("#cmbPaisNacimientoMoralOfendido").val(ofendido.cvePaisNacimiento).change();

            if (ofendido.cvePaisNacimiento == 119) {
                $("#cmbEstadoNacimientoMoralOfendido").val(ofendido.cveEstadoNacimiento).change();
                $("#cmbMunicipioNacimientoMoralOfendido").val(ofendido.cveMunicipioNacimiento);
            } else {
                $("#txtestadoNacimientoMoralOfendido").val(ofendido.estadoNacimiento);
                $("#txtmunicipioNacimientoMoralOfendido").val(ofendido.municipioNacimiento);
            }
        }

        $("#guardar-general-ofendido").text("Editar Datos Generales del Ofendido");
    }

    modificarDomicilio = function (domicilio) {
        console.log(domicilio);
        $("#tabla-domicilios > tr").removeClass('success');
        $("tr").filter('[data-domicilio="' + domicilio.idDomicilioOfendidoSolicitud + '"]').addClass('success');
        $("#form-domicilios-ofendido #cmbPaisDomicilioOfendido").val(domicilio.cvePais).change();

        if (domicilio.cvePais == '119') {
            $("#form-domicilios-ofendido #cmbEstadoDomicilioOfendido").val(domicilio.cveEstado).change();
            $("#form-domicilios-ofendido #cmbMunicipioDomicilioOfendido").val(domicilio.cveMunicipio);
        } else {
            $("#form-domicilios-ofendido #estadoDomicilioOfendido").val(domicilio.estado);
            $("#form-domicilios-ofendido #municipioDomicilioOfendido").val(domicilio.municipio);
        }

        $("#form-domicilios-ofendido #cmbConvivenciaOfendido").val(domicilio.cveConvivencia);
        $("#form-domicilios-ofendido #direccionDomicilio").val(domicilio.direccion);
        $("#form-domicilios-ofendido #coloniaDireccion").val(domicilio.colonia);
        $("#form-domicilios-ofendido #numeroIntDomicilio").val(domicilio.numInterior);
        $("#form-domicilios-ofendido #numeroExtDomicilio").val(domicilio.numExterior);
        $("#form-domicilios-ofendido #cpDomicilio").val(domicilio.cp);
        $("#form-domicilios-ofendido #latitud").val(domicilio.latitud);
        $("#form-domicilios-ofendido #longitud").val(domicilio.longitud);
        $("#btnUbicar").trigger("click");

        if (domicilio.recidenciaHabitual == 'S') {
            $('#cbResidenciaHabitualOfendido').prop('checked', true);

        } else if (domicilio.recidenciaHabitual == 'N') {
            $('#cbResidenciaHabitualOfendido').prop('checked', false);
        }

        $("#form-domicilios-ofendido #cmbTipoViviendaOfendido").val(domicilio.cveTipoDeVivienda);
        $("#form-domicilios-ofendido #idDomicilioOfendidoSolicitud").val(domicilio.idDomicilioOfendidoSolicitud);
        $("#form-domicilios-ofendido #activo").val(domicilio.activo);

        $("#btn-agregar-modificar-domicilio").text('Editar Domicilio del Ofendido');
    }

    modificarTelefono = function (telefono) {
        console.log(telefono);
        $("#tabla-telefonos > tr").removeClass('success');
        $("tr").filter('[data-telefono="' + telefono.idTelefonoOfendidoSolicitud + '"]').addClass('success');

        $("#form-telefonos-ofendido #telefonoTel").val(telefono.telefono);
        $("#form-telefonos-ofendido #celTel").val(telefono.celular);
        $("#form-telefonos-ofendido #emailTel").val(telefono.email);
        $("#form-telefonos-ofendido #activo").val(telefono.activo);
        $("#form-telefonos-ofendido #idTelefonoOfendidoSolicitud").val(telefono.idTelefonoOfendidoSolicitud);

        $("#btn-agregar-modificar-telefono").text('Editar Teléfono');


    }

    modificarDefensor = function (defensor) {
        console.log(defensor);
        $("#tabla-defensores > tr").removeClass('success');
        $("tr").filter('[data-defensor="' + defensor.idDefensorOfendidoSolicitud + '"]').addClass('success');
        $("#form-defensores-ofendido #cmbTipoDefensorOfendido").val(parseInt(defensor.cveTipoAsesor));
        $("#form-defensores-ofendido #nombreDefensor").val(defensor.nombre);
        $("#form-defensores-ofendido #telDefensor").val(defensor.telefono);
        $("#form-defensores-ofendido #celDefensor").val(defensor.celular);
        $("#form-defensores-ofendido #emailDefensor").val(defensor.email);

        $("#form-defensores-ofendido #idDefensorOfendidoSolicitud").val(defensor.idDefensorOfendidoSolicitud);
        $("#form-defensores-ofendido #activo").val(defensor.activo);


        $("#btn-agregar-modificar-defensor").text('Editar Defensor');
    }

    modificarTutor = function (tutor) {
        $("#tabla-tutores > tr").removeClass('success');
        $("tr").filter('[data-tutor="' + tutor.idTutorOfendido + '"]').addClass('success');
        $("#form-tutores-ofendido #idTutorOfendido").val(parseInt(tutor.idTutorOfendido));
        $("#form-tutores-ofendido #cmbTipoTutorOfendido").val(parseInt(tutor.cveTipoTutor));
        $("#form-tutores-ofendido #nombreTutorOfendido").val(tutor.nombre);
        $("#form-tutores-ofendido #paternoTutorOfendido").val(tutor.paterno);
        $("#form-tutores-ofendido #maternoTutorOfendido").val(tutor.materno);
        $("#form-tutores-ofendido #cmbGeneroTutorOfendido").val(tutor.cveGenero);
        $("#form-tutores-ofendido #fechaNacimientoTutorOfendido").val(tutor.fechaNacimiento);
        $("#form-tutores-ofendido #txtEdadTutorOfendido").val(tutor.edad);
        $("#form-tutores-ofendido #activo").val(tutor.activo);
        $("#btn-agregar-modificar-tutor").text('Editar Tutor/Representante');
    }


    //funciones para eliminar registros

    eliminarOfendido = function (idofendido) {
        $("tr").filter('[data-ofendido="' + idofendido + '"]').removeClass('success').addClass('danger');
        var confirmEliminar = confirm('¿Seguro quieres eliminar el Ofendido seleccionado junto con todos sus registros?');
        if (confirmEliminar) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ofendidossolicitudes/OfendidossolicitudesFacade.Class.php",
                data: {accion: 'eliminar', idOfendidoSolicitud: idofendido},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {
                        $("#alert-general-ofendido").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();
                        if (data.status == 'ok') {
                            cargarTablaOfendidos(data.data.idSolicitudAudiencia);
                            $("#idOfendidoSolicitud").val('');
                            $("#limpiar-general-ofendido").trigger('click');
                            $("#tableResultadosDomiciliosOfendido").hide();
                            $("#limpiar-domicilio").trigger('click');
                            $("#tableResultadosTelefonosOfendido").hide();
                            $("#limpiar-telefono").trigger('click');
                            $("#tableResultadosDefensoresOfendido").hide();
                            $("#limpiar-defensor").trigger('click');
                            $("#tableResultadosTutoresOfendido").hide();
                            $("#limpiar-tutores").trigger('click');
                            $("#tableResultadosNacionalidadOfendido").hide();
                        }

                        setTimeout(function () {
                            $("#alert-general-ofendido").hide();
                        }, 3000);

                    } catch (e) {
                        alert("Error al eliminar el Ofendido seleccionado:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al eliminar el Ofendido seleccionado:" + otroobj);
                }
            });
        } else {
            $("tr").filter('[data-ofendido="' + idofendido + '"]').removeClass('danger');
        }
    }

    eliminarDomicilio = function (iddomicilio) {
        $("tr").filter('[data-domicilio="' + iddomicilio + '"]').removeClass('success').addClass('danger');
        var confirmEliminar = confirm('¿Seguro quieres eliminar el Domicilio seleccionado?');
        if (confirmEliminar) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesFacade.Class.php",
                data: {accion: 'eliminar', idDomicilioOfendidoSolicitud: iddomicilio},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {

                        $("#alert-domicilios").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                        if (data.status == 'ok') {
                            cargarTablaDomicilios($("#idOfendidoSolicitud").val());
                        }

                        setTimeout(function () {
                            $("#alert-domicilios").hide();
                        }, 3000);

                    } catch (e) {
                        alert("Error al eliminar el Domicilio del Ofendido:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al eliminar el Domicilio del Ofendido:" + otroobj);
                }
            });
        } else {
            $("tr").filter('[data-domicilio="' + iddomicilio + '"]').removeClass('danger');
        }
    }

    eliminarTelefono = function (idtelefono) {
        $("tr").filter('[data-telefono="' + idtelefono + '"]').removeClass('success').addClass('danger');
        var confirmEliminar = confirm('¿Seguro quieres eliminar el Teléfono seleccionado?');
        if (confirmEliminar) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/telefonosofendidossolicitudes/TelefonosofendidossolicitudesFacade.Class.php",
                data: {accion: 'eliminar', idTelefonoOfendidoSolicitud: idtelefono},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {
                        $("#alert-telefonos").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                        if (data.status == 'ok') {
                            cargarTablaTelefonos($("#idOfendidoSolicitud").val());
                        }

                        setTimeout(function () {
                            $("#alert-telefonos").hide();
                        }, 3000);


                    } catch (e) {
                        alert("Error al eliminar el Teléfono del Ofendido:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al eliminar el Teléfono del Ofendido:" + otroobj);
                }
            });
        } else {
            $("tr").filter('[data-telefono="' + idtelefono + '"]').removeClass('danger');
        }
    }

    eliminarDefensor = function (iddefensor) {
        $("tr").filter('[data-defensor="' + iddefensor + '"]').removeClass('success').addClass('danger');
        var confirmEliminar = confirm('¿Seguro quieres eliminar el Defensor seleccionado?');
        if (confirmEliminar) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/defensoresofendidossolicitudes/DefensoresofendidossolicitudesFacade.Class.php",
                data: {accion: 'eliminar', idDefensorOfendidoSolicitud: iddefensor},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {

                        $("#alert-defensores").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();


                        if (data.status == 'ok') {
                            cargarTablaDefensores($("#idOfendidoSolicitud").val());
                        }

                        setTimeout(function () {
                            $("#alert-defensores").hide();
                        }, 3000);

                    } catch (e) {
                        alert("Error al eliminar el Defensor del Ofendido:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al eliminar el Defensor del Ofendido:" + otroobj);
                }
            });
        } else {
            $("tr").filter('[data-defensor="' + iddefensor + '"]').removeClass('danger');
        }
    }

    eliminarTutor = function (idtutor) {
        $("tr").filter('[data-tutor="' + idtutor + '"]').removeClass('success').addClass('danger');
        var confirmEliminar = confirm('¿Seguro quieres eliminar el Tutor seleccionado?');
        if (confirmEliminar) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tutoresofendidos/TutoresofendidosFacade.Class.php",
                data: {accion: 'eliminar', idTutorOfendido: idtutor},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {
                        $("#alert-tutores").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();
                        if (data.status == 'ok') {
                            cargarTablaTutores($("#idOfendidoSolicitud").val());
                        }
                        setTimeout(function () {
                            $("#alert-tutores").hide();
                        }, 3000);

                    } catch (e) {
                        alert("Error al eliminar el Tutor del Ofendido:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al eliminar el Tutor del Ofendido:" + otroobj);
                }
            });
        } else {
            $("tr").filter('[data-tutor="' + idtutor + '"]').removeClass('danger');
        }
    }

    eliminarNacionalidad = function (idnacionalidad) {
        $("tr").filter('[data-nacionalidad="' + idnacionalidad + '"]').removeClass('success').addClass('danger');
        var confirmEliminar = confirm('¿Seguro quieres eliminar la Nacionalidad seleccionada?');
        if (confirmEliminar) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesFacade.Class.php",
                data: {accion: 'eliminar', idNacionalidadOfendidoSolicitud: idnacionalidad, activo: 'N'},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {

                    try {
                        $("#alert-nacionalidades").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                        if (data.status == 'ok') {
                            cargarTablaNacionalidades($("#idOfendidoSolicitud").val());
                        }

                        setTimeout(function () {
                            $("#alert-nacionalidades").hide();
                        }, 3000);

                    } catch (e) {
                        alert("Error al eliminar la Nacionalidad del Ofendido:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al eliminar la Nacionalid del Ofendido:" + otroobj);
                }
            });
        } else {
            $("tr").filter('[data-nacionalidad="' + idnacionalidad + '"]').removeClass('danger');
        }

    }


    $(function () {

        $('#numHijos').validaCampo('0123456789');
        $('#cpDomicilio').validaCampo('0123456789');
        $('#telefonoTel').validaCampo('0123456789');
        $('#celTel').validaCampo('0123456789');
        $('#telDefensor').validaCampo('0123456789');
        $('#celDefensor').validaCampo('0123456789');
        comboTipoPersonaOfendido();
        comboTipoDetencion();
        comboGeneroOfendido();
        comboPaisNacimientoOfendido("cmbPaisNacimientoOfendido");
        comboPaisNacimientoOfendido("cmbPaisNacimientoMoralOfendido");
        comboEstudioOfendido();
        comboEstadoCivilOfendido();
        comboEspanolOfendido();
        comboAlfabetismoOfendido();
        comboDielectoIndigenaOfendido();
        comboFamiliaLinguisticaOfendido();
        comboOcupacionOfendido();
        comboInterpreteOfendido();
        comboGruposEdnicos();
        comboDelincuenciaOrganizada();
        comboViolenciaGenero();
        comboVictimaTrata();
        comboOrdenesProteccion();
        comboPsicofisicoOfendido();
        comboPaisDomicilioOfendido();
        comboEstadoDomicilioOfendido();
        comboConvivenciaOfendido();
        comboTipoViviendaOfendido();
        comboTipoDefensorOfendido();
        comboGeneroTutorOfendido();
        comboTipoTutorOfendido();
        comboPaisNacionalidadOfendido();
        console.log("inicio");
        cargarTablaOfendidos($("#IdSolicitudAudiencia").val());

        if ($("#idOfendidoSolicitud").val() != '') {
            cargarTablaDomicilios($("#idOfendidoSolicitud").val());
            cargarTablaTelefonos($("#idOfendidoSolicitud").val());
            cargarTablaDefensores($("#idOfendidoSolicitud").val());
            cargarTablaTutores($("#idOfendidoSolicitud").val());
            cargarTablaNacionalidades($("#idOfendidoSolicitud").val());
        }

        $("#form-ofendido-general").on('submit', function (e) {
            e.preventDefault();
            if (validateOfendido()) {
                var ofendido = $(this).serialize() + '&idSolicitudAudiencia=' + $('#IdSolicitudAudiencia').val();

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/ofendidossolicitudes/OfendidossolicitudesFacade.Class.php",
                    data: ofendido,
                    dataType: "json",
                    beforeSend: function () {
                    },
                    success: function (data) {
                        try {
                            if (data.status == "ok") {

                                $("#alert-general-ofendido").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                //$("#form-ofendido-general")[0].reset();
                                $("#idOfendidoSolicitud").val(data.data.idOfendidoSolicitud);
                                $("#guardar-general-ofendido").text("Editar Datos Generales del Ofendido");
                                cargarTablaOfendidos(data.data.idSolicitudAudiencia);
                                cargarTablaDomicilios(data.data.idOfendidoSolicitud);
                                cargarTablaTelefonos(data.data.idOfendidoSolicitud);
                                cargarTablaDefensores(data.data.idOfendidoSolicitud);
                                cargarTablaTutores(data.data.idOfendidoSolicitud);
                                cargarTablaNacionalidades(data.data.idOfendidoSolicitud);
                            } else {
                                var mensajes = "";
                                mensajes += "<ul>";
                                $.each(data.mensaje, function (k, e) {
                                    mensajes += "<li><strong>" + e + "</strong></li>";
                                });
                                mensajes += "</ul>";

                                $("#alert-general-ofendido").removeClass('alert-success').addClass('alert-warning').html(mensajes).show();

                            }

                            setTimeout(function () {
                                $("#alert-general-ofendido").hide();
                            }, 3000);

                        } catch (e) {
                            alert("Error al guardar información general del Ofendido:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error al guardar información general del Ofendido:" + otroobj);
                    }
                });

            }
        });
        //termina agregar ofendido

        //agregar domicilio(s) del ofendido

        $("#form-domicilios-ofendido").on('submit', function (e) {
            e.preventDefault();
            if (validateDomiclio()) {
                var domicilio = $(this).serialize() + '&idOfendidoSolicitud=' + $('#idOfendidoSolicitud').val();

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesFacade.Class.php",
                    data: domicilio,
                    dataType: "json",
                    beforeSend: function () {
                    },
                    success: function (data) {

                        try {
                            if (data.status == "ok") {
                                $("#alert-domicilios").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                $("#idDomicilioOfendidoSolicitud").val('');
                                $("#form-domicilios-ofendido")[0].reset();
                                $("#btn-agregar-modificar-domicilio").text('Agregar Domicilio del Ofendido');
                                cargarTablaDomicilios(data.data.idOfendidoSolicitud);
                            } else {
                                var mensajes = "";
                                mensajes += '<ul>';
                                $.each(data.mensaje, function (k, e) {

                                    mensajes += '<li><strong>' + e + '</strong></li>';
                                });
                                mensajes += '</ul>';
                                $("#alert-domicilios").removeClass('alert-success').addClass('alert-warning').html(mensajes).show();

                            }

                            setTimeout(function () {
                                $("#alert-domicilios").hide();
                            }, 4000);

                        } catch (e) {
                            alert("Error al guardar Domicilio del Ofendidoo:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        console.log(objeto);
                        console.log(quepaso);
                        console.log(otroobj);
                        alert("Server : Error al guardar Domicilio del Ofendido:" + otroobj);
                    }
                });
            }
        });

        //termina agregar domicilio(s) del ofendido


        //agregar telefonos(s) del ofendido
        $("#form-telefonos-ofendido").on('submit', function (e) {
            e.preventDefault();
            if (validateTel()) {
                var telefono = $(this).serialize() + '&idOfendidoSolicitud=' + $('#idOfendidoSolicitud').val();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/telefonosofendidossolicitudes/TelefonosofendidossolicitudesFacade.Class.php",
                    data: telefono,
                    dataType: "json",
                    beforeSend: function () {
                    },
                    success: function (data) {
                        try {
                            if (data.status == "ok") {

                                $("#alert-telefonos").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                $("#idTelefonoOfendidoSolicitud").val('');
                                $("#form-telefonos-ofendido")[0].reset();
                                $("#btn-agregar-modificar-telefono").text('Agregar Teléfono');
                                cargarTablaTelefonos(data.data.idOfendidoSolicitud);
                            } else {
                                var mensajes = "";
                                $.each(data.mensaje, function (k, e) {
                                    mensajes += e + "\n";
                                });

                                $("#alert-telefonos").removeClass('alert-success').addClass('alert-warning').html('<strong>' + data.mensaje + '</strong>').show();

                            }

                            setTimeout(function () {
                                $("#alert-telefonos").hide();
                            }, 3000);


                        } catch (e) {
                            alert("Error al guardar el Teléfono del Ofendido:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error al guardar el Teléfono del Ofendido:" + otroobj);
                    }
                });
            }
        });
        //termina agregar telefono(s) del ofendido


        //inicia agregar defensores ofendidos
        $("#form-defensores-ofendido").on('submit', function (e) {
            e.preventDefault();
            if (validateDefensor()) {
                var defensor = $(this).serialize() + '&idOfendidoSolicitud=' + $('#idOfendidoSolicitud').val();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/defensoresofendidossolicitudes/DefensoresofendidossolicitudesFacade.Class.php",
                    data: defensor,
                    dataType: "json",
                    beforeSend: function () {
                    },
                    success: function (data) {
                        try {

                            if (data.status == "ok") {
                                $("#alert-defensores").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();
                                $("#idDefensorOfendidoSolicitud").val('');
                                $("#form-defensores-ofendido")[0].reset();
                                $("#btn-agregar-modificar-defensor").text('Agregar Defensor');
                                cargarTablaDefensores(data.data.idOfendidoSolicitud);
                            } else {
                                var mensajes = "";
                                $.each(data.mensaje, function (k, e) {
                                    mensajes += '<ul>';
                                    mensajes += '<li><strong>' + e + '</strong></li>';
                                    mensajes += '</ul>';
                                });
                                $("#alert-defensores").removeClass('alert-success').addClass('alert-warning').html(mensajes).show();
                            }

                            setTimeout(function () {
                                $("#alert-defensores").hide();
                            }, 4000);

                        } catch (e) {
                            alert("Error al guardar el Defensor del del Ofendido:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error al guardar el Defensor del Ofendido:" + otroobj);
                    }
                });
            }
        });
        //termina agregar defensores ofendidos

        //inicia agregar tutor/representante del ofendido
        $("#form-tutores-ofendido").on('submit', function (e) {
            e.preventDefault();
            if (validateTutor()) {
                var tutor = $(this).serialize() + '&idOfendidoSolicitud=' + $('#idOfendidoSolicitud').val();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tutoresofendidos/TutoresofendidosFacade.Class.php",
                    data: tutor,
                    dataType: "json",
                    beforeSend: function () {
                    },
                    success: function (data) {
                        try {

                            if (data.status == "ok") {
                                $("#alert-tutores").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();
                                $("#form-tutores-ofendido")[0].reset();
                                $("#idTutorOfendido").val("");
                                $("#btn-agregar-modificar-tutor").text("Agregar Tutor/Representante");
                                cargarTablaTutores(data.data.idOfendidoSolicitud);
                            } else {
                                var mensajes = "";
                                $.each(data.mensaje, function (k, e) {
                                    mensajes += '<ul>';
                                    mensajes += '<li><strong>' + e + '</strong></li>';
                                    mensajes += '</ul>';
                                });

                                $("#alert-tutores").removeClass('alert-success').addClass('alert-warning').html(mensajes).show();

                            }

                            setTimeout(function () {
                                $("#alert-tutores").hide();
                            }, 4000);

                        } catch (e) {
                            alert("Error al guardar el Tutor del del Ofendido:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error al guardar el Tutor del Ofendido:" + otroobj);
                    }
                });
            }
        });
        //termina agregar tutor/ofendido

        //inicia agregar nacionalidad(es) del ofendido

        $("#form-nacionalidades-ofendido").on('submit', function (e) {
            e.preventDefault();
            if (validateNacionalidad()) {
                var nacionalidad = $(this).serialize() + '&idOfendidoSolicitud=' + $('#idOfendidoSolicitud').val();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesFacade.Class.php",
                    data: nacionalidad,
                    dataType: "json",
                    beforeSend: function () {
                    },
                    success: function (data) {
                        try {
                            if (data.status == "ok") {
                                $("#alert-nacionalidades").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();
                                $("#form-nacionalidades-ofendido")[0].reset();
                                cargarTablaNacionalidades(data.data.idOfendidoSolicitud);
                            } else {
                                var mensajes = "";
                                $.each(data.mensaje, function (k, e) {
                                    mensajes += e + "\n";
                                });
                                $("#alert-nacionalidades").removeClass('alert-success').addClass('alert-warning').html('<strong>' + data.mensaje + '</strong>').show();
                            }

                            clearTimeout(timeoutMensaje);

                            timeoutMensaje = setTimeout(function () {
                                $("#alert-nacionalidades").hide();
                            }, 3000);

                        } catch (e) {
                            alert("Error al guardar la nacionalidad delOfendido:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error al guardar la nacionalidad del Ofendido:" + otroobj);
                    }
                });
            }
        });

        //acciones de limpiar
        //limpiar formulario general del ofendo
        $("#limpiar-general-ofendido").on('click', function (e) {
            e.preventDefault();
            $('#divPersonaMoralOfendido').hide();
            $('#divPersonaFisicaOfendido').show();
            $("#tabla-ofendidos > tr").removeClass('success');
            $("#form-ofendido-general #idOfendidoSolicitud").val("");
            $("#form-ofendido-general #activo").val("S");
            $("#form-ofendido-general")[0].reset();
            $("#guardar-general-ofendido").text("Guardar Datos Generales del Ofendido");
        });

        //limpiar domicilio
        $("#limpiar-domicilio").on('click', function (e) {
            e.preventDefault();
            $("#tabla-domicilios > tr").removeClass('success');
            $("#form-domicilios-ofendido #idDomicilioOfendidoSolicitud").val("");
            $("#form-domicilios-ofendido #activo").val("S");

            $("#form-domicilios-ofendido")[0].reset();
            $("#btn-agregar-modificar-domicilio").text('Agregar Domicilio del Ofendido');
        });

        //limpiar teléfono
        $("#limpiar-telefono").on('click', function (e) {
            e.preventDefault();
            $("#tabla-telefonos > tr").removeClass('success');

            $("#form-telefonos-ofendido #idTelefonoOfendidoSolicitud").val("");
            $("#form-telefonos-ofendido #activo").val("S");

            $("#form-telefonos-ofendido")[0].reset();
            $("#btn-agregar-modificar-telefono").text('Agregar Teléfono');
        });

        //limpiar defensor
        $("#limpiar-defensor").on('click', function (e) {
            e.preventDefault();
            $("#tabla-defensores > tr").removeClass('success');
            $("#form-defensores-ofendido #idDefensorOfendidoSolicitud").val("");
            $("#form-defensores-ofendido #activo").val("S");
            $("#form-defensores-ofendido")[0].reset();
            $("#btn-agregar-modificar-defensor").text('Agregar Defensor');
        });

        //limpiar tutores
        $("#limpiar-tutores").on('click', function (e) {
            e.preventDefault();
            $("#tabla-tutores > tr").removeClass('success');
            $("#form-tutores-ofendido #idTutorOfendido").val("");
            $("#form-tutores-ofendido #activo").val("S");
            $("#form-tutores-ofendido")[0].reset();
            $("#btn-agregar-modificar-tutor").text('Agregar Tutor/Representante');
        });


    });


</script>

    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>