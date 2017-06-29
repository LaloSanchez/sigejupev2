<?php
//ihs
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
    $SysNumEmpleado = $_SESSION['numEmpleado'];
    $SysCvePerfil = $_SESSION['cvePerfil'];
    $SysCveAdscripcion = $_SESSION['cveAdscripcion'];
    ////POST para arbol
    $procedencia = 0;
    $idActuacionArbol = ( isset($_POST['idActuacion']) ? @$_POST['idActuacion'] : '' );
    $hiddenidReferencia = ( isset($_POST['idReferencia']) ? @$_POST['idReferencia'] : '' );
    $cveTipoCarpetaArbol = ( isset($_POST['cveTipoCarpeta']) ? @$_POST['cveTipoCarpeta'] : '' );
    if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($hiddenidReferencia != 0 && $hiddenidReferencia != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "")) {
        $idActuacionArbol = ( ($idActuacionArbol != 0 && $idActuacionArbol != "") ? $idActuacionArbol : 0 );
        $hiddenidReferencia = ( ($hiddenidReferencia != 0 && $hiddenidReferencia != "") ? $hiddenidReferencia : 0 );
        $cveTipoCarpetaArbol = ( ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") ? $cveTipoCarpetaArbol : 0 );
        $procedencia = 1; // viene de arbol
    } else if ($hiddenidReferencia == "" && $cveTipoCarpetaArbol == 0 && $cveTipoCarpetaArbol != "") {
        $procedencia = 1; // viene de arbol el formulario general
    }
    ?>
    <style type="text/css">
        .alert{ display: none; }
        #divHideForm{ display: none; position: absolute; width: 100%; height: 100vh; opacity: .5; z-index: 99999; background: #427468; }
        #divMenssage{ width: 100%; height: 40px; padding-top: 10px; padding-bottom: 10px; text-align: center; margin-top: 40vh; margin-bottom: auto; color: #284740; background: #FFFFFF; text-transform: uppercase; }
        #divImgloading{ background: #FFFFFF url(img/cargando_1.gif) no-repeat; background-position: center; width: 100%; height: 70px; margin-left: auto; margin-right: auto; }
        .panel panel-default{ background: #427468; color: #ebf3f1; }
        .panel-heading{ background: #427468; color: #ebf3f1; }
        .panel-group .panel-heading{ background: #427468; color: #ebf3f1; }
        .panel-default > .panel-heading{ background: #427468; color: #ebf3f1; }
        .needed:after { color:darkred; content: " (*)"; }
        .needed1:after { color:white; content: " (*)"; }
        .textCorrection{ display: block; text-transform: lowercase; }
        .textCorrection:first-letter { text-transform: uppercase; }
        .capital{ text-transform: uppercase; }
        input, textarea{ resize: none; }
    </style>
    <div class="panel panel-default" >
        <div id="divFormulario">
            <div class="panel-heading">
                <h5 class="panel-title" id="autosTitulo">
                    Asignaci&oacute;n de Ponente / Busqueda
                </h5>
            </div>
            <div class="panel-body">
                <input type="hidden" id="cveUsuarioSistema" value="<?= $SysCveUsuarioSistema ?>"/>
                <input type="hidden" id="SysCvePerfil" value="<?= $SysCvePerfil ?>"/>
                <input type="hidden" id="SysCveAdscripcion" value="<?= $SysCveAdscripcion ?>"/>
                <input type="hidden" id="SysNumEmpleado" value="<?= $SysNumEmpleado ?>"/>
                <input type="hidden" id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt"/>
                <input type="hidden" id="procedencia" name="procedencia" value="<?= $procedencia ?>" />
                <input type="hidden" id="idActuacionArbol" name="idActuacionArbol" value="<?= $idActuacionArbol ?>" /> 
                <input type="hidden" id="hiddenidReferenciaArbol" name="hiddenidReferenciaArbol" value="<?= $hiddenidReferencia ?>" />
                <input type="hidden" id="hiddenidReferencia" name="hiddenidReferencia" value="<?= @$idReferencia ?>" />
                <input type="hidden" id="hiddenidOficio" name="hiddenidOficio" value="<?= @$idOficio ?>" />
                <input type="hidden" id="hiddenTipoCarpeta" name="hiddenTipoCarpeta" value="" />
                <input type="hidden" id="hiddenTipoJuzgado" name="hiddenTipoJuzgado" value="" />
                <input type="hidden" id="hiddenidResolucionCombatida" name="hiddenidResolucionCombatida" value="<?= ""//$idResolucionCombatida                                                                        ?>" />
                <input type="hidden" id="hiddenI" name="hiddenidResolucionCombatida" value="" />
                <input type="hidden" id="hiddenidResolucionCarpetaCombatida" name="hiddenidResolucionCarpetaCombatida" value="<?= ""//$idResolucionCombatida                                                            ?>" />
                <input type="hidden" id="cveTipoCarpetaArbol" name="cveTipoCarpetaArbol" value="<?= $cveTipoCarpetaArbol ?>" />
                <input type="hidden" id="hiddenDefensoridImputado" name="hiddenDefensoridImputado" value="" />
                <input type="hidden" id="hiddenIdRemision" name="hiddenDefensoridImputado" value="" />


                <input type="hidden" id="idActuacion" name="idActuacion" value="<?= $idActuacionArbol ?>" />
                
                <div id="divConsultaRecursos" >
            
            <div class="panel-body">
                <div class="form-horizontal">

                    <div class="form-group">
                        <label  class="control-label col-md-3">Tribunal de alzada:</label>
                        <div class="col-md-9">
                            <select class="form-control " name="cmbTipoJuzgadoToca" id="cmbTipoJuzgadoToca" onchange="cargaTipoCarpeta2()"></select>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Tipo Carpeta</label>
                        <div class="col-md-9"><select id="cmbTipoCarpeta" class="form-control"><option value="0">Seleccione una opción</option></select></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" id="label_actam_text2">No. toca</label>
                        <div class="col-md-9">
                            <input type="text" id="numeroConsulta" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline numerico">
                            /
                            <input type="text" id="anioConsulta" maxlength="4" placeholder="A&Ntilde;O" val="" class="form-inline numerico">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Fecha inicio (Radicaci&oacute;n)</label>
                        <div class="col-md-2">
                            <input type="text" id="fechaRangoInicial" placeholder="dd/mm/aaaa" class="form-control fecha">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Fecha fin (Radicaci&oacute;n)</label>
                        <div class="col-md-2">
                            <input type="text" id="fechaRangoFinal" placeholder="dd/mm/aaaa" class="form-control fecha">
                        </div>
                    </div>

                </div>
                <div class="form-group"> 
                    <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para consultar Remisi&oactuten;n." data-position='top'>                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Buscar" onclick="resetPagina(); consultarTocasAsignar()" id=""/>
                    </div>
                    <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="cleanFields()" id="btn_auto_clean"/>
                    </div>
                </div>

            </div>
            <div id="divTablaConsultaRecursos" style="display:none">

                <div class="panel-body">
                    <hr>
                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>
                    <div id="PaginacionRecursos" class="form-group col-xs-2" >
                        <label class="control-label">Cambiar a la p&aacute;gina:</label>
                        <select  name="cmbPaginacionRecursos" id="cmbPaginacionRecursos" onchange="consultarTocasAsignar()">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginadorRecursos" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumRegRecursos" id="cmbNumRegRecursos" onchange="resetPagina(); consultarTocasAsignar();
                                resetPagina()">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div id="tablaConsulta"></div>
                </div>
            </div>
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
    </div>

    <div id="imprimir" style="display: none;">
        <div id="printable" ></div>
        <div id="botones">
            <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultar('divCampos');" style="display: block"> 
        </div>
    </div>
    <!-- Modal Carpetas oficios -->
    <div class="modal fade" id="ModalOficios" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header panel-heading" style="padding:25px 45px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="panel-title" id="h5titulo"><span ></span> Oficios</h4>
                </div>
                <div class="modal-body" style="padding:35px 60px;">
                    <div class="form-horizontal">
                        <div id="ContTablaOficios">   
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-5">
                                <input type="submit" class="btn btn-primary" value="Cancelar" data-dismiss="modal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!--Modal Resoluciones-->
    <div class="modal fade" id="ModalResoluciones" tabindex="-1" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header panel-heading" style="padding:25px 45px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="panel-title" id="h5titulo"><span ></span> Resoluciones</h4>
                </div>
                <div class="modal-body" style="padding:35px 60px;">
                    <div class="form-horizontal">
                        <div id="ContTablaResoluciones">   
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-5">
                                <input type="submit" class="btn btn-primary" value="Cancelar" data-dismiss="modal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal Defensor-->
    <div class="modal fade" id="ModalDefensor" tabindex="-1" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header panel-heading" style="padding:25px 45px;">
                    <button type="button" class="close" onclick="cargarDefensor();" data-dismiss="modal">&times;</button>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="panel-title" id="h5titulo"><span ></span> Resoluciones</h4>
                </div>
                <div class="modal-body" style="padding:35px 60px;">
                    <div class="form-horizontal">

                        <div class="form-group" id="divDefensor"> 
                            <div class="form-group"> 
                                <label class="control-label col-md-3 needed">Tipo Defensor:</label>
                                <div >
                                    <select class=" Relacionado" name="cmbTipoDefensor" id="cmbTipoDefensor" onchange="asignarDefensor();">
                                        <option value="">Seleccione una opci&oacute;n</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <label class="control-label col-md-1 needed">Nombre:</label>
                                <input type="text" id="nombreDefensor"  placeholder="NOMBRE DEFENSOR" class="form-control" value=""/>
                            </div>
                            <div class="form-group"> 
                                <label class="control-label col-md-1">Correo electr&oacute;nico:</label>
                                <input  type="email" id="correoDefensor" placeholder="CORREO" class="form-control" value="" />
                            </div>
                            <div class="form-group"> 
                                <label class="control-label col-md-1">Telefono:</label>
                                <input type="text" id="telefono" placeholder="TELEFONO" class="form-control" value=""  />
                            </div>
                            <div class="form-group"> 
                                <label class="control-label col-md-1">Celular:</label>
                                <input type="text" id="celular" placeholder="CELULAR" class="form-control" value=""  />
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-5">
                                <input type="submit" class="btn btn-primary" value="Cancelar" data-dismiss="modal">
                                &nbsp;<input type="submit" class="btn btn-primary" value="Aceptar" onclick="cargarDefensor()" data-dismiss="modal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        if (editor != undefined) {
            editor.destroy();
        }
        var editor = null;
        /**
         * FunciOn para obtener y asignar los permisos del usuario activo sobre el formulario
         */
        function setPermissions() {
            var cveUsuarioSistema = $('#cveUsuarioSistema').val();
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
                                            if (nombreHijo.nomFormulario == 'AUTOS DE VINCULACION') {
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
                        //para desaparecer botones si no hay permisos
                        if (crud.read == 'N') {
                            $('#boton').prop('disabled', true);
                        }

                    });
        }



        /**
         * Limpia el contenido del formulario
         */
        function cleanFields() {
            $("#divTablaConsultaRecursos").hide();
            $("#tablaConsulta").empty();
            resetPagina();
            limpiarCampos();
        }
        /**
         * Limpia el contenido del formulario
         */
        function limpiarCampos() {
            $("#numeroConsulta").val("");
            $("#anioConsulta").val("");
            fechaBaseDatos(
                    {
                        fechaRangoInicial: "fecha",
                        fechaRangoFinal: "fecha"
                    }
            );
        }

        fechaMySQLaNormal = function (fecha) {
            if (fecha != "") {
                var fechaHora = fecha.split(" ");
                var vecFecha = fechaHora[0].split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                fechaHora = fechaHora[1].split(":");
                fechaHora = fechaHora[0] + ":" + fechaHora[1];

                return fechaNormal + " " + fechaHora;
            } else {
                return "";
            }
        };
        fechaMySQLaNormalConsulta = function (fecha) {
            if (fecha != "") {
                var fechaHora = fecha.split(" ");
                var vecFecha = fechaHora[0].split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                fechaHora = fechaHora[1].split(":");
                fechaHora = fechaHora[0] + ":" + fechaHora[1];
                return vecFecha + " " + fechaHora;
            } else {
                return "";
            }
        };
        fechaNormal = function (fecha) {
            if (fecha != "") {
                var vecFecha = fecha.split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                return fechaNormal;
            } else {
                return "";
            }
        };
        /**
         * Obtiene la fecha de la computadora
         * @param {string} element Define el elemento que se desea obtener. all: yyyy-mm-dd hh:mm:ss; year: yyyy
         * @return {string} finaldate Regresa la fecha o un elemento de la misma
         */
        function getDate(element) {
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
        }

        /**
         * Muestra mensajes personalizados en el div destinado para ello      * @param {string} message Es el mensaje que se mostrarA
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
                }, 6000);
            }
        }
        /**
         * FunciOn para el cambio de foco al presionar INTRO
         * @param {json} event Objeto del evento KEYPRESS
         * @param {string} nextInput Es el ID del input al que se moverA el foco
         */
        function changeFocus(event, nextInput) {
            var key = window.event ? event.keyCode : event.which;
            if (event.keyCode == 13) { // es Intro
                $('#' + nextInput).focus();
            }
            ;
            return;
        }

        /**
         * FunciOn para la obtenciOn de informacion de tablas y llenado de combos
         * @param {array} selectIds Ids de los combos donde se mostraran los datos
         * @param {string} facade Es la ruta de la fachada que se invoca, solo se define la carpeta y el nombre del archivo sin la extensiOn Class en adelante. Ej. tiposcarpetas/TiposcarpetasFacade
         * @param {string} value Es el identificador del campo llave
         * @param {string} descripction Es el identificador del campo de descripciOn
         */     function fillCombo(selectIds, facade, value, description) {
            $.each(selectIds, function (k, v) {
                $('#' + v).empty();
            });
            $.post('../fachadas/sigejupe/' + facade + '.Class.php',
                    {
                        activo: 'S',
                        accion: 'consultar'
                    },
            function (response) {
                var json = eval("(" + response + ")");
                var options = '<option value="0">--SELECCIONE--</option>';
                if (json.totalCount > 0) {
                    $.each(json.data, function (k, v) {
                        options += '<option value="' + v[value] + '">' + v[description] + '</option>';
                    });
                    $.each(selectIds, function (k, v) {
                        $('#' + v).append(options);
                    });
                } else {
                    showMessage('NO EXISTEN REGISTROS', 'warning');
                }
            });
            return;
        }

        cargaJuzgados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
//                url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "distrito", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoJuzgadoToca').empty();
                        $('#cmbTipoJuzgadoToca').append('<option value="0/0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $("#cmbTipoJuzgadoToca").append($('<option></option>').val(object.cveJuzgado + "/" + object.cveTipoJuzgado).html(object.desJuzgado));
                                if (cveJuzgado == object.cveJuzgado) {
                                    $("#cmbTipoJuzgadoToca option[value='" + object.cveJuzgado + "/" + object.cveTipoJuzgado + "']").attr("selected", "selected");
                                }

                            });
                        }
                    } catch (e) {
                        alert("Error al cargar juzgados:" + e);
                    }
                    cargaTipoCarpeta2();
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        
        cargaTipoCarpeta2 = function () {
            $(' #cmbTipoCarpeta').empty();
            var tipoJuzgado = $("#cmbTipoJuzgadoToca").val().split("/");
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
                        $(" #cmbTipoCarpeta").append($('<option></option>').val("").html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
                            switch (tipoJuzgado[1]) {

                                case "5":
                                    if (json.data[i].cveTipoCarpeta == "6") {
                                        $(" #cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "8":
                                    if (json.data[i].cveTipoCarpeta == "6") {
                                        $(" #cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                default:
                                    if (json.data[i].cveTipoCarpeta == "6") {
                                        $(" #cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                            }
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso, 'error');
                }
            });
        };

        function obtenerRecurso(cveRecurso) {
            var strDatos = "accion=consultar";
            strDatos += "&cveRecurso=" + cveRecurso;
            var desRecurso = "";
            $.ajax({
                async: false,
                type: 'POST',
                global: false,
                url: "../fachadas/sigejupe/tiposrecursos/TiposrecursosFacade.Class.php",
                data: strDatos
            }).done(function (response) {
                var json = eval("(" + response + ")");
                var totalRecords = json.totalCount;
                var message = '';
                if (totalRecords > 0) {
                    var referencia = json.data;
                    desRecurso = referencia[0].desRecurso;
                } else {
    //                cleanFields(4);
                    if ('text' in json) {
                        message = json.text;
                    } else {
                        message = 'ERROR.';
                    }
                    //showMessage(message, 'information');
                    $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
                }
            });
            return desRecurso;
        }
        // funcion para cargar a los magistrados
        formarComboJuzgadores = function (json, idJuzgador,valida) {
            //Parsear JSON
            var datoJuzgadores = json.juzgadores;
            var html = "";
            if(valida){
                html += "<select class='form-control ' disabled name='cmbJuzgadores' idcarpetajudicial='" + json.idCarpetaJudicial + "' id='cmbJuzgadores" + json.idCarpetaJudicial + "' ><option value=''>Seleccione una opci&oacute;n</option>";
            }else{
                html += "<select class='form-control guardAsigChan' name='cmbJuzgadores' idcarpetajudicial='" + json.idCarpetaJudicial + "' id='cmbJuzgadores" + json.idCarpetaJudicial + "' ><option value=''>Seleccione una opci&oacute;n</option>";
            }
            if (datoJuzgadores.totalCount > 0) {
                for (var i = 0; i < datoJuzgadores.totalCount; i++) {
                    if (idJuzgador != "") {
                        if (idJuzgador == datoJuzgadores.resultados[i].idJuzgador) {
                            html += "<option selected  value='" + datoJuzgadores.resultados[i].idJuzgador + "'>" + datoJuzgadores.resultados[i].nombre + " " + datoJuzgadores.resultados[i].paterno + " " + datoJuzgadores.resultados[i].materno + "</option>";
                        } else {
                            html += "<option  value='" + datoJuzgadores.resultados[i].idJuzgador + "'>" + datoJuzgadores.resultados[i].nombre + " " + datoJuzgadores.resultados[i].paterno + " " + datoJuzgadores.resultados[i].materno + "</option>";
                        }
                    } else {
                        html += "<option  value='" + datoJuzgadores.resultados[i].idJuzgador + "'>" + datoJuzgadores.resultados[i].nombre + " " + datoJuzgadores.resultados[i].paterno + " " + datoJuzgadores.resultados[i].materno + "</option>";
                    }

                }
            }

            html += "</select>";

            return html;
        };
        function resetPagina() {
            $("#cmbPaginacionRecursos").val(1);
        }
        /**
         * FunciOn para Consultar Remision
         */
        function consultarTocasAsignar() {
            $("#tablaConsulta").html("");
            var cantReg = $("#cmbNumRegRecursos").val();
            var strDatos = "accion=consultarTocasAsignar";
            strDatos += "&paginacion=true";
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&pag=" + $("#cmbPaginacionRecursos").val();
            strDatos += "&cveJuzgado=" + $("#cmbTipoJuzgadoToca").val().split("/")[0];
            strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            strDatos += "&numero=" + $("#numeroConsulta").val();
            strDatos += "&anio=" + $("#anioConsulta").val();
            strDatos += "&fechaInicial=" + $("#fechaRangoInicial").val();
            strDatos += "&fechaFinal=" + $("#fechaRangoFinal").val();
    //        cleanFields();
            //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
            $.ajax({
                async: false,
                type: 'POST',
                url: "../fachadas/sigejupe/asignarecursos/AsignarecursosFacade.Class.php",
                data: strDatos,
            }).done(function (response) {
                var json = eval('(' + response + ')');
                var totalRecords = json.totalCount;
                var message = json.mnj;
                if (json.Estatus == "ok") {
                    if (totalRecords > 0) {
                        var tabla = "<table id='tblResultadosGridAct2'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive dataTable no-footer'>";
                        tabla += "<thead><tr>";
                        tabla += "<td>Consecutivo</td><td>Toca</td><td>Resolucion Combatida</td><td>Fecha de radicaci&oacute;n</td><td>No. discos</td><td>Magistrado</td><td>Fecha de la audiencia</td><td>Eliminar</td>";
                        tabla += "</tr></thead><tbody>";
                        var data = json.resultados;
                        // guardarDatos();
                        
                        for (var i = 0; i < totalRecords; i++) {
                            if (data[i].asignarRecurso != "") {
                                var asignar = eval('(' + data[i].asignarRecurso + ')');
                                
                                if(data[i].resolucion == true){
                                    tabla += "<tr  class='warning conResolucion' disabled idAsignaRecurso='" + asignar.resultados[0].idAsignaRecurso + "'idJuzgadorCarpeta='" + asignar.resultados[0].idJuzgadorCarpeta + "'>";
                                }else{
                                    tabla += "<tr style='cursor: pointer;' class='success' idAsignaRecurso='" + asignar.resultados[0].idAsignaRecurso + "' idJuzgadorCarpeta='" + asignar.resultados[0].idJuzgadorCarpeta + "'>";
                                }
                                
                            } else {
                                if(data[i].resolucion == true){
                                    tabla += "<tr  class='warning conResolucion' disabled  idAsignaRecurso='' idJuzgadorCarpeta=''>";
                                }else{
                                    tabla += "<tr style='cursor: pointer;'  idAsignaRecurso='' idJuzgadorCarpeta=''>";
                                }
                                
                            }
                            tabla += "<td > " + (i + 1) + "</td>";
                            tabla += "<td > " + data[i].numero + "/" + data[i].anio + "</td>";
                            if(data[i].resolucionesCombatidas.totalCount > 0){
                                tabla += "<td > " + data[i].resolucionesCombatidas.resultados[0].desResolucionCombatida + "</td>";
                            }else if(data[i].cveTipoActuacion == 35){
                                    tabla += "<td > REVISION EXTRAORDINARIA</td>";
                                }else if(data[i].cveTipoActuacion == ""){
                                    tabla += "<td > N/A</td>";
                                }
                                
                                
                            
                            //tabla += "<td > " + obtenerRecurso(data[i].cveRecurso) + "</td>";
                            tabla += "<td > " + fechaMySQLaNormal(data[i].fechaRadicacion) + "</td>";
                            if (data[i].asignarRecurso != "") {
                                var asignar = eval('(' + data[i].asignarRecurso + ')');
                                
                                if (asignar.totalCount > 0) {
                                    if(data[i].resolucion == true){
                                        tabla += "<td > <input disabled id='" + data[i].idCarpetaJudicial + "'  maxlength='4' idcarpetajudicial='" + data[i].idCarpetaJudicial + "' type='text' class='form-control col-md-1 numerico ' value='" + asignar.resultados[0].numDiscos + "'> </td>";
                                        tabla += "<td > " + formarComboJuzgadores(data[i], asignar.resultados[0].idJuzgador,true) + "</td>";
                                    }else{
                                        
                                        tabla += "<td > <input id='" + data[i].idCarpetaJudicial + "'  maxlength='4' idcarpetajudicial='" + data[i].idCarpetaJudicial + "' type='text' class='form-control col-md-1 numerico guardAsig' value='" + asignar.resultados[0].numDiscos + "'> </td>";
                                        tabla += "<td > " + formarComboJuzgadores(data[i], asignar.resultados[0].idJuzgador) + "</td>";
                                    }
                                }
                            } else if(data[i].asignarRec){
                            var asignarRec = eval('(' + data[i].asignarRec + ')');
                            if (asignarRec.totalCount > 0) {
                                        tabla += "<td > <input id='" + data[i].idCarpetaJudicial + "'  maxlength='4' idcarpetajudicial='" + data[i].idCarpetaJudicial + "' type='text' class='form-control col-md-1 numerico guardAsig' value=''> </td>";
                                        tabla += "<td > " + formarComboJuzgadores(data[i], asignarRec.resultados[0].idJuzgador) + "</td>";
                                }
                            else{
                                    if (asignarRec.totalCount > 0) {
                                        tabla += "<td > <input disabled id='" + data[i].idCarpetaJudicial + "'  maxlength='4' idcarpetajudicial='" + data[i].idCarpetaJudicial + "' type='text' class='form-control col-md-1 numerico ' value='" + asignar.resultados[0].numDiscos + "'> </td>";
                                        tabla += "<td > " + formarComboJuzgadores(data[i], asignar.resultados[0].idJuzgador,true) + "</td>";
                                    }
                                }
                            }else {
                                    if(data[i].resolucion == true){
                                        tabla += "<td > <input disabled id='" + data[i].idCarpetaJudicial + "'  maxlength='4' idcarpetajudicial='" + data[i].idCarpetaJudicial + "' type='text' class='form-control col-md-1 numerico ' value=''> </td>";
                                        tabla += "<td > " + formarComboJuzgadores(data[i], "",true) + "</td>";
                                    }else{
                                        tabla += "<td > <input id='" + data[i].idCarpetaJudicial + "'  maxlength='4' idcarpetajudicial='" + data[i].idCarpetaJudicial + "' type='text' class='form-control col-md-1 numerico guardAsig' value=''> </td>";
                                        tabla += "<td > " + formarComboJuzgadores(data[i], "") + "</td>";
                                    }
                                
                                 
                           }
                            tabla += "<td > " + fechaMySQLaNormal(data[i].fechaAudiencia) + "</td>";
                            if (data[i].asignarRecurso != "") {
                                if(data[i].resolucion == true){
                                        tabla += "<td > </td>";
                                        
                                    }else{
                                        tabla += "<td id='eliminar" + data[i].idCarpetaJudicial + "'> <img src='img/eliminar.png' width='27px' style='cursor:pointer;' class='btnElimApel' onclick='borrarAsignacion(" + data[i].idCarpetaJudicial + ")'></td>";
                                    }
                            
                            }else{
                                if(data[i].resolucion == true){
                                        tabla += "<td > </td>"; 
                                    }else{
                                        tabla += "<td id='eliminar" + data[i].idCarpetaJudicial + "'> </td>";
                                    }
                            }
                            tabla += "</tr>";
                        }
                        tabla += "</tbody></table>";
                        $("#tablaConsulta").html(tabla);
                        $(".numerico").keypress(function (key) {
                            if ((key.charCode < 48 || key.charCode > 57) && (key.charCode != 0) && (key.charCode != 32))
                                return false;
                        });
                        $(".guardAsig").on("focusout",function(){
                            
                            
                            guardarAsignacion($(this).attr("idcarpetajudicial"));
                        });
                         $(".guardAsigChan").on("change",function(){
                             
                            guardarAsignacion($(this).attr("idcarpetajudicial"));
                        });
                         $(".conResolucion").on("click",function(){
                             
                            notify({
                  type: "warning", //alert | success | error | warning | info
                  title: "No es posible actualizar, ya existe Resolucion de apelacion",
                  message: "",
                  position: {
                      x: "right", //right | left | center
                      y: "top" //top | bottom | center
            },
                  icon: '<i class="" aria-hidden="true"></i>', //<i>
                  size: "normal", //normal | full | small
                  overlay: false, //true | false
                  closeBtn: true, //true | false
                  overflowHide: false, //true | false
                  spacing: 20, //number px
                  theme: "dark-theme", //default | dark-theme
                  autoHide: true, //true | false
                  delay: 25000, //number ms
                  onShow: null, //function
                  onClick: null, //function
                  onHide: null, //function
                  template: '<div class="notify"><div class="notify-text"></div></div>'
              });
                        });
                        //$("#divConsultaRecursos").hide();
                        $("#divTablaConsultaRecursos").show("slide");
                        getPages($("#cmbPaginacionRecursos").val(), cantReg);
                    } else {
                    
                        $("#divTablaConsultaRecursos").hide("slide");
                        showMessage('SIN RESULTADOS', 'information');
                    }
                } else {
                $("#divTablaConsultaRecursos").hide("slide");
                    showMessage('SIN RESULTADOS', 'information');
                }

            });
            $("#tblResultadosGridAct2").DataTable({paging: false});
        }
        /**
         * FunciOn para obtener las paginas de la tabla de resultados
         */
        function getPages(page, cantReg,idCarpetaJudicial) {
            var cantReg = $("#cmbNumRegRecursos").val();
            var strDatos = "accion=obtenerPaginasAsignar";
            strDatos += "&paginacion=true";
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&pag=" + $("#cmbPaginacionRecursos").val();
            strDatos += "&cveJuzgado=" + $("#cmbTipoJuzgadoToca").val().split("/")[0];
            strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            strDatos += "&numero=" + $("#numeroConsulta").val();
            strDatos += "&anio=" + $("#anioConsulta").val();
            strDatos += "&fechaInicial=" + $("#fechaRangoInicial").val();
            strDatos += "&fechaFinal=" + $("#fechaRangoFinal").val();
            $.ajax({
                async: false,
                type: 'POST',
                url: "../fachadas/sigejupe/asignarecursos/AsignarecursosFacade.Class.php",
                data: strDatos,
            }).done(function (response) {
                var json = "";
                json = eval("(" + response + ")");
                if (json.totalCount > 0) {
                    $('#cmbPaginacionRecursos').find('option').remove().end();
                    for (var i = 0; i < (parseInt(json.total)); i++) {
                        $("#cmbPaginacionRecursos").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                    }
                    $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                    page = (page == null) ? 1 : page;
                    $("#cmbPaginacionRecursos").val(page);
                } else {
                    showMessage('SIN RESULTADOS', 'information');
                }
            });
            return;
        }


        /**
         * FunciOn para guardar el Auto de VinculaciOn
         */
        function guardarAsignacion(idCarpetaJudicial) {         //campos de captura de Remision
            //varibles de control
            
            var consultar = false;
            if ($("#" + idCarpetaJudicial).val() != "" && $("#cmbJuzgadores" + idCarpetaJudicial).val()) {
                consultar = true;
            }
            if (consultar) {
                var numDiscos = $("#" + idCarpetaJudicial).val();
                var idJuzgador = $("#cmbJuzgadores" + idCarpetaJudicial).val();
                var activo = "S";
                var idAsignaRecurso= $("#" + idCarpetaJudicial).parent("td").parent().attr("idasignarecurso");
                //var apelaciones = Apelaciones.apelacion;
                var accion = 'agregarAsigancionRecurso';

                $.ajax({
                    async: false,
                    type: 'POST',
                    url: "../fachadas/sigejupe/asignarecursos/AsignarecursosFacade.Class.php",
                    data: {idReferencia: idCarpetaJudicial, numDiscos: numDiscos, idJuzgador: idJuzgador, accion: accion, activo: activo,idAsignaRecurso:idAsignaRecurso
                    },
                }).done(function (response) {
                    var json = eval('(' + response + ')');
                    var totalRecords = json.totalCount;
                    var message = json.msj;
                    if (totalRecords > 0) {
                        $("#" + idCarpetaJudicial).parent("td").parent().attr("idasignarecurso",json.data[0].idAsignaRecurso);
                        $("#" + idCarpetaJudicial).parent("td").parent().attr("idJuzgadorCarpeta",json.data[0].idJuzgadorCarpeta);
                        $("#" + idCarpetaJudicial).parent("td").parent().addClass("success");
                        $("#eliminar" + idCarpetaJudicial).html("<img src='img/eliminar.png' width='27px' style='cursor:pointer;' class='btnElimApel' onclick='borrarAsignacion(" + idCarpetaJudicial + ")'>");
                        notify({
                  type: "success", //alert | success | error | warning | info
                  title: "Asignaci&oacute;n Exitosa",
                  message: "",
                  position: {
                      x: "right", //right | left | center
                      y: "top" //top | bottom | center
            },
                  icon: '<i class="fa fa-check" aria-hidden="true"></i>', //<i>
                  size: "normal", //normal | full | small
                  overlay: false, //true | false
                  closeBtn: true, //true | false
                  overflowHide: false, //true | false
                  spacing: 20, //number px
                  theme: "dark-theme", //default | dark-theme
                  autoHide: true, //true | false
                  delay: 25000, //number ms
                  onShow: null, //function
                  onClick: null, //function
                  onHide: null, //function
                  template: '<div class="notify"><div class="notify-text"></div></div>'
              });
                    } else {
                        showMessage(message, 'error');
                    }
                });

                return;
            }
        }
        function borrarAsignacion(idCarpetaJudicial) {         //campos de captura de Remision
            //varibles de control
                var idAsignaRecurso= $("#" + idCarpetaJudicial).parent("td").parent().attr("idasignarecurso");
                var idJuzgadorCarpeta= $("#" + idCarpetaJudicial).parent("td").parent().attr("idJuzgadorCarpeta");
                //var apelaciones = Apelaciones.apelacion;
                var accion = 'borrarAsigancionRecurso';
                $.ajax({
                    async: false,
                    type: 'POST',
                    url: "../fachadas/sigejupe/asignarecursos/AsignarecursosFacade.Class.php",
                    data: {idReferencia: idCarpetaJudicial,idJuzgadorCarpeta: idJuzgadorCarpeta, accion: accion,idAsignaRecurso:idAsignaRecurso
                    },
                }).done(function (response) {
                    var json = eval('(' + response + ')');
                    var totalRecords = json.totalCount;
                    var message = json.msj;
                    if (totalRecords > 0) {
                        $("#" + idCarpetaJudicial).parent("td").parent().attr("idasignarecurso","");
                        $("#" + idCarpetaJudicial).parent("td").parent().removeClass("success");
                        $("#eliminar" + idCarpetaJudicial).html("");
                        $("#cmbJuzgadores" + idCarpetaJudicial).val("");
                        $("#" + idCarpetaJudicial).val("");
                    } else {
                        showMessage(message, 'error');
                    }
                });

                return;
            
        }


        /**
         * FunciOn para la validaciOn del rango de fechas de bUsqueda
         * @param {date} fechaInicial Es la fecha de inicio en formato DD-MM-YYYY
         * @param {date} fechaFinal Es la fecha final en formato DD-MM-YYYY
         * @return {string} rangoFechas Regresa el rango de fechas procesadas en formato YYYY-MM-DD hh:mm:ss|YYYY-MM-DD hh:mm:ss Corresponden a FechaInicial|FechaFinal      */
        function obtieneFechas(fechaInicial, fechaFinal) {
            fechaInicial = fechaInicial.split('/');
            fechaFinal = fechaFinal.split('/');
            var inicio = '2000-01-01 00:00:00';
            var final = '2036-12-31 23:59:59';
            var rangoFechas = inicio + '|' + final;
            var fInicial = fechaInicial[2] + '-' + fechaInicial[1] + '-' + fechaInicial[0] + ' 00:00:00';
            var fFinal = fechaFinal[2] + '-' + fechaFinal[1] + '-' + fechaFinal[0] + ' 23:59:59';
            if (fechaInicial != "") {
                if (fInicial < inicio && fInicial > final) {
                    fInicial = inicio;
                }
            }
            if (fechaFinal != "") {
                if (fFinal < inicio && fFinal > final) {
                    fFinal = final;
                }
            }
            if (fechaInicial != "" && fechaFinal != "") {
                rangoFechas = fInicial + '|' + fFinal;
            } else if (fechaInicial != "") {
                rangoFechas = fInicial + '|' + final;
            } else if (fechaFinal != "") {
                rangoFechas = inicio + '|' + fFinal;
            }
            return rangoFechas;
        }


        cargaTipoCarpeta = function () {
            $('#select_auto_carpeta').empty();
            var tipoJuzgado = $("#cveTipoJuzgado").val().split("/");
            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                data: strDatos,
                async: false, global: false,
                dataType: "html",
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        $("#select_auto_carpeta").append($('<option></option>').val("").html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
                            switch (tipoJuzgado[1]) {
                                case "1": // tipo de juzgado de control
                                    if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "2": // tipo de juzgado juicio
                                    if (json.data[i].cveTipoCarpeta == "3") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "3": // tipo de juzgado ejecucion
                                    if (json.data[i].cveTipoCarpeta == "5") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "4": // tipo de juzgado tribunal
                                    if (json.data[i].cveTipoCarpeta == "4") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "5":
                                    break;
                                case "8":
                                    break;
                                default:
                                    if (json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "5" || json.data[i].cveTipoCarpeta == "3" || json.data[i].cveTipoCarpeta == "2") {
                                        $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                            }
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso, 'error');
                }
            });
        };
        $('#divFormulario').on('change', '#select_auto_carpeta', function () {
            //cleanFields(3);
        });


        function obtenerTipoRecurso(cveRecurso) {
            //ajax para obtener el nombre del juzgado seleccionado
            var page = $("#cmbPaginacionRecursos").val();
            var cantReg = $("#cmbNumRegRecursos").val();
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            strDatos += "&cveRecurso=" + cveRecurso;
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&pag=" + page;
            var desRecurso = "";
            $.ajax({
                async: false,
                type: 'POST',
                url: "../fachadas/sigejupe/tiposrecursos/TiposrecursosFacade.Class.php",
                data: strDatos,
                beforeSend: function (objeto) {
                }
            }).done(function (response) {
                var json = eval("(" + response + ")");
                var totalRecords = json.totalCount;
                var message = '';
                var referencia = json.data;
                if (totalRecords > 0) {
                    desRecurso = referencia[0].desRecurso;
                } else {
                }
            });
            return desRecurso;
        }
        /**
         * Variables varias
         */
        var titulos = {'titulo1': 'Auto de Vinculaci&oacute;n', 'titulo2': 'B&uacute;squeda', 'titulo3': 'Resultados', 'titulo4': 'Captura de Apelaci&oacute;n'};
        var cveJuzgado = $('#SysCveAdscripcion').val();
        var cveUsuarioSistema = $('#cveUsuarioSistema').val();
        var cveTipoActuacion = 5;

        $(function () {
            //setPermissions();

            
            $("#cmbTipoPersona").change(function () {
                if ($("#cmbTipoPersona").val() == 1) {
                    $("#divNombreMoral").hide();
                    $("#divNombreFisico").show();
                    $("#cmbGenero").val("1");
                    $("#cmbGenero").prop("disabled", false);
                } else {
                    $("#cmbGenero").val("3");
                    $("#cmbGenero").prop("disabled", true);
                    $("#divNombreMoral").show();
                    $("#divNombreFisico").hide();
                }

            });
            //validaciOn de teclas numEricas
            $('#input_auto_numero, #input_auto_anio, #input_auto_numero_busqueda, #input_auto_anio_busqueda, #input_auto_numerotoca, #input_auto_aniotoca').keypress(validateNumber);
            //validacion para cambio de foco en Intro
            $('#input_auto_numero').keypress(function (event) {
                changeFocus(event, 'input_auto_anio');
            });
            $('#input_auto_numero_busqueda').keypress(function (event) {
                changeFocus(event, 'input_auto_anio_busqueda');
            });
            $('#input_auto_numerotoca').keypress(function (event) {
                changeFocus(event, 'input_auto_aniotoca');
            });
            $('#input_auto_aniotoca').keypress(function (event) {
                changeFocus(event, 'select_auto_salastoca');
            });
            //calendarios para la bUsqueda
            $('#input_auto_finicial_busqueda, #input_auto_ffinal_busqueda').datepicker().on('changeDate', function (e) {
                $(this).datepicker('hide');
            });
            
            cargaJuzgados(); //carga los Juzgados
            if ($('#procedencia').val() == 1) {
                if ($('#idActuacionArbol').val() != '' && $('#idActuacionArbol').val() != 0) {
                    buscarRemision($('#idActuacion').val());
                }
    //            else if ($('#hiddenidReferenciaArbol').val() != '' && $('#cveTipoCarpetaArbol').val() != '') { //no es de actuacion
    //                obtieneDatosCarpeta();
    //            }
                //$('.botonesArbol').hide();
                bloqueaCamposLlave();
                $("#btnNormal").hide();
                $("#btnArbol").show();
            }
            //inicializacion del editor
            //        editor = UE.getEditor('input_auto_notas');
            //        editor.ready(function () {
            //            editor.setContent("", false);
            //        });
            $("#fechaCoTras").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $("#fechaNotiSeAu").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $("#fechaInterRec").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $("#fechaRangoInicial").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $("#fechaRangoFinal").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $("#fechaIntAd").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            //validacion de datos para el arbol


            $("#btnOficios").click(function () {
                $("#cmbTipoResolucion").val("");
                $("#sintesis").val("");
                $("#fechaRegistroRes").val("");
                $("#cmbRecurso").val("");
                $("#hiddenidResolucionCombatida").val("");
                $("#hiddenidResolucionCarpetaCombatida").val("");
                $("#numeroOficio").val("");
                $("#anioOficio").val("");
                $("#sintesisOficio").val("");
                $("#hiddenidOficio").val("");
                var page = $("#cmbPaginacionRecursos").val();
                var cantReg = $("#cmbNumRegRecursos").val();
                var strDatos = "accion=consultarOficios";
                strDatos += "&activo=S";
                strDatos += "&cveJuzgado=" + $("#cveTipoJuzgado").val();
                strDatos += "&cveTipoCarpeta=" + $("#select_auto_carpeta").val();
                strDatos += "&numero=" + $("#numeroCausa").val();
                strDatos += "&anio=" + $("#anioCausa").val();
                strDatos += "&cveTipoActuacion=7";
                strDatos += "&cantxPag=" + cantReg;
                strDatos += "&pag=" + page;
                $.ajax({
                    async: false,
                    type: 'POST', global: false,
                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                    data: strDatos,
                    beforeSend: function (objeto) {
                        //lipiarCamposOficios();
                        $("#tablaImpofedel").html("");
                        var validar = true;
                        var campos = "";
                        if ($("#cveTipoJuzgado").val() == "") {
                            campos += " -el Juzgado \n";
                            validar = false;
                        }
                        if ($("#select_auto_carpeta").val() == "") {
                            campos += " -el Tipo de carpeta \n";
                            validar = false;
                        }
                        if ($("#numeroCausa").val() == "") {
                            campos += " -el Numero de causa \n";
                            validar = false;
                        }
                        if ($("#anioCausa").val() == "") {
                            campos += " -el Anio de la causa \n";
                            validar = false;
                        }
                        if (validar == false) {
                            alert("Es necesario seleccionar \n" + campos);
                            showMessage('No se llenaron los campos', 'warning');
                        } else {
                            $('#ModalOficios').modal('show')
                        }
                        //alert(validar);
                        return validar
                    }
                }).done(function (response) {
                    var json = eval("(" + response + ")");
                    var totalRecords = json.totalCount;
                    var message = '';
                    var tabla = '';
                    tabla += "<table id='tblResultadosGridAct'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered'>";
                    tabla += "<tr >";
                    tabla += "<th>No.</td>";
                    tabla += "<th>Antecede</td>";
                    tabla += "<th>Tipo</td>";
                    tabla += "<th>Sintesis</td>";
                    tabla += "<th>fecha Registro</td>"
                    tabla += "</tr>";
                    if (totalRecords > 0) {
                        var referencia = json.data;
                        for (var i = 0; i < totalRecords; i++) {
                            referencia[i].observaciones = "";
                        }
                        for (var i = 0; i < totalRecords; i++) {

                            var jsonDatos = JSON.stringify(referencia);
                            tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + jsonDatos + "," + i + "," + cveTipoResolucion + "); '>";
                            tabla += "<td>" + (i + 1) + "</td>";
                            tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                            tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                            tabla += "<td>" + referencia[i].sintesis + "</td>";
                            tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>"
                            tabla += "</tr>";
                        }
                        tabla += "</table>";
                        $("#ContTablaResoluciones").html(tabla);
                        //disabledFields(false, false);
                        //con esta funcion voy a cargar impofedel tablaImpofedel
                        //impOfeDelTable(referencia[0].idReferencia);
                        $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden", "true").after('').append('&nbsp;Datos Encontrados.');
                    } else {
                        $("#ContTablaOficios").html("No existen tocas para asignar recurso");
                        if ('text' in json) {
                            message = json.text;
                        } else {
                            message = 'ERROR.';
                        }
                        showMessage(message, 'information');
                        $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
                    }
                });
            });

            function obtenerEstatus(idActuacion) {
                //ajax para obtener el nombre del juzgado seleccionado
                var cveEstatus = 12;
                var page = $("#cmbPaginacionRecursos").val();
                var cantReg = $("#cmbNumRegRecursos").val();
                var strDatos = "accion=consultar";
                strDatos += "&activo=S";
                strDatos += "&idActuacion=" + idActuacion;
                strDatos += "&cveEstatus=" + cveEstatus;
                strDatos += "&cantxPag=" + cantReg;
                strDatos += "&pag=" + page;
                var estatus = false;
                $.ajax({
                    async: false,
                    type: 'POST',
                    url: "../fachadas/sigejupe/actuacionesestatus/ActuacionesestatusFacade.Class.php",
                    data: strDatos,
                    beforeSend: function (objeto) {
                    }
                }).done(function (response) {
                    var json = eval("(" + response + ")");
                    var totalRecords = json.totalCount;
                    var message = '';
                    var referencia = json.data;
                    if (totalRecords > 0) {
                        estatus = true;
                    } else {
                    }
                });
                return estatus;
            }
            function obtenerTipoActuacion(cveTipoActuacion) {
                //ajax para obtener el nombre del juzgado seleccionado
                var page = $("#cmbPaginacionRecursos").val();
                var cantReg = $("#cmbNumRegRecursos").val();
                var strDatos = "accion=consultar";
                strDatos += "&activo=S";
                strDatos += "&cveTipoActuacion=" + cveTipoActuacion;
                strDatos += "&cantxPag=" + cantReg;
                strDatos += "&pag=" + page;
                var desTipoActuacion = "";
                $.ajax({
                    async: false,
                    type: 'POST',
                    url: "../fachadas/sigejupe/tiposactuaciones/TiposactuacionesFacade.Class.php",
                    data: strDatos,
                    beforeSend: function (objeto) {
                    }
                }).done(function (response) {
                    var json = eval("(" + response + ")");
                    var totalRecords = json.totalCount;
                    var message = '';
                    var referencia = json.data;
                    if (totalRecords > 0) {
                        desTipoActuacion = referencia[0].desTipoActuacion;
                    } else {
                    }
                });
                return desTipoActuacion;
            }

            $("#btnAsignarApelante").click(function () {
                var valorI = listaDefensores.length;
                $.each($('.imputadosCheck'), function (k, v) {
                    var cveConsignacion = "";
                    var state = $(this).prop('checked');
                    var idImputado = $(this).val();
                    var nombreImputado = $(this).attr("nombreimputado");
                    if (state) {
                        $(this).prop('disabled', true);
                        $(this).prop('checked', false);
                        cargarDefensor(idImputado, contadorDefensores, nombreImputado);
                    }
                });
                if (listaDefensores.length != valorI) {
                    contadorDefensores++;
                }
                $("#divTablaDefensores").html(formarTablaDefensores());
            });
            $("#btnBuscarResolucion").click(function () {
                var page = $("#cmbPaginacionRecursos").val();
                var cantReg = $("#cmbNumRegRecursos").val();
                var strDatos = "accion=consultarActuacion";
                var cveTipoResolucion = $("#cmbTipoResolucion").val();
                var cveTipoActuacion = $("#cmbTipoResolucion option:selected").attr('cveTipoActuacion');
                strDatos += "&activo=S";
                strDatos += "&cveJuzgado=" + $("#cveTipoJuzgado").val();
                strDatos += "&cveTipoCarpeta=" + $("#select_auto_carpeta").val();
                strDatos += "&numero=" + $("#numeroCausa").val();
                strDatos += "&anio=" + $("#anioCausa").val();
                strDatos += "&cveTipoActuacion=" + cveTipoActuacion;
                strDatos += "&cantxPag=" + cantReg;
                strDatos += "&pag=" + page;
                if (cveTipoActuacion != "null") {
                    if (cveTipoActuacion != 15 && cveTipoActuacion != 12) {
                        $.ajax({
                            async: false,
                            type: 'POST',
                            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                            data: strDatos,
                            beforeSend: function (objeto) {
                                //limpiarCamposOficios();
                                //$("#tablaImpofedel").html("");
                                var validar = true;
                                var campos = "";
                                if ($("#cveTipoJuzgado").val() == "") {
                                    campos += " -el Juzgado \n";
                                    validar = false;
                                }
                                if ($("#select_auto_carpeta").val() == "") {
                                    campos += " -el Tipo de carpeta \n";
                                    validar = false;
                                }
                                if ($("#numeroCausa").val() == "") {
                                    campos += " -el Numero de causa \n";
                                    validar = false;
                                }
                                if ($("#anioCausa").val() == "") {
                                    campos += " -el Anio de la causa \n";
                                    validar = false;
                                }
                                if ($("#numeroOficio").val() == "") {
                                    campos += " -el numero del oficio \n";
                                    validar = false;
                                }
                                if ($("#anioOficio").val() == "") {
                                    campos += " -el Anio del oficio \n";
                                    validar = false;
                                }
                                if ($("#cmbTipoResolucion").val() == "") {
                                    campos += " -Resolucion combatida \n";
                                    validar = false;
                                }
                                if (validar == false) {
                                    alert("Es necesario seleccionar \n" + campos);
                                    showMessage('No se llenaron los campos', 'warning');
                                } else {
                                    $('#ModalResoluciones').modal('show')
                                }
                                //alert(validar);
                                return validar
                            }
                        }).done(function (response) {
                            var json = eval("(" + response + ")");
                            var totalRecords = json.totalCount;
                            var message = '';
                            var tabla = '';
                            var contando = 0;
                            tabla += "<table id='tblResultadosGridAct'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered'>";
                            tabla += "<tr >";
                            tabla += "<th>No.</td>";
                            tabla += "<th>Antecede</td>";
                            tabla += "<th>Tipo</td>";
                            tabla += "<th>Sintesis</td>";
                            tabla += "<th>fecha Registro</td>"
                            tabla += "</tr>";
                            if (totalRecords > 0) {

                                var referencia = json.data;
                                for (var i = 0; i < totalRecords; i++) {
                                    referencia[i].observaciones = "";
                                }
                                for (var i = 0; i < totalRecords; i++) {
                                    if (cveTipoActuacion == 3) {
                                        if (obtenerEstatus(referencia[i].idActuacion)) {
                                            var jsonDatos = JSON.stringify(referencia);
                                            tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + jsonDatos + "," + i + "," + cveTipoResolucion + "); '>";
                                            tabla += "<td>" + (i + 1) + "</td>";
                                            tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                            tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                            tabla += "<td>" + referencia[i].sintesis + "</td>";
                                            tabla += "<td>" + fechaMySQLaNormalConsulta(referencia[i].fechaRegistro) + "</td>"
                                            tabla += "</tr>";
                                            contando++;
                                        }
                                    } else if (cveTipoActuacion == 5) {
                                        if (cveTipoResolucion = 26 && referencia[i].cveTipoAuto == 2) {
                                            var jsonDatos = JSON.stringify(referencia);
                                            tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + jsonDatos + "," + i + "," + cveTipoResolucion + "); '>";
                                            tabla += "<td>" + (i + 1) + "</td>";
                                            tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                            tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                            tabla += "<td>" + referencia[i].sintesis + "</td>";
                                            tabla += "<td>" + fechaMySQLaNormalConsulta(referencia[i].fechaRegistro) + "</td>"
                                            tabla += "</tr>";
                                            contando++;
                                        } else if (cveTipoResolucion == 14 || cveTipoResolucion == 25 && referencia[i].cveTipoAuto == 1) {
                                            var jsonDatos = JSON.stringify(referencia);
                                            tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + jsonDatos + "," + i + "," + cveTipoResolucion + "); '>";
                                            tabla += "<td>" + (i + 1) + "</td>";
                                            tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                            tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                            tabla += "<td>" + referencia[i].sintesis + "</td>";
                                            tabla += "<td>" + fechaMySQLaNormalConsulta(referencia[i].fechaRegistro) + "</td>"
                                            tabla += "</tr>";
                                            contando++;
                                        }
                                    } else {
                                        var jsonDatos = JSON.stringify(referencia);
                                        tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + jsonDatos + "," + i + "," + cveTipoResolucion + "); '>";
                                        tabla += "<td>" + (i + 1) + "</td>";
                                        tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                        tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                        tabla += "<td>" + referencia[i].sintesis + "</td>";
                                        tabla += "<td>" + fechaMySQLaNormalConsulta(referencia[i].fechaRegistro) + "</td>"
                                        tabla += "</tr>";
                                        contando++;
                                    }
                                }
                                tabla += "</table>";
                                if (contando != 0) {
                                    $("#ContTablaResoluciones").html(tabla);
                                } else {
                                    $("#ContTablaResoluciones").html("No hay resoluciones a mostrar \n");
                                }
                                //disabledFields(false, false);
                                //con esta funcion voy a cargar impofedel tablaImpofedel
                                //impOfeDelTable(referencia[0].idReferencia);
                                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden", "true").after('').append('&nbsp;Datos Encontrados.');

                            } else {
                                $("#ContTablaOficios").html("No existen tocas para asignar recurso");
                                if ('text' in json) {
                                    message = json.text;
                                } else {
                                    message = 'ERROR.';
                                }
                                showMessage(message, 'information');
                                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
                            }
                        });
                    } else {
                        if (cveTipoActuacion == 15) {
                            strDatos = "accion=obtenerOrdenByAntecede";
                        } else if (cveTipoActuacion == 12) {
                            strDatos = "accion=obtenerCateoByAntecede";
                        }
                        strDatos += "&cveJuzgado=" + $("#cveTipoJuzgado").val();
                        strDatos += "&cveTipoCarpeta=" + $("#select_auto_carpeta").val();
                        strDatos += "&numero=" + $("#numeroCausa").val();
                        strDatos += "&anio=" + $("#anioCausa").val();
                        $.ajax({
                            async: false,
                            type: 'POST',
                            url: "../fachadas/sigejupe/carpetasJudiciales/CarpetasJudicialesFacade.Class.php",
                            data: strDatos,
                            beforeSend: function (objeto) {
                                //limpiarCamposOficios();
                                //$("#tablaImpofedel").html("");
                                var validar = true;
                                var campos = "";
                                if ($("#cveTipoJuzgado").val() == "") {
                                    campos += " -el Juzgado \n";
                                    validar = false;
                                }
                                if ($("#select_auto_carpeta").val() == "") {
                                    campos += " -el Tipo de carpeta \n";
                                    validar = false;
                                }
                                if ($("#numeroCausa").val() == "") {
                                    campos += " -el Numero de causa \n";
                                    validar = false;
                                }
                                if ($("#anioCausa").val() == "") {
                                    campos += " -el Anio de la causa \n";
                                    validar = false;
                                }
                                if ($("#numeroOficio").val() == "") {
                                    campos += " -el numero del oficio \n";
                                    validar = false;
                                }
                                if ($("#anioOficio").val() == "") {
                                    campos += " -el Anio del oficio \n";
                                    validar = false;
                                }
                                if ($("#cmbTipoResolucion").val() == "") {
                                    campos += " -Resolucion combatida \n";
                                    validar = false;
                                }
                                if (validar == false) {
                                    alert("Es necesario seleccionar \n" + campos);
                                    showMessage('No se llenaron los campos', 'warning');
                                } else {
                                    $('#ModalResoluciones').modal('show')
                                }
                                //alert(validar);
                                return validar
                            }
                        }).done(function (response) {
                            var json = eval("(" + response + ")");
                            var totalRecords = json.totalCount;
                            var message = '';
                            var tabla = '';
                            var contando = 0;

                            tabla += "<table id='tblResultadosGridAct'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered'>";
                            tabla += "<tr >";
                            tabla += "<th>No.</td>";
                            tabla += "<th>Antecede</td>";
                            tabla += "<th>Tipo</td>";
                            tabla += "<th>Sintesis</td>";
                            tabla += "<th>fecha Registro</td>"
                            tabla += "</tr>";
                            if (totalRecords > 0) {

                                var referencia = json.data;
                                for (var i = 0; i < totalRecords; i++) {
                                    referencia[i].observaciones = "";
                                }
                                for (var i = 0; i < totalRecords; i++) {
                                    if (cveTipoActuacion == 3) {
                                        if (obtenerEstatus(referencia[i].idActuacion)) {
                                            var jsonDatos = JSON.stringify(referencia);
                                            tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + jsonDatos + "," + i + "," + cveTipoResolucion + "); '>";
                                            tabla += "<td>" + (i + 1) + "</td>";
                                            tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                            tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                            tabla += "<td>" + referencia[i].sintesis + "</td>";
                                            tabla += "<td>" + fechaMySQLaNormalConsulta(referencia[i].fechaRegistro) + "</td>"
                                            tabla += "</tr>";
                                            contando++;
                                        }
                                    }
                                }
                                tabla += "</table>";
                                if (contando != 0) {
                                    $("#ContTablaResoluciones").html(tabla);
                                } else {
                                    $("#ContTablaResoluciones").html("No hay resoluciones a mostrar \n");
                                }
                                //con esta funcion voy a cargar impofedel tablaImpofedel
                                //impOfeDelTable(referencia[0].idReferencia);
                                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden", "true").after('').append('&nbsp;Datos Encontrados.');

                            } else {
                                $("#ContTablaOficios").html("No existen tocas para asignar recurso");
                                if ('text' in json) {
                                    message = json.text;
                                } else {
                                    message = 'ERROR.';
                                }
                                showMessage(message, 'information');
                                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
                            }
                        });
                    }

                } else {
                    alert("no se puede");
                    //mensaje no se puede
                }
            });
            fechaBaseDatos(
                    {
                        fechaRangoInicial: "fecha",
                        fechaRangoFinal: "fecha"
                    }
            );
            $(".numerico").keypress(function (key) {
                ////alert(key.charCode);
                //        if((key.charCode == 39 || key.charCode == 34 || key.charCode == 37|| key.charCode == 37|| key.charCode == 36|| key.charCode == 59)) return false;
                if ((key.charCode < 48 || key.charCode > 57) && (key.charCode != 0) && (key.charCode != 32))
                    return false;
            });

        });
        //$("#tblResultadosGridAct").DataTable({
    //        paging: false,
    //        //dom: 'T<"clear">lfrtip',
    ////            tableTools: {
    ////                aButtons: [
    ////                    "copy",
    ////                    {
    ////                        sButtonText: "",
    ////                        aButtons: ["csv", "xls", "pdf"]
    ////                    }
    ////                ]
    ////            }
    //    });
    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>
