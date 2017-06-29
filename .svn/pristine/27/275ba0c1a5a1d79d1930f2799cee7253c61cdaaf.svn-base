<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    date_default_timezone_set('America/Mexico_City');
    $SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
    $SysNumEmpleado = $_SESSION['numEmpleado'];
    $SysCvePerfil = $_SESSION['cvePerfil'];
    $SysCveAdscripcion = $_SESSION['cveAdscripcion'];
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
    $origen = ( isset($_GET['origen']) && $_GET['origen'] != "" ) ? $_GET['origen'] : "";
    $juzgadoOrigenArbol = ( isset($_POST['juzgadoOrigenArbol']) && $_POST['juzgadoOrigenArbol'] != "" ) ? $_POST['juzgadoOrigenArbol'] : "";
    ?>
    <style type="text/css">
        .alert{ display: none; }
        #divHideForm{ display: none; position: absolute; width: 100%; height: 100vh; opacity: .5; z-index: 99999; background: #427468;}
        #divMenssage{ width: 100%; height: 40px; padding-top: 10px; padding-bottom: 10px; text-align: center; margin-top: 40vh; margin-bottom: auto; color: #284740; background: #FFFFFF; text-transform: uppercase; }
        #divImgloading{ background: #FFFFFF url(img/cargando_1.gif) no-repeat; background-position: center; width: 100%; height: 70px; margin-left: auto; margin-right: auto; }
        .panel panel-default{ background: #427468; color: #ebf3f1; }
        .panel-heading{ background: #427468; color: #ebf3f1; }
        .panel-group .panel-heading{ background: #427468; color: #ebf3f1; }
        .panel-default > .panel-heading{ background: #427468; color: #ebf3f1; }
        .needed:after { color:darkred; content: " (*)"; }
        .textCorrection{ display: block; text-transform: capitalize; }
        .textCorrection:first-letter { text-transform: uppercase; }
        .capital{ text-transform: uppercase; }
        input, textarea{ resize: none; }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="actasMinimasTitulo">                                                            
                Acta M&iacute;nima
            </h5>
        </div>
        <div class="panel-body">
            <input type="hidden" id="SysCveUsuarioSistema" value="<?= $SysCveUsuarioSistema ?>"/> 
            <input type="hidden" id="SysCvePerfil" value="<?= $SysCvePerfil ?>"/>
            <input type="hidden" id="SysCveAdscripcion" value="<?= $SysCveAdscripcion ?>"/>
            <input type="hidden" id="SysNumEmpleado" value="<?= $SysNumEmpleado ?>"/>
            <input type="hidden" id="idActuacion" name="idActuacion" value="<?= $idActuacionArbol ?>" />
            <input type="hidden" id="idReferencia"/>
            <input type="hidden" id="fechaHoy" name="fechaHoy" value="<?php echo date('d/m/Y'); ?>"/>
            <input type="hidden" id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt"/>
            <input type="hidden" id="procedencia" name="procedencia" value="<?= $procedencia ?>" />
            <!-- <input type="hidden" id="idActuacionArbol" name="idActuacionArbol" value="<?= $idActuacionArbol ?>" /> -->
            <input type="hidden" id="idCarpetaJudicialArbol" name="idCarpetaJudicialArbol" value="<?= $idCarpetaJudicialArbol ?>" />
            <input type="hidden" id="cveTipoCarpetaArbol" name="cveTipoCarpetaArbol" value="<?= $cveTipoCarpetaArbol ?>" />
            <input type="hidden" id="origen" value="<?php echo $origen; ?>" />
            <input type="hidden" id="juzgadoOrigenArbol" value="<?php echo $juzgadoOrigenArbol; ?>" />
            <div id="divFormulario" class="form-horizontal " data-step="1" data-intro="Este m&oacute;dulo le permite registrar una  nueva acta m&iacute;nima, la cual puede ser modificada y/o eliminada." data-position='left'>
                <div class="form-group">
                    <label for="cveTipoJuzgado" class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)."><?php echo $origen == 1 ? ( "Tribunal de alzada") : ( "Juzgado"); ?></label>
                    <div class="col-md-9">
                        <select class="form-control " name="cveTipoJuzgado" id="cveTipoJuzgado" onchange="cargaTipoCarpeta();"></select>
                    </div>                                
                </div>
                <div class="form-group"> 
                    <label class="control-label col-md-3 needed">Relacionado con</label>
                    <div class="col-md-9"><select id="s_actam_numero" class="form-control"></select></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 needed" id="label_actam_text1">No. de</label>
                    <div class="col-md-9">
                        <input type="text" id="i_actam_numero" maxlength="4" placeholder="N&Uacute;MERO" class="form-inline" />
                        /
                        <input type="text" id="i_actam_anio" maxlength="4" placeholder="A&Ntilde;O" class="form-inline"/>
                        &nbsp;&nbsp;
                        <span id="resultadoBusquedaActuacion" class="glyphicon"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 needed">Audiencias</label>
                    <div class="col-md-9"><select id="s_actam_audiencias" class="form-control"></select></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 needed">Sintesis</label>
                    <div class="col-md-9"><input type="text" id="i_actam_sintesis" maxlength="100" size="70" placeholder="INGRESE LA SINTESIS" style="text-transform: uppercase;" class="form-control" /></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 needed">Imputados</label>
                    <div class="col-md-9">
                        <table class="table table-bordered table-hover table-responsive">
                            <thead>
                                <tr><th style="width: 80%;">Imputado</th><th style="width: 20%; text-align: center;">Se declara de Legal la Detenci&oacute;n</th></tr>
                            </thead>
                            <tbody id="tbody-imputados"></tbody>
                        </table>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 needed">Contenido del documento</label>
                    <div class="col-md-9">
                        <script id="t_acta_notas" type="text/plain" style="width: 100%; height: 300px; margin: 0px auto;"></script>
                        <!-- <textarea id="t_acta_notas" rows="6" placeholder="INGRESE LAS NOTAS" style="text-transform: uppercase;" class="form-control"></textarea> -->
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar el acta minima." data-position='top'>                                      
                            <input type="submit" class="btn btn-primary btn-adaptar" value="Guardar" onclick="guardaActaMinima()" id="btn_actuaciones_guardar" />
                        </div>
                        <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top' >                                       
                            <input type="submit" id="btn_actuaciones_limpiar" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="cleanFields(1)" />
                        </div>
                        <div class="col-md-2 botonesAdaptar botonesArbol">
                            <input type="submit" id="btn_actuaciones_consultar" class="btn btn-primary btn-adaptar" value="Consultar" onclick="changeDivForm(2);" />
                        </div>
                        <div class="col-md-2 botonesAdaptar">                                       
                            <input type="submit" class="btn btn-primary btn-adaptar" value="Eliminar" id="btn_actam_eliminar" style="display:none;" disabled="disabled"/>
                        </div>
                        <div class="col-md-2 botonesAdaptar">                        
                            <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button>
                        </div>
                        <div class="col-md-2 botonesAdaptar">                        
                            <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="display: none">Generar PDF</button>
                        </div>
                        <!--  -->
                        <!--
                                                                    <input type="submit" class="btn btn-primary" value="DIGITALIZAR" id="btn_actam_digitalizar" disabled="disabled"/>
                                                                    <input type="submit" class="btn btn-primary" value="VER DOCUMENTOS" id="btn_actam_verdocumentos" disabled="disabled"/>
                        -->            		
                    </div>
                </div>
            </div>
            <div id="divConsulta" style="display: none">
                <!--
                <div class="form-group" id="actam_tabla_imagenes" style="display: none">
                        <div class="col-md-12">
                        <h3>IMAGENES DE ACTA MINIMA</h3>
                                <table>
                                        <thead>
                                                <tr>
                                                        <th>NO.</th>
                                                        <th>NOMBRE ARCHIVO</th>
                                                        <th>FECHA DIGITALIZACI&Oacute;N</th>
                                                        <th>POSICI&Oacute;N</th>
                                                        <th>BORRAR</th>
                                                </tr>
                                        </thead>
                                        <tbody id="actam_tbody">
                                        </tbody>
                                </table>
                        </div>
                </div>
                -->
                <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">
                <hr/>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="cveTipoJuzgado_busqueda" class="control-label col-md-3"><?php echo $origen == 1 ? ( "Tribunal de alzada") : ( "Juzgado"); ?>:</label>
                        <div class="col-md-9">
                            <select class="form-control " name="cveTipoJuzgado_busqueda" id="cveTipoJuzgado_busqueda" onchange="cargaTipoCarpeta(2);"></select>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Carpeta</label>
                        <div class="col-md-9"><select id="s_actam_numero_busqueda" class="form-control"></select></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" id="label_actam_text2">No. de</label>
                        <div class="col-md-9">
                            <input type="text" id="i_actam_numero_busqueda" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline" />
                            /
                            <input type="text" id="i_actam_anio_busqueda" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Fecha inicio</label>
                        <div class="col-md-2">
                            <input type="text" id="i_actam_finicial_busqueda" placeholder="dd/mm/aaaa" class="form-control fecha" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Fecha fin</label>
                        <div class="col-md-2">
                            <input type="text" id="i_actam_ffinal_busqueda" placeholder="dd/mm/aaaa" class="form-control fecha" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-primary" value="Buscar" onclick="encuentraActasMinimas()"/>
                            <input type="submit" class="btn btn-primary" value="Limpiar" onclick="cleanFields(2)"/>
                        </div>
                    </div>
                </div>
            </div>
            <div id="divResultados" style="display:none;">
                <div class="col-xs-12"> <!-- paginacion -->
                    <div class="col-xs-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(2)">
                    </div>

                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-xs-2" >
                        <label class="control-label">Cambiar a la p&aacute;gina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="encuentraActasMinimas()">
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="encuentraActasMinimas()">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 table-responsive" id="tableSearch">
                </div>
            </div>		
        </div>	
        <div class="form-group">
            <div id="divAdvertencia" class="alert alert-warning alert-dismissable textCorrection" style="display: none">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong id="strAdvertencia"></strong> 
            </div>
            <div id="divCorrecto" class="alert alert-success alert-dismissable textCorrection" style="display: none">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong id="strCorrecto"></strong> 
            </div>
            <div id="divError" class="alert alert-danger alert-dismissable textCorrection" style="display: none">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong id="strError"></strong>
            </div>
            <div id="divInformacion" class="alert alert-info alert-dismissable textCorrection" style="display: none">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong id="strInformacion"></strong>
            </div>
        </div>	
        <div class="form-group">
            <div id="divAlertWarning" class="alert alert-warning alert-dismissable" style="display:none;">
                <strong>Advertencia!</strong> Mensaje
            </div>
            <div id="divAlertSucces" class="alert alert-success alert-dismissable" style="display:none;">
                <strong>Correcto!</strong> Mensaje
            </div>
            <div id="divAlertDager" class="alert alert-danger alert-dismissable" style="display:none;">
                <strong>Error!</strong> Mensaje
            </div>
            <div id="divAlertInfo" class="alert alert-info alert-dismissable" style="display:none;">
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
    <script type="text/javascript">
        var cveJuzgadoArbol = '<?php echo $juzgadoOrigenArbol; ?>';
        var origen = '<?php echo $origen; ?>';
        var idActuacion = '<?php echo $idActuacionArbol; ?>';
        var cveAdscripcion = '<?php echo $SysCveAdscripcion; ?>';

        if (editor != undefined) {
            editor.destroy();
        }
        var editor = null;

        /**
         * Obtiene el valor completo de la etiqueta, elimina los espacios conviertiendo en array y regresa la primera posiciOn para ser mostrada
         * @param {string} string Recibe una cadena. Ej. 'DescripciOn completa'
         * @return {string} string Regresa la primera posiciOn del array. Ej. 'DescripciOn'
         */
        function obtieneEtiqueta(string) {
            var text_sections = string.split(' ');
            if (text_sections[0] != 'SIN') {
                return string;
            }
        }

        /**
         * FunciOn para la obtenciOn a travEs de las llaves de bUsqueda, localizar el registro coincidente en la tabla tblcarpetasjiciales
         */
        function getCarpetaJudicial(idCarpetaJudicial) {
            var activo = 'S';
            $.ajax({//busca datos en la tabla -tblcarpetasjudiciales-
                async: false,
                type: 'POST',
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                data: {
                    accion: 'consultar',
                    idCarpetaJudicial: idCarpetaJudicial,
                    activo: activo,
                }
            }).done(function (response) {
                var object = eval("(" + response + ")");
                var totalRecords = object.totalCount;
                if (totalRecords == 1) {
                    //existe registro en las carpetas judiciales
                    //prepara los datos para inserciOn en -tblactuaciones-
                    var data = object.data[0];
                    //validaciOn de no duplicidad en los registros de la tabla -carpetasJudiciales-
                    //obtenciOn del ID de la Carpeta Judicial, la cual corresponde al 'Id de referencia'
                    //$('#s_actam_numero').val('"'+data.cveTipoCarpeta+'"');
                    $('#s_actam_numero option').eq(data.cveTipoCarpeta).prop('selected', true);
                    $('#i_actam_numero').val(data.numero);
                    $('#i_actam_anio').val(data.anio);
                    obtieneAudiencias();
                    return;
                } else {
                    showMessage('NO EXISTE RELACI&Oacute;N, VERIFIQUE.', 'warning');
                }
            }
            );
        }

        /**
         * FunciOn para la obtenciOn de Audiencias sin RelaciOn
         * @param {string} aditionalOptions Es una cadena que se usa para la ediciOn de un registro, es el <option> del <select> elegido para ediciOn
         */
        function obtieneAudiencias(idCarpetaJudicial) {
            var idCarpetaJudicial = idCarpetaJudicial || '';
            var cveJuzgadoCombo = $('#cveTipoJuzgado').val().split('/')[0];
            var carpeta = $('#s_actam_numero option:selected').val();
            //carpeta = (carpeta != 0) ? carpeta : '';
            var numero = $('#i_actam_numero').val();
            var anio = $('#i_actam_anio').val();
            var acceso = false;
            if (anio != '' && numero != '' && carpeta > 0) {
                acceso = true;
            } else {
                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;Verifique los datos e intente nuevamente.');
                showMessage('Necesita definir los datos', 'information');
            }
            if (acceso == true || idCarpetaJudicial != '') {
                $.ajax({
                    async: false,
                    type: 'POST',
                    url: "../fachadas/sigejupe/actaminima/ActaminimaFacade.Class.php",
                    data: {
                        idReferencia: idCarpetaJudicial,
                        cveTipoCarpeta: carpeta,
                        numero: numero,
                        anio: anio,
                        cveTipoActuacion: cveTipoActuacion,
                        cveJuzgado: cveJuzgadoCombo,
                        accion: 'obtencionAudiencias'
                    }
                }).done(function (response) {
                    var objeto = eval("(" + response + ")");
                    var opciones = '';
                    if (objeto.totalRegistros > 0) {
                        //combo de audiencias
                        opciones += '<option value="0">-- SELECCIONE --</option>';
                        $.each(objeto.data.audiencias, function (index, value) {
                            opciones += '<option value="' + value.idAudiencia + '">' + value.desCatAudiencia + ' - ' + value.fechaRegistro + '</option>';
                        });
                        //tabla de imputados
                        llenaTablaImputados(objeto.totalRegistrosImputados, objeto.data.imputados);
                        $('#idReferencia').val(objeto.idReferencia);
                        $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden", "true").after('').append('&nbsp;Audiencias encontradas.');
                        showMessage(objeto.mensaje, 'success');
                    } else {
                        opciones += '<option value="0">-- SIN REGISTROS --</option>';
                        $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + objeto.mensaje);
                        showMessage(objeto.mensaje, 'information');
                    }
                    $('#s_actam_audiencias').empty().append(opciones);
                });
            }
        }

        llenaTablaImputados = function (totalRegistros, objetoImputados) {
            var renglones = '';
            var estado = '';
            var deshabilitado = '';
            if (totalRegistros > 0) {
                $.each(objetoImputados, function (index, value) {
                    estado = '';
                    if (value.LegalDetencion == 'S') { //muestra check
                        estado = 'checked';
                    }
                    if ($('#idActuacion').val() == '') { //es busqueda para captura, no de resultados de busqueda, se bloquea el check 
                        if (estado == 'checked') {
                            deshabilitado = 'disabled="disabled"';
                        }
                    }
                    renglones += '<tr><td>' + value.nombre + '</td><td style="text-align: center;"><input type="checkbox" value="' + value.idImputadoCarpeta + '" id="" ' + estado + ' class="check_imputado" ' + deshabilitado + '/></td></tr>';
                });
            } else {
                renglones += '<tr><td colspan="2">No existen Imputados.</td></tr>';
            }
            $('#tbody-imputados').empty().html(renglones);
        };

        guardaActaMinima = function () {
            var idActuacion = $('#idActuacion').val() > 0 ? $('#idActuacion').val() : '';
            var idReferencia = $('#idReferencia').val();
            var cveJuzgado = $('#cveTipoJuzgado').val();
            var cveCarpeta = $('#s_actam_numero').val();
            var numero = $('#i_actam_numero').val();
            var anio = $('#i_actam_anio').val();
            var cveAudiencia = $('#s_actam_audiencias').val();
            var sintesis = $('#i_actam_sintesis').val();
            var observaciones = editor.getContent();
            var mensaje = '';
            //obtiene los ids con check
            var check_estado = '';
            var check_valor = '';
            var check_listaImputados = '';
            var check_listaDetenidos = '';
            $.each($('.check_imputado'), function (index, value) {
                check_estado = $(this).prop('checked');
                check_valor = $(this).val();
                check_listaImputados += check_valor + ',';
                if (check_estado == true) {
                    check_listaDetenidos += check_valor + ',';
                }
            });
            if (check_listaImputados.length > 0) { //elimina la ultima ','
                check_listaImputados = check_listaImputados.slice(0, -1);
                if (check_listaDetenidos.length > 0) {
                    check_listaDetenidos = check_listaDetenidos.slice(0, -1);
                }
            }
            //validaciOn de los campos del acta minima
            var camposActaMinima = [
                {name: 'Referencia de la Audiencia', value: idReferencia},
                {name: 'Juzgado', value: cveJuzgado},
                {name: 'Tipo de Carpeta', value: cveCarpeta},
                {name: 'N&uacute;mero', value: numero},
                {name: 'A&ntilde;o', value: anio},
                {name: 'Audiencia', value: cveAudiencia},
                {name: 'Sintesis', value: sintesis},
                {name: 'Contenido del documento', value: observaciones}];
            var estadoCampos = validateFields(camposActaMinima);
            var accion = (idActuacion == '') ? 'guardaActaMinima' : 'actualizaActaMinima';
            if (estadoCampos == true) {
                $.post("../fachadas/sigejupe/actaminima/ActaminimaFacade.Class.php",
                        {
                            accion: accion,
                            activo: 'S',
                            idReferencia: idReferencia,
                            idActuacion: idActuacion,
                            numero: numero,
                            anio: anio,
                            cveJuzgado: cveJuzgado,
                            cveTipoCarpeta: cveCarpeta,
                            idAudiencia: cveAudiencia,
                            sintesis: sintesis,
                            observaciones: observaciones,
                            listaImputados: check_listaImputados,
                            listaDetenidos: check_listaDetenidos
                        }, function (response) {
                    var objeto = eval("(" + response + ")");
                    if (objeto.status == 'ok') {
                        $('#idActuacion').val(objeto.data.idActuacion);
                        showMessage(objeto.mensaje, 'success');
                        $('#inputPDF').show();
                        $('#inputVisor').show();
                        if ($('#procedencia').val() == 1) {
                            getTree();
                        }
                    } else {
                        showMessage(objeto.mensaje, 'warning');
                    }
                });
            } else {
                //mostrar mensaje de informaciOn faltante
                mensaje = 'Complete los siguientes campos:<br/>';
                $.each(estadoCampos, function (k, v) {
                    mensaje += '- ' + v + '<br/>';
                });
                mensaje += 'Verifique.';
                showMessage(mensaje, 'warning');
            }
        }

        /**
         * Valida que antes de guardar o actualizar, todos los campos contegan informaciOn
         * @param {array} array Es el arraglo de campos a validar
         * @return {boolean} state Regresa 'true' si todos los campos contienen informaciOn
         */
        validateFields = function (array) {
            var state = true;
            var empty = [];
            var counter = 0;
            $.each(array, function (k, v) {
                if (v.value == '' || v.value == 0 || v.value == null) {
                    state = false;
                    empty[counter++] = v.name;
                    return;
                }
            });
            if (!state) {
                state = empty;
            }
            return state;
        }

        /**
         * Guarda o Actualiza en la base de datos la ActuaciOn
         */
        function guardaActuacion() {
            var idActuacionVal = $('#idActuacion').val();
            //var numActuacion = '0';
            //var cveTipoActuacion = '6';
            //var idReferencia = varRecover("idReferencia");
            var cveJuzgado = $('#cveTipoJuzgado').val();
            //var cveUsuario = '80';
            var cveTipoCarpeta = $('#s_actam_numero option:selected').val();
            var numero = $('#i_actam_numero').val();
            var anio = $('#i_actam_anio').val();
            var idAudiencia = actaMinima.idAudiencia; //$('#s_actam_audiencias option:selected').val();
            var sintesis = $('#i_actam_sintesis').val();
            //var observaciones = $('#t_acta_notas').val();
            var observaciones = editor.getContent();
            var activo = 'S';
            var validationFields = [cveJuzgado, cveTipoCarpeta, numero, anio, sintesis];
            var accion = '';
            if (idActuacionVal == '') {
                accion = 'guardarActaMinima';
            } else {
                accion = 'actualizarAudiencia';
            }
            validationResponse = validateFields(validationFields);
            if (validationResponse) {
                $.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                        {
                            idActuacion: idActuacionVal,
                            //numActuacion:numActuacion,
                            //aniActuacion:numAnio,
                            cveTipoActuacion: cveTipoActuacion,
                            idReferencia: actaMinima.idReferencia,
                            numero: numero,
                            anio: anio,
                            cveTipoCarpeta: cveTipoCarpeta,
                            cveJuzgado: cveJuzgado,
                            sintesis: sintesis,
                            observaciones: observaciones,
                            cveUsuario: cveUsuarioSistema,
                            activo: activo,
                            generico: idAudiencia,
                            accion: accion
                        },
                        function (responseE) {
                            var object = eval("(" + responseE + ")");
                            var messageActuaciones = object.text;
                            var data = object.data;
                            var idActuacion = data[0].idActuacion;
                            //var idAudiencia = varRecover("idAudiencia");
                            $('#idActuacion').val(idActuacion);
                            if (object.totalCount > 0 && idActuacionVal == '') { // la insercion trae datos y es inserciOn y no actualizaciOn
                                //inserta en la tabla de relacion -tblactasaudiencias-
                                $.post("../fachadas/sigejupe/actasaudiencias/ActasaudienciasFacade.Class.php",
                                        {
                                            idActuacion: idActuacion,
                                            idAudiencia: idAudiencia,
                                            accion: 'guardarRelacion'
                                        },
                                        function (response) {
                                            var object = eval("(" + response + ")");
                                            var messageActas = object.text;
                                            if (object.totalCount > 0) { // la consulta trae datos
                                                showMessage(messageActas, 'success');
                                            } else if (object.totalCount == 0) { //no trae datos
                                                //showMessage(messageActas,'error');
                                            }
                                        }
                                );
                                showMessage(messageActuaciones, 'success');
                            } else if (object.totalCount > 0) { // es actulizaciOn
                                showMessage(messageActuaciones, 'success');
                                disabledFields(false);
                                //actualiza -tblactasaudiencias-
                                $.post("../fachadas/sigejupe/actasaudiencias/ActasaudienciasFacade.Class.php",
                                        {
                                            idActuacion: idActuacion,
                                            idAudiencia: idAudiencia,
                                            accion: 'actualizaAudiencia'
                                        },
                                        function (response) {
                                            var object = eval("(" + response + ")");
                                            var messageActas = object.text;
                                            if (object.totalCount > 0) { // la consulta trae datos
                                                showMessage(messageActas, 'success');
                                            } else if (object.totalCount == 0) { //no trae datos
                                                //showMessage(messageActas,'error');
                                            }
                                        }
                                );
                            } else { //la inserciOn no trae datos
                                showMessage(messageActuaciones, 'error');
                            }
                        });
            } else {
                showMessage("FALTAN CAMPOS POR DEFINIR. VERIFIQUE.", 'warning');
            }
        }

        eliminaActaMinima = function (idActuacion) {
            var sintesis = $('#i_actam_sintesis').val();
            var observaciones = editor.getContent();
            var dataFacade = "accion=eliminaActaMinima&idActuacion=" + idActuacion + "&sintesis=" + sintesis + "&observaciones=" + observaciones;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actaminima/ActaminimaFacade.Class.php",
                data: dataFacade,
                async: true,
                dataType: "html",
                success: function (response) {
                    var objeto = eval("(" + response + ")");
                    if (objeto.status == 'ok') {
                        showMessage(objeto.mensaje, 'success');
                        cleanFields(1);
                        if ($('#procedencia').val() == 1) {
                            getTree();
                        }
                    } else {
                        showMessage(objeto.mensaje, 'warning');
                    }
                }
            });
        }

        encuentraActasMinimas = function (idActuacion) {
            var idActuacion = idActuacion || '';
            var page = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var cveJuzgado = '';
            if ($('#procedencia').val() == 1) {
                cveJuzgado = ($('#cveTipoJuzgado').val() != 0) ? $('#cveTipoJuzgado').val() : '';
            } else {
                cveJuzgado = ($('#cveTipoJuzgado_busqueda').val() != 0) ? $('#cveTipoJuzgado_busqueda').val() : '';
            }
            cveJuzgado = cveJuzgado.split('/')[0];
            var cveCarpeta = ($('#s_actam_numero_busqueda').val() != 0) ? $('#s_actam_numero_busqueda').val() : '';
            var numero = $('#i_actam_numero_busqueda').val();
            var anio = $('#i_actam_anio_busqueda').val();
            var fechaInicial = $('#i_actam_finicial_busqueda').val();
            var fechaFinal = $('#i_actam_ffinal_busqueda').val();
            if (numero != '' || anio != '') {
                fechaInicial = '';
                fechaFinal = '';
            }
            if (idActuacion == "") {
                var dataFacade = "accion=encuentraActasMinimas&idActuacion=" + idActuacion + "&cveJuzgado=" + cveJuzgado + "&cveTipoCarpeta=" + cveCarpeta + "&numero=" + numero + "&anio=" + anio + "&txtFecInicialBusqueda=" + fechaInicial + "&txtFecFinalBusqueda=" + fechaFinal + "&pag=" + page + "&cantxPag=" + cantReg;
            } else {
                var dataFacade = "accion=encuentraActasMinimas&idActuacion=" + idActuacion + "&cveTipoCarpeta=" + cveCarpeta + "&numero=" + numero + "&anio=" + anio + "&txtFecInicialBusqueda=" + fechaInicial + "&txtFecFinalBusqueda=" + fechaFinal + "&pag=" + page + "&cantxPag=" + cantReg;
            }
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actaminima/ActaminimaFacade.Class.php",
                data: dataFacade,
                async: true,
                dataType: "html",
                success: function (response) {
                    var objeto = eval("(" + response + ")");
                    var tableContent = '';
                    if (objeto.status == 'ok') {
                        //definicion de tabla
                        tableContent += ''
                                + '<table id="tblResultados" class="table table-hover table-striped table-bordered table-responsive">'
                                + '	<thead>'
                                + '	<tr>'
                                + '		<th>CONSECUTIVO</th>'
                                + '		<th>NO. ACTUACI&Oacute;N / A&Ntilde;O ACTUACI&Oacute;N</th>'
                                + '		<th>TIPO CARPETA</th>'
                                + '		<th>SINTESIS</th>'
                                + '		<th>FECHA REGISTRO</th>'
                                + '	</tr>'
                                + '	</thead>'
                                + '	<tbody id="actaminima_tbody">';
                        //var renglones = '';
                        $.each(objeto.data, function (index, value) {
                            resultadosBusqueda.datos [index] = {
                                idActuacion: value.idActuacion,
                                idReferencia: value.idReferencia,
                                numero: value.numero,
                                anio: value.anio,
                                numActuacion: value.numActuacion,
                                aniActuacion: value.aniActuacion,
                                cveTipoCarpeta: value.cveTipoCarpeta,
                                cveJuzgado: value.cveJuzgado,
                                cveTipoJuzgado: value.cveTipoJuzgado,
                                Sintesis: value.Sintesis,
                                observaciones: value.observaciones,
                                activo: value.activo,
                                fechaRegistro: value.fechaRegistro,
                                fechaActualizacion: value.fechaActualizacion,
                                actaAudiencia: value.actaAudiencia,
                            }
                            //tableContent += "<tr onclick='showInfo(" + JSON.stringify(value) + ")'><td>" + parseInt(index + 1) + "</td>"
                            tableContent += "<tr onclick='showInfo(" + index + ")'><td>" + parseInt(index + 1) + "</td>"
                                    + '<td>' + value.numActuacion + ' / ' + value.aniActuacion + '</td>'
                                    + '<td>' + value.cveTipoCarpeta[0].desTipoCarpeta + ' ' + value.numero + ' / ' + value.anio + '</td>'
                                    + '<td>' + value.Sintesis + '</td>'
                                    + '<td>' + value.fechaRegistro + '</td></tr>';
                        });
                        if (idActuacion != '') { //si viene del arbol redirecciona
                            showInfo(0); // '0' es la posicion ndel registro ya que es unno solo 
                            return;
                        }
                        tableContent += '	</tbody>'
                                + '</table>';
                        //$('#actaminima_tbody').empty().append(renglones);
                        $('#tableSearch').html(tableContent);
                        $('#tblResultados').DataTable({
                            paging: false
                        });
                        getPages(page, cantReg);
                        showMessage(objeto.mensaje, 'success');
                        changeDivForm(3);
                    } else {
                        showMessage(objeto.mensaje, 'warning');
                    }
                }
            });
        };

        /**
         * FunciOn para obtener las paginas de la tabla de resultados
         * @param {integer} page Es el nUmero de la pAgina a la que se cambiarA
         * @param {integer} cantReg Es el nUmero de registros a mostrar en la pAgina
         */
        function getPages(page, cantReg) {
            var cveJuzgadoBusqueda = ($('#cveTipoJuzgado_busqueda').val() != 0) ? $('#cveTipoJuzgado_busqueda').val() : cveJuzgado;
            var tipoCarpeta = ($('#s_actam_numero_busqueda option:selected').val() != 0) ? $('#s_actam_numero_busqueda option:selected').val() : '';
            var numero = $('#i_actam_numero_busqueda').val();
            var anio = $('#i_actam_anio_busqueda').val();
            var fechaInicial = '';
            var fechaFinal = '';
            if (tipoCarpeta == '' && numero == '' && anio == '') {
                fechaInicial = $('#i_actam_finicial_busqueda').val();
                fechaFinal = $('#i_actam_ffinal_busqueda').val();
            }
            var totalPages = 0;
            cveJuzgadoBusqueda = cveJuzgadoBusqueda.split('/')[0];
            $.ajax({
                type: 'POST',
                async: false,
                data: {
                    cveJuzgado: cveJuzgadoBusqueda,
                    cveTipoCarpeta: tipoCarpeta,
                    numero: numero,
                    anio: anio,
                    cveTipoActuacion: cveTipoActuacion,
                    txtFecInicialBusqueda: fechaInicial,
                    txtFecFinalBusqueda: fechaFinal,
                    activo: 'S',
                    cantxPag: cantReg,
                    accion: 'getPaginas'
                },
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                success: function (response) {
                    var json = eval("(" + response + ")");
                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#totalReg").html("<b>Total:" + json.totalCount + "</b>");
                        page = (page == null) ? 1 : page;
                        $("#cmbPaginacion").val(page);
                    } else {
                        showMessage('Sin resultados.', 'information');
                    }
                }
            });
            return;
        }

        /**
         * Muestra en el formulario, la informaciOn del renglOn elegido de la tabla de resultado de la bUsqueda
         * @param {int} position Es la posiciOn del elemento en el arreglo 
         */
        function showInfo(posicion) {
            var objeto = resultadosBusqueda.datos[posicion];
            changeDivForm(1);
            //llenado de campos del formulario
            $('#cveTipoJuzgado').val(objeto.cveJuzgado + '/' + objeto.cveTipoJuzgado);
            cargaTipoCarpeta();
            $('#s_actam_numero').val(objeto.cveTipoCarpeta[0].cveTipoCarpeta);
            $('#idActuacion').val(objeto.idActuacion);
            $('#idReferencia').val(objeto.idReferencia);
            $('#label_actam_text1').empty().append('NO. DE ' + objeto.cveTipoCarpeta[0].desTipoCarpeta + ':');
            $('#i_actam_numero').val(objeto.numero);
            $('#i_actam_anio').val(objeto.anio);
            $('#s_actam_audiencias').empty().append('<option value="' + objeto.actaAudiencia[0].audiencia[0].cveCatAudiencia + '">' + objeto.actaAudiencia[0].audiencia[0].desCatAudiencia + ' - ' + objeto.actaAudiencia[0].audiencia[0].fechaRegistro + '</option>').val(objeto.actaAudiencia[0].audiencia[0].cveCatAudiencia);
            $('#i_actam_sintesis').val(objeto.Sintesis);
            llenareditor(objeto.observaciones);
            llenaTablaImputados(objeto.actaAudiencia[0].audiencia[0].totalimputadoscarpetas, objeto.actaAudiencia[0].audiencia[0].imputadoscarpetas);
            //limpia tabla de resultados
            $('#actaminima_tbody').html("");
            //muestra botOn de eliminar
            $('#btn_actam_eliminar').show();
            //bloqueo de campos del formulario
            disabledFields(true);
            $('#inputPDF').show();
            $('#inputVisor').show();
            muestraOcultaBotones();
        }

        /**
         * Desactiva/activa los campos clave del formulario
         * @param {boolean} state Recibe 'true' o 'false', el valor se asigan directamente al atributo de los campos
         */
        function disabledFields(state) {
            $('#s_actam_numero').attr("disabled", state);
            $('#i_actam_numero').attr("disabled", state);
            $('#i_actam_anio').attr("disabled", state);
            //$('#s_actam_audiencias').attr("disabled",state);
            //botOn de eliminaciOn
            var deleteState = crud.delete;
            if (deleteState == 'S') {
                $('#btn_actam_eliminar').attr("disabled", !state);
            }
        }

        /**
         * Limpia el contenido del formulario
         */
        function cleanFields(seccion) {
            if (seccion == 1) { // formulario de captura
                $('#divFormulario').find('input[type=text], input[type=password], input[type=number], input[type=email], input[type=hidden]').val('');
                $('#divFormulario').find('select').val('');
                editor.setContent("", false);
                $('#label_actam_text1, #label_actam_text2').empty().append('No. de:');
                $('#s_actam_numero').prop('selectedIndex', 0);
                $('#s_actam_audiencias').empty();
                disabledFields(false);
                $('#idActuacion').val('');
                $('#idReferencia').val('');
                $('#i_actam_finicial_busqueda, #i_actam_ffinal_busqueda').val($('#fechaHoy').val());
                $('#btn_actam_eliminar').hide();
                $('#actaminima_tbody').empty();
                $('#tbody-imputados').empty();
                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').removeClass('glyphicon-remove');
                $('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val($("#SysCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val());
                cargaJuzgados();
                cargaTipoCarpeta();
                $('#inputPDF').hide();
                $('#inputVisor').hide();
            }
            if (seccion == 2) { // formulario busqueda
                $('#i_actam_finicial_busqueda, #i_actam_ffinal_busqueda').val($('#fechaHoy').val());
                $('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val($("#SysCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val());
                $('#s_actam_numero_busqueda').prop('selectedIndex', 0);
                $('#i_actam_numero_busqueda').val('');
                $('#i_actam_anio_busqueda').val('');
                $('#actaminima_tbody').empty();
            }
            if (seccion == 3) { // formulario de resultados
            }
            if (seccion == 4) { //limpia al salir del foco en el año de la carpeta
                $('#idActuacion').val('');
                $('#idReferencia').val('');
                $('#s_actam_audiencias').val(0);
                $('#i_actam_sintesis').val('');
                $('#tbody-imputados').empty().html('');
                editor.setContent("", false);
            }
        }

        var titulos = {
            'titulo1': 'Acta M&iacute;nima',
            'titulo1a': '<a href="#" style="text-decoration:underline" onclick="changeDivForm(1)">Acta M&iacute;nima</a>',
            'titulo2': 'B&uacute;squeda',
            'titulo2a': '<a href="#" style="text-decoration:underline" onclick="changeDivForm(2)">B&uacute;squeda</a>',
            'titulo3': 'Resultados',
            'titulo3a': '<a href="#" style="text-decoration:underline" onclick="changeDivForm(3)">Resultados</a>'
        }

        /**
         * Muestra/Oculta el div del formulario y la tabla de bUsqueda
         * @param {int} opc Recibe un parametro para mostrar el DIV correspondiente
         */
        function changeDivForm(opc) {
            var opc = opc || 1;
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
                $("#divResultados").hide("fade");
                cleanFields(1);
                cleanFields(2);
                $('#actasMinimasTitulo').empty().append(titulos['titulo1']);
            } else if (opc === 2) {
                $("#divConsulta").show("slide");
                $("#divFormulario").hide("fade");
                $("#divResultados").hide("fade");
                $('#i_actam_finicial_busqueda, #i_actam_ffinal_busqueda').val($('#fechaHoy').val());
                $('#actasMinimasTitulo').empty().append(titulos['titulo1a'] + ' > ' + titulos['titulo2']);
                cargaTipoCarpeta(2);
            } else if (opc === 3) {
                $("#divResultados").show("slide");
                $("#divConsulta").hide("fade");
                $("#divFormulario").hide("fade");
                $('#actasMinimasTitulo').empty().append(titulos['titulo1a'] + ' > ' + titulos['titulo2a'] + ' > ' + titulos['titulo3']);
            }
        }

        /**
         * Oculta el DIV de mensajes
         */
        function removeMessage() {
            $('#div_message').hide();
        }

        /**
         * Muestra mensajes personalizados en el div destinado para ello
         * @param {string} message Es el mensaje que se mostrarA
         * @param {string} type Es el tipo de mensaje. 1:success, 2:warning, 3:information, 4:error
         */
        function showMessage(message, type) {
            var message = message || '';
            var div_message = '';
            var state = 0;
            switch (type) {
                case 'success':
                    div_message = 'divCorrecto';
                    break;
                case 'warning':
                    div_message = 'divAdvertencia';
                    state = 1;
                    break;
                case 'information':
                    div_message = 'divInformacion';
                    break;
                case 'error':
                    div_message = 'divError';
                    break;
            }
            $('#' + div_message).html(message);
            $('#' + div_message).show("slide");
            if (!state) {
                setTimeAlert(div_message);
            } else {
                setTimeout(function () {
                    $("#" + div_message).hide("slide");
                }, 5000);

            }
        }

        /**
         * FunciOn para obtener y asignar los permisos del usuario activo sobre el formulario
         */
        function setPermissions() {
            var cveUsuarioSistema = $('#SysCveUsuarioSistema').val();
            var cvePerfilSesion = $('#SysCvePerfil').val();
            insert_numEmpleado = cveUsuarioSistema;
            $.get("../archivos/" + cveUsuarioSistema + ".json",
                    function (response) {
                        var perfiles = response.perfiles[0];
                        var perfil = perfiles.perfil[0];
                        var permisos = perfil.permisos
                        var createRecord = 'N';
                        var readRecord = 'N';
                        var updateRecord = 'N';
                        var deleteRecord = 'N';
                        for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                            if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                                $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                    if (vnombre.nomFormulario == "CARPETAS JUDICIALES") {
                                        var hijos = vnombre.hijos;
                                        $.each(hijos, function (k2, nombreHijo) {
                                            if (nombreHijo.nomFormulario == 'ACTA MINIMA') {
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
                        crud.create = createRecord;
                        crud.read = readRecord;
                        crud.update = updateRecord;
                        crud.delete = deleteRecord;
                        if (crud.read == 'N') {
                            //$('#btn_buscaCarpeta, #btn_mcautelares_search').prop('disabled',true);
                        }
                        if (crud.create == 'N') {
                            //$('#btn_mcautelares_save').prop('disabled',true);
                        }
                        if (crud.delete == 'N') {
                            //$('#btn_mcautelares_delete').prop("disabled",true);
                        }
                    });
        }

        /**
         * FunciOn para la paginaciOn de la tabla de resultados
         */
        function paginacion() {
            $('#tblResultados').each(function () {
                var currentPage = 0;
                var numPerPage = 15;
                var $table = $(this);
                $table.bind('repaginate', function () {
                    $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
                });
                $table.trigger('repaginate');
                var numRows = $table.find('tbody tr').length;
                var numPages = Math.ceil(numRows / numPerPage);
                var $pager = $('<div class="pager"></div>');
                for (var page = 0; page < numPages; page++) {
                    $('<span class="page-number"></span>').text(page + 1).bind('click', {
                        newPage: page
                    }, function (event) {
                        currentPage = event.data['newPage'];
                        $table.trigger('repaginate');
                        $(this).addClass('active').siblings().removeClass('active');
                    }).appendTo($pager).addClass('clickable');
                }
                $pager.insertBefore($table).find('span.page-number:first').addClass('active');
            });
        }

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

        cargaJuzgados = function () {
            var strDatos = "accion=distrito";
            var hiddencveAdcripcion = cveAdscripcion;
            var hiddencveJuzgadoOrigenArbol = cveJuzgadoArbol;

            console.log(idActuacion);
            console.log(hiddencveAdcripcion);
            console.log(hiddencveJuzgadoOrigenArbol);
    //            if (hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol) {
    //               strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
    //            }
            if (idActuacion != "" && idActuacion > 0) {
                if (hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol) {
                    if (origen == "") {
                        strDatos = "accion=getJuzgadoActuacion&idActuacion=" + idActuacion;
                    }
                } else {
                    if (hiddencveJuzgadoOrigenArbol != 0) {
                        strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
                    } else {
                        strDatos = "accion=getJuzgadoActuacion&idActuacion=" + idActuacion;
                    }
                }
            }

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").empty().append('<option value="0/0">Seleccione una opci&oacute;n</option>');
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                            if (cveJuzgado == json.data[i].cveJuzgado) {
                                $("#cveTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                $("#cveTipoJuzgado_busqueda option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                $('#cveTipoJuzgadoAlt').val(json.data[i].cveTipojuzgado);
                            }
                        }
                    } else {
                        $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").empty().append('<option value="0/0">Sin registros</option>');
                    }
                    cargaTipoCarpeta();
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso, 'error');
                }
            });
        };

        cargaTipoCarpeta = function (seccion) {
            var seccion = seccion || 1;
            $('#s_actam_numero, #s_actam_numero_busqueda').empty();
            var tipoJuzgado = '';
            if (seccion == 1) {
                tipoJuzgado = $("#cveTipoJuzgado").val().split("/");
            } else {
                tipoJuzgado = $("#cveTipoJuzgado_busqueda").val().split("/");
            }
            // var tipoJuzgado = ( seccion == 1) ? $("#cveTipoJuzgado").val().split("/") : $("#cveTipoJuzgado_busqueda").val().split("/");

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        $("#s_actam_numero, #s_actam_numero_busqueda").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
                            switch (tipoJuzgado[1]) {
                                case "1": // tipo de juzgado de control
                                    if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1") { //|| json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#s_actam_numero, #s_actam_numero_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "2": // tipo de juzgado juicio
                                    if (json.data[i].cveTipoCarpeta == "3") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#s_actam_numero, #s_actam_numero_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    banderaSinRelacion = true;
                                    break;
                                case "3": // tipo de juzgado ejecucion
                                    if (json.data[i].cveTipoCarpeta == "5") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#s_actam_numero, #s_actam_numero_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "4": // tipo de juzgado tribunal
                                    if (json.data[i].cveTipoCarpeta == "4") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#s_actam_numero, #s_actam_numero_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "5":
                                    if (json.data[i].cveTipoCarpeta == "6") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#s_actam_numero, #s_actam_numero_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "8":
                                    if (json.data[i].cveTipoCarpeta == "6") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#s_actam_numero, #s_actam_numero_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                            }
                        }
                        $("#s_actam_numero, #s_actam_numero_busqueda").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                        $('#cveTipoJuzgadoAlt').val(tipoJuzgado[1]);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso, 'error');
                }
            });
        };

        //validaciOn de entrada numErica
        $('#i_actam_numero, #i_actam_anio').keypress(validateNumber);

        /**
         * Al salir del foco del nUmero y año de la causa, consulta las audiencias sin relaciOn
         */
        $('#i_actam_anio').on('blur', function () {
            cleanFields(4);
            obtieneAudiencias();
            removeMessage();
        })

        $('#s_actam_audiencias').change(function () {
            var idAudiencia = $(this).val();
        });

        /**
         * Cambia el valor de la etiqueta al seleccionar un tipo de carpeta
         */
        $('#s_actam_numero').change(function () {
            var label = '';
            //cambia el valor de la etiqueta 
            if ($(this).val() > 0) {
                label = obtieneEtiqueta($('#s_actam_numero option:selected').text());
            }
            $('#label_actam_text1').empty().append('NO. DE ' + label + ':');
            //limpia campos
            $('#i_actam_numero, #i_actam_anio, #s_actam_audiencias').empty().val("");
            removeMessage();
        });

        $('#s_actam_numero_busqueda').change(function () {
            var label = '';
            //cambia el valor de la etiqueta 
            if ($(this).val() > 0) {
                label = obtieneEtiqueta($('#s_actam_numero_busqueda option:selected').text());
            }
            $('#label_actam_text2').empty().append('NO. DE ' + label + ':');
            //limpia campos
            $('#i_actam_numero_busqueda, #i_actam_anio_busqueda').empty().val("");
            removeMessage();
        });

        /**
         * EliminaciOn lOgica del registro, se elimina de la tabla -tblactuaciones- y de -tblactasaudiencias-
         */
        $('#btn_actam_eliminar').click(function () {
            var response = confirm("¿REALMENTE DESEA ELIMINAR EL REGISTRO?");
            if (response) {
                var idRecord = $('#idActuacion').val();
                eliminaActaMinima(idRecord);
            }
        });

        /**
         * Variable para almacenar la informacion del acta minima
         */
        var actaMinima = {
            idReferencia: 0,
            numero: 0,
            anio: 0,
            cveTipoCarpeta: 0,
            cveJuzgado: 0
        };

        /**
         * Objeto para almacenar registros en la bUsqueda
         */
        var findContent = {
            regs: []
        };
        /**
         * Objeto para almacenar los permisos del formulario
         */
        var crud = {
            create: 'N',
            read: 'N',
            update: 'N',
            delete: 'N'
        }

        /**
         * Variables varias
         */
        //var titulos = {'titulo1':'Acta m&iacute;nima','titulo2':'B&uacute;squeda','titulo3':'Resultados'};
        var cveJuzgado = $('#SysCveAdscripcion').val();
        var cveUsuarioSistema = $('#SysCveUsuarioSistema').val();
        var cveTipoActuacion = 6;
        var resultadosBusqueda = {
            datos: [],
            contador: 0
        };

        function visorDocuemntos() {
            $.ajax({
                type: 'POST',
                url: 'visorpdf/index.php',
                data: {idCarpetaJudicial: "", idActuacion: $('#idActuacion').val(), cveTipoDocumento: 20}, //malo
                async: false,
                dataType: 'html',
                beforeSend: function () {
                    $('#visor').html('<h3>Consultando informaci&oacute;n ... espere.</h3>');
                },
                success: function (data) {
                    $('#visor').html(data);
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. ' + otroobj + '</h3>');
                    console.log('\nOBJ: ' + objeto + '\nQ: ' + quepaso + '\nO:' + otroobj)
                }
            });
        }
        ;

        function enviar() {
            var strDatos = "accion=generarJson";
            strDatos += "&cveTipo=2"; //2 = actuacion
            strDatos += "&cveTipoDocumento=20"; //tipo documento
            strDatos += "&idActuacion=" + $("#idActuacion").val();

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
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso, 'error');
                }
            });

        }
        ;

        //funcion para bloquear los campos y evitar cambios cuando viene del arbol
        function bloqueaCamposLlave() {
            $('#cveTipoJuzgado, #s_actam_numero, #i_actam_numero, #i_actam_anio').prop('disabled', true);
        }

        function obtieneDatosCarpeta() {
            //obtencion del numero y año a mostrar
            var idCarpetaJudicialArbol = $('#idCarpetaJudicialArbol').val();
            var cveTipoCarpetaArbol = $('#cveTipoCarpetaArbol').val();
            $('#s_actam_numero').val(cveTipoCarpetaArbol);

            //obtencion de los datos para la seleccion del combo de juzgado y relacionado con 
            var urlFacade = "../fachadas/sigejupe/actaminima/ActaminimaFacade.Class.php";
            var dataFacade = "accion=carpetaArbol&idCarpetaJudicial=" + idCarpetaJudicialArbol;
            $.ajax({async: false, type: 'POST', url: urlFacade, data: dataFacade
            }).done(function (response) {
                var objeto = eval('(' + response + ')');
                $('#cveTipoJuzgado').val(objeto.idJuzgado);
                cargaTipoCarpeta();
                if ($('#procedencia').val() == 1) {
                    $('#s_actam_numero').val(cveTipoCarpetaArbol);
                }
            });

            var urlFacade = "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php";
            var dataFacade = "accion=consultar&activo=S&idCarpetaJudicial=" + idCarpetaJudicialArbol;
            $.ajax({async: false, type: 'POST', url: urlFacade, data: dataFacade
            }).done(function (response) {
                var objeto = eval('(' + response + ')');
                var data = '';
                if (objeto.totalCount > 0) {
                    data = objeto.data[0];
                    $('#i_actam_numero').val(data.numero);
                    $('#i_actam_anio').val(data.anio);
                }
            });
        }

        /*
         * Si se consulta un formulario de primera instancia desde una adscripcion de 
         * segunda instancia, se ocultan los botones del formulario, excepto 
         * el boton de visor de documentos
         */
        muestraOcultaBotones = function () {
            var instanciaSesion = obtenerInstanciaSesion(cveAdscripcion);

            if (instanciaSesion == 2 && origen == "") {
                $("#btn_actuaciones_guardar").parent().hide();
                $("#btn_actam_eliminar").parent().hide();
                $("#inputPDF").parent().hide();
                $("#btn_actuaciones_limpiar").parent().hide();
                $("#btn_actuaciones_consultar").parent().hide();
            }
        };
        /*
         * Funcion para consultar la instancia de la adscripcion donde el usuario
         * se encuentra logueado 
         * @param {type} cveAdscripcion
         * @returns {String}         */
        obtenerInstanciaSesion = function (cveAdscripcion) {
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
                    showMessage("Error en la peticion:\n\n" + quepaso, 'error');
                }
            });
            return instancia;
        };

        /**
         * Funciones ejecutadas al accesar al contenido
         */
        $(function () {
//            setPermissions(); //obtencion de permisos
            $('#div_message').hide(); //oculta div de mensaje
            cargaJuzgados(); //carga los Juzgados
            //inicializacion del editor
            editor = UE.getEditor('t_acta_notas');
            editor.ready(function () {
                editor.setContent();
            });
            //formato de fecha
            $('.fecha').datetimepicker({
                locale: 'es',
                sideBySide: false,
                format: "DD/MM/YYYY",
                ignoreReadonly: true
            });

            //validacion de datos para el arbol
            if ($('#procedencia').val() == 1) {
                if ($('#idActuacion').val() != '' && $('#idActuacion').val() != 0) {
                    encuentraActasMinimas($('#idActuacion').val());
                    console.log('aaaaaaaa');
                } else if ($('#idCarpetaJudicialArbol').val() != '' && $('#cveTipoCarpetaArbol').val() != '') { //no es de actuacion
                    console.log('qqqqqqq');
                    obtieneDatosCarpeta();
                    obtieneAudiencias();
                }
                $('.botonesArbol').hide();
                bloqueaCamposLlave();
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