<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idCarpetaJudicial = isset($_POST['idCarpetajudicial']) ? $_POST['idCarpetajudicial'] : '';
    ?>

    <style>
        .trGridAgrega {
            color: #ffffff;
            background-color: #881518;
        }

        .trSeleccion:hover {
            background-color:#FFECED;
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
                Sujeto(s) pasivo(s) del delito Tocas
            </h5>
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
                                <a href="#divGeneralOfendidoPaso3" data-toggle="tab" aria-expanded="true"><span class="requerido">(*)</span>General</a>
                            </li>
                            <li class="tab-red">
                                <a href="#divDomiciliosPaso3" data-toggle="tab" aria-expanded="false">Domicilio(s)</a>
                            </li>
                            <li class="tab-orange">
                                <a href="#divTelefonosPaso3" data-toggle="tab" aria-expanded="false"> Tel&eacute;fono(s)</a>
                            </li>
                            <li class="tab-orange">
                                <a href="#divDefendoresPaso3" data-toggle="tab" aria-expanded="false"><span class="requerido">(*)</span>Defensor </a>
                            </li>
                            <li class="tab-orange">
                                <a href="#divTutoresPaso3" data-toggle="tab" aria-expanded="false">Tutor /
                                    Representante </a>
                            </li>
                            <li class="tab-orange">
                                <a href="#divNacionalidadesPaso3" data-toggle="tab" aria-expanded="false">
                                    <span class="requerido">(*)</span>Nacionalidades</a>
                            </li>
                        </ul>
                        <div class="tab-content" style="margin-top: 50px;">
                            <!-- PASO 3 DATOS GENERALES DEL OFENDIDO-->

                            <!--campo de solicitud de audiencia-->


                            <input type="hidden" name="IdCarpetaJudicial" id="IdCarpetaJudicial"
                                   value="<?php echo $idCarpetaJudicial; ?>"/>

                            <div class="tab-pane active" id="divGeneralOfendidoPaso3">
                                <form action="" id="form-ofendido-general">
                                    <input type="hidden" name="accion" id="accion" value="agregar"/>
                                    <input type="hidden" name="idOfendidoCarpeta" id="idOfendidoCarpeta"/>
                                    <input type="hidden" name="activo" id="activo" value="S"/>
                                    <div>

                                        <div id="NombreGeneral" style="margin-left:15px; margin-bottom: 25px;"></div>
                                        <div class="col-lg-12">

                                            <label class="control-label col-xs-3" for="cveTipoPersona">
                                                Tipo de Persona <span class="requerido">(*)</span>
                                            </label>

                                            <div class="col-lg-12">
                                                <select id="cveTipoPersona" class="form-control"
                                                        name="cveTipoPersona"
                                                        onchange="validaPersona();">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="divPersonaFisicaOfendido">
                                            <!--<div class="contenedor">-->
                                            <div class="col-lg-6">
                                                <label class="control-label"
                                                       for="nombre">Nombre <span class="requerido">(*)</span></label>

                                                <div>
                                                    <input type="text" class="form-control"
                                                           id="nombre"
                                                           name="nombre">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label"
                                                       for="paterno">Paterno <span class="requerido">(*)</span></label>

                                                <div>
                                                    <input type="text" class="form-control datoTipoCadena"
                                                           id="paterno" name="paterno">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label"
                                                       for="materno">Materno <span class="requerido">(*)</span></label>

                                                <div>
                                                    <input type="text" class="form-control"
                                                           id="materno"
                                                           name="materno">
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <div class="col-lg-3">
                                                <label class="control-label"
                                                       for="cveGenero">G&eacute;nero <span class="requerido">(*)</span></label>

                                                <div>
                                                    <select id="cveGenero" class="form-control"
                                                            name="cveGenero" required=""
                                                            onchange="activaEmbarazada('cveGenero');">
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

                                            <div class="col-lg-3" id="divReligion">
                                                <label class="control-label" for="cmbCveTipoReligion"> Religi&oacute;n </label>
                                                <div>
                                                    <select id="cmbCveTipoReligion" class="form-control mayuscula" name="cmbCveTipoReligion">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3" id="calidadSujetoPasivo">
                                                <label class="control-label" for="cmbCveTipoParte"> Calidad del Sujeto Pasivo <span class="requerido">(*)</span></label>
                                                <div>
                                                    <select id="cmbCveTipoParte" class="form-control mayuscula" name="cmbCveTipoParte">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="rfc">RFC</label>

                                                <div>
                                                    <input type="text" class="form-control" id="rfc"
                                                           name="rfc" maxlength="13"
                                                           onblur="validaRfc('rfc');">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="curp">CURP</label>

                                                <div>
                                                    <input type="text" class="form-control" id="curp"
                                                           name="curp" maxlength="18"
                                                           onblur="validaCurp('curp');">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">

                                                <label class="control-label" for="fechaNacimiento">
                                                    Fecha de Nacimiento (dd/mm/aaaa) 
                                                </label>

                                                <div>
                                                    <input id="fechaNacimiento" class="form-control"
                                                           type="text" tabindex="4" data-toggle="tooltip"
                                                           title=""
                                                           placeholder="" name="fechaNacimiento"
                                                           data-original-title=""
                                                           onblur="calcularEdad(this.value, 'fechaNacimiento', 'edad');">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label class="control-label" for="edad">Edad </label>

                                                <div>
                                                    <input type="text" class="form-control" id="edad"
                                                           name="edad" maxlength="3" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cvePaisNacimiento">
                                                    Pais Nacimiento <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cvePaisNacimiento" class="form-control"
                                                            name="cvePaisNacimiento"
                                                            onchange="comboEstadoNacimientoOfendido();"
                                                            required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cveEstadoNacimiento">Estado
                                                    Nacimiento <span class="requerido">(*)</span></label>

                                                <div>
                                                    <select id="cveEstadoNacimiento"
                                                            class="form-control"
                                                            name="cveEstadoNacimiento"
                                                            onchange="comboMunicipioNacimientoOfendido();"
                                                            required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                    <input id="estadoNacimiento"
                                                           name="estadoNacimiento" type="text"
                                                           class="form-control" style="display: none">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label"
                                                       for="cveMunicipioNacimiento">
                                                    Municipio Nacimiento <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cveMunicipioNacimiento"
                                                            class="form-control"
                                                            name="cveMunicipioNacimiento" required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                    <input id="municipioNacimiento"
                                                           name="municipioNacimiento" type="text"
                                                           class="form-control" style="display: none">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cveNivelInstruccion">
                                                    Grado de Estudio <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cveNivelInstruccion" class="form-control"
                                                            name="cveNivelInstruccion">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cveEstadoCivil">
                                                    Estado Civil <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cveEstadoCivil" class="form-control"
                                                            name="cveEstadoCivil" required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cveOcupacion">
                                                    Ocupación <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cveOcupacion" class="form-control"
                                                            name="cveOcupacion" required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cveEspanol">
                                                    &#191;Habla espa&ntilde;ol? <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cveEspanol" class="form-control"
                                                            name="cveEspanol" required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label"
                                                       for="cveAlfabetismo">Alfabetismo <span class="requerido">(*)</span></label>

                                                <div>
                                                    <select id="cveAlfabetismo" class="form-control"
                                                            name="cveAlfabetismo" required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cveDialectoIndigena">¿Habla Dialecto
                                                    Indigena? <span class="requerido">(*)</span></label>

                                                <div>
                                                    <select id="cveDialectoIndigena"
                                                            class="form-control"
                                                            name="cveDialectoIndigena" required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label"
                                                       for="cveTipoFamiliaLinguistica">
                                                    Tipo de Familia Lingüística <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cveTipoFamiliaLinguistica"
                                                            class="form-control"
                                                            name="cveTipoFamiliaLinguistica" required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cveInterprete">
                                                    ¿Necesita Interprete? <span class="requerido">(*)</span></label>

                                                <div>
                                                    <select id="cveInterprete" class="form-control"
                                                            name="cveInterprete" required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <label class="control-label" for="cveEstadoPsicofisico">
                                                    Psicofisico <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cveEstadoPsicofisico" class="form-control"
                                                            name="cveEstadoPsicofisico" required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="control-label" for="cveGrupoEdnico">
                                                    ¿Pertenece a algún Grupo étnico? <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select id="cveGrupoEdnico" class="form-control"
                                                            name="cveGrupoEdnico" required="">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <label for="cveVictimaDeLaDelincuenciaOrganizada">
                                                    ¿Victima de Delincuencia Organizada? <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select name="cveVictimaDeLaDelincuenciaOrganizada"
                                                            id="cveVictimaDeLaDelincuenciaOrganizada" required
                                                            class="form-control">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-lg-3">
                                                <label for="cveVictimaDeViolenciaDeGenero">
                                                    ¿Victima de Violencia de Genero? <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select name="cveVictimaDeViolenciaDeGenero"
                                                            id="cveVictimaDeViolenciaDeGenero" required
                                                            class="form-control">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-lg-3">
                                                <label for="cveVictimaDeTrata">
                                                    ¿Victima de Trata? <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select name="cveVictimaDeTrata"
                                                            id="cveVictimaDeTrata" required
                                                            class="form-control">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="clearfix"></div>
                                            <br>
                                            <div class="col-lg-3">
                                                <label for="cmbVictimaAcosoSexual">
                                                    ¿Victima de Acoso Sexual? <span class="requerido">(*)</span>
                                                    <br/>
                                                </label>


                                                <div>
                                                    <select name="cveVictimaDeAcoso"
                                                            id="cmbVictimaAcosoSexual" required
                                                            class="form-control">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <label for="cveOrdenProteccion">
                                                    ¿Tiene Orden de Protecci&oacute;n? <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <select name="cveOrdenProteccion"
                                                            id="cveOrdenProteccion" required
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
                                                <label id="etiquetaPersonaMoral" class="control-label" for="nombreMoral">
                                                    Nombre Persona Moral <span class="requerido">(*)</span>
                                                </label>

                                                <div>
                                                    <input type="text" class="form-control datoTipoCadena"
                                                           id="nombreMoral"
                                                           name="nombreMoral">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <label class="control-label" for="rfc">RFC</label>

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
                                        </div>

                                        <div class="clearfix"></div>
                                        <br/><br/>

                                        <div class="col-lg-12">
                                            <button class="btn btn-primary" id="guardar-general-ofendido">
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
                                    <input type="hidden" id="idDomicilioOfendidoCarpeta"
                                           name="idDomicilioOfendidoCarpeta" readonly/>
                                    <input type="hidden" id="activo" name="activo" value="S"/>

                                    <div id="NombreDomicilios" style="margin-left: 15px; margin-bottom: 25px;"></div>
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
                                            <label class="control-label" for=""> CP </label>

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
                                        <div class="col-lg-2">
                                            <label class="control-label" for="">Domicilio Procesal</label>
                                            <div>
                                                <input type="checkbox" class="form-control mayuscula" id="cbDomicilioProcesal">
                                            </div> 
                                        </div>
                                        <div class="col-lg-2">
                                            <label class="control-label" for="cmbTipoViviendaOfendido">
                                                Tipo Domicilio <span class="requerido">(*)</span>
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
                                        <br/>

                                        <div id="alert-domicilios" class="alert" style="display: none;">

                                        </div>

                                        <div class="clearfix"></div>
                                        <br/><br/>

                                        <div class="col-lg-12">
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
                                    <input type="hidden" id="idTelefonoOfendidoCarpeta"
                                           name="idTelefonoOfendidoCarpeta"/>
                                    <p class="col-lg-12" style="color:darkred;">
                                        Para guardar un registro tienes que ingresar al menos un campo.
                                    </p>
                                    <div id="NombreTelefonos" style="margin-left:15px; margin-bottom: 25px;"></div>
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
                                    <input type="hidden" name="idDefensorOfendidoCarpeta"
                                           id="idDefensorOfendidoCarpeta" value=""/>

                                    <div id="NombreDefensores" style="margin-left: 15px; margin-bottom: 25px;"></div>
                                    <div>
                                        <div class="col-lg-4">
                                            <label class="control-label" for="cmbTipoDefensorOfendido">
                                                Representante <span class="requerido">(*)</span>
                                            </label>

                                            <div>
                                                <select id="cmbTipoDefensorOfendido" class="form-control"
                                                        name="cmbTipoDefensorOfendido" required="" onchange="establecerNombreDefensor()">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="control-label" for=""> Nombre del Representante<span class="requerido">(*)</span></label>

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
                                    <input type="hidden" name="idTutorOfendido" id="idTutorOfendido"/>
                                    <input type="hidden" name="activo" id="activo" value="S"/>

                                    <div id="NombreTutores" style="margin-left: 15px; margin-bottom: 25px;"></div>
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
                                            <label class="control-label" for="txtEdadTutorOfendido">Edad</label>

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
                                    <input type="hidden" name="idNacionalidadOfendidoCarpeta" id="idNacionalidadOfendidoCarpeta"/>
                                    <input type="hidden" name="activo" value="S"/>

                                    <div id="NombreNacionalidad" style="margin-left: 15px; margin-bottom: 25px;"></div>
                                    <div>
                                        <div class="col-lg-12">
                                            <label class="control-label" for="cmbPaisNacionalidadOfendido">
                                                <strong>Nacionalidad</strong>&nbsp;<span class="requerido">(*)</span>
                                            </label>
                                            <select id="cmbPaisNacionalidadOfendido" class="form-control"
                                                    name="cmbPaisNacionalidadOfendido" required="">
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>
                                        <br/>

                                        <div class="col-lg-12">
                                            <button class="btn btn-primary" id="btn-agregar-modificar-nacionalidad">
                                                Agregar Nacionalidad
                                            </button>
                                            <a href="#" id="limpiar-nacionalidades" class="btn btn-primary">
                                                Limpiar
                                            </a>
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
                            <strong>LISTA DE SUJETOS PASIVOS DEL DELITO</strong>
                        </label>
                    </div>


                    <table id="tableResultadosOfendido" class='table table-bordered tblGridAgrega'>
                        <tr class='trGridAgrega'>
                            <!--<span class="label label-success">Registro en Edici&oacute;n.</span>-->
                            <th>Tipo Persona</th>
                            <th>Nombre</th>
                            <th>Sexo</th>
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


        var timeoutMensaje = '';

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

        validaPersona = function () {
            if ($("#cveTipoPersona").val() == 1) {
                $('#divPersonaFisicaOfendido').show();
                $('#divPersonaMoralOfendido').hide();
            } else if ($("#cveTipoPersona").val() == 2 || $("#cveTipoPersona").val() == 3 || $("#cveTipoPersona").val() == 4 || $("#cveTipoPersona").val() == 5) {
                $('#divPersonaFisicaOfendido').hide();
                $('#divPersonaMoralOfendido').show();
                comboPaisNacimientoOfendido("cmbPaisNacimientoMoralOfendido");
                cambiarEtiquetaPersona();
            }
        };

        cambiarEtiquetaPersona = function () {
            var texto = "";
            if ($("#cveTipoPersona").val() >= 3) {
                texto = 'Nombre de Persona <span class="requerido">(*)</span>';
            } else if ($("#cveTipoPersona").val() == 2) {
                texto = 'Nombre Persona Moral <span class="requerido">(*)</span>';
            }
            $("#etiquetaPersonaMoral").html(texto);
        };

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
        };

        validaRfc = function (campoValida) {
            if ($("#" + campoValida + "").val() != "") {
                var rfcStr = $("#" + campoValida + "").val().toUpperCase();
                //var regex = /^([A-Z|a-z|&amp;]{3}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)(\w{2})([A|a|0-9]{1})$|^([A-Z|a-z]{4}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)((\w{2})([A|a|0-9]{1})){0,3}$/;
                var regex = /^[A-Z]{4}([0-9]{2})(1[0-2]|0[1-9])([0-3][0-9])(([A-Z0-9]{3})?)$/;
                if (!regex.test(rfcStr)) {
                    alert('Rfc no válido');
                }
            }
        }

        fechaNacimiento = function (curp) {
            var m = curp.match(/^\w{4}(\w{2})(\w{2})(\w{2})/);
            console.log(m);
            var anio = parseInt(m[1]) + 1900;
            var fecha = new Date();
            if (anio <= 1920) {
                anio += 100;
            }
            console.log(anio);
            var mes = m[2];
            console.log(mes);
            var dia = m[3];
            console.log(dia);
            var fecha = dia + "/" + mes + "/" + anio;
            console.log(fecha);
            $("#fechaNacimiento").data("DateTimePicker").date(fecha);
            ;
            $("#fechaNacimiento").trigger('blur');
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
                /*if (edad < 18) {
                 alert("Verifique su Fecha de Nacimiento, debe ser mayor a 18");
                 $("#" + campoFecha + "").val("");
                 $("#" + campoFecha + "").focus();
                 $("#" + campoEdad + "").val("");
                 return false;
                 } else {
                 $("#" + campoEdad + "").val(edad);
                 }*/
                $("#" + campoEdad + "").val(edad);
            } else {
                $("#" + campoEdad + "").val("");
            }
        };

        comboTipoPersonaOfendido = function () {
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
    //                    $('#cveTipoPersona').empty();
    //                    $('#cveTipoPersona').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            if ( object.cveTipoPersona == "1" || object.cveTipoPersona == "2" || object.cveTipoPersona == "3" ) {
    //                                $('#cveTipoPersona').append('<option value="' + object.cveTipoPersona + '">' + object.desTipoPersona + '</option>');
    //                            }
    //                            
    //                        });
    //                        $('#cveTipoPersona').val(1);
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Tipos Personas:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de tipos personas:\n\n" + otroobj);
    //            }
    //        });
            if (catTiposPersonasJson != "") {
                try {
                    catTiposPersonasJson
                    $('#cveTipoPersona').empty();
                    $('#cveTipoPersona').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTiposPersonasJson.totalCount > 0) {
                        $.each(catTiposPersonasJson.data, function (count, object) {
                            //if ( object.cveTipoPersona == "1" || object.cveTipoPersona == "2" || object.cveTipoPersona == "3" ) {
                            $('#cveTipoPersona').append('<option value="' + object.cveTipoPersona + '">' + object.desTipoPersona + '</option>');
                            //}
                        });
                        $('#cveTipoPersona').val(1);
                    }

                } catch (e) {
                    alert("Error al cargar tipos personas Ofendido:" + e);
                }
            } else {
                $('#cveTipoPersona').empty();
                $('#cveTipoPersona').append('<option value="0">No carga catalogo</option>');

            }
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
    //                    $('#cveGrupoEdnico').empty();
    //                    $('#cveGrupoEdnico').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cveGrupoEdnico').append('<option value="' + object.cveGrupoEdnico + '">' + object.desGrupoEdnico + '</option>');
    //                        });
    //                        $('#cveGrupoEdnico').val(72);
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar grupos etnicos:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de grupos etnicos:\n\n" + otroobj);
    //            }
    //        });
            if (catGruposEdnicosJson != "") {
                try {
                    $('#cveGrupoEdnico').empty();
                    $('#cveGrupoEdnico').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catGruposEdnicosJson.totalCount > 0) {
                        $.each(catGruposEdnicosJson.data, function (count, object) {
                            $('#cveGrupoEdnico').append('<option value="' + object.cveGrupoEdnico + '">' + object.desGrupoEdnico + '</option>');
                        });
                        $('#cveGrupoEdnico').val(72);
                    }

                } catch (e) {
                    alert("Error al cargar tipos personas Ofendido:" + e);
                }
            } else {
                $('#cveGrupoEdnico').empty();
                $('#cveGrupoEdnico').append('<option value="0">No carga catalogo</option>');

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
    //                    alert("Error al cargar Tipos Religiones:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de tipos religiones:\n\n" + otroobj);
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
                    alert("Error al cargar tipos personas Ofendido:" + e);
                }
            } else {
                $('#cmbCveTipoReligion').empty();
                $('#cmbCveTipoReligion').append('<option value="">No carga catalogo</option>');

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
                        $('#cmbCveTipoParte').empty();
                        $('#cmbCveTipoParte').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        $("#cmbTipoParteMoral").empty();
                        $("#cmbTipoParteMoral").append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (object.descTipoParte == "VICTIMA" || object.descTipoParte == "OFENDIDO") {
                                    $('#cmbCveTipoParte').append('<option value="' + object.cveTipoParte + '">' + object.descTipoParte + '</option>');
                                    $('#cmbTipoParteMoral').append('<option value="' + object.cveTipoParte + '">' + object.descTipoParte + '</option>');
                                }
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Tipo parte:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo parte:\n\n" + otroobj);
                }
            });
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
                        $('#cveVictimaDeLaDelincuenciaOrganizada').empty();
                        $('#cveVictimaDeLaDelincuenciaOrganizada').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cveVictimaDeLaDelincuenciaOrganizada').append('<option value="' + object.cveVictimaDeLaDelincuenciaOrganizada + '">' + object.desVictimaDeLaDelincuenciaOrganizada + '</option>');
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
                        $('#cveVictimaDeViolenciaDeGenero').empty();
                        $('#cveVictimaDeViolenciaDeGenero').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cveVictimaDeViolenciaDeGenero').append('<option value="' + object.cveVictimaDeViolenciaDeGenero + '">' + object.desVictimaDeViolenciaDeGenero + '</option>');
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
                        $('#cveVictimaDeTrata').empty();
                        $('#cveVictimaDeTrata').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cveVictimaDeTrata').append('<option value="' + object.cveVictimaDeTrata + '">' + object.desVictimaDeTrata + '</option>');
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
                        $('#cveOrdenProteccion').empty();
                        $('#cveOrdenProteccion').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cveOrdenProteccion').append('<option value="' + object.cveOrdenProteccion + '">' + object.desOrdenProteccion + '</option>');
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
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/tiposdetenciones/TiposdetencionesFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false"},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbTipoDetencion').empty();
    //                    $('#cmbTipoDetencion').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbTipoDetencion').append('<option value="' + object.cveTipoDetencion + '">' + object.desTipoDetencion + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Tipo Detencion:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion tipo Detencion:\n\n" + otroobj);
    //            }
    //        });
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
    //                    $('#cveGenero').empty();
    //                    $('#cveGenero').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cveGenero').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Genero:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Genero:\n\n" + otroobj);
    //            }
    //        });
            if (catGenerosJson != "") {
                try {
                    $('#cveGenero').empty();
                    $('#cveGenero').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catGenerosJson.totalCount > 0) {
                        $.each(catGenerosJson.data, function (count, object) {
                            $('#cveGenero').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catGenerosJson Ofendido:" + e);
                }
            } else {
                $('#cveGenero').empty();
                $('#cveGenero').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboPaisNacionalidadOfendido = function () {
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
    //                    $('#cmbPaisNacionalidadOfendido').empty();
    //                    $('#cmbPaisNacionalidadOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbPaisNacionalidadOfendido').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
    //                        });
    //                        $('#cmbPaisNacionalidadOfendido').val(119);
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar País:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de país:\n\n" + otroobj);
    //            }
    //        });
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
    //                    $('#' + elemento).empty();
    //                    $('#' + elemento).append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#' + elemento).append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
    //                        });
    //                        $('#' + elemento).val(119).trigger('change');
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar País:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de país:\n\n" + otroobj);
    //            }
    //        });
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
            var tipoPersona = $("#cveTipoPersona").val();
            var cmbpais = "";
            var cmbestado = "";
            var cmbmunicipio = "";
            var txtestado = "";
            var txtmunicipio = "";
            if (tipoPersona == 0 || tipoPersona == 1) {
                cmbpais = "cvePaisNacimiento";
                cmbestado = "cveEstadoNacimiento";
                cmbmunicipio = "cveMunicipioNacimiento";
                txtestado = "estadoNacimiento";
                txtmunicipio = "municipioNacimiento";
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
    //            $.ajax({
    //                type: "POST",
    //                url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
    //                global: false,
    //                async: false,
    //                dataType: "json",
    //                data: {accion: "consultar", obligaPermiso: "false", cvePais: $('#' + cmbpais).val()},
    //                beforeSend: function (objeto) {
    //                },
    //                success: function (datos) {
    //                    try {
    //                        $('#' + cmbestado).empty();
    //                        $('#' + cmbestado).append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                        if (datos.totalCount > 0) {
    //                            $.each(datos.data, function (count, object) {
    //                                if ( object.cveEstado != 97 ) {
    //                                    $('#' + cmbestado).append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
    //                                }
    //                            });
    //                            $('#' + cmbestado).val(15).trigger('change');
    //                        }
    //                    } catch (e) {
    //                        alert("Error al cargar Estado:" + e);
    //                    }
    //                },
    //                error: function (objeto, quepaso, otroobj) {
    //                    alert("Error en la petición de Estado:\n\n" + otroobj);
    //                }
    //            });
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
                            $('#' + cmbestado).val(15).trigger('change');
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

            var tipoPersona = $("#cveTipoPersona").val();

            var cmbestado = "";
            var cmbmunicipio = "";

            if (tipoPersona == 1) {
                cmbestado = "cveEstadoNacimiento";
                cmbmunicipio = "cveMunicipioNacimiento";
            } else if (tipoPersona == 2 || tipoPersona == 3 || tipoPersona == 4 || tipoPersona == 5) {
                cmbestado = "cmbEstadoNacimientoMoralOfendido";
                cmbmunicipio = "cmbMunicipioNacimientoMoralOfendido";
            }
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false", cveEstado: $('#' + cmbestado).val()},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#' + cmbmunicipio).empty();
    //                    $('#' + cmbmunicipio).append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#' + cmbmunicipio).append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Municipio Nacimiento:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Municipio Nacimiento:\n\n" + otroobj);
    //            }
    //        });
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
    //                    $('#cveNivelInstruccion').empty();
    //                    $('#cveNivelInstruccion').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cveNivelInstruccion').append('<option value="' + object.cveNivelInstruccion + '">' + object.desNivelInstruccion + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Estudio:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de Estudio:\n\n" + otroobj);
    //            }
    //        });
            if (catNivelesInstruccionesJson != "") {
                try {
                    $('#cveNivelInstruccion').empty();
                    $('#cveNivelInstruccion').append('<option value="">Seleccione una opci&oacute;n </option>');
                    if (catNivelesInstruccionesJson.totalCount > 0) {
                        $.each(catNivelesInstruccionesJson.data, function (count, object) {
                            $('#cveNivelInstruccion').append('<option value="' + object.cveNivelInstruccion + '">' + object.desNivelInstruccion + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar cmbEstudioOfendido Ofendido:" + e);
                }
            } else {
                $('#cveNivelInstruccion').empty();
                $('#cveNivelInstruccion').append('<option value="">No carga catalogo</option>');

            }
        };
        comboEstadoCivilOfendido = function () {
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
    //                    $('#cveEstadoCivil').empty();
    //                    $('#cveEstadoCivil').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cveEstadoCivil').append('<option value="' + object.cveEstadoCivil + '">' + object.desEstadoCivil + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Estado Civil:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Estado Civil:\n\n" + otroobj);
    //            }
    //        });
            if (catEstadoscivilesJson != "") {
                try {
                    $('#cveEstadoCivil').empty();
                    $('#cveEstadoCivil').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catEstadoscivilesJson.totalCount > 0) {
                        $.each(catEstadoscivilesJson.data, function (count, object) {
                            $('#cveEstadoCivil').append('<option value="' + object.cveEstadoCivil + '">' + object.desEstadoCivil + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catEstadoscivilesJson Ofendido:" + e);
                }
            } else {
                $('#cveEstadoCivil').empty();
                $('#cveEstadoCivil').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboEspanolOfendido = function () {
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
    //                    $('#cveEspanol').empty();
    //                    $('#cveEspanol').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cveEspanol').append('<option value="' + object.cveEspanol + '">' + object.desEspanol + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Español:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Español:\n\n" + otroobj);
    //            }
    //        });
            if (catEspanolJson != "") {
                try {
                    $('#cveEspanol').empty();
                    $('#cveEspanol').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catEspanolJson.totalCount > 0) {
                        $.each(catEspanolJson.data, function (count, object) {
                            $('#cveEspanol').append('<option value="' + object.cveEspanol + '">' + object.desEspanol + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar tipos personas Ofendido:" + e);
                }
            } else {
                $('#cveEspanol').empty();
                $('#cveEspanol').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboAlfabetismoOfendido = function () {
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
    //                    $('#cveAlfabetismo').empty();
    //                    $('#cveAlfabetismo').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cveAlfabetismo').append('<option value="' + object.cveAlfabetismo + '">' + object.desAlfabetismo + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Alfabetismo:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Alfabetismo:\n\n" + otroobj);
    //            }
    //        });
            if (catAlfabetismoJson != "") {
                try {
                    $('#cveAlfabetismo').empty();
                    $('#cveAlfabetismo').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catAlfabetismoJson.totalCount > 0) {
                        $.each(catAlfabetismoJson.data, function (count, object) {
                            $('#cveAlfabetismo').append('<option value="' + object.cveAlfabetismo + '">' + object.desAlfabetismo + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catAlfabetismoJson Ofendido:" + e);
                }
            } else {
                $('#cveAlfabetismo').empty();
                $('#cveAlfabetismo').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboDielectoIndigenaOfendido = function () {
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
    //                    $('#cveDialectoIndigena').empty();
    //                    $('#cveDialectoIndigena').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cveDialectoIndigena').append('<option value="' + object.cveDialectoIndigena + '">' + object.desDialectoIndigena + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Dialecto Indigena:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Dialecto Indigena:\n\n" + otroobj);
    //            }
    //        });
            if (catDialectoIndigenaJson != "") {
                try {
                    $('#cveDialectoIndigena').empty();
                    $('#cveDialectoIndigena').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catDialectoIndigenaJson.totalCount > 0) {
                        $.each(catDialectoIndigenaJson.data, function (count, object) {
                            $('#cveDialectoIndigena').append('<option value="' + object.cveDialectoIndigena + '">' + object.desDialectoIndigena + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar catDialectoIndigenaJson Ofendido:" + e);
                }
            } else {
                $('#cveDialectoIndigena').empty();
                $('#cveDialectoIndigena').append('<option value="0">No carga catalogo</option>');

            }
        };

        comboFamiliaLinguisticaOfendido = function () {
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
    //                    $('#cveTipoFamiliaLinguistica').empty();
    //                    $('#cveTipoFamiliaLinguistica').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cveTipoFamiliaLinguistica').append('<option value="' + object.cveTipoFamiliaLinguistica + '">' + object.desTipoFamiliaLinguistica + '</option>');
    //                        });
    //                        $('#cveTipoFamiliaLinguistica').val(15);
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Familia Lingüística:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Familia Lingüística:\n\n" + otroobj);
    //            }
    //        });
            if (catTipoFamiliaLinguisticaJson != "") {
                try {
                    $('#cveTipoFamiliaLinguistica').empty();
                    $('#cveTipoFamiliaLinguistica').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catTipoFamiliaLinguisticaJson.totalCount > 0) {
                        $.each(catTipoFamiliaLinguisticaJson.data, function (count, object) {
                            $('#cveTipoFamiliaLinguistica').append('<option value="' + object.cveTipoFamiliaLinguistica + '">' + object.desTipoFamiliaLinguistica + '</option>');
                        });
                        $('#cveTipoFamiliaLinguistica').val(15);
                    }

                } catch (e) {
                    alert("Error al cargar catTipoFamiliaLinguisticaJson Ofendido:" + e);
                }
            } else {
                $('#cveTipoFamiliaLinguistica').empty();
                $('#cveTipoFamiliaLinguistica').append('<option value="0">No carga catalogo</option>');

            }
        }

        comboOcupacionOfendido = function () {
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
    //                    $('#cveOcupacion').empty();
    //                    $('#cveOcupacion').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cveOcupacion').append('<option value="' + object.cveOcupacion + '">' + object.desOcupacion + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Ocupacion:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Ocupacion:\n\n" + otroobj);
    //            }
    //        });
            if (catOcupacionesJson != "") {
                try {
                    $('#cveOcupacion').empty();
                    $('#cveOcupacion').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catOcupacionesJson.totalCount > 0) {
                        $.each(catOcupacionesJson.data, function (count, object) {
                            $('#cveOcupacion').append('<option value="' + object.cveOcupacion + '">' + object.desOcupacion + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar cmbOcupacionOfendido Ofendido:" + e);
                }
            } else {
                $('#cveOcupacion').empty();
                $('#cveOcupacion').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboInterpreteOfendido = function () {
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
    //                    $('#cveInterprete').empty();
    //                    $('#cveInterprete').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cveInterprete').append('<option value="' + object.cveInterprete + '">' + object.desInterprete + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Interprete:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Interprete:\n\n" + otroobj);
    //            }
    //        });
            if (catInterpretesJson != "") {
                try {
                    $('#cveInterprete').empty();
                    $('#cveInterprete').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catInterpretesJson.totalCount > 0) {
                        $.each(catInterpretesJson.data, function (count, object) {
                            $('#cveInterprete').append('<option value="' + object.cveInterprete + '">' + object.desInterprete + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar cmbInterpreteOfendido Ofendido:" + e);
                }
            } else {
                $('#cveInterprete').empty();
                $('#cveInterprete').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboPsicofisicoOfendido = function () {
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
    //                    $('#cveEstadoPsicofisico').empty();
    //                    $('#cveEstadoPsicofisico').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cveEstadoPsicofisico').append('<option value="' + object.cveEstadoPsicofisico + '">' + object.desEstadoPsicofisico + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Psicofisico:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Psicofisico:\n\n" + otroobj);
    //            }
    //        });
            if (catEstadosPsicofisicosJson != "") {
                try {
                    $('#cveEstadoPsicofisico').empty();
                    $('#cveEstadoPsicofisico').append('<option value="0">Seleccione una opci&oacute;n </option>');
                    if (catEstadosPsicofisicosJson.totalCount > 0) {
                        $.each(catEstadosPsicofisicosJson.data, function (count, object) {
                            $('#cveEstadoPsicofisico').append('<option value="' + object.cveEstadoPsicofisico + '">' + object.desEstadoPsicofisico + '</option>');
                        });
                    }

                } catch (e) {
                    alert("Error al cargar cmbPsicofisicoOfendido Ofendido:" + e);
                }
            } else {
                $('#cveEstadoPsicofisico').empty();
                $('#cveEstadoPsicofisico').append('<option value="0">No carga catalogo</option>');

            }
        };
        comboPaisDomicilioOfendido = function () {
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
    //                    $('#cmbPaisDomicilioOfendido').empty();
    //                    $('#cmbPaisDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbPaisDomicilioOfendido').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
    //                        });
    //                        $('#cmbPaisDomicilioOfendido').val(119);
    //                        $('#cmbPaisDomicilioOfendido').trigger('change');
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar País Domicilio:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion de País Domicilio:\n\n" + otroobj);
    //            }
    //        });
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
    //            $.ajax({
    //                type: "POST",
    //                url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
    //                global: false,
    //                async: false,
    //                dataType: "json",
    //                data: {accion: "consultar", obligaPermiso: "false", cvePais: $('#cmbPaisDomicilioOfendido').val()},
    //                beforeSend: function (objeto) {
    //                },
    //                success: function (datos) {
    //                    try {
    //                        $('#cmbEstadoDomicilioOfendido').empty();
    //                        $('#cmbEstadoDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                        if (datos.totalCount > 0) {
    //                            $.each(datos.data, function (count, object) {
    //                                if ( object.cveEstado != 97 ) {
    //                                    $('#cmbEstadoDomicilioOfendido').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
    //                                }
    //                            });
    //                            $('#cmbEstadoDomicilioOfendido').val(15).trigger("change");
    //                        }
    //                    } catch (e) {
    //                        alert("Error al cargar Estado Domicilio:" + e);
    //                    }
    //                },
    //                error: function (objeto, quepaso, otroobj) {
    //                    alert("Error en la petición de Estado Domicilio:\n\n" + otroobj);
    //                }
    //            });
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
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
    //            global: false,
    //            async: false,
    //            dataType: "json",
    //            data: {accion: "consultar", obligaPermiso: "false", cveEstado: $('#cmbEstadoDomicilioOfendido').val()},
    //            beforeSend: function (objeto) {
    //            },
    //            success: function (datos) {
    //                try {
    //                    $('#cmbMunicipioDomicilioOfendido').empty();
    //                    $('#cmbMunicipioDomicilioOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbMunicipioDomicilioOfendido').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Municipio Domicilio:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Municipio Domicilio:\n\n" + otroobj);
    //            }
    //        });
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
    //                    $('#cmbConvivenciaOfendido').empty();
    //                    $('#cmbConvivenciaOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbConvivenciaOfendido').append('<option value="' + object.cveConvivencia + '">' + object.desConvivencia + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Convivencia:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Convivencia:\n\n" + otroobj);
    //            }
    //        });
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
    //                    $('#cmbTipoViviendaOfendido').empty();
    //                    $('#cmbTipoViviendaOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbTipoViviendaOfendido').append('<option value="' + object.cveTipoDeVivienda + '">' + object.desTipoDeVivienda + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Tipo Vivienda:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Tipo Vivienda:\n\n" + otroobj);
    //            }
    //        });
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
    //                    $('#cmbTipoDefensorOfendido').empty();
    //                    $('#cmbTipoDefensorOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbTipoDefensorOfendido').append('<option value="' + object.cveTipoDefensor + '">' + object.desTipoDefensor + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Tipo Vivienda:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Tipo Vivienda:\n\n" + otroobj);
    //            }
    //        });
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

        function establecerNombreDefensor() {
            if ($("#cmbTipoDefensorOfendido").val() == 6) {
                $("#nombreDefensor").val("Requiere  un representante de la defensor\u00EDa de v\u00EDctimas");
            } else {
                $("#nombreDefensor").val("");
            }
        }

        comboGeneroTutorOfendido = function () {
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
    //                    $('#cmbGeneroTutorOfendido').empty();
    //                    $('#cmbGeneroTutorOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbGeneroTutorOfendido').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Genero Tutor:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Genero Tutor:\n\n" + otroobj);
    //            }
    //        });
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
    //                    $('#cmbTipoTutorOfendido').empty();
    //                    $('#cmbTipoTutorOfendido').append('<option value="0">Seleccione una opci&oacute;n</option>');
    //                    if (datos.totalCount > 0) {
    //                        $.each(datos.data, function (count, object) {
    //                            $('#cmbTipoTutorOfendido').append('<option value="' + object.cveTipoTutor + '">' + object.desTipoTutor + '</option>');
    //                        });
    //                    }
    //                } catch (e) {
    //                    alert("Error al cargar Genero Tutor:" + e);
    //                }
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la petición de Genero Tutor:\n\n" + otroobj);
    //            }
    //        });
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

            if ($("#idOfendidoCarpeta").val() == "" || $("#idOfendidoCarpeta").val() == 0) {
                mensaje += "*Tienes que seleccionar un sujeto pasivo del delito\n";
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
    //        if ($('#cpDomicilio').val() == "" || $('#cpDomicilio').val() == "0") {
    //            mensaje += "*Ingrese C.P. \n";
    //            error = false;
    //        }
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

            if ($("#idOfendidoCarpeta").val() == "" || $("#idOfendidoCarpeta").val() == 0) {
                mensaje += "*Tienes que seleccionar un sujeto pasivo del delito\n";
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

            if ($("#idOfendidoCarpeta").val() == "" || $("#idOfendidoCarpeta").val() == 0) {
                mensaje += "*Tienes que seleccionar un sujeto pasivo del delito\n";
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

            if ($("#idOfendidoCarpeta").val() == "" || $("#idOfendidoCarpeta").val() == 0) {
                mensaje += "*Tienes que seleccionar un sujeto pasivo del delito\n";
                error = false;
            }

            if ($('#cmbTipoTutorOfendido').val() == "" || $('#cmbTipoTutorOfendido').val() == "0") {
                mensaje += "*Seleccione el tipo de tutor \n";
                error = false;
            }
            if ($("input:radio[name='rdtutores']").is(':checked')) {
            } else {
                mensaje += "*Seleccione si el tutor es definitivo o provisional \n";
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
                mensaje += "*Seleccione Genero de tutor \n";
                error = false;
            }

    //        if ($('#fechaNacimientoTutorOfendido').val() == "" || $('#fechaNacimientoTutorOfendido').val() == "0") {
    //            mensaje += "*Seleccione Fecha de Nacimiento de tutor \n";
    //            error = false;
    //        }
    //
    //        if ($('#txtEdadTutorOfendido').val() == "" || $('#txtEdadTutorOfendido').val() == "0") {
    //            mensaje += "*Seleccione Edad del tutor \n";
    //            error = false;
    //        }


            if (!error) {
                alert(mensaje);
            }

            return error;
        }

        //valida nacionalidad
        validateNacionalidad = function () {
            var mensaje = "";
            var error = true;

            if ($("#idOfendidoCarpeta").val() == "" || $("#idOfendidoCarpeta").val() == 0) {
                mensaje += "*Tienes que seleccionar un sujeto pasivo del delito\n";
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
            if ($("#cveTipoPersona").val() == "1") {
                if ($('#nombre').val() == "" || $('#nombre').val() == "0") {
                    mensaje += "*Capture Nombre del Sujeto pasivo del delito\n";
                    error = false;
                }
                if ($('#paterno').val() == "" || $('#paterno').val() == "0") {
                    mensaje += "*Capture apellido del sujeto pasivo del delito\n";
                    error = false;
                }

                if ($('#cveGenero').val() == "" || $('#cveGenero').val() == "0") {
                    mensaje += "*Seleccione Genero\n";
                    error = false;
                }
                if ($("#cmbCveTipoParte").val() == "" || $("#cmbCveTipoParte").val() == "0") {
                    mensaje += "*Debe indicar si la persona es ofendido o v\u00edctima\n";
                    error = false;
                }
                if ($("#rfc").val() != '') {

                    var rfcStr = $("#rfc").val();
                    var regex = /^([A-Z|a-z|&amp;]{3}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)(\w{2})([A|a|0-9]{1})$|^([A-Z|a-z]{4}\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)|([02468][048]|[13579][26])0229)((\w{2})([A|a|0-9]{1})){0,3}$/;

                    if (!regex.test(rfcStr)) {
                        mensaje += "*Ingresa un RFC valido \n";
                        error = false;
                    }

                }

                if ($("#curp").val() != "") {
                    var curpStr = $("#curp").val().toUpperCase();
                    var valid = "[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,�,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]";
                    var validCurp = new RegExp(valid);
                    var matchArray = curpStr.match(validCurp);
                    if (matchArray == null) {
                        mensaje += "*El curp capturado no es válido \n";
                        error = false;
                    }
                }

    //            if ($('#fechaNacimiento').val() == "" || $('#fechaNacimiento').val() == "0") {
    //                mensaje += "*Capture Fecha Nacimiento\n";
    //                error = false;
    //            }
    //
    //            if ($('#edad').val() == "" || $('#edad').val() < 0) {
    //                mensaje += "*Capture la Edad\n";
    //                error = false;
    //            }

                if ($('#cvePaisNacimiento').val() == "" || $('#cvePaisNacimiento').val() == "0") {
                    mensaje += "*Seleccione Pais Nacimiento\n";
                    error = false;
                }

                if ($('#cvePaisNacimiento').val() == "119" && $('#cveEstadoNacimiento').val() == "0") {
                    mensaje += "*Seleccione Estado Nacimiento\n";
                    error = false;
                }

                if ($('#cvePaisNacimiento').val() == "119" && $('#cveEstadoNacimiento').val() != "0" && $('#cveMunicipioNacimiento').val() == "0") {
                    mensaje += "*Seleccione Municipio Nacimiento\n";
                    error = false;
                }

                if ($('#estadoNacimiento').val() == "" && $('#cvePaisNacimiento').val() != "119" && $('#cvePaisNacimiento').val() != "0") {
                    mensaje += "*Capture Estado Nacimiento\n";
                    error = false;
                }

                if ($('#municipioNacimiento').val() == "" && $('#cvePaisNacimiento').val() != "119" && $('#cvePaisNacimiento').val() != "0") {
                    mensaje += "*Capture Municipio Nacimiento\n";
                    error = false;
                }


                if ($('#cveNivelInstruccion').val() == "" || $('#cveNivelInstruccion').val() == "0") {
                    mensaje += "*Selecciona grado de estudios\n";
                    error = false;
                }

                if ($('#cveEstadoCivil').val() == "" || $('#cveEstadoCivil').val() == "0") {
                    mensaje += "*Selecciona Estado Civil\n";
                    error = false;
                }

                if ($('#cveOcupacion').val() == "" || $('#cveOcupacion').val() == "0") {
                    mensaje += "*Selecciona Ocupación\n";
                    error = false;
                }

                if ($('#cveEspanol').val() == "" || $('#cveEspanol').val() == "0") {
                    mensaje += "*Selecciona Español\n";
                    error = false;
                }

                if ($('#cveAlfabetismo').val() == "" || $('#cveAlfabetismo').val() == "0") {
                    mensaje += "*Selecciona Alfabetismo\n";
                    error = false;
                }

                if ($('#cveDialectoIndigena').val() == "" || $('#cveDialectoIndigena').val() == "0") {
                    mensaje += "*Selecciona Dialecto Indigena\n";
                    error = false;
                }

                if ($("#cveTipoFamiliaLinguistica").val() == "" || $("#cveTipoFamiliaLinguistica").val() == 0) {
                    mensaje += "*Selecciona Familia Lingüistica\n";
                    error = false;
                }

                if ($('#cveInterprete').val() == "" || $('#cveInterprete').val() == "0") {
                    mensaje += "*Selecciona Interprete\n";
                    error = false;
                }

                if ($('#cveEstadoPsicofisico').val() == "" || $('#cveEstadoPsicofisico').val() == "0") {
                    mensaje += "*Selecciona Psicofisico\n";
                    error = false;
                }

                if ($('#cveVictimaDeLaDelincuenciaOrganizada').val() == "" || $('#cveVictimaDeLaDelincuenciaOrganizada').val() == "0") {
                    mensaje += "*Selecciona Victima de Delincuencia Organizada\n";
                    error = false;
                }

                if ($('#cveVictimaDeViolenciaDeGenero').val() == "" || $('#cveVictimaDeViolenciaDeGenero').val() == "0") {
                    mensaje += "*Selecciona Victima de Violencia de Genero\n";
                    error = false;
                }

                if ($('#cveVictimaDeTrata').val() == "" || $('#cveVictimaDeTrata').val() == "0") {
                    mensaje += "*Selecciona Victima de Trata\n";
                    error = false;
                }

                if ($('#cmbVictimaAcosoSexual').val() == "" || $('#cmbVictimaAcosoSexual').val() == "0") {
                    mensaje += "*Selecciona si es Victima de Acoso Sexual\n";
                    error = false;
                }

                if ($('#cveOrdenProteccion').val() == "" || $('#cveOrdenProteccion').val() == "0") {
                    mensaje += "*Selecciona Orden de Protección\n";
                    error = false;
                }

            } else if ($("#cveTipoPersona").val() == "2" || $("#cveTipoPersona").val() == "3" || $("#cveTipoPersona").val() == "4" || $("#cveTipoPersona").val() == "5") {
                if ($('#nombreMoral').val() == "" || $('#nombreMoral').val() == "0") {
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
                if ($("#cmbTipoParteMoral").val() == "" || $("#cmbTipoParteMoral").val() == "0") {
                    mensaje += "*Debe indicar si la persona es ofendido o v\u00edctima\n";
                    error = false;
                }

            } else if ($("#cveTipoPersona").val() == "0") {
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


        cargarTablaOfendidos = function (idcarpetajudicial) {
            console.log(idcarpetajudicial);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php",
                data: {accion: 'consultar', idCarpetaJudicial: idcarpetajudicial, activo: 'S'},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {
                        if (data.totalCount > 0) {
                            var html = "";
                            $.each(data.data, function (k, e) {
                                var success = ($("#idOfendidoCarpeta").val() == e.idOfendidoCarpeta) ? 'success' : '';
                                html += "<tr data-ofendido='" + e.idOfendidoCarpeta + "' class='trSeleccion " + success + "'>";
                                html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.desTipoPersona + "</td>";
                                if (e.cveTipoPersona == 1) {
                                    html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.nombre + " " + e.paterno + " " + e.materno + "</td>";
                                } else if (e.cveTipoPersona == 2 || e.cveTipoPersona == 3 || e.cveTipoPersona == 4 || e.cveTipoPersona == 5) {
                                    html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.nombreMoral + "</td>";
                                }
                                html += "<td style='cursor:pointer;' onclick='modificarOfendido(" + JSON.stringify(e) + ")'>" + e.desGenero + "</td>";
                                html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarOfendido(" + e.idOfendidoCarpeta + ");'></center></td>";

                                html += "</tr>";

                            });
                            $("#tabla-ofendidos").html(html);
                            $("#tableResultadosOfendido").show();

                        } else {
                            $("#idOfendidoCarpeta").val('');
                            $("#tableResultadosOfendido").hide();
                        }


                    } catch (e) {
                        alert("Error al consultar datos generales:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al consultar datos generales:" + otroobj);
                }
            });


        }

        cargarTablaDomicilios = function (idofendido) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasFacade.Class.php",
                data: {accion: 'consultar', idOfendidoCarpeta: idofendido, activo: 'S'},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {
                        if (data.totalCount > 0) {

                            var html = "";
                            $.each(data.data, function (k, e) {
                                html += "<tr class='trSeleccion' data-domicilio='" + e.idDomicilioOfendidoCarpeta + "'>";
                                html += "<td style='cursor:pointer;' onclick='modificarDomicilio(" + JSON.stringify(e) + ");'>" + e.desPais + "</td>";
                                html += "<td style='cursor:pointer;' onclick='modificarDomicilio(" + JSON.stringify(e) + ");'>" + e.desEstado + "</td>";
                                html += "<td style='cursor:pointer;' onclick='modificarDomicilio(" + JSON.stringify(e) + ");'>" + e.desMunicipio + "</td>";
                                html += "<td style='cursor:pointer;' onclick='modificarDomicilio(" + JSON.stringify(e) + ");'>" + e.direccion + "</td>";
                                html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarDomicilio(" + e.idDomicilioOfendidoCarpeta + ");'></center></td>";
                                html += "</tr>";
                            });
                            $("#tabla-domicilios").html(html);
                            $("#tableResultadosDomiciliosOfendido").show('fast');
                        } else {
                            $("#tableResultadosDomiciliosOfendido").hide('fast');

                        }


                    } catch (e) {
                        alert("Error al consultar Domicilios:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al consultar Domicilios:" + otroobj);
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
                url: "../fachadas/sigejupe/telefonosofendidoscarpetas/TelefonosofendidoscarpetasFacade.Class.php",
                data: {accion: 'consultar', idOfendidoCarpeta: idofendido, activo: 'S'},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {
                        if (data.totalCount > 0) {

                            var html = "";
                            $.each(data.data, function (k, e) {
                                html += "<tr class='trSeleccion' data-telefono='" + e.idTelefonoOfendidoCarpeta + "'>";
                                if (e.telefono != null) {
                                    html += "<td style='cursor:pointer;' onclick='modificarTelefono(" + JSON.stringify(e) + ");'>" + e.telefono + "</td>";
                                } else {
                                    html += "<td style='cursor:pointer;' onclick='modificarTelefono(" + JSON.stringify(e) + ");'></td>";
                                }
                                if (e.celular != null) {
                                    html += "<td style='cursor:pointer;' onclick='modificarTelefono(" + JSON.stringify(e) + ");'>" + e.celular + "</td>";
                                } else {
                                    html += "<td style='cursor:pointer;' onclick='modificarTelefono(" + JSON.stringify(e) + ");'></td>";
                                }
                                if (e.email != null) {
                                    html += "<td style='cursor:pointer;' onclick='modificarTelefono(" + JSON.stringify(e) + ");'>" + e.email + "</td>";
                                } else {
                                    html += "<td style='cursor:pointer;' onclick='modificarTelefono(" + JSON.stringify(e) + ");'></td>";
                                }

                                html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarTelefono(" + e.idTelefonoOfendidoCarpeta + ");'></center></td>";
                                html += "</tr>";
                            });
                            $("#tabla-telefonos").html(html);
                            $("#tableResultadosTelefonosOfendido").show('fast');
                        } else {
                            $("#tableResultadosTelefonosOfendido").hide('fast');

                        }


                    } catch (e) {
                        alert("Error al consultar Teléfonos:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al consultar Teléfonos:" + otroobj);
                }
            });
        }

        cargarTablaDefensores = function (idofendido) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/defensoresofendidoscarpetas/DefensoresofendidoscarpetasFacade.Class.php",
                data: {accion: 'consultar', idOfendidoCarpeta: idofendido, activo: 'S'},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {
                        if (data.totalCount > 0) {

                            var html = "";
                            $.each(data.data, function (k, e) {
                                html += "<tr class='trSeleccion' data-defensor='" + e.idDefensorOfendidoCarpeta + "'>";
                                html += "<td style='cursor:pointer;' onclick='modificarDefensor(" + JSON.stringify(e) + ");'>" + e.desTipoDefensor + "</td>";
                                html += "<td style='cursor:pointer;' onclick='modificarDefensor(" + JSON.stringify(e) + ");'>" + e.nombre + "</td>";
                                html += "<td style='cursor:pointer;' onclick='modificarDefensor(" + JSON.stringify(e) + ");'>" + e.telefono + "</td>";
                                html += "<td style='cursor:pointer;' onclick='modificarDefensor(" + JSON.stringify(e) + ");'>" + e.celular + "</td>";
                                html += "<td style='cursor:pointer;' onclick='modificarDefensor(" + JSON.stringify(e) + ");'>" + e.email + "</td>";
                                html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarDefensor(" + e.idDefensorOfendidoCarpeta + ");'></center></td>";
                                html += "</tr>";
                            });
                            $("#tabla-defensores").html(html);
                            $("#tableResultadosDefensoresOfendido").show('fast');
                        } else {
                            $("#tableResultadosDefensoresOfendido").hide('fast');

                        }


                    } catch (e) {
                        alert("Error al consultar Defensores:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al consultar Defensores:" + otroobj);
                }
            });
        }

        cargarTablaTutores = function (idofendido) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tutoresofendidoscarpetas/TutoresofendidoscarpetasFacade.Class.php",
                data: {accion: 'consultar', idOfendidoCarpeta: idofendido, activo: 'S'},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {
                        if (data.totalCount > 0) {

                            var html = "";
                            $.each(data.data, function (k, e) {
                                html += "<tr class='trSeleccion' data-tutor='" + e.idTutorOfendidoCarpeta + "'>";
                                html += "<td style='cursor:pointer;' onclick='modificarTutor(" + JSON.stringify(e) + ");'>" + e.desTipoTutor + "</td>";
                                html += "<td style='cursor:pointer;' onclick='modificarTutor(" + JSON.stringify(e) + ");'>" + e.nombre + " " + e.paterno + " " + e.materno + "</td>";
                                html += "<td style='cursor:pointer;' onclick='modificarTutor(" + JSON.stringify(e) + ");'>" + e.desGenero + "</td>";
                                html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarTutor(" + e.idTutorOfendidoCarpeta + ");'></center></td>";
                                html += "</tr>";
                            });
                            $("#tabla-tutores").html(html);
                            $("#tableResultadosTutoresOfendido").show('fast');
                        } else {
                            $("#tableResultadosTutoresOfendido").hide('fast');

                        }


                    } catch (e) {
                        alert("Error al consultar Tutores:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al consultar Tutores:" + otroobj);
                }
            });
        }

        cargarTablaNacionalidades = function (idofendido) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasFacade.Class.php",
                data: {accion: 'consultar', idOfendidoCarpeta: idofendido, activo: 'S'},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {
                        if (data.totalCount > 0) {

                            var html = "";
                            $.each(data.data, function (k, e) {
                                html += "<tr class='trSeleccion' data-nacionalidad='" + e.idNacionalidadOfendidoCarpeta + "'>";
                                html += "<td onclick='modificarNacionalidades(" + JSON.stringify(e) + ");'>" + e.desPais + "</td>";
                                html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarNacionalidad(" + e.idNacionalidadOfendidoCarpeta + ")'></center></td>";
                                html += "</tr>";
                            });
                            $("#tabla-nacionalidades").html(html);
                            $("#tableResultadosNacionalidadOfendido").show('fast');
                        } else {
                            $("#tableResultadosNacionalidadOfendido").hide('fast');

                        }


                    } catch (e) {
                        alert("Error al consultar Nacionalidade:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al consultar Nacionalides:" + otroobj);
                }
            });
        }

        //acciones para editar

        //editar datos de ofendido
        //al seleccionar el ofendido a editar se deben cargar sus datos personales y todos los datos que correspondan a dicho
        //ofendido como direcicones nacionalidades etc.

        modificarOfendido = function (ofendido) {
            console.log(ofendido);
            $("#idOfendidoCarpeta").val(ofendido.idOfendidoCarpeta);
            $("#tabla-ofendidos > tr").removeClass('success');
            $("tr").filter('[data-ofendido="' + ofendido.idOfendidoCarpeta + '"]').addClass('success');

            $('#myTab3 a:first').tab('show');

            //limpiar todos los formularios
            $("#limpiar-domicilio").trigger('click');
            $("#limpiar-telefono").trigger('click');
            $("#limpiar-defensor").trigger('click');
            $("#limpiar-tutores").trigger('click');

            //cargar datos generales del ofendido

            //cargar tabla domicilios
            cargarTablaDomicilios(ofendido.idOfendidoCarpeta);
            //cargar tabla telefonos
            cargarTablaTelefonos(ofendido.idOfendidoCarpeta);
            //cargar tabla defensores
            cargarTablaDefensores(ofendido.idOfendidoCarpeta);
            //cargar tabla tutores del ofendido
            cargarTablaTutores(ofendido.idOfendidoCarpeta);
            //cargar tabla nacionalidades del ofendido
            cargarTablaNacionalidades(ofendido.idOfendidoCarpeta);

            //cargar datos en el formulario
            $("#cveTipoPersona").val(ofendido.cveTipoPersona).change();
            if (ofendido.cveTipoPersona == 1) {
                $("#nombre").val(ofendido.nombre);
                $("#paterno").val(ofendido.paterno);
                $("#materno").val(ofendido.materno);
                $("#cveGenero").val(ofendido.cveGenero);
                if (ofendido.cveGenero == 2) {
                    $("#embarazada").prop('disabled', false);
                    if (ofendido.embarazada == 'S') {
                        $("#embarazada").prop('checked', true);
                        $("#embarazada").val("S");
                    } else {
                        $("#embarazada").prop('checked', false);
                        $("#embarazada").val("N");
                    }
                }
                else {
                    $("#embarazada").prop('checked', false);
                    $("#embarazada").prop('disabled', true);
                }
                if (ofendido.cveTipoReligion != "") {
                    $("#cmbCveTipoReligion").val(ofendido.cveTipoReligion);
                }

                $("#cmbCveTipoParte").val(ofendido.cveTipoParte);
                $("#rfc").val(ofendido.rfc);
                $("#curp").val(ofendido.curp);
                if (ofendido.fechaNacimiento != "" && ofendido.fechaNacimiento != "0000-00-00") {
                    $("#fechaNacimiento").val(formatoFecha(ofendido.fechaNacimiento));
                } else {
                    $("#fechaNacimiento").val("");
                }
                if (ofendido.edad != "" && ofendido.edad != "0") {
                    $("#edad").val(ofendido.edad);
                } else {
                    $("#edad").val("");
                }

                $("#cvePaisNacimiento").val(ofendido.cvePaisNacimiento).change();

                if (ofendido.cvePaisNacimiento == 119) {
                    $("#cveEstadoNacimiento").val(ofendido.cveEstadoNacimiento).change();
                    $("#cveMunicipioNacimiento").val(ofendido.cveMunicipioNacimiento);
                } else {
                    $("#estadoNacimiento").val(ofendido.estadoNacimiento);
                    $("#municipioNacimiento").val(ofendido.municipioNacimiento);
                }

                $("#cveNivelInstruccion").val(ofendido.cveNivelInstruccion);
                $("#cveEstadoCivil").val(ofendido.cveEstadoCivil);
                $("#cveOcupacion").val(ofendido.cveOcupacion);
                $("#cveEspanol").val(ofendido.cveEspanol);
                $("#cveAlfabetismo").val(ofendido.cveAlfabetismo);
                $("#cveDialectoIndigena").val(ofendido.cveDialectoIndigena);
                $("#cveTipoFamiliaLinguistica").val(ofendido.cveTipoFamiliaLinguistica);
                $("#cveInterprete").val(ofendido.cveInterprete);
                $("#cveEstadoPsicofisico").val(ofendido.cveEstadoPsicofisico);
                $("#cveGrupoEdnico").val(ofendido.cveGrupoEdnico);
                $("#cveVictimaDeViolenciaDeGenero").val(ofendido.cveVictimaDeViolenciaDeGenero);
                $("#cveVictimaDeTrata").val(ofendido.cveVictimaDeTrata);
                $("#cveVictimaDeLaDelincuenciaOrganizada").val(ofendido.cveVictimaDeLaDelincuenciaOrganizada);
                $("#cmbVictimaAcosoSexual").val(ofendido.cveVictimaDeAcoso);
                $("#cveOrdenProteccion").val(ofendido.cveOrdenProteccion);
                $("#numHijos").val(ofendido.numHijos);

                if (ofendido.desaparecido == 'S') {
                    $("#desaparecido").prop('checked', true);
                    $("#desaparecido").val("S");
                } else if (ofendido.desaparecido == 'N') {
                    $("#desaparecido").prop('checked', false);
                    $("#desaparecido").val("N");
                }
                $("#cmbPaisDomicilioOfendido").val(ofendido.cvePaisNacimiento).change();
                if (ofendido.cvePaisNacimiento == 119) {
                    $("#cmbEstadoDomicilioOfendido").val(ofendido.cveEstadoNacimiento).change();
                    $("#cmbMunicipioDomiciliofendido").val(ofendido.cveMunicipioNacimiento);
                } else {
                    $("#cmbEstadoDomicilioOfendido").val(ofendido.estadoNacimiento);
                    $("#cmbMunicipioDomiciliofendido").val(ofendido.municipioNacimiento);
                }
            } else if (ofendido.cveTipoPersona == 2 || ofendido.cveTipoPersona == 3 || ofendido.cveTipoPersona == 4 || ofendido.cveTipoPersona == 5) {
                $("#nombreMoral").val(ofendido.nombreMoral);
                $("#txtRfcMoralOfendido").val(ofendido.rfc);

                $("#cmbPaisNacimientoMoralOfendido").val(ofendido.cvePaisNacimiento).change();
                $('#cmbTipoParteMoral').val(ofendido.cveTipoParte);
                if (ofendido.cvePaisNacimiento == 119) {
                    $("#cmbEstadoNacimientoMoralOfendido").val(ofendido.cveEstadoNacimiento).change();
                    $("#cmbMunicipioNacimientoMoralOfendido").val(ofendido.cveMunicipioNacimiento);
                } else {
                    $("#txtestadoNacimientoMoralOfendido").val(ofendido.estadoNacimiento);
                    $("#txtmunicipioNacimientoMoralOfendido").val(ofendido.municipioNacimiento);
                }
            }
            if (ofendido.cveTipoPersona == 1) {
                var nombre = ofendido.nombre + " " + ofendido.paterno + " " + ofendido.materno;
            } else {
                var nombre = ofendido.nombreMoral;
            }
            var referencia = "";
            if (ofendido.cveTipoCarpeta != "") {
                referencia += "  <br>Carpeta: " + ofendido.desCarpeta + " No: " + ofendido.numero + "/" + ofendido.anio;
            } else if (ofendido.nuc != "" && ofendido.carpetaInv != "") {
                referencia += "  <br>Carpeta de inv: " + ofendido.carpetaInv + " NUC: " + ofendido.nuc;
            } else if (ofendido.nuc != "" && ofendido.carpetaInv == "") {
                referencia += " <br> NUC: " + ofendido.nuc;
            } else if (ofendido.nuc == "" && ofendido.carpetaInv != "") {
                referencia += "  <br>Carpeta de inv: " + ofendido.carpetaInv;
            }
            $('#NombreGeneral').html("<b>Capture los datos generales de: " + nombre + "." + referencia + "<b><br>");
            $('#NombreDomicilios').html("<b>Capture el domicilio de: " + nombre + "." + referencia + "<b><br>");
            $('#NombreTelefonos').html("<b>Capture el tel\u00e9fono de: " + nombre + "." + referencia + "<b><br>");
            $('#NombreDefensores').html("<b>Capture el defensor de: " + nombre + "." + referencia + "<b><br>");
            $('#NombreTutores').html("<b>Capture el tutor de: " + nombre + "." + referencia + "<b><br>");
            $('#NombreNacionalidad').html("<b>Capture la nacionalidad de: " + nombre + "." + referencia + "<b><br>");
            $("#guardar-general-ofendido").text("Editar Datos Generales del Sujeto Pasivo del Delito");
        };

        modificarDomicilio = function (domicilio) {
            console.log(domicilio);
            $("#tabla-domicilios > tr").removeClass('success');
            $("tr").filter('[data-domicilio="' + domicilio.idDomicilioOfendidoCarpeta + '"]').addClass('success');
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
                $("#cbDomicilioProcesal").prop("checked", true);
            } else {
                $("#cbDomicilioProcesal").prop("checked", false);
            }
            $("#form-domicilios-ofendido #cmbTipoViviendaOfendido").val(domicilio.cveTipoDeVivienda);
            $("#form-domicilios-ofendido #idDomicilioOfendidoCarpeta").val(domicilio.idDomicilioOfendidoCarpeta);
            $("#form-domicilios-ofendido #activo").val(domicilio.activo);

            $("#btn-agregar-modificar-domicilio").text('Editar Domicilio');
        }

        modificarTelefono = function (telefono) {
            console.log(telefono);
            $("#tabla-telefonos > tr").removeClass('success');
            $("tr").filter('[data-telefono="' + telefono.idTelefonoOfendidoCarpeta + '"]').addClass('success');

            $("#form-telefonos-ofendido #telefonoTel").val(telefono.telefono);
            $("#form-telefonos-ofendido #celTel").val(telefono.celular);
            $("#form-telefonos-ofendido #emailTel").val(telefono.email);
            $("#form-telefonos-ofendido #activo").val(telefono.activo);
            $("#form-telefonos-ofendido #idTelefonoOfendidoCarpeta").val(telefono.idTelefonoOfendidoCarpeta);

            $("#btn-agregar-modificar-telefono").text('Editar Teléfono');


        }

        modificarDefensor = function (defensor) {
            console.log(defensor);
            $("#tabla-defensores > tr").removeClass('success');
            $("tr").filter('[data-defensor="' + defensor.idDefensorOfendidoCarpeta + '"]').addClass('success');
            $("#form-defensores-ofendido #cmbTipoDefensorOfendido").val(parseInt(defensor.cveTipoDefensor));
            $("#form-defensores-ofendido #nombreDefensor").val(defensor.nombre);
            $("#form-defensores-ofendido #telDefensor").val(defensor.telefono);
            $("#form-defensores-ofendido #celDefensor").val(defensor.celular);
            $("#form-defensores-ofendido #emailDefensor").val(defensor.email);

            $("#form-defensores-ofendido #idDefensorOfendidoCarpeta").val(defensor.idDefensorOfendidoCarpeta);
            $("#form-defensores-ofendido #activo").val(defensor.activo);


            $("#btn-agregar-modificar-defensor").text('Editar Defensor');
        }

        modificarTutor = function (tutor) {
            $("#tabla-tutores > tr").removeClass('success');
            $("tr").filter('[data-tutor="' + tutor.idTutorOfendidoCarpeta + '"]').addClass('success');
            $("#form-tutores-ofendido #idTutorOfendido").val(parseInt(tutor.idTutorOfendidoCarpeta));
            $("#form-tutores-ofendido #cmbTipoTutorOfendido").val(parseInt(tutor.cveTipoTutor));
            $("#form-tutores-ofendido #nombreTutorOfendido").val(tutor.nombre);
            $("#form-tutores-ofendido #paternoTutorOfendido").val(tutor.paterno);
            $("#form-tutores-ofendido #maternoTutorOfendido").val(tutor.materno);
            $("#form-tutores-ofendido #cmbGeneroTutorOfendido").val(tutor.cveGenero);
            if (tutor.fechaNacimiento == "" || tutor.fechaNacimiento == null || tutor.fechaNacimiento == "0000-00-00") {
                var fechaNacimientoTutor = "";
            } else {
                var fechaNacimientoTutor = formatoFecha(tutor.fechaNacimiento);
            }
            if (tutor.edad == "" || tutor.edad == null || tutor.edad == 0) {
                var edadTutor = "";
            } else {
                var edadTutor = tutor.edad;
            }
            $("input[name=rdtutores][value='" + tutor.ProvDef + "']").prop("checked", true);
            $("#form-tutores-ofendido #fechaNacimientoTutorOfendido").val(fechaNacimientoTutor);
            $("#form-tutores-ofendido #txtEdadTutorOfendido").val(edadTutor);
            $("#form-tutores-ofendido #activo").val(tutor.activo);
            $("#btn-agregar-modificar-tutor").text('Editar Tutor/Representante');
        }

        modificarNacionalidades = function (nacionalidad) {
            $("#tabla-nacionalidades > tr").removeClass('succes');
            $("tr").filter('[data-nacionalidad="' + nacionalidad.idNacionalidadOfendidoCarpeta + '"]').addClass('success');
            $("#form-nacionalidades-ofendido #cmbPaisNacionalidadOfendido").val(parseInt(nacionalidad.cvePais));
            $("#form-nacionalidades-ofendido #idNacionalidadOfendidoCarpeta").val(parseInt(nacionalidad.idNacionalidadOfendidoCarpeta));
            $("#btn-agregar-modificar-nacionalidad").text("Editar Nacionalidad");
        }

        //funciones para eliminar registros

        eliminarOfendido = function (idofendido) {
            $("tr").filter('[data-ofendido="' + idofendido + '"]').removeClass('success').addClass('danger');
            bootbox.dialog({
                message: "\u00bf Desea eliminar al sujeto pasivo del delito y sus registros relacionados (paso 5)?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php",
                                data: {accion: 'eliminar', idOfendidoCarpeta: idofendido},
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {
                                    try {

                                        if (data.status == 'ok') {
                                            $("#alert-general-ofendido").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();
                                            cargarTablaOfendidos(data.data.idCarpetaJudicial);
                                            $("#idOfendidoCarpeta").val('');
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
                                            setTimeout(function () {
                                                $("#alert-general-ofendido").hide();
                                            }, 3000);
                                        } else {
                                            $("#alert-general-ofendido").removeClass('alert-success').addClass('alert-warning').html('<strong>' + data.mensaje + '</strong>').show();
                                            $("tr").filter('[data-ofendido="' + idofendido + '"]').removeClass('danger');
                                            setTimeout(function () {
                                                $("#alert-general-ofendido").hide();
                                            }, 3000);
                                        }

                                    } catch (e) {
                                        alert("Error al eliminar datos generales:" + e);
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    alert("Error al eliminar datos generales" + otroobj);
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
            $("tr").filter('[data-domicilio="' + iddomicilio + '"]').removeClass('success').addClass('danger');
            bootbox.dialog({
                message: "\u00bf Desea eliminar el domicilio?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasFacade.Class.php",
                                data: {accion: 'eliminar', idDomicilioOfendidoCarpeta: iddomicilio, activo: 'N'},
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {
                                    try {

                                        $("#alert-domicilios").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                        if (data.status == 'ok') {
                                            cargarTablaDomicilios($("#idOfendidoCarpeta").val());
                                        }

                                        setTimeout(function () {
                                            $("#alert-domicilios").hide();
                                        }, 3000);

                                    } catch (e) {
                                        alert("Error al eliminar el Domicilio:" + e);
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    alert("Error al eliminar el Domicilio:" + otroobj);
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
            $("tr").filter('[data-telefono="' + idtelefono + '"]').removeClass('success').addClass('danger');
            bootbox.dialog({
                message: "\u00bf Desea eliminar el tel\u00e9fono?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/telefonosofendidoscarpetas/TelefonosofendidoscarpetasFacade.Class.php",
                                data: {accion: 'eliminar', idTelefonoOfendidoCarpeta: idtelefono},
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {
                                    try {
                                        $("#alert-telefonos").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                        if (data.status == 'ok') {
                                            cargarTablaTelefonos($("#idOfendidoCarpeta").val());
                                        }

                                        setTimeout(function () {
                                            $("#alert-telefonos").hide();
                                        }, 3000);


                                    } catch (e) {
                                        alert("Error al eliminar el Teléfono:" + e);
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    alert("Error al eliminar el Teléfono:" + otroobj);
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
            $("tr").filter('[data-defensor="' + iddefensor + '"]').removeClass('success').addClass('danger');
            bootbox.dialog({
                message: "\u00bf Desea eliminar al defensor?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/defensoresofendidoscarpetas/DefensoresofendidoscarpetasFacade.Class.php",
                                data: {accion: 'eliminar', idDefensorOfendidoCarpeta: iddefensor},
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {
                                    try {

                                        $("#alert-defensores").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();


                                        if (data.status == 'ok') {
                                            cargarTablaDefensores($("#idOfendidoCarpeta").val());
                                        }

                                        setTimeout(function () {
                                            $("#alert-defensores").hide();
                                        }, 3000);

                                    } catch (e) {
                                        alert("Error al eliminar el Defensor:" + e);
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    alert("Error al eliminar el Defensor:" + otroobj);
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
            $("tr").filter('[data-tutor="' + idtutor + '"]').removeClass('success').addClass('danger');
            bootbox.dialog({
                message: "\u00bf Desea eliminar al tutor?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/tutoresofendidoscarpetas/TutoresofendidoscarpetasFacade.Class.php",
                                data: {accion: 'eliminar', idTutorOfendidoCarpeta: idtutor},
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {
                                    try {
                                        $("#alert-tutores").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();
                                        if (data.status == 'ok') {
                                            cargarTablaTutores($("#idOfendidoCarpeta").val());
                                            $("#limpiar-tutores").trigger('click');
                                        }
                                        setTimeout(function () {
                                            $("#alert-tutores").hide();
                                        }, 3000);

                                    } catch (e) {
                                        alert("Error al eliminar el Tutor:" + e);
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    alert("Error al eliminar el Tutor:" + otroobj);
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
            $("tr").filter('[data-nacionalidad="' + idnacionalidad + '"]').removeClass('success').addClass('danger');
            bootbox.dialog({
                message: "\u00bf Desea eliminar la nacionalidad?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasFacade.Class.php",
                                data: {accion: 'eliminar', idNacionalidadOfendidoCarpeta: idnacionalidad, activo: 'N'},
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {

                                    try {
                                        $("#alert-nacionalidades").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                        if (data.status == 'ok') {
                                            cargarTablaNacionalidades($("#idOfendidoCarpeta").val());
                                        }

                                        setTimeout(function () {
                                            $("#alert-nacionalidades").hide();
                                        }, 3000);

                                    } catch (e) {
                                        alert("Error al eliminar la Nacionalidad:" + e);
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    alert("Error al eliminar la Nacionalid:" + otroobj);
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
            var fecha = new Date();
            var now = new Date(fecha.getFullYear(), fecha.getMonth(), fecha.getDate(), 0, 0, 0, 0);
            $("#fechaNacimiento").datetimepicker({
                locale: 'es',
                maxDate: now,
                format: 'DD/MM/YYYY'
            });

            $("#fechaNacimientoTutorOfendido").datetimepicker({
                locale: 'es',
                maxDate: now,
                format: 'DD/MM/YYYY'
            });

            $("#fechaNacimientoTutorOfendido").on('dp.change', function (e) {
                if ($(this).val() == "") {
                    $("#txtEdadTutorOfendido").val("");
                }

            });

            $("#desaparecido").val("N");

            $("#desaparecido").change(function () {
                if ($(this).is(":checked")) {
                    $(this).val("S");
                } else {
                    $(this).val("N");
                }
            });

            $("#embarazada").change(function () {
                if ($(this).is(":checked")) {
                    $(this).val("S");
                } else {
                    $(this).val("N");
                }
            });

            $('#numHijos').validaCampo('0123456789');
            $('#cpDomicilio').validaCampo('0123456789');
            $('#telefonoTel').validaCampo('0123456789');
            $('#celTel').validaCampo('0123456789');
            $('#telDefensor').validaCampo('0123456789');
            $('#celDefensor').validaCampo('0123456789');
            comboTipoPersonaOfendido();
            comboTipoDetencion();
            comboTipoReligion();
            comboTiposPartes();
            comboGeneroOfendido();
            comboPaisNacimientoOfendido("cvePaisNacimiento");
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
            cargarTablaOfendidos($("#IdCarpetaJudicial").val());

            if ($("#idOfendidoCarpeta").val() != '') {
                cargarTablaDomicilios($("#idOfendidoCarpeta").val());
                cargarTablaTelefonos($("#idOfendidoCarpeta").val());
                cargarTablaDefensores($("#idOfendidoCarpeta").val());
                cargarTablaTutores($("#idOfendidoCarpeta").val());
                cargarTablaNacionalidades($("#idOfendidoCarpeta").val());

            }

            $("#form-ofendido-general").on('submit', function (e) {
                e.preventDefault();
                if (validateOfendido()) {
                    var ofendido = $(this).serialize() + '&idCarpetaJudicial=' + $('#IdCarpetaJudicial').val();

                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php",
                        data: ofendido,
                        dataType: "json",
                        beforeSend: function () {
                        },
                        success: function (data) {
                            try {
                                if (data.status == "ok") {

                                    $("#alert-general-ofendido").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                    //$("#form-ofendido-general")[0].reset();
                                    $("#idOfendidoCarpeta").val(data.data[0].idOfendidoCarpeta);
                                    $("#guardar-general-ofendido").text("Editar Datos Generales del Sujeto Pasivo del Delito");
                                    cargarTablaOfendidos(data.data[0].idCarpetaJudicial);
                                    cargarTablaDomicilios(data.data[0].idOfendidoCarpeta);
                                    cargarTablaTelefonos(data.data[0].idOfendidoCarpeta);
                                    cargarTablaDefensores(data.data[0].idOfendidoCarpeta);
                                    cargarTablaTutores(data.data[0].idOfendidoCarpeta);
                                    cargarTablaNacionalidades(data.data[0].idOfendidoCarpeta);
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
                                alert("Error al guardar información general:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error al guardar información general:" + otroobj);
                        }
                    });

                }
            });
            //termina agregar ofendido

            //agregar domicilio(s) del ofendido

            $("#form-domicilios-ofendido").on('submit', function (e) {
                e.preventDefault();
                if (validateDomiclio()) {
                    //var domicilio = $(this).serialize() + '&idOfendidoCarpeta=' + $('#idOfendidoCarpeta').val();
                    if ($("#cbResidenciaHabitualOfendido").is(":checked")) {
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
                        url: "../fachadas/sigejupe/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasFacade.Class.php",
                        data: {
                            accion: 'agregar',
                            idDomicilioOfendidoCarpeta: $("#idDomicilioOfendidoCarpeta").val(),
                            activo: 'S',
                            idOfendidoCarpeta: $("#idOfendidoCarpeta").val(),
                            DomicilioProcesal: domicilioProcesal,
                            cvePais: $("#cmbPaisDomicilioOfendido").val(),
                            cveEstado: $("#cmbEstadoDomicilioOfendido").val(),
                            cveMunicipio: $("#cmbMunicipioDomicilioOfendido").val(),
                            direccion: $("#direccionDomicilio").val(),
                            colonia: $("#coloniaDireccion").val(),
                            numInterior: $("#numeroIntDomicilio").val(),
                            numExterior: $("#numeroExtDomicilio").val(),
                            cp: $("#cpDomicilio").val(),
                            latitud: $("#latitud").val(),
                            longitud: $("#longitud").val(),
                            recidenciaHabitual: auxVivienda,
                            estado: $("#estadoDomicilioOfendido").val(),
                            municipio: $("#municipioDomicilioOfendido").val(),
                            cveConvivencia: $("#cmbConvivenciaOfendido").val(),
                            cveTipoDeVivienda: $("#cmbTipoViviendaOfendido").val()
                        },
                        dataType: "json",
                        beforeSend: function () {
                        },
                        success: function (data) {

                            try {
                                if (data.status == "ok") {
                                    $("#alert-domicilios").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                    $("#idDomicilioOfendidoCarpeta").val('');
                                    $("#form-domicilios-ofendido")[0].reset();
                                    $("#cmbPaisDomicilioOfendido").val(119).trigger("change");
                                    $("#ubicacion").empty();
                                    $("#btn-agregar-modificar-domicilio").text('Agregar Domicilio');
                                    cargarTablaDomicilios(data.data.idOfendidoCarpeta);
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
                                alert("Error al guardar Domicilio:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            console.log(objeto);
                            console.log(quepaso);
                            console.log(otroobj);
                            alert("Server : Error al guardar Domicilio:" + otroobj);
                        }
                    });
                }
            });

            //termina agregar domicilio(s) del ofendido


            //agregar telefonos(s) del ofendido
            $("#form-telefonos-ofendido").on('submit', function (e) {
                e.preventDefault();
                if (validateTel()) {
                    //var telefono = $(this).serialize() + '&idOfendidoCarpeta=' + $('#idOfendidoCarpeta').val();
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/telefonosofendidoscarpetas/TelefonosofendidoscarpetasFacade.Class.php",
                        data: {
                            idTelefonoOfendidoCarpeta: $("#idTelefonoOfendidoCarpeta").val(),
                            idOfendidoCarpeta: $("#idOfendidoCarpeta").val(),
                            telefono: $("#telefonoTel").val(),
                            celular: $("#celTel").val(),
                            email: $("#emailTel").val(),
                            activo: 'S',
                            accion: 'agregar'
                        },
                        dataType: "json",
                        beforeSend: function () {
                        },
                        success: function (data) {
                            try {
                                if (data.status == "ok") {

                                    $("#alert-telefonos").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                    $("#idTelefonoOfendidoCarpeta").val('');
                                    $("#form-telefonos-ofendido")[0].reset();
                                    $("#btn-agregar-modificar-telefono").text('Agregar Teléfono');
                                    cargarTablaTelefonos(data.data.idOfendidoCarpeta);
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
                                alert("Error al guardar el Teléfono:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error al guardar el Teléfono:" + otroobj);
                        }
                    });
                }
            });
            //termina agregar telefono(s) del ofendido


            //inicia agregar defensores ofendidos
            $("#form-defensores-ofendido").on('submit', function (e) {
                e.preventDefault();
                if (validateDefensor()) {
                    var defensor = $(this).serialize() + '&idOfendidoCarpeta=' + $('#idOfendidoCarpeta').val();
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/defensoresofendidoscarpetas/DefensoresofendidoscarpetasFacade.Class.php",
                        data: {
                            idDefensorOfendidoCarpeta: $("#idDefensorOfendidoCarpeta").val(),
                            idOfendidoCarpeta: $("#idOfendidoCarpeta").val(),
                            cveTipoDefensor: $("#cmbTipoDefensorOfendido").val(),
                            nombre: $("#nombreDefensor").val(),
                            telefono: $("#telDefensor").val(),
                            celular: $("#celDefensor").val(),
                            email: $("#emailDefensor").val(),
                            activo: 'S',
                            accion: 'agregar'
                        },
                        dataType: "json",
                        beforeSend: function () {
                        },
                        success: function (data) {
                            try {

                                if (data.status == "ok") {
                                    $("#alert-defensores").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();
                                    $("#idDefensorOfendidoCarpeta").val('');
                                    $("#form-defensores-ofendido")[0].reset();
                                    $("#btn-agregar-modificar-defensor").text('Agregar Defensor');
                                    cargarTablaDefensores(data.data.idOfendidoCarpeta);
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
                                alert("Error al guardar el Defensor:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error al guardar el Defensor:" + otroobj);
                        }
                    });
                }
            });
            //termina agregar defensores ofendidos

            //inicia agregar tutor/representante del ofendido
            $("#form-tutores-ofendido").on('submit', function (e) {
                e.preventDefault();
                if (validateTutor()) {
                    var tutor = $(this).serialize() + '&idOfendidoCarpeta=' + $('#idOfendidoCarpeta').val();
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/tutoresofendidoscarpetas/TutoresofendidoscarpetasFacade.Class.php",
                        data: {
                            idTutorOfendidoCarpeta: $("#idTutorOfendido").val(),
                            idOfendidoCarpeta: $("#idOfendidoCarpeta").val(),
                            cveTipoTutor: $("#cmbTipoTutorOfendido").val(),
                            ProvDef: $('input:radio[name=rdtutores]:checked').val(),
                            nombre: $("#nombreTutorOfendido").val(),
                            paterno: $("#paternoTutorOfendido").val(),
                            materno: $("#maternoTutorOfendido").val(),
                            fechaNacimiento: $("#fechaNacimientoTutorOfendido").val(),
                            edad: $("#txtEdadTutorOfendido").val(),
                            activo: 'S',
                            cveGenero: $("#cmbGeneroTutorOfendido").val(),
                            accion: 'agregar'
                        },
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
                                    cargarTablaTutores(data.data.idOfendidoCarpeta);
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
                                alert("Error al guardar el Tutor:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error al guardar el Tutor:" + otroobj);
                        }
                    });
                }
            });
            //termina agregar tutor/ofendido

            //inicia agregar nacionalidad(es) del ofendido

            $("#form-nacionalidades-ofendido").on('submit', function (e) {
                e.preventDefault();
                if (validateNacionalidad()) {
                    var nacionalidad = $(this).serialize() + '&idOfendidoCarpeta=' + $('#idOfendidoCarpeta').val();
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasFacade.Class.php",
                        data: {
                            idNacionalidadOfendidoCarpeta: $("#idNacionalidadOfendidoCarpeta").val(),
                            idOfendidoCarpeta: $("#idOfendidoCarpeta").val(),
                            cvePais: $("#cmbPaisNacionalidadOfendido").val(),
                            activo: 'S',
                            accion: 'agregar'
                        },
                        dataType: "json",
                        beforeSend: function () {
                        },
                        success: function (data) {
                            try {
                                if (data.status == "ok") {
                                    $("#alert-nacionalidades").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();
                                    $("#form-nacionalidades-ofendido")[0].reset();
                                    cargarTablaNacionalidades(data.data.idOfendidoCarpeta);
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
                                alert("Error al guardar la nacionalidad:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error al guardar la nacionalidad:" + otroobj);
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
                $("#form-ofendido-general #idOfendidoCarpeta").val("");
                $("#form-ofendido-general #activo").val("S");
                $("#form-ofendido-general")[0].reset();
                $('#cveTipoPersona').val(1);
                $("#cvePaisNacimiento").val(119).trigger('change');
                $("#guardar-general-ofendido").text("Guardar Datos Generales del Sujeto Pasivo del Delito");
                $("#cveTipoFamiliaLinguistica").val(15);
                $("#cveGrupoEdnico").val(72);
                $("#NombreGeneral").html("");
                $("#NombreDomicilios").html("");
                $("#NombreTelefonos").html("");
                $("#NombreDefensores").html("");
                $('#NombreTutores').html("");
                $('#NombreNacionalidad').html("");
                $("#cmbCveTipoReligion").val(8);
                $("#tableResultadosDomiciliosOfendido").hide();
                $("#tableResultadosTelefonosOfendido").hide();
                $("#tableResultadosDefensoresOfendido").hide();
                $("#tableResultadosTutoresOfendido").hide();
                $("#tableResultadosNacionalidadOfendido").hide();
            });

            //limpiar domicilio
            $("#limpiar-domicilio").on('click', function (e) {
                e.preventDefault();
                $("#tabla-domicilios > tr").removeClass('success');
                $("#form-domicilios-ofendido #idDomicilioOfendidoCarpeta").val("");
                $("#form-domicilios-ofendido #activo").val("S");

                $("#form-domicilios-ofendido")[0].reset();
                $("#btn-agregar-modificar-domicilio").text('Agregar Domicilio');
                $("#ubicacion").empty();
                $("#cmbPaisDomicilioOfendido").val(119).trigger("change");
                $("#cmbEstadoDomicilioOfendido").val(15).trigger("change");
                $("#cmbMunicipioDomicilioOfendido").val(0);
                $("#cbDomicilioProcesal").val("");
                $("#cbDomicilioProcesal").prop("checked", false);
            });

            //limpiar teléfono
            $("#limpiar-telefono").on('click', function (e) {
                e.preventDefault();
                $("#tabla-telefonos > tr").removeClass('success');

                $("#form-telefonos-ofendido #idTelefonoOfendidoCarpeta").val("");
                $("#form-telefonos-ofendido #activo").val("S");

                $("#form-telefonos-ofendido")[0].reset();
                $("#btn-agregar-modificar-telefono").text('Agregar Teléfono');
            });

            //limpiar defensor
            $("#limpiar-defensor").on('click', function (e) {
                e.preventDefault();
                $("#tabla-defensores > tr").removeClass('success');
                $("#form-defensores-ofendido #idDefensorOfendidoCarpeta").val("");
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
                $('input:radio[name=rdtutores]:checked').prop("checked", false);
            });

            //limpiar nacionalidades
            $("#limpiar-nacionalidades").on('click', function (e) {
                e.preventDefault();
                $("#tabla-nacionalidades > tr").removeClass('success');
                $("#form-nacionalidades-ofendido #idNacionalidadOfendidoCarpeta").val("");
                $("#form-nacionalidades-ofendido #activo").val("S");
                $("#form-nacionalidades-ofendido")[0].reset();
                $("#btn-agregar-modificar-nacionalidad").text('Agregar Nacionalidad');
                $("#cmbPaisNacionalidadOfendido").val(119);
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