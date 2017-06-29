<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    @$idSolicitud = isset($_POST['idSolicitud']) ? $_POST['idSolicitud'] : '';
    ?>

    <style>
        input[type=text] {
            text-transform: uppercase;
        }
    </style>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Sujeto(s) Pasivo(s) del Delito Solicitud
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <div class="tab-content tabs-flat">
                    <p class="col-lg-12" style="color:darkred;">
                        Los campos marcados con (*) son obligatorios.
                    </p>
                    <div class="tabbable tabs-left col-md-12">
                        <ul id="myTab3" class="nav nav-tabs">
                            <li class="tab-sky active">
                                <a href="#divGeneralOfendidoPaso3" data-toggle="tab" aria-expanded="true"><span
                                        class="requerido">(*)</span>General</a>
                            </li>
                            <li class="tab-red">
                                <a href="#divDomiciliosPaso3" data-toggle="tab" aria-expanded="false">Domicilio(s)</a>
                            </li>
                            <li class="tab-orange">
                                <a href="#divTelefonosPaso3" data-toggle="tab" aria-expanded="false"> Tel&eacute;fono(s)</a>
                            </li>
                            <li class="tab-orange">
                                <a href="#divDefendoresPaso3" data-toggle="tab" aria-expanded="false"><span
                                        class="requerido">(*)</span>Defensor </a>
                            </li>
                            <li class="tab-orange">
                                <a href="#divTutoresPaso3" data-toggle="tab" aria-expanded="false">
                                    Tutor / Representante
                                </a>
                            </li>
                            <li class="tab-orange">
                                <a href="#divNacionalidadesPaso3" data-toggle="tab" aria-expanded="false">
                                    <span class="requerido">(*)</span> Nacionalidades</a>
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


                                    <hr/>

                                    <div id="nombreDatosGeneralesOfendido" style="margin-left:15px; margin-bottom: 25px;">
                                    </div>
                                    <div>
                                        <div class="col-lg-12">
                                            <label class="control-label" for="cmbTipoPersonaOfendido">Tipo de Persona <span
                                                    class="requerido">(*)</span></label>
                                            <div>
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
                                                       for="txtNombreOfendido">Nombre <span
                                                        class="requerido">(*)</span></label>

                                                <div>
                                                    <input type="text" class="form-control"
                                                           id="txtNombreOfendido"
                                                           name="txtNombreOfendido">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label"
                                                       for="txtPaternoOfendido">Paterno <span
                                                        class="requerido">(*)</span></label>

                                                <div>
                                                    <input type="text" class="form-control datoTipoCadena"
                                                           id="txtPaternoOfendido" name="txtPaternoOfendido">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label"
                                                       for="txtMaternoOfendido">Materno <span
                                                        class="requerido">(*)</span></label>

                                                <div>
                                                    <input type="text" class="form-control"
                                                           id="txtMaternoOfendido"
                                                           name="txtMaternoOfendido">
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <div class="col-lg-3">
                                                <label class="control-label"
                                                       for="cmbGeneroOfendido">G&eacute;nero <span
                                                        class="requerido">(*)</span></label>

                                                <div>
                                                    <select id="cmbGeneroOfendido" class="form-control"
                                                            name="cmbGeneroOfendido" 
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


                                            <!-- combo religion -->

                                            <div class="col-lg-3">
                                                <label for="cmbReligion">Religi&oacute;n</label>

                                                <div>
                                                    <select name="cmbReligion" id="cmbReligion" class="form-control">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- termina combo religion -->

                                            <!-- combo tipos partes calidad del sujeto pasivo -->
                                            <div class="col-lg-3">
                                                <label for="cmbTipoParte">
                                                    Calidad del Sujeto Pasivo
                                                    <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select name="cmbTipoParte" id="cmbTipoParte" class="form-control">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- termina combo tipos partes calidad del sujeto pasivo -->

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
                                                    Fecha de Nacimiento (dd/mm/aaaa)
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
                                                <label class="control-label" for="txtEdadOfendido">Edad</label>

                                                <div>
                                                    <input type="text" class="form-control" id="txtEdadOfendido"
                                                           name="txtEdadOfendido" maxlength="3" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cmbPaisNacimientoOfendido">
                                                    Pa&iacute;s de Nacimiento <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cmbPaisNacimientoOfendido" class="form-control"
                                                            name="cmbPaisNacimientoOfendido"
                                                            onchange="comboEstadoNacimientoOfendido();"
                                                            >
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cmbEstadoNacimientoOfendido">
                                                    Estado de Nacimiento <span class="requerido">(*)</span></label>

                                                <div>
                                                    <select id="cmbEstadoNacimientoOfendido"
                                                            class="form-control"
                                                            name="cmbEstadoNacimientoOfendido"
                                                            onchange="comboMunicipioNacimientoOfendido();"
                                                            >
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
                                                            name="cmbMunicipioNacimientoOfendido" >
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
                                                            name="cmbEstudioOfendido" >
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
                                                            name="cmbEstadoCivilOfendido" >
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cmbOcupacionOfendido">
                                                    Ocupaci&oacute;n <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cmbOcupacionOfendido" class="form-control"
                                                            name="cmbOcupacionOfendido" >
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
                                                            name="cmbEspanolOfendido" >
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label"
                                                       for="cmbAlfabetismoOfendido">Alfabetismo <span
                                                        class="requerido">(*)</span></label>

                                                <div>
                                                    <select id="cmbAlfabetismoOfendido" class="form-control"
                                                            name="cmbAlfabetismoOfendido" >
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cmbDielectoIndigenaOfendido">
                                                    ¿Habla Dialecto Ind&iacute;gena? <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cmbDielectoIndigenaOfendido"
                                                            class="form-control"
                                                            name="cmbDielectoIndigenaOfendido" >
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label"
                                                       for="cmbFamiliaLinguisticaOfendido">
                                                    Tipo de Familia Lingü&iacute;stica <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cmbFamiliaLinguisticaOfendido"
                                                            class="form-control"
                                                            name="cmbFamiliaLinguisticaOfendido" >
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cmbInterpreteOfendido">
                                                    ¿Necesita Interprete? <span class="requerido">(*)</span></label>

                                                <div>
                                                    <select id="cmbInterpreteOfendido" class="form-control"
                                                            name="cmbInterpreteOfendido" >
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <label class="control-label" for="cmbPsicofisicoOfendido">
                                                    Estado Psicof&iacute;sico <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cmbPsicofisicoOfendido" class="form-control"
                                                            name="cmbPsicofisicoOfendido" >
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <br/>

                                            <div class="col-lg-3">
                                                <label class="control-label" for="cmbGrupoEdnico">
                                                    ¿Pertenece a alg&uacute;n Grupo &eacute;tnico? <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cmbGrupoEdnico" class="form-control"
                                                            name="cmbGrupoEdnico" >
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-lg-3">
                                                <label for="cmbVictimaDelincuenciaOrganizada">
                                                    ¿V&iacute;ctima de Delincuencia Organizada? <span
                                                        class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select name="cmbVictimaDelincuenciaOrganizada"
                                                            id="cmbVictimaDelincuenciaOrganizada" 
                                                            class="form-control">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-lg-3">
                                                <label for="cmbVictimaViolenciaDeGenero">
                                                    ¿V&iacute;ctima de Violencia de G&eacute;nero? <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select name="cmbVictimaViolenciaDeGenero"
                                                            id="cmbVictimaViolenciaDeGenero" 
                                                            class="form-control">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-lg-3">
                                                <label for="cmbVictimaTrata">
                                                    ¿V&iacute;ctima de Trata? <span class="requerido">(*)</span>

                                                    <div class="clearfix"></div>
                                                    <br/>
                                                </label>


                                                <div>
                                                    <select name="cmbVictimaTrata"
                                                            id="cmbVictimaTrata" 
                                                            class="form-control">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="clearfix"></div>
                                            <br/>


                                            <div class="col-lg-3">
                                                <label for="cmbVictimaAcosoSexual">
                                                    ¿V&iacute;ctima de Acoso Sexual? <span class="requerido">(*)</span>
                                                    <br/>
                                                </label>


                                                <div>
                                                    <select name="cmbVictimaAcosoSexual"
                                                            id="cmbVictimaAcosoSexual" 
                                                            class="form-control">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-lg-3">
                                                <label for="cmbOrdenProteccion">
                                                    ¿Tiene Orden de Protecci&oacute;n? <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select name="cmbOrdenProteccion"
                                                            id="cmbOrdenProteccion" 
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
                                                    Pa&iacute;s <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cmbPaisNacimientoMoralOfendido"
                                                            class="form-control"
                                                            name="cmbPaisNacimientoMoralOfendido"
                                                            onchange="comboEstadoNacimientoOfendido();"
                                                            >
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
                                                            >
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
                                                            >
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                    <input id="txtmunicipioNacimientoMoralOfendido"
                                                           name="txtmunicipioNacimientoMoralOfendido"
                                                           type="text"
                                                           class="form-control" style="display: none">
                                                </div>
                                            </div>


                                            <!-- combo tipos partes calidad del sujeto pasivo -->
                                            <div class="col-lg-3">
                                                <label for="cmbTipoParteMoral">
                                                    Calidad del Sujeto Pasivo
                                                    <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select name="cmbTipoParteMoral" id="cmbTipoParteMoral"
                                                            class="form-control">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- termina combo tipos partes calidad del sujeto pasivo -->

                                        </div>

                                        <div class="clearfix"></div>
                                        <br/><br/>

                                        <div class="col-lg-12">
                                            <button class="btn btn-primary guarda" id="guardar-general-ofendido">
                                                Guardar Datos Generales del Sujeto Pasivo del Delito.
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

                                    <div id="nombreDomicilioOfendido" style="margin-left:15px; margin-bottom: 25px;">
                                    </div>

                                    <div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbPaisDomicilioOfendido">
                                                Pa&iacute;s de Domicilio <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbPaisDomicilioOfendido" class="form-control"
                                                        name="cmbPaisDomicilioOfendido" 
                                                        onchange="comboEstadoDomicilioOfendido();">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbEstadoDomicilioOfendido">
                                                Estado de Domicilio <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbEstadoDomicilioOfendido" class="form-control"
                                                        name="cmbEstadoDomicilioOfendido"
                                                        onchange="comboMunicipioDomicilioOfendido();"
                                                        >
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
                                                Municipio de Domicilio <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbMunicipioDomicilioOfendido"
                                                        class="form-control datoTipoCadena"
                                                        name="cmbMunicipioDomicilioOfendido" >
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
                                                        name="cmbConvivenciaOfendido" >
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="control-label" for=""> Calle <span
                                                    class="requerido">(*)</span></label>

                                            <div>
                                                <input id="direccionDomicilio" name="direccionDomicilio"
                                                       type="text"
                                                       class="form-control datoTipoCadena">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="control-label" for="coloniaDireccion"> Colonia <span
                                                    class="requerido">(*)</span></label>

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
                                            <label class="control-label" for="">N&uacute;mero Exterior</label>

                                            <div>
                                                <input id="numeroExtDomicilio" name="numeroExtDomicilio"
                                                       type="text"
                                                       class="form-control datoTipoEntero" maxlength="5">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <label class="control-label" for=""> C.P</label>

                                            <div>
                                                <input id="cpDomicilio" name="cpDomicilio" type="text"
                                                       class="form-control datoTipoEntero datoTipoCP"
                                                       maxlength="5">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <label class="control-label" for="">Residencia Habitual</label>

                                            <div>
                                                <input type="checkbox" class="form-control"
                                                       name="cbResidenciaHabitualOfendido"
                                                       id="cbResidenciaHabitualOfendido">
                                            </div>
                                        </div>


                                        <!-- inicia check domicilio procesal -->

                                        <div class="col-lg-3">
                                            <label for="DomicilioProcesal" class="control-label">Domicilio Procesal</label>

                                            <div>
                                                <input type="checkbox" class="form-control" name="DomicilioProcesal"
                                                       id="DomicilioProcesal"/>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <!-- termina check domicilio procesal -->

                                        <div class="col-lg-3">
                                            <label class="control-label" for="cmbTipoViviendaOfendido">
                                                Tipo de Domicilio <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbTipoViviendaOfendido" class="form-control"
                                                        name="cmbTipoViviendaOfendido" >
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                        <br/><br/>

                                        <div>

                                            <div class="col-lg-6">
                                                <button id="btn-agregar-modificar-domicilio"
                                                        class="btn btn-primary guarda">
                                                    Agregar Domicilio
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
                                        <br/><br/>

                                        <div class="col-lg-12">
                                            <div id="ubicacion" style="display:none;">
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                        <br/>

                                        <div id="alert-domicilios" class="alert" style="display: none;">

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
                                            <th>Pa&iacute;s</th>
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


                                    <p class="col-lg-12" style="color:darkred;">
                                        Para guardar un registro tienes que ingresar al menos un campo.
                                    </p>

                                    <br/>

                                    <div id="nombreTelefonoOfendido" style="margin-left:15px; margin-bottom: 25px;">
                                    </div>

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
                                            <button id="btn-agregar-modificar-telefono" class="btn btn-primary guarda">
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
                                            <th>Tel&eacute;fono</th>
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

                                    <div id="nombreDefensorOfendido" style="margin-left:15px; margin-bottom: 25px;">
                                    </div>

                                    <div>
                                        <div class="col-lg-4">
                                            <label class="control-label" for="cmbTipoDefensorOfendido">
                                                Representante <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbTipoDefensorOfendido" class="form-control"
                                                        name="cmbTipoDefensorOfendido" >
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="control-label" for=""> Nombre del Representante <span
                                                    class="requerido">(*)</span></label>

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
                                            <button id="btn-agregar-modificar-defensor" class="btn btn-primary guarda">
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

                                    <div id="tnombreTutorOfendido" style="margin-left:15px; margin-bottom: 25px;">
                                    </div>

                                    <div>
                                        <div class="col-lg-4">
                                            <label class="control-label" for="cmbTipoTutorOfendido">
                                                Tipo Tutor/Representante <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbTipoTutorOfendido" class="form-control"
                                                        name="cmbTipoTutorOfendido" >
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>


                                        <!--inicia tutor provicional o deifinitivo -->

                                        <div class="col-lg-4">

                                            <label class="control-label" for="ProvDef">
                                                Tutor Provisional <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <input type="radio" name="ProvDef" id="provisional" value="P"/>
                                            </div>

                                        </div>

                                        <div class="col-lg-4">

                                            <label class="control-label" for="ProvDef">
                                                Tutor Definitivo <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <input type="radio" name="ProvDef" id="definitivo" value="D"/>
                                            </div>

                                        </div>

                                        <!-- termina tutro provicional o defitinivo -->

                                        <div class="clearfix"></div>

                                        <div class="col-lg-4">
                                            <label class="control-label"
                                                   for="nombreTutorOfendido">Nombre <span
                                                    class="requerido">(*)</span></label>

                                            <div>
                                                <input id="nombreTutorOfendido" name="nombreTutorOfendido"
                                                       type="text" class="form-control datoTipoCadena">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label"
                                                   for="paternoTutorOfendido">Paterno <span
                                                    class="requerido">(*)</span></label>

                                            <div>
                                                <input id="paternoTutorOfendido" name="paternoTutorOfendido"
                                                       type="text" class="form-control datoTipoCadena">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label"
                                                   for="maternoTutorOfendido">Materno <span
                                                    class="requerido">(*)</span></label>

                                            <div>
                                                <input id="maternoTutorOfendido" name="maternoTutorOfendido"
                                                       type="text" class="form-control datoTipoCadena">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label"
                                                   for="cmbGeneroTutorOfendido">G&eacute;nero <span
                                                    class="requerido">(*)</span></label>

                                            <div>
                                                <select id="cmbGeneroTutorOfendido" class="form-control"
                                                        name="cmbGeneroTutorOfendido" >
                                                    <option value="0" selected>Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label" for="fechaNacimientoTutorOfendido">
                                                Fecha de nacimiento
                                            </label>

                                            <div>
                                                <input id="fechaNacimientoTutorOfendido"
                                                       name="fechaNacimientoTutorOfendido" type="text"
                                                       class="form-control"
                                                       onblur="calcularEdad(this.value, 'fechaNacimientoTutorOfendido', 'txtEdadTutorOfendido');">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="control-label" for="txtEdadTutorOfendido">Edad </label>

                                            <div>
                                                <input id="txtEdadTutorOfendido" name="txtEdadTutorOfendido"
                                                       type="text" class="form-control" maxlength="3"
                                                       readonly="">
                                            </div>
                                        </div>


                                        <div class="clearfix"></div>
                                        <br/>

                                        <div class="col-lg-12">
                                            <button id="btn-agregar-modificar-tutor" class="btn btn-primary guarda">
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
                                            <th>G&eacute;nero</th>
                                            <th>Eliminar</th>
                                        </tr>
                                        <tbody id="tabla-tutores">
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane" id="divNacionalidadesPaso3">

                                <p class="col-lg-12" style="color:darkred;">
                                    Los campos marcados con (*) son obligatorios.
                                </p>

                                <form action="" id="form-nacionalidades-ofendido">
                                    <input type="hidden" name="accion" value="agregar"/>
                                    <input type="hidden" name="idNacionalidadOfendidoSolicitud" value=""/>
                                    <input type="hidden" name="activo" value="S"/>

                                    <div>
                                        <div class="col-lg-12">

                                            <div id="nombreNacionalidadOfendido" style="margin-bottom: 25px;">
                                            </div>

                                            <label class="control-label" for="cmbPaisNacionalidadOfendido">
                                                <strong>Nacionalidad</strong>
                                            </label>
                                            <select id="cmbPaisNacionalidadOfendido" class="form-control"
                                                    name="cmbPaisNacionalidadOfendido" >
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>
                                        <br/>

                                        <div class="col-lg-12">
                                            <button class="btn btn-primary guarda">
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
                                            <th>Nacionalidad</th>
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


                    <table id="tableResultadosOfendido" class='table table-bordered tblGridAgrega consulta-permisos'>
                        <tr class='trGridAgrega'>
                            <th>No</th>
                            <th>Tipo Persona</th>
                            <th>Nombre</th>
                            <th>G&eacute;nero</th>
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

            $("#cmbTipoDefensorOfendido").on('change', function () {
                if ($(this).val() == '6') {
                    $("#nombreDefensor").val('Requiere un representante de la defensoría de víctimas');
                } else {
                    $("#nombreDefensor").val('');
                }
            });

        });


    //    var permisos = obtenerPermisosFormulario("ATENCION PUBLICO", "SOLICITUDES DE AUDIENCIA");
    //    updatePermisos = permisos.Update;
    //    readPermisos = permisos.Read;
    //    createPermisos = permisos.Create;
    //    = permisos.Delete;


        var timeoutMensaje = '';


        formatoFecha = function (campo) {

            if ($.trim(campo) != "") {
                var fecha = $.trim(campo).split(' ');
                if (fecha.length > 1) {
                    var f = fecha[0].split('-');
                    return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
                } else {
                    var f = fecha[0].split('-');
                    return f[2] + "/" + f[1] + "/" + f[0];
                }
            } else {
                return "00/00/0000";
            }

        };

        ocultaUbicar = function () {
            $("#ubicacion").hide();
        };

        validaPersona = function () {
            if ($("#cmbTipoPersonaOfendido").val() == 1) {
                $('#divPersonaFisicaOfendido').show();
                $('#divPersonaMoralOfendido').hide();
                //$('#cmbPaisNacimientoOfendido').val('119').trigger('change');
            } else if ($("#cmbTipoPersonaOfendido").val() == 2 || $("#cmbTipoPersonaOfendido").val() == 3 || $("#cmbTipoPersonaOfendido").val() == 4 || $("#cmbTipoPersonaOfendido").val() == 5) {
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

            campoValida = campoValida.toUpperCase();

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
            /*var m = curp.match(/^\w{4}(\w{2})(\w{2})(\w{2})/);
             var anio = parseInt(m[1]) + 1900;
             anio += 100;
             var mes = parseInt(m[2]);
             var dia = parseInt(m[3]);
             var fecha = dia + "/" + ((mes > 9) ? mes : '0' + mes) + "/" + anio;*/
            var m = curp.match(/^\w{4}(\w{2})(\w{2})(\w{2})/);
            var anio = parseInt(m[1]) + 1900;
            if (anio <= 1915) {
                anio += 100;
            }

            var mes = m[2];
            var dia = m[3];
            var fecha = dia + "/" + mes + "/" + anio;
            $("#txtFechaNacimientoOfendido").val(fecha).data("DateTimePicker").ignoreReadonly(false);
            $("#txtFechaNacimientoOfendido").trigger('blur');
        };

        validaRfc = function (campoValida) {
            if ($("#" + campoValida + "").val() != "") {

                var rfcStr = $("#" + campoValida + "").val().toUpperCase();

                var regex = /^[A-Z]{4}([0-9]{2})(1[0-2]|0[1-9])([0-3][0-9])(([A-Z0-9]{3})?)$/;

                if (!regex.test(rfcStr)) {
                    alert('Rfc no válido');
                }
            }
        }


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
                //if (edad <= 0 && edad < 18) {
                if (campoFecha == 'fechaNacimientoTutorOfendido') {
                    if (edad < 18) {
                        alert("Verifique la Fecha de Nacimiento, el tutor tiene que ser mayor de 18 a\u00f1os");
                        $("#" + campoFecha + "").val("");
                        $("#" + campoFecha + "").focus();
                        $("#" + campoEdad + "").val("");

                        return false;

                    } else {
                        $("#" + campoEdad + "").val(edad);

                        return true;
                    }
                } else {
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

            } else {
                $("#" + campoEdad + "").val('0');
            }
        }

        comboTipoPersonaOfendido = function () {
            /*$.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
             global: false,
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
             });*/
            if (catTiposPersonasJson != "") {
                try {
                    $('#cmbTipoPersonaOfendido').empty();
                    $('#cmbTipoPersonaOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTiposPersonasJson.totalCount > 0) {
                        $.each(catTiposPersonasJson.data, function (count, object) {
                            $('#cmbTipoPersonaOfendido').append('<option value="' + object.cveTipoPersona + '">' + object.desTipoPersona + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar tipos personas Ofendido:" + e);
                }
            } else {
                $('#cmbTipoPersonaOfendido').empty();
                $('#cmbTipoPersonaOfendido').append('<option value="0">No carga catalogo</option>');

            }
        };

        comboReligion = function () {
            /*$.ajax({
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
             $('#cmbReligion').append('<option value="">Seleccione una opci&oacute;n</option>');
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
                    alert("Error al cargar tipos personas Ofendido:" + e);
                }
            } else {
                $('#cmbReligion').empty();
                $('#cmbReligion').append('<option value="">No carga catalogo</option>');

            }
        };

        comboTiposPartes = function () {

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tipospartes/TipospartesFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoParte').empty();
                        $('#cmbTipoParte').append('<option value="">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (object.descTipoParte == "OFENDIDO" || object.descTipoParte == "VICTIMA") {
                                    $('#cmbTipoParte').append('<option value="' + object.cveTipoParte + '">' + object.descTipoParte + '</option>');
                                    $('#cmbTipoParteMoral').append('<option value="' + object.cveTipoParte + '">' + object.descTipoParte + '</option>');
                                }
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tipos partes:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipos partes:\n\n" + otroobj);
                }
            });
        }

        comboGruposEdnicos = function () {
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/gruposednicos/GruposednicosFacade.Class.php",
             global: false,
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
             
             $('#cmbGrupoEdnico').val(72);
             }
             } catch (e) {
             alert("Error al cargar grupos etnicos:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de grupos etnicos:\n\n" + otroobj);
             }
             });
             */


            if (catGruposEdnicosJson != "") {
                try {
                    $('#cmbGrupoEdnico').empty();
                    $('#cmbGrupoEdnico').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catGruposEdnicosJson.totalCount > 0) {
                        $.each(catGruposEdnicosJson.data, function (count, object) {
                            $('#cmbGrupoEdnico').append('<option value="' + object.cveGrupoEdnico + '">' + object.desGrupoEdnico + '</option>');
                        });
                        $('#cmbGrupoEdnico').val(72);
                    }

                } catch (e) {
                    alert("Error al cargar tipos personas Ofendido:" + e);
                }
            } else {
                $('#cmbGrupoEdnico').empty();
                $('#cmbGrupoEdnico').append('<option value="0">No carga catalogo</option>');

            }

        };

        comboDelincuenciaOrganizada = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/victimadeladelincuenciaorganizada/VictimadeladelincuenciaorganizadaFacade.Class.php",
                global: false,
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
                global: false,
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
                global: false,
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

        comboVictimaAcosoSexual = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/victimadeacoso/VictimadeacosoFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false", activo: 'S'},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbVictimaAcosoSexual').empty();
                        $('#cmbVictimaAcosoSexual').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbVictimaAcosoSexual').append('<option value="' + object.cveVictimaDeAcoso + '">' + object.desVictimaDeAcoso + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Victima de Acoso:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de victima de acoso:\n\n" + otroobj);
                }
            });
        };

        comboOrdenesProteccion = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ordenesprotecciones/OrdenesproteccionesFacade.Class.php",
                global: false,
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
            /*$.ajax({
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
             }
             } catch (e) {
             alert("Error al cargar TipoDetencion:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion tipo Detencion:\n\n" + otroobj);
             }
             });*/


            if (catTiposDetencionesJson != "") {
                try {
                    $('#cmbTipoDetencion').empty();
                    $('#cmbTipoDetencion').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTiposDetencionesJson.totalCount > 0) {
                        $.each(catTiposDetencionesJson.data, function (count, object) {
                            $('#cmbTipoDetencion').append('<option value="' + object.cveTipoDetencion + '">' + object.desTipoDetencion + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catTiposDetencionesJson Ofendido:" + e);
                }
            } else {
                $('#cmbTipoDetencion').empty();
                $('#cmbTipoDetencion').append('<option value="0">No carga catalogo</option>');

            }

        };
        comboGeneroOfendido = function () {
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
             });*/


            if (catGenerosJson != "") {
                try {
                    $('#cmbGeneroOfendido').empty();
                    $('#cmbGeneroOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catGenerosJson.totalCount > 0) {
                        $.each(catGenerosJson.data, function (count, object) {
                            $('#cmbGeneroOfendido').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catGenerosJson Ofendido:" + e);
                }
            } else {
                $('#cmbGeneroOfendido').empty();
                $('#cmbGeneroOfendido').append('<option value="0">No carga catalogo</option>');

            }


        };
        comboPaisNacionalidadOfendido = function () {
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
             $('#cmbPaisNacionalidadOfendido').empty();
             $('#cmbPaisNacionalidadOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbPaisNacionalidadOfendido').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
             });
             $('#cmbPaisNacionalidadOfendido').val(119).trigger('change');
             }
             } catch (e) {
             alert("Error al cargar País Ofendido:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la petición de país Ofendido:\n\n" + otroobj);
             }
             });*/

            /*--------------PAISES JSON--------------*/
            if (catPaisesJson != "") {
                try {
                    $('#cmbPaisNacionalidadOfendido').empty();
                    $('#cmbPaisNacionalidadOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catPaisesJson.totalCount > 0) {
                        $.each(catPaisesJson.data, function (count, object) {
                            $('#cmbPaisNacionalidadOfendido').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                        });
                        $('#cmbPaisNacionalidadOfendido').val(119).trigger('change');
                    }

                } catch (e) {
                    alert("Error al cargar País Ofendido:" + e);
                }
            } else {
                $('#cmbPaisNacionalidadOfendido').empty();
                $('#cmbPaisNacionalidadOfendido').append('<option value="0">No carga catalogo</option>');
            }

        };
        comboPaisNacimientoOfendido = function (elemento) {
            /*
             $.ajax({
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
             $('#' + elemento).empty();
             $('#' + elemento).append('<option value="0">Seleccione una opci&oacute;n</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#' + elemento).append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
             });
             $('#' + elemento).val(119).trigger('change');
             }
             
             } catch (e) {
             alert("Error al cargar País Ofendido:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la petición de país Ofendido:\n\n" + otroobj);
             }
             });
             */
            /*--------------PAISES JSON--------------*/

            if (catPaisesJson != "") {
                try {
                    $('#' + elemento).empty();
                    $('#' + elemento).append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catPaisesJson.totalCount > 0) {
                        $.each(catPaisesJson.data, function (count, object) {
                            $('#' + elemento).append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                        });
                        $('#' + elemento).val(119).trigger('change');
                    }

                } catch (e) {
                    alert("Error al cargar País Ofendido:" + e);
                }
            } else {
                $('#' + elemento).empty();
                $('#' + elemento).append('<option value="0">No carga catalogo</option>');
            }

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
            } else if (tipoPersona == 2 || tipoPersona == 3 || tipoPersona == 4 || tipoPersona == 5) {
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
                /* $.ajax({
                 type: "POST",
                 url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                 global: false,
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
                 if (object.desEstado != 'AUTORIDAD FEDERAL') {
                 $('#' + cmbestado).append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                 }
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
                 });*/
                if (catEstadosJson != "") {
                    try {
                        $('#' + cmbestado).empty();
                        $('#' + cmbestado).append('<option value="0">Seleccione una opci&oacute;n </option>');
                        if (catEstadosJson.totalCount > 0) {
                            $.each(catEstadosJson.data, function (count, object) {
                                if (object.cveEstado != "97") {
                                    $('#' + cmbestado).append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                                }
                            });
                            $("#cmbEstadoDomicilioImputado").val(15).trigger('change');
                        }

                    } catch (e) {
                        alert("Error al cargar catEstadosJson:" + e);
                    }
                } else {
                    $('#' + cmbestado).empty();
                    $('#' + cmbestado).append('<option value="0">No carga catalogo</option>');
                }
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
            } else if (tipoPersona == 2 || tipoPersona == 3 || tipoPersona == 4 || tipoPersona == 5) {
                cmbestado = "cmbEstadoNacimientoMoralOfendido";
                cmbmunicipio = "cmbMunicipioNacimientoMoralOfendido";
            }
            /*$.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
             global: false,
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
             });*/

            if (catMunicipiosJson != "") {
                try {
                    $('#' + cmbmunicipio).empty();
                    $('#' + cmbmunicipio).append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catMunicipiosJson.totalCount > 0) {
                        $.each(catMunicipiosJson.data, function (count, object) {
                            if (object.cveEstado == $('#' + cmbestado).val()) {
                                $('#' + cmbmunicipio).append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
                            }
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catMunicipiosJson:" + e);
                }
            } else {
                $('#' + cmbmunicipio).empty();
                $('#' + cmbmunicipio).append('<option value="0">No carga catalogo</option>');
            }

        };
        comboEstudioOfendido = function () {
            /*  $.ajax({
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
             });*/

            if (catNivelesInstruccionesJson != "") {
                try {
                    $('#cmbEstudioOfendido').empty();
                    $('#cmbEstudioOfendido').append('<option value="">Seleccione una opci&oacute;n </option>');
                    if (catNivelesInstruccionesJson.totalCount > 0) {
                        $.each(catNivelesInstruccionesJson.data, function (count, object) {
                            $('#cmbEstudioOfendido').append('<option value="' + object.cveNivelInstruccion + '">' + object.desNivelInstruccion + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar cmbEstudioOfendido Ofendido:" + e);
                }
            } else {
                $('#cmbEstudioOfendido').empty();
                $('#cmbEstudioOfendido').append('<option value="">No carga catalogo</option>');

            }
        };
        comboEstadoCivilOfendido = function () {
            /* $.ajax({
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
             });*/


            if (catEstadoscivilesJson != "") {
                try {
                    $('#cmbEstadoCivilOfendido').empty();
                    $('#cmbEstadoCivilOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catEstadoscivilesJson.totalCount > 0) {
                        $.each(catEstadoscivilesJson.data, function (count, object) {
                            $('#cmbEstadoCivilOfendido').append('<option value="' + object.cveEstadoCivil + '">' + object.desEstadoCivil + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catEstadoscivilesJson Ofendido:" + e);
                }
            } else {
                $('#cmbEstadoCivilOfendido').empty();
                $('#cmbEstadoCivilOfendido').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboEspanolOfendido = function () {
            /* $.ajax({
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
             });*/
            if (catEspanolJson != "") {
                try {
                    $('#cmbEspanolOfendido').empty();
                    $('#cmbEspanolOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catEspanolJson.totalCount > 0) {
                        $.each(catEspanolJson.data, function (count, object) {
                            $('#cmbEspanolOfendido').append('<option value="' + object.cveEspanol + '">' + object.desEspanol + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar tipos personas Ofendido:" + e);
                }
            } else {
                $('#cmbEspanolOfendido').empty();
                $('#cmbEspanolOfendido').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboAlfabetismoOfendido = function () {
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
             });*/

            if (catAlfabetismoJson != "") {
                try {
                    $('#cmbAlfabetismoOfendido').empty();
                    $('#cmbAlfabetismoOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catAlfabetismoJson.totalCount > 0) {
                        $.each(catAlfabetismoJson.data, function (count, object) {
                            $('#cmbAlfabetismoOfendido').append('<option value="' + object.cveAlfabetismo + '">' + object.desAlfabetismo + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catAlfabetismoJson Ofendido:" + e);
                }
            } else {
                $('#cmbAlfabetismoOfendido').empty();
                $('#cmbAlfabetismoOfendido').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboDielectoIndigenaOfendido = function () {
            /* $.ajax({
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
             });*/
            if (catDialectoIndigenaJson != "") {
                try {
                    $('#cmbDielectoIndigenaOfendido').empty();
                    $('#cmbDielectoIndigenaOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catDialectoIndigenaJson.totalCount > 0) {
                        $.each(catDialectoIndigenaJson.data, function (count, object) {
                            $('#cmbDielectoIndigenaOfendido').append('<option value="' + object.cveDialectoIndigena + '">' + object.desDialectoIndigena + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catDialectoIndigenaJson Ofendido:" + e);
                }
            } else {
                $('#cmbDielectoIndigenaOfendido').empty();
                $('#cmbDielectoIndigenaOfendido').append('<option value="0">No carga catalogo</option>');

            }
        };

        comboFamiliaLinguisticaOfendido = function () {
            /* $.ajax({
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
             $('#cmbFamiliaLinguisticaOfendido').empty();
             $('#cmbFamiliaLinguisticaOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbFamiliaLinguisticaOfendido').append('<option value="' + object.cveTipoFamiliaLinguistica + '">' + object.desTipoFamiliaLinguistica + '</option>');
             });
             
             $('#cmbFamiliaLinguisticaOfendido').val(15);
             
             }
             } catch (e) {
             alert("Error al cargar Familia Lingüística Ofendido:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la petición de Familia Lingüística Ofendido:\n\n" + otroobj);
             }
             });*/

            if (catTipoFamiliaLinguisticaJson != "") {
                try {
                    $('#cmbFamiliaLinguisticaOfendido').empty();
                    $('#cmbFamiliaLinguisticaOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTipoFamiliaLinguisticaJson.totalCount > 0) {
                        $.each(catTipoFamiliaLinguisticaJson.data, function (count, object) {
                            $('#cmbFamiliaLinguisticaOfendido').append('<option value="' + object.cveTipoFamiliaLinguistica + '">' + object.desTipoFamiliaLinguistica + '</option>');
                        });
                        $('#cmbFamiliaLinguisticaOfendido').val(15);
                    }

                } catch (e) {
                    alert("Error al cargar catTipoFamiliaLinguisticaJson Ofendido:" + e);
                }
            } else {
                $('#cmbFamiliaLinguisticaOfendido').empty();
                $('#cmbFamiliaLinguisticaOfendido').append('<option value="0">No carga catalogo</option>');

            }
        }

        comboOcupacionOfendido = function () {
            /*$.ajax({
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
             });*/

            if (catOcupacionesJson != "") {
                try {
                    $('#cmbOcupacionOfendido').empty();
                    $('#cmbOcupacionOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catOcupacionesJson.totalCount > 0) {
                        $.each(catOcupacionesJson.data, function (count, object) {
                            $('#cmbOcupacionOfendido').append('<option value="' + object.cveOcupacion + '">' + object.desOcupacion + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar cmbOcupacionOfendido Ofendido:" + e);
                }
            } else {
                $('#cmbOcupacionOfendido').empty();
                $('#cmbOcupacionOfendido').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboInterpreteOfendido = function () {
            /* $.ajax({
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
             });*/
            if (catInterpretesJson != "") {
                try {
                    $('#cmbInterpreteOfendido').empty();
                    $('#cmbInterpreteOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catInterpretesJson.totalCount > 0) {
                        $.each(catInterpretesJson.data, function (count, object) {
                            $('#cmbInterpreteOfendido').append('<option value="' + object.cveInterprete + '">' + object.desInterprete + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar cmbInterpreteOfendido Ofendido:" + e);
                }
            } else {
                $('#cmbInterpreteOfendido').empty();
                $('#cmbInterpreteOfendido').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboPsicofisicoOfendido = function () {
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
             });*/

            if (catEstadosPsicofisicosJson != "") {
                try {
                    $('#cmbPsicofisicoOfendido').empty();
                    $('#cmbPsicofisicoOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catEstadosPsicofisicosJson.totalCount > 0) {
                        $.each(catEstadosPsicofisicosJson.data, function (count, object) {
                            $('#cmbPsicofisicoOfendido').append('<option value="' + object.cveEstadoPsicofisico + '">' + object.desEstadoPsicofisico + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar cmbPsicofisicoOfendido Ofendido:" + e);
                }
            } else {
                $('#cmbPsicofisicoOfendido').empty();
                $('#cmbPsicofisicoOfendido').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboPaisDomicilioOfendido = function () {
            /*$.ajax({
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
             $('#cmbPaisDomicilioOfendido').empty();
             $('#cmbPaisDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
             if (datos.totalCount > 0) {
             $.each(datos.data, function (count, object) {
             $('#cmbPaisDomicilioOfendido').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
             });
             $("#cmbPaisDomicilioOfendido").val(119).trigger('change');
             }
             } catch (e) {
             alert("Error al cargar País Domicilio Ofendido:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la peticion de País Domicilio Ofendido:\n\n" + otroobj);
             }
             });*/

            /*--------------PAISES JSON--------------*/

            if (catPaisesJson != "") {
                try {
                    $('#cmbPaisDomicilioOfendido').empty();
                    $('#cmbPaisDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catPaisesJson.totalCount > 0) {
                        $.each(catPaisesJson.data, function (count, object) {
                            $('#cmbPaisDomicilioOfendido').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                        });
                        $('#cmbPaisDomicilioOfendido').val(119).trigger('change');
                    }

                } catch (e) {
                    alert("Error al cargar País Ofendido:" + e);
                }
            } else {
                $('#cmbPaisDomicilioOfendido').empty();
                $('#cmbPaisDomicilioOfendido').append('<option value="0">No carga catalogo</option>');
            }
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
                /* $.ajax({
                 type: "POST",
                 url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                 global: false,
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
                 if (object.desEstado != 'AUTORIDAD FEDERAL') {
                 $('#cmbEstadoDomicilioOfendido').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                 }
                 });
                 $("#cmbEstadoDomicilioOfendido").val(15).trigger('change');
                 }
                 } catch (e) {
                 alert("Error al cargar Estado Domicilio Ofendido:" + e);
                 }
                 },
                 error: function (objeto, quepaso, otroobj) {
                 alert("Error en la petición de Estado Domicilio Ofendido:\n\n" + otroobj);
                 }
                 });*/
                if (catEstadosJson != "") {
                    try {
                        $('#cmbEstadoDomicilioOfendido').empty();
                        $('#cmbEstadoDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                        if (catEstadosJson.totalCount > 0) {
                            $.each(catEstadosJson.data, function (count, object) {
                                if (object.cveEstado != "97") {
                                    $('#cmbEstadoDomicilioOfendido').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                                }
                            });
                            $('#cmbEstadoDomicilioOfendido').val(15).trigger('change');
                        }

                    } catch (e) {
                        alert("Error al cargar catEstadosJson:" + e);
                    }
                } else {
                    $('#cmbEstadoDomicilioOfendido').empty();
                    $('#cmbEstadoDomicilioOfendido').append('<option value="0">No carga catalogo</option>');
                }
            } else {
                $("#cmbEstadoDomicilioOfendido").hide();
                $("#cmbMunicipioDomicilioOfendido").hide();
                $("#estadoDomicilioOfendido").show();
                $("#municipioDomicilioOfendido").show();
            }
        };
        comboMunicipioDomicilioOfendido = function () {
            /* $.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
             global: false,
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
             });*/
            if (catMunicipiosJson != "") {
                try {
                    $('#cmbMunicipioDomicilioOfendido').empty();
                    $('#cmbMunicipioDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catMunicipiosJson.totalCount > 0) {
                        $.each(catMunicipiosJson.data, function (count, object) {
                            if (object.cveEstado == $('#cmbEstadoDomicilioOfendido').val()) {
                                $('#cmbMunicipioDomicilioOfendido').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
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

        comboConvivenciaOfendido = function () {
            /*  $.ajax({
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
             });*/
            if (catConvivenciasJson != "") {
                try {
                    $('#cmbConvivenciaOfendido').empty();
                    $('#cmbConvivenciaOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catConvivenciasJson.totalCount > 0) {
                        $.each(catConvivenciasJson.data, function (count, object) {
                            $('#cmbConvivenciaOfendido').append('<option value="' + object.cveConvivencia + '">' + object.desConvivencia + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar cmbConvivenciaOfendido Ofendido:" + e);
                }
            } else {
                $('#cmbConvivenciaOfendido').empty();
                $('#cmbConvivenciaOfendido').append('<option value="0">No carga catalogo</option>');

            }
        };

        comboTipoViviendaOfendido = function () {
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
             });*/


            if (catTiposdeViviendasJson != "") {
                try {
                    $('#cmbTipoViviendaOfendido').empty();
                    $('#cmbTipoViviendaOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTiposdeViviendasJson.totalCount > 0) {
                        $.each(catTiposdeViviendasJson.data, function (count, object) {
                            $('#cmbTipoViviendaOfendido').append('<option value="' + object.cveTipoDeVivienda + '">' + object.desTipoDeVivienda + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar catTiposdeViviendasJson Ofendido:" + e);
                }
            } else {
                $('#cmbTipoViviendaOfendido').empty();
                $('#cmbTipoViviendaOfendido').append('<option value="0">No carga catalogo</option>');

            }
        };

        comboTipoDefensorOfendido = function () {
            /*$.ajax({
             type: "POST",
             url: "../fachadas/sigejupe/tiposdefensores/TiposdefensoresFacade.Class.php",
             global: false,
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
             if (object.desTipoDefensor != "PUBLICO Y PRIVADO") {
             $('#cmbTipoDefensorOfendido').append('<option value="' + object.cveTipoDefensor + '">' + object.desTipoDefensor + '</option>');
             }
             });
             }
             } catch (e) {
             alert("Error al cargar Tipo Vivienda Ofendido:" + e);
             }
             },
             error: function (objeto, quepaso, otroobj) {
             alert("Error en la petición de Tipo Vivienda Ofendido:\n\n" + otroobj);
             }
             });*/
            if (catTiposDefensoresJson != "") {
                try {
                    $('#cmbTipoDefensorOfendido').empty();
                    $('#cmbTipoDefensorOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTiposDefensoresJson.totalCount > 0) {
                        $.each(catTiposDefensoresJson.data, function (count, object) {
                            $('#cmbTipoDefensorOfendido').append('<option value="' + object.cveTipoDefensor + '">' + object.desTipoDefensor + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catTiposDefensoresJson Ofendido:" + e);
                }
            } else {
                $('#cmbTipoDefensorOfendido').empty();
                $('#cmbTipoDefensorOfendido').append('<option value="0">No carga catalogo</option>');

            }
        };

        comboGeneroTutorOfendido = function () {
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
             });*/

            if (catGenerosJson != "") {
                try {
                    $('#cmbGeneroTutorOfendido').empty();
                    $('#cmbGeneroTutorOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catGenerosJson.totalCount > 0) {
                        $.each(catGenerosJson.data, function (count, object) {
                            $('#cmbGeneroTutorOfendido').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catGeneros Ofendido:" + e);
                }
            } else {
                $('#cmbGeneroTutorOfendido').empty();
                $('#cmbGeneroTutorOfendido').append('<option value="0">No carga catalogo</option>');

            }

        };

        comboTipoTutorOfendido = function () {
            /*$.ajax({
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
             });*/
            if (catTiposTutoresJson != "") {
                try {
                    $('#cmbTipoTutorOfendido').empty();
                    $('#cmbTipoTutorOfendido').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTiposTutoresJson.totalCount > 0) {
                        $.each(catTiposTutoresJson.data, function (count, object) {
                            $('#cmbTipoTutorOfendido').append('<option value="' + object.cveTipoTutor + '">' + object.desTipoTutor + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catTiposTutoresJson Ofendido:" + e);
                }
            } else {
                $('#cmbTipoTutorOfendido').empty();
                $('#cmbTipoTutorOfendido').append('<option value="0">No carga catalogo</option>');

            }
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
                mensaje += "*Seleccione un país \n";
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
            /*if ($('#numeroExtDomicilio').val() == "" || $('#numeroExtDomicilio').val() == "0") {
             mensaje += "*Ingrese no. Exterior \n";
             error = false;
             }*/
            /*if ($('#cpDomicilio').val() == "" || $('#cpDomicilio').val() == "0") {
             mensaje += "*Ingrese C.P. \n";
             error = false;
             }*/
            if ($('#cpDomicilio').val() != "") {
                if ($('#cpDomicilio').val().length < 5) {
                    mensaje += "*El  C.P. debe ser de 5 dígitos\n";
                    error = false;
                }
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
                mensaje += "*Ingrese tel\u00e9fono y/o celular y/o correo electr\u00f3nico \n";
                error = false;
            } else {
                if ($('#telefonoTel').val() != "") {
                    if ($('#telefonoTel').val().length != 10) {
                        mensaje += "*Tel\u00e9fono debe de tener 10 Digitos \n";
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
                        mensaje += "*correo electrónico no válido \n";
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
                    mensaje += "*correo electrónico no valido \n";
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
            if ($('#fechaNacimientoTutorOfendido').val() != "" && $('#fechaNacimientoTutorOfendido').val() != "0") {
                if ($('#txtEdadTutorOfendido').val() == "" || $('#txtEdadTutorOfendido').val() == "0") {
                    mensaje += "*Seleccione la Edad del tutor \n";
                    error = false;
                }
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

                    var rfcStr = $("#txtRfcOfendido").val().toUpperCase();

                    var regex = /^[A-Z]{4}([0-9]{2})(1[0-2]|0[1-9])([0-3][0-9])(([A-Z0-9]{3})?)$/;

                    if (!regex.test(rfcStr)) {
                        mensaje += "*Ingresa un RFC valido \n";
                        error = false;
                    }

                }

                /*if ($('#txtFechaNacimientoOfendido').val() == "" || $('#txtFechaNacimientoOfendido').val() == "0") {
                 mensaje += "*Capture la Fecha Nacimiento del Ofendido\n";
                 error = false;
                 }
                 
                 if ($('#txtEdadOfendido').val() == "") {
                 mensaje += "*Capture la Edad del Ofendido\n";
                 error = false;
                 }*/

                if ($('#cmbPaisNacimientoOfendido').val() == "" || $('#cmbPaisNacimientoOfendido').val() == "0") {
                    mensaje += "*Seleccione País de Nacimiento del Ofendido\n";
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

                if ($('#cmbVictimaAcosoSexual').val() == "" || $('#cmbVictimaAcosoSexual').val() == "0") {
                    mensaje += "*Selecciona si es Victima de Acoso Sexual\n";
                    error = false;
                }

                if ($('#cmbOrdenProteccion').val() == "" || $('#cmbOrdenProteccion').val() == "0") {
                    mensaje += "*Selecciona si tiene Orden de Protección\n";
                    error = false;
                }

            } else if ($("#cmbTipoPersonaOfendido").val() == "2" || $("#cmbTipoPersonaOfendido").val() == "3" || $("#cmbTipoPersonaOfendido").val() == "4" || $("#cmbTipoPersonaOfendido").val() == "5") {
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
                            var i = 1;
                            $.each(data.data, function (k, e) {
                                var success = '';//($("#idOfendidoSolicitud").val() == e.idOfendidoSolicitud) ? 'success' : '';
                                html += "<tr data-ofendido='" + e.idOfendidoSolicitud + "' class='trSeleccion " + success + "'>";
                                html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + i + "</td>";
                                html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.desTipoPersona + "</td>";
                                if (e.cveTipoPersona == 1) {
                                    html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.nombre + " " + e.paterno + " " + e.materno + "</td>";
                                } else if (e.cveTipoPersona == 2 || e.cveTipoPersona == 3 || e.cveTipoPersona == 4 || e.cveTipoPersona == 5) {
                                    html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.nombreMoral + "</td>";
                                }
                                html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.desGenero + "</td>";
                                html += "<td><center><img class='eliminar-permisos' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarOfendido(" + e.idOfendidoSolicitud + ");'></center></td>";

                                html += "</tr>";
                                i++;

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
            $("#ubicacion").append('<a id="oculta-ubicar" href="javascript::void(0);" onclick="ocultaUbicar();">OCULTAR</a><br><iframe src="sigejupe/ofendidosSolicitudes/localizaOfendido.php" width="50%" height="300" id="frameDemo"></iframe>');
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
    //        if (updatePermisos == 'N') {
    //            alert('No se tienen los permisos para modificar registros en este formulario, contacta al administrador');
    //            return;
    //        }
            $("#idOfendidoSolicitud").val(ofendido.idOfendidoSolicitud);
            $("#tabla-ofendidos > tr").removeClass('success');
            $("tr").filter('[data-ofendido="' + ofendido.idOfendidoSolicitud + '"]').addClass('');

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
                }
                else {
                    $("#embarazada").prop('checked', false);
                    $("#embarazada").prop('disabled', true);
                }
                $("#cmbReligion").val(ofendido.cveTipoReligion);
                $("#cmbTipoParte").val(ofendido.cveTipoParte);
                $("#txtRfcOfendido").val(ofendido.rfc);
                $("#txtCurpOfendido").val(ofendido.curp);
                $("#txtFechaNacimientoOfendido").val(formatoFecha(ofendido.fechaNacimiento));
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
                $("#cmbVictimaAcosoSexual").val(ofendido.cveVictimaDeAcoso);
                $("#cmbVictimaDelincuenciaOrganizada").val(ofendido.cveVictimaDeLaDelincuenciaOrganizada);
                $("#cmbOrdenProteccion").val(ofendido.cveOrdenProteccion);
                $("#numHijos").val(ofendido.numHijos);

                if (ofendido.desaparecido == 'S') {
                    $("#desaparecido").prop('checked', true);
                } else if (ofendido.desaparecido == 'N') {
                    $("#desaparecido").prop('checked', false);
                }


            } else if (ofendido.cveTipoPersona == 2 || ofendido.cveTipoPersona == 3 || ofendido.cveTipoPersona == 4 || ofendido.cveTipoPersona == 5) {
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

            $("#guardar-general-ofendido").text("Editar Datos Generales del Sujeto Pasivo del Delito.");


            /*
             * mostrar etiqueta con el nombre del ofendido en cada una de sal secciones
             */

            var nombre = "";

            if (ofendido.cveTipoPersona == 1) {

                nombre = ofendido.nombre + " " + ofendido.paterno + " " + ofendido.materno;

            } else if (ofendido.cveTipoPersona == 2 || ofendido.cveTipoPersona == 3 || ofendido.cveTipoPersona == 4 || ofendido.cveTipoPersona == 5) {

                nombre = ofendido.nombreMoral;

            }

            //inicia consulta de la referencia de la carpeta
            var referencia = "";

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ofendidossolicitudes/OfendidossolicitudesFacade.Class.php",
                global: false,
                async: true,
                dataType: "json",
                data: {
                    accion: "consultarreferenciacarpeta",
                    idSolicitudAudiencia: $("#IdSolicitudAudiencia").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {

                    if (datos.data.cveTipoCarpeta != "") {
                        referencia += "  <br>Carpeta: " + datos.data.desCarpeta + " No: " + datos.data.numero + "/" + datos.data.anio;
                    } else if (datos.data.nuc != "" && datos.data.carpetaInv != "") {
                        referencia += "  <br>Carpeta de inv: " + datos.data.carpetaInv + " NUC: " + datos.data.nuc;
                    } else if (datos.data.nuc != "" && datos.data.carpetaInv == "") {
                        referencia += " <br> NUC: " + datos.data.nuc;
                    } else if (datos.data.nuc == "" && datos.data.carpetaInv != "") {
                        referencia += "  <br>Carpeta de inv: " + datos.data.carpetaInv;
                    }

                    $("#nombreDatosGeneralesOfendido").html('<b>Capture los datos generales del ofendido ' + nombre + referencia + '</b>');
                    $("#nombreDomicilioOfendido").html('<b>Capture el domicilio del ofendido ' + nombre + referencia + '</b>');
                    $("#nombreTelefonoOfendido").html('<b>Capture el teléfono del ofendido ' + nombre + referencia + '</b>');
                    $("#nombreDefensorOfendido").html('<b>Capture el defensor del ofendido ' + nombre + referencia + '</b>');
                    $("#tnombreTutorOfendido").html('<b>Capture el tutor del ofendido ' + nombre + referencia + '</b>');
                    $("#nombreNacionalidadOfendido").html('<b>Capture la nacionalidad del ofendido ' + nombre + referencia + '</b>');

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de referencia de carpeta:\n\n" + otroobj);
                }
            });

            //termina consulta de la referencia de la carpeta
        }

        modificarDomicilio = function (domicilio) {
    //        if (updatePermisos == 'N') {
    //            alert('No se tienen los permisos para modificar registros en este formulario, contacta al administrador');
    //            return;
    //        }
            $("#tabla-domicilios > tr").removeClass('success');
            $("tr").filter('[data-domicilio="' + domicilio.idDomicilioOfendidoSolicitud + '"]').addClass('');
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

            if (domicilio.DomicilioProcesal == 'S') {
                $('#DomicilioProcesal').prop('checked', true);

            } else if (domicilio.DomicilioProcesal == 'N') {
                $('#DomicilioProcesal').prop('checked', false);
            }

            $("#form-domicilios-ofendido #cmbTipoViviendaOfendido").val(domicilio.cveTipoDeVivienda);
            $("#form-domicilios-ofendido #idDomicilioOfendidoSolicitud").val(domicilio.idDomicilioOfendidoSolicitud);
            $("#form-domicilios-ofendido #activo").val(domicilio.activo);

            $("#btn-agregar-modificar-domicilio").text('Editar Domicilio');
        }

        modificarTelefono = function (telefono) {
    //        if (updatePermisos == 'N') {
    //            alert('No se tienen los permisos para modificar registros en este formulario, contacta al administrador');
    //            return;
    //        }
            $("#tabla-telefonos > tr").removeClass('success');
            $("tr").filter('[data-telefono="' + telefono.idTelefonoOfendidoSolicitud + '"]').addClass('');

            $("#form-telefonos-ofendido #telefonoTel").val(telefono.telefono);
            $("#form-telefonos-ofendido #celTel").val(telefono.celular);
            $("#form-telefonos-ofendido #emailTel").val(telefono.email);
            $("#form-telefonos-ofendido #activo").val(telefono.activo);
            $("#form-telefonos-ofendido #idTelefonoOfendidoSolicitud").val(telefono.idTelefonoOfendidoSolicitud);

            $("#btn-agregar-modificar-telefono").text('Editar Teléfono');


        }

        modificarDefensor = function (defensor) {
    //        if (updatePermisos == 'N') {
    //            alert('No se tienen los permisos para modificar registros en este formulario, contacta al administrador');
    //            return;
    //        }
            $("#tabla-defensores > tr").removeClass('success');
            $("tr").filter('[data-defensor="' + defensor.idDefensorOfendidoSolicitud + '"]').addClass('');
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
    //        if (updatePermisos == 'N') {
    //            alert('No se tienen los permisos para modificar registros en este formulario, contacta al administrador');
    //            return;
    //        }
            $("#tabla-tutores > tr").removeClass('success');
            $("tr").filter('[data-tutor="' + tutor.idTutorOfendido + '"]').addClass('');
            $("#form-tutores-ofendido #idTutorOfendido").val(parseInt(tutor.idTutorOfendido));
            $("#form-tutores-ofendido #cmbTipoTutorOfendido").val(parseInt(tutor.cveTipoTutor));
            if (tutor.ProvDef == "P") {
                $("#form-tutores-ofendido #provisional").prop('checked', true);
            } else if (tutor.ProvDef == "D") {
                $("#form-tutores-ofendido #definitivo").prop('checked', true);
            }
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

    //        if (deletePermisos == 'N') {
    //            alert('No se tienen los permisos para eliminar registros en este formulario, contacta al administrador');
    //            return;
    //        }

            $("tr").filter('[data-ofendido="' + idofendido + '"]').removeClass('success').addClass('danger');

            bootbox.dialog({
                message: "\u00bfSeguro quieres eliminar el Ofendido seleccionado? <br> Se eliminaran todos sus registros y relaciones.",
                closeButton: false,
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {

                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/ofendidossolicitudes/OfendidossolicitudesFacade.Class.php",
                                data: {accion: 'eliminar', idOfendidoSolicitud: idofendido},
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {
                                    try {

                                        if (data.status == 'ok') {

                                            $("#alert-general-ofendido").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

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
                                        } else {
                                            $("tr").filter('[data-ofendido="' + idofendido + '"]').removeClass('danger');
                                            $("#alert-general-ofendido").removeClass('alert-success').addClass('alert-warning').html('<strong>' + data.mensaje + '</strong>').show();
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

                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {
                            $("tr").filter('[data-ofendido="' + idofendido + '"]').removeClass('danger');
                        }
                    }
                }
            });


        }

        eliminarDomicilio = function (iddomicilio) {

    //        if (deletePermisos == 'N') {
    //            alert('No se tienen los permisos para eliminar registros en este formulario, contacta al administrador');
    //            return;
    //        }
            $("tr").filter('[data-domicilio="' + iddomicilio + '"]').removeClass('success').addClass('danger');


            bootbox.dialog({
                message: "\u00bfDesea eliminar el domicilio del ofendido?",
                closeButton: false,
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {

                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesFacade.Class.php",
                                data: {
                                    accion: 'eliminar',
                                    idDomicilioOfendidoSolicitud: iddomicilio,
                                    idOfendidoSolicitud: $('#idOfendidoSolicitud').val()
                                },
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {
                                    try {

                                        if (data.status == 'ok') {

                                            $("#alert-domicilios").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();


                                            cargarTablaDomicilios($("#idOfendidoSolicitud").val());
                                            $("#limpiar-domicilio").trigger('click');

                                        } else {

                                            $("tr").filter('[data-domicilio="' + iddomicilio + '"]').removeClass('danger');
                                            $("#alert-domicilios").removeClass('alert-success').addClass('alert-warning').html('<strong>' + data.mensaje + '</strong>').show();

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

                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {
                            $("tr").filter('[data-domicilio="' + iddomicilio + '"]').removeClass('danger');
                        }
                    }

                }
            });


        }

        eliminarTelefono = function (idtelefono) {

    //        if (deletePermisos == 'N') {
    //            alert('No se tienen los permisos para eliminar registros en este formulario, contacta al administrador');
    //            return;
    //        }

            $("tr").filter('[data-telefono="' + idtelefono + '"]').removeClass('success').addClass('danger');


            bootbox.dialog({
                message: "¿Seguro quieres eliminar el Teléfono seleccionado?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {

                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/telefonosofendidossolicitudes/TelefonosofendidossolicitudesFacade.Class.php",
                                data: {
                                    accion: 'eliminar',
                                    idTelefonoOfendidoSolicitud: idtelefono,
                                    idOfendidoSolicitud: $('#idOfendidoSolicitud').val()
                                },
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {
                                    try {
                                        $("#alert-telefonos").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                        if (data.status == 'ok') {

                                            $("#alert-telefonos").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                            cargarTablaTelefonos($("#idOfendidoSolicitud").val());
                                            $('#limpiar-telefono').trigger('click');

                                        } else {

                                            $("tr").filter('[data-telefono="' + idtelefono + '"]').removeClass('danger');
                                            $("#alert-telefonos").removeClass('alert-success').addClass('alert-warning').html('<strong>' + data.mensaje + '</strong>').show();

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
                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {
                            $("tr").filter('[data-telefono="' + idtelefono + '"]').removeClass('danger');
                        }
                    }
                }
            });


        }

        eliminarDefensor = function (iddefensor) {

    //        if (deletePermisos == 'N') {
    //            alert('No se tienen los permisos para eliminar registros en este formulario, contacta al administrador');
    //            return;
    //        }

            $("tr").filter('[data-defensor="' + iddefensor + '"]').removeClass('success').addClass('danger');


            bootbox.dialog({
                message: "¿Seguro quieres eliminar el Defensor seleccionado?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {

                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/defensoresofendidossolicitudes/DefensoresofendidossolicitudesFacade.Class.php",
                                data: {
                                    accion: 'eliminar',
                                    idDefensorOfendidoSolicitud: iddefensor,
                                    idOfendidoSolicitud: $('#idOfendidoSolicitud').val()
                                },
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {
                                    try {

                                        if (data.status == 'ok') {

                                            $("#alert-defensores").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                            cargarTablaDefensores($("#idOfendidoSolicitud").val());
                                            $('#limpiar-defensor').trigger('click');

                                        } else {

                                            $("tr").filter('[data-defensor="' + iddefensor + '"]').removeClass('danger');
                                            $("#alert-defensores").removeClass('alert-success').addClass('alert-warning').html('<strong>' + data.mensaje + '</strong>').show();

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
                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {
                            $("tr").filter('[data-defensor="' + iddefensor + '"]').removeClass('danger');
                        }
                    }
                }
            });


        }

        eliminarTutor = function (idtutor) {

    //        if (deletePermisos == 'N') {
    //            alert('No se tienen los permisos para eliminar registros en este formulario, contacta al administrador');
    //            return;
    //        }

            $("tr").filter('[data-tutor="' + idtutor + '"]').removeClass('success').addClass('danger');

            bootbox.dialog({
                message: "¿Seguro quieres eliminar el Tutor seleccionado?",
                closeButton: false,
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {

                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/tutoresofendidos/TutoresofendidosFacade.Class.php",
                                data: {
                                    accion: 'eliminar',
                                    idTutorOfendido: idtutor,
                                    idOfendidoSolicitud: $('#idOfendidoSolicitud').val()
                                },
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {
                                    try {

                                        if (data.status == 'ok') {

                                            $("#alert-tutores").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                            cargarTablaTutores($("#idOfendidoSolicitud").val());
                                            $('#limpiar-tutores').trigger('click');

                                        } else {

                                            $("tr").filter('[data-tutor="' + idtutor + '"]').removeClass('danger');
                                            $("#alert-tutores").removeClass('alert-success').addClass('alert-warning').html('<strong>' + data.mensaje + '</strong>').show();

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

                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {
                            $("tr").filter('[data-tutor="' + idtutor + '"]').removeClass('danger');
                        }
                    }
                }
            });


        }

        eliminarNacionalidad = function (idnacionalidad) {

    //        if (deletePermisos == 'N') {
    //            alert('No se tienen los permisos para eliminar registros en este formulario, contacta al administrador');
    //            return;
    //        }

            $("tr").filter('[data-nacionalidad="' + idnacionalidad + '"]').removeClass('success').addClass('danger');

            bootbox.dialog({
                message: "¿Seguro quieres eliminar la Nacionalidad seleccionada?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {

                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesFacade.Class.php",
                                data: {
                                    accion: 'eliminar',
                                    idNacionalidadOfendidoSolicitud: idnacionalidad,
                                    activo: 'N',
                                    idOfendidoSolicitud: $('#idOfendidoSolicitud').val()
                                },
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {

                                    try {

                                        if (data.status == 'ok') {

                                            $("#alert-nacionalidades").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();
                                            cargarTablaNacionalidades($("#idOfendidoSolicitud").val());

                                        } else {

                                            $("tr").filter('[data-nacionalidad="' + idnacionalidad + '"]').removeClass('danger');
                                            $("#alert-nacionalidades").removeClass('alert-success').addClass('alert-warning').html('<strong>' + data.mensaje + '</strong>').show();

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

                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {
                            $("tr").filter('[data-nacionalidad="' + idnacionalidad + '"]').removeClass('danger');
                        }
                    }
                }
            });

        }


        $(function () {

            $('#numHijos').validaCampo('0123456789');
            $('#cpDomicilio').validaCampo('0123456789');
            $('#telefonoTel').validaCampo('0123456789');
            $('#celTel').validaCampo('0123456789');
            $('#telDefensor').validaCampo('0123456789');
            $('#celDefensor').validaCampo('0123456789');
            comboTipoPersonaOfendido();
            comboReligion();
            comboTiposPartes();
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
            comboVictimaAcosoSexual();
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
            cargarTablaOfendidos($("#IdSolicitudAudiencia").val());


            /*
             *default tipo persona fisca
             * pais y estado mexico
             */
            $("#cmbTipoPersonaOfendido").val(1);
            $("#cmbPaisNacimientoOfendido").val(119).trigger('change');
            $("#cmbEstadoNacimientoOfendido").val(15).trigger('change');


            $("#cmbTipoPersonaOfendido").on('change', function () {
                var tipopersona = $(this).val();

                if (tipopersona == 1) {

                    $("#cmbPaisNacimientoOfendido").val(119).trigger('change');
                    $("#cmbEstadoNacimientoOfendido").val(15).trigger('change');

                } else if (tipopersona == 2 || tipopersona == 3 || tipopersona == 4 || tipopersona == 5) {

                    $("#cmbPaisNacimientoMoralOfendido").val(119).trigger('change');
                    $("#cmbEstadoNacimientoMoralOfendido").val(15).trigger('change');

                }
            });


            if ($("#idOfendidoSolicitud").val() != '') {
                cargarTablaDomicilios($("#idOfendidoSolicitud").val());
                cargarTablaTelefonos($("#idOfendidoSolicitud").val());
                cargarTablaDefensores($("#idOfendidoSolicitud").val());
                cargarTablaTutores($("#idOfendidoSolicitud").val());
                cargarTablaNacionalidades($("#idOfendidoSolicitud").val());
            }

            $("#form-ofendido-general").on('submit', function (e) {
                e.preventDefault();

    //            if (createPermisos == 'N') {
    //                alert('No se tienen los permisos para crear registros en este formulario, contacta al administrador');
    //                return;
    //            }

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
                                    $("#guardar-general-ofendido").text("Editar Datos Generales del Sujeto Pasivo del Delito.");
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

    //            if (createPermisos == 'N') {
    //                alert('No se tienen los permisos para crear registros en este formulario, contacta al administrador');
    //                return;
    //            }

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
                                    $("#btn-agregar-modificar-domicilio").text('Agregar Domicilio');
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
                            alert("Server : Error al guardar Domicilio del Ofendido:" + otroobj);
                        }
                    });
                }
            });

            //termina agregar domicilio(s) del ofendido


            //agregar telefonos(s) del ofendido
            $("#form-telefonos-ofendido").on('submit', function (e) {
                e.preventDefault();

    //            if (createPermisos == 'N') {
    //                alert('No se tienen los permisos para crear registros en este formulario, contacta al administrador');
    //                return;
    //            }

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

    //            if (createPermisos == 'N') {
    //                alert('No se tienen los permisos para crear registros en este formulario, contacta al administrador');
    //                return;
    //            }

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

    //            if (createPermisos == 'N') {
    //                alert('No se tienen los permisos para crear registros en este formulario, contacta al administrador');
    //                return;
    //            }

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

    //            if (createPermisos == 'N') {
    //                alert('No se tienen los permisos para crear registros en este formulario, contacta al administrador');
    //                return;
    //            }

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
                                    $("#cmbPaisNacionalidadOfendido").val(119);
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

                $("#cmbPaisNacimientoOfendido").val(119).trigger('change');
                $("#cmbEstadoNacimientoOfendido").val(15).trigger('change');

                $("#cmbFamiliaLinguisticaOfendido").val(15);
                $("#cmbGrupoEdnico").val(72);

                $("#nombreDatosGeneralesOfendido").html('');
                $("#nombreDomicilioOfendido").html('');
                $("#nombreTelefonoOfendido").html('');
                $("#nombreDefensorOfendido").html('');
                $("#tnombreTutorOfendido").html('');
                $("#nombreNacionalidadOfendido").html('');

                $("#guardar-general-ofendido").text("Guardar Datos Generales del Sujeto Pasivo del Delito.");
            });

            //limpiar domicilio
            $("#limpiar-domicilio").on('click', function (e) {
                e.preventDefault();
                $("#tabla-domicilios > tr").removeClass('success');
                $("#form-domicilios-ofendido #idDomicilioOfendidoSolicitud").val("");
                $("#form-domicilios-ofendido #activo").val("S");

                $("#form-domicilios-ofendido")[0].reset();

                //dejar defaul pais y estado mexico
                $("#cmbPaisDomicilioOfendido").val('119').trigger('change');
                $("#cmbEstadoDomicilioOfendido").val('15').trigger('change');

                $("#btn-agregar-modificar-domicilio").text('Agregar Domicilio');
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

    //        var permisos = obtenerPermisosFormulario("ATENCION PUBLICO", "SOLICITUDES DE AUDIENCIA");
    //
    //        if (permisos.Read == 'N') {
    //            $('.consulta-permisos').remove();
    //        }
    //        if (permisos.Create == 'N') {
    //            $('.guarda').prop('disabled', true);
    //        }
    //        if (permisos.Update == 'N') {
    //
    //        }
    //        if (permisos.Delete == 'N') {
    //
    //        }


        });


    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>