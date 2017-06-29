var procedencia = $('#procedencia').val();
if (editor != undefined) {
    editor.destroy();
}
var editor = null;
/**
 * FunciOn para obtener y asignar los permisos del usuario activo sobre el formulario
 */
function setPermissions() {
    var cveUsuarioSistema = $('#SysCveUsuarioSistema').val();
    var cvePerfilSesion = $('#SysCvePerfil').val();
    insert_numEmpleado = cveUsuarioSistema;
    $.get("../archivos/" + cveUsuarioSistema + ".json",
        function(response) {
            var perfiles = response.perfiles[0];
            var perfil = perfiles.perfil[0];
            var permisos = perfil.permisos
            var createRecord = 'N';
            var readRecord = 'N';
            var updateRecord = 'N';
            var deleteRecord = 'N';
            for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                    $.each(response.perfiles[0].perfil[i].permisos, function(k, vnombre) {
                        if (vnombre.nomFormulario == "CARPETAS JUDICIALES") {
                            var hijos = vnombre.hijos;
                            $.each(hijos, function(k2, nombreHijo) {
                                if (nombreHijo.nomFormulario == 'MEDIDAS CAUTELARES') {
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
                $('#btn_buscaCarpeta, #btn_mcautelares_search').prop('disabled', true);
            }
            if (crud.create == 'N') {
                $('#btn_mcautelares_save').prop('disabled', true);
            }
            if (crud.delete == 'N') {
                $('#btn_mcautelares_delete').prop("disabled", true);
            }
        });
}

/**
 * Muestra/Oculta el div del formulario y la tabla de bUsqueda
 * @param {int} opc Recibe un parametro para mostrar el DIV correspondiente
 */
function changeDivForm(opc) {
    if (opc === 1) {
        $("#divConsulta").hide("fade");
        $("#divResultados").hide("fade");
        $("#divFormulario").show("slide");
        //cambia el titulo
        $('#medidasCautelaresTitulo').empty().append(titulos['titulo1']);
    } else if (opc === 2) {
        $("#divFormulario").hide("fade");
        $("#divConsulta").show("slide");
        //cambia el titulo
        var titulo = '<a href="#" onclick="changeModule(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / ' + titulos['titulo2'];
        $('#medidasCautelaresTitulo').empty().append(titulo);
        cargaTipoCarpeta(2);
    } else if (opc === 3) {
        $("#divFormulario").hide("fade");
        $("#divApelacion").show("slide");
    } else if (opc === 4) {
        $("#divApelacion").hide("fade");
        $("#divFormulario").show("slide");
    } else if (opc == 5) {
        $("#divConsulta").hide("fade");
        $("#divResultados").show("slide");
        //cambia el titulo
        var titulo = '<a href="#" onclick="changeModule(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / <a href="#" onclick="changeModule(6)" style="text-decoration:underline;">' + titulos['titulo2'] + '</a> / ' + titulos['titulo3'];
        $('#medidasCautelaresTitulo').empty().append(titulo);
    } else if (opc == 6) {
        $("#divResultados").hide("fade");
        $("#divConsulta").show("slide");
    }
}

/**
 * Limpia el contenido del formulario
 * @param {integer} idModule Recibe el Id del mOdulo del que se limpiaran sus campos
 */
function cleanFields(idModule) {
    var idModule = idModule || '1';
    if (idModule == 1) { //modulos de captura y busqueda
        if (procedencia == 0) {
            $('#cveTipoJuzgado').val($("#SysCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val());
            $('#select_mcautelares_carpeta').val(0);
            $('#input_mcautelares_numero, #input_mcautelares_anio').val('');
            $('#label_mcautelares_text1').empty().html("No. de ");
            cargaTipoCarpeta();
            disabledFields(false, true);
        }
        if ($('#procedencia').val() == 1) {
            bloqueaCamposLlave();
        }
        $('#cveTipoJuzgado_busqueda').val($("#SysCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val());
        //$('#divFormulario, #divConsulta').find('input[type=text], input[type=password], input[type=number], input[type=email], input[type=hidden]').val('');
        $('#input_mcautelares_sintesis').val('');
        $('#select_mcautelares_notificacion').val(0);
        $('#divConsulta').find('input[type=text], input[type=password], input[type=number], input[type=email], input[type=hidden]').val('');
        editor.setContent("", false);
        //$('#divFormulario, #divConsulta').find('select').prop('selectedIndex',0);
        //$('#divConsulta').find('select').prop('selectedIndex',0);
        $('#label_mcautelares_text2').empty().html("No. de ");
        $('#input_mcautelares_finicial_busqueda, #input_mcautelares_ffinal_busqueda').val(getDate('today'));
        //$('#cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() );
        $('#accordion').html('');
        $('#auto_tbody').html('');
        $('#btn_mcautelares_delete').prop('disabled', true).hide();
        Apelaciones.apelacion = [];
        Apelaciones.contador = 0;
        medidasCautelares.data = [];
        medidasCautelares.counter = 0;
        imputadosMC = '';
        $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').removeClass('glyphicon-ok');
        $('#inputPDF').hide();
        $('#inputVisor').hide();
    } else if (idModule == 2) { //modulo de apelaciOn
        $('#input_mcautelares_numerotoca, #input_mcautelares_aniotoca').val('');
        $('#divApelacion').find('select').prop('selectedIndex', 0);
    } else if (idModule == 3) { //al cambiar el combo de carpeta
        $('#divFormulario, #divConsulta').find('input[type=text], input[type=password], input[type=number], input[type=email], input[type=hidden]').val('');
        editor.setContent("", false);
        $('#select_mcautelares_notificacion').prop('selectedIndex', 0);
        $('#input_mcautelares_finicial_busqueda, #input_mcautelares_ffinal_busqueda').val(getDate('today'));
        //$('#cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() );
        //$('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val() );
        $('#accordion').html('');
        disabledFields(false, true);
        Apelaciones.apelacion = [];
        Apelaciones.contador = 0;
        medidasCautelares.data = [];
        medidasCautelares.counter = 0;
    } else if (idModule == 4) {
        $('#accordion').html('');
        $('#idActuacion, #input_mcautelares_sintesis').val('');
        editor.setContent("", false);
        $('#select_mcautelares_notificacion').prop('selectedIndex', 0);
        Apelaciones.apelacion = [];
        Apelaciones.contador = 0;
        medidasCautelares.data = [];
        medidasCautelares.counter = 0;
        imputadosMC = '';
    }
    return;
}

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

    if (dd < 10) { dd = '0' + dd }
    if (mm < 10) { mm = '0' + mm }
    if (minu < 10) { minu = '0' + minu }

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
 * Desactiva/activa los campos clave del formulario
 * @param {boolean} stateReference El valor se asigan directamente al atributo de los campos de referencia
 * @param {boolean} stateCertification El valor se asigan directamente al atributo de los campos de certificaciOn
 */
function disabledFields(stateKeyFields, stateModuleFields) {
    //Key fields
    idKeyFields = ['select_mcautelares_carpeta', 'input_mcautelares_numero', 'input_mcautelares_anio'];
    $.each(idKeyFields, function(k, v) {
        $('#' + v).attr("disabled", stateKeyFields);
    });
    //Module fields
    idModuleFields = ['input_mcautelares_sintesis', 'select_mcautelares_notificacion'];
    $.each(idModuleFields, function(k, v) {
        $('#' + v).attr("disabled", stateModuleFields);
    });
}

/**
 * Muestra mensajes personalizados en el div destinado para ello
 * @param {string} message Es el mensaje que se mostrarA
 * @param {string} type Es el tipo de mensaje. 1:success, 2:warning, 3:information, 4:error
 * @param {string} divAux Es el postfijo para identificar un DIV alterno de notificaciOn
 */
function showMessage(message, type, divAux, extra) {
    var message = message || '';
    var div_message = '';
    var divAux = divAux || '';
    var extra = extra || '';
    var state = 0,
        icon = '',
        color = '';
    switch (type) {
        case 'success':
            div_message = 'divCorrecto';
            icon = 'glyphicon glyphicon-ok';
            color = 'green';
            break;
        case 'warning':
            div_message = 'divAdvertencia';
            icon = 'glyphicon glyphicon-remove';
            color = 'red';
            state = 1;
            break;
        case 'information':
            div_message = 'divInformacion';
            icon = 'glyphicon glyphicon-remove';
            color = 'red';
            break;
        case 'error':
            div_message = 'divError';
            icon = 'glyphicon glyphicon-remove';
            color = 'red';
            break;
    }
    if (divAux != '') {
        div_message += divAux;
        if (type == 'success') {
            $("#divInformacion" + divAux).hide();
            //$("#" + div_message).hide();
        }
        if (type == 'information') {
            $("#divCorrecto" + divAux).hide();
            $('#' + div_message).html(message);
            $('#' + div_message).hide().show("slide");
        }
    } else if (extra != '') {
        $('#' + extra).hide().empty().show("slide").append('<span style="color:' + color + ';" class="' + icon + '" aria-hidden="true"></span> ' + message);
        div_message = extra;
    } else {
        $('#' + div_message).html(message);
        $('#' + div_message).hide().show("slide");
    }
    setTimeout(function() {
        $("#" + div_message).hide("slide");
    }, 5000);
    return;
}

/**
 * FunciOn para el cambio de foco al presionar INTRO
 * @param {object} event Objeto del evento KEYPRESS
 * @param {string} nextInput Es el ID del input al que se moverA el foco
 */
function changeFocus(event, nextInput) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode == 13) { // es Intro
        $('#' + nextInput).focus();
    };
    return;
}

/**
 * FunciOn para la obtenciOn de informacion de tablas y llenado de combos
 * @param {array} selectIds Ids de los combos donde se mostraran los datos
 * @param {string} facade Es la ruta de la fachada que se invoca, solo se define la carpeta y el nombre del archivo sin la extensiOn Class en adelante. Ej. tiposcarpetas/TiposcarpetasFacade
 * @param {string} value Es el identificador del campo llave
 * @param {string} descripction Es el identificador del campo de descripciOn
 */
function fillCombo(selectIds, facade, value, description) {
    $.each(selectIds, function(k, v) {
        $('#' + v).empty();
    });
    $.post('../fachadas/sigejupe/' + facade + '.Class.php', {
            activo: 'S',
            accion: 'consultar'
        },
        function(response) {
            var object = eval("(" + response + ")");
            var options = '<option value="0">--SELECCIONE--</option>';
            if (object.totalCount > 0) {
                $.each(object.data, function(k, v) {
                    if (v[description] != 'AMPARO') {
                        //Impide que la opcion 'AMPARO' aparezca en el combo de carpetas
                        options += '<option value="' + v[value] + '">' + v[description] + '</option>';
                    }
                });
                $.each(selectIds, function(k, v) {
                    $('#' + v).append(options);
                });
            } else {
                showMessage('No existen registros.', 'warning');
            }
        });
    return;
}

/**
 * FunciOn para el cambio de modulos entre el principal y el de bUsqueda
 * @param {integer} idModule Id del mOdulo. 1:principal, 2:bUsqueda
 */
function changeModule(idModule) {
    //muestra el mOdulo de bUsqueda
    changeDivForm(idModule);
    //limpia el contenido de los formularios
    if (idModule < 5) { //impide que los parametros de busqueda se limpien para no afectar la paginaciOn
        cleanFields();
        //coloca la fecha actual en los combos
        $('#input_mcautelares_finicial_busqueda, #input_mcautelares_ffinal_busqueda').val(getDate('today'));
    }
    if (idModule == 6) {
        changeDivForm(2);
        //cambia el titulo
        var titulo = '<a href="#" onclick="changeModule(1)" style="text-decoration:underline;">Medidas Cautelares</a> / B&uacute;squeda';
        $('#medidasCautelaresTitulo').empty().append(titulo);
    }
    return;
}

/**
 * Valida que antes de guardar o actualizar, todos los campos contegan informaciOn
 * @param {array} array Es el arraglo de campos a validar
 * @return {boolean} state Regresa 'true' si todos los campos contienen informaciOn
 */
function validateFields(array) {
    var state = true;
    var empty = [];
    var counter = 0;
    $.each(array, function(k, v) {
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
 * Obtiene las salas de los Juzgados a travEs del webservice de GestiOn, filtrando por Instancia con claves 14 y 17 en el controlador
 */
function getSalas() {
    $.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php", {
        accion: 'getSalas'
    }, function(response) {
        var object = eval('(' + response + ')');
        var options = '<option value="0">-- SELECCIONE --</option>'
        if (object.totalCount > 0) {
            var data = object.data;
            $.each(data, function(k, v) {
                options += '<option value="' + v.idJuzgado + '">' + v.desJuz + '</option>';
            });
            $('#select_mcautelares_salastoca').empty().html(options);
        }
    });
    return;
}

/**
 * Obtiene la lista de Imputados de la tabla Imputados Carpetas
 * @param {integer} idCarpetaJudicial Es el Id de la tabla Carpetas Judiciales, se usa para filtrar y obtener los imputados de tal carpeta
 */
function getImputadosCarpetas(idCarpeta, cveTipocarpeta) {
    urlFacade = '';
    if (cveTipocarpeta == 7) { // es exhorto
        urlFacade = "../fachadas/sigejupe/imputadosexhortos/ImputadosexhortosFacade.Class.php";
        dataFacade = "accion=consultar&activo=S&idImputadoExhorto=" + idCarpeta;
    } else {
        urlFacade = "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php";
        dataFacade = "accion=consultar&activo=S&idCarpetaJudicial=" + idCarpeta;
    }
    var respuesta = '';
    $.ajax({
        async: false,
        type: 'POST',
        url: urlFacade,
        data: dataFacade
    }).done(function(response) {
        respuesta = response;
    });
    return respuesta;
}

/**
 * Muestra la tabla de imputados dentro del formulario
 * @param {json} json Recibe el resultado de ImputadosCarpetas
 * @param {json} tipoCarpeta 
 */
function imputadosTable(json, tipoCarpeta) {
    var tipoCarpeta = tipoCarpeta || '';
    var object = '';
    var totalRecords = 0;
    var controlador = false;
    var tbody = '';
    if (tipoCarpeta != '') { //viene de la busqueda de medidas y no de imputados
        object = json;
        totalRecords = object.length;
        controlador = true;
    } else {
        object = eval('(' + json + ')');
        totalRecords = object.totalCount;
    }
    if (totalRecords > 0) {
        var list = '';
        if (controlador) { //viene de la busqueda
            list = object;
        } else {
            list = object.data;
        }
        var name = '';
        var imputadoId = '';
        var counter = 0;
        var referencia = 0;
        var carpeta = 0;
        var medidasAplicadas = '';
        if (typeof object.referencia != 'undefined') {
            referencia = object.referencia;
            carpeta = referencia[0]['cveTipoCarpeta'];
            //define las medidas aplicadas cuando viene de la busqueda de imputados
            medidasAplicadas = object.referencia[0].medidasImputados;
        } else {
            carpeta = tipoCarpeta;
        }
        //define las medidas aplicadas cuando viene del formulario de consulta
        if (controlador) {
            medidasAplicadas = object;
        }
        var idsImputados = [];
        var error = false;
        $.each(list, function(k, v) {
            //validacion por tipo de carpeta
            if (!controlador) {
                if (carpeta == 7) { //la carpeta es de exhorto
                    imputadoId = v.idImputadoExhorto;
                } else { //la carpeta es judicial
                    imputadoId = v.idImputadoCarpeta;
                } //valida el tipo de persona
                if (v.cveTipoPersona == 1) {
                    name = v.paterno + ' ' + v.materno + ' ' + v.nombre;
                } else if (v.cveTipoPersona == 2 || v.cveTipoPersona == 3) {
                    name = v.nombreMoral;
                }
            } else {
                imputadoId = v.idImputado;
                name = v.nombreImputado;
            }

            //validacion de imputado con medida previamente asignada
            var medidaImputado = false;
            if (controlador) {
                if (v.imputadoCheck == false && v.imputadoActivoDiferenteActuacion != '') {
                    //el imputado esta activo en otra actuacion
                    name += '<span class="pull-right"><span class="glyphicon glyphicon-pushpin"></span>&nbsp;&nbsp;<span style="font-size:10pt;">Medida Cautelar asignada el ' + v.imputadoActivoDiferenteActuacion + '</span></span>';
                    medidaImputado = true;
                }
            } else {
                $.each(medidasAplicadas, function(llave, valor) {
                    if (imputadoId == valor.idImputado) {
                        name += '<span class="pull-right"><span class="glyphicon glyphicon-pushpin"></span>&nbsp;&nbsp;<span style="font-size:10pt;">Medida Cautelar asignada el ' + valor.fecha + '</span></span>';
                        medidaImputado = true;
                    }
                });
            }
            counter = parseInt(k) + 1;
            tbody += '	<div class="panel panel-default">' + '		<div class="panel-heading" role="tab" id="heading' + imputadoId + '">' + '			<h4 class="panel-title">' + '				' + counter + '&nbsp;-&nbsp;&nbsp;&nbsp;';
//            if (medidaImputado == false) {
                if (v.imputadoCheck != 'undefined' && v.imputadoCheck == true) {
                    $('#imputadoCheck_' + imputadoId).prop('checked', true);
                    tbody += '				<input class="imputadoCheck" id="imputadoCheck_' + imputadoId + '" type="checkbox" name="" value="' + imputadoId + '" checked="checked"/>&nbsp;&nbsp;';
                } else {
                    tbody += '				<input class="imputadoCheck" id="imputadoCheck_' + imputadoId + '" type="checkbox" name="" value="' + imputadoId + '"/>&nbsp;&nbsp;';
                }
                tbody += '				<a id="collapsed' + imputadoId + '" class="collapsed imputadoDesc" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' + imputadoId + '" aria-expanded="false" aria-controls="collapse' + imputadoId + '" "disabled">' + '					' + name + '				</a>';
//            } else {
//                tbody += '				<input type="checkbox" checked disabled="disabled"/>&nbsp;&nbsp;&nbsp;&nbsp;' + name;
//            }
            tbody += '			</h4>' + '		</div>' + '		<div id="collapse' + imputadoId + '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading' + imputadoId + '">' + '			<div class="panel-body" id="panel-imputado_' + imputadoId + '"> <!-- inicio div medida cautelar --> ' + '			<div class="form-group"> <!-- Medida Cautelar -->' + '				<label class="control-label col-xs-12 col-sm-2 col-md-2 needed">Medida cautelar</label>' + '				<div class="col-xs-12 col-sm-10 col-md-10">' + '					<select id="select_mcautelares_medidas_' + imputadoId + '" class="form-control" tabindex="" onchange="selectMedidasCautelares(' + imputadoId + ')" ></select>' + '				</div>' + '			</div>' + '			<div class="form-group" id="listaMedidasCautelares_' + imputadoId + '"> <!-- lista de medidas cautelares --> ' + '				<table style="width:95%; margin-left:auto; margin-right:auto;" class="table table-responsive table-striped table-hover"><thead><tr><th colspan="2">MEDIDA CAUTELAR</th></tr></thead><tbody id="tablaMedidasCautelares_' + imputadoId + '"></tbody></table>' + '			</div> <!-- lista de medidas cautelares/ -->' + '			<!-- *** seccion de informacion de medida cautelar eliminada *** -->' + '			<div class="form-group"> <!-- checkbox para todas las medidas -->' + '				<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">' + '					<input type="checkbox" id="medidasDatosIguales_' + imputadoId + '" class="medidasDatosIguales" disabled="disabled"/>' + '				</div>' + '				<label for="medidasDatosIguales_' + imputadoId + '" class="control-label col-xs-11 col-sm-11 col-md-11" style="text-align:left;">Aplicar los mismos datos de Autoriad Emisora y Periodo de tiempo a todas las Medidas Cautelares de este Imputado.</label>' + '			</div> <!-- /checkbox para todas las medidas -->' + '			<!-- seccion de datos para todas las medidas -->' + '			<div class="form-group" style="display:none;" id="divMedidasDatosIguales_' + imputadoId + '" class="divMedidasDatosIguales"><div class="form-group"> <!-- Autoridad Emisora -->' + '				<label class="control-label col-xs-12 col-sm-2 col-md-2">Autoridad emisora</label>' + '				<div class="col-xs-12 col-sm-10 col-md-10">' + '					<select id="select_mcautelares_autoridad_' + imputadoId + '" class="form-control select_mcautelares_autoridad" tabindex=""></select>' + '				</div>' + '			</div>' + '			<div class="form-group">' + '				<label class="control-label col-xs-12 col-sm-2 col-md-2">Periodo de tiempo</label>' + '				<div class="col-xs-6 col-sm-4 col-md-3">' + '					<input type="text" id="input_mcautelares_finicial_' + imputadoId + '" placeholder="FECHA DE INICIO" class="form-control fecha fechaMedidasIgualesInicio"/>' + '				</div>' + '				<div class="col-xs-6 col-sm-4 col-md-3">' + '				 	<input type="text" id="input_mcautelares_ffinal_' + imputadoId + '" placeholder="FECHA DE TERMINO" class="form-control fecha fechaMedidasIgualesFinal"/>' + '				</div>' + '			</div></div>' + '			<!-- /seccion de datos para todas las medidas -->' + '			<!-- seccion mensaje para ingresar al menos una medida cautelar  -->' + '			<div class="form-group"><div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1" id="mensajeMedidaMinima_' + imputadoId + '"></div></div>' + '			<!-- /seccion mensaje para ingresar al menos una medida cautelar  -->' + '			<!-- <div class="form-group"> <!-- botones - ->' + '				<div class="col-xs-offset-1 col-xs-11">' + '	                    <input type="submit" class="btn btn-primary" value="Limpiar datos del Imputado" onclick="cleanImputadoInfoFields(' + imputadoId + ')" id="btn_mcautelares_imputado_clean"/>' + '				</div>' + '			</div> <!-- botones/ - -> --> <!-- medida cautelar/ -->' + ' 		<div class="form-group">' + '	        <div id="divCorrecto_' + imputadoId + '" class="alert alert-success alert-dismissable" style="display: none">' + ' 	           <button type="button" class="close" data-dismiss="alert">&times;</button>' + '     	       <strong id="strCorrecto"></strong> ' + '        	</div>' + '    			<div id="divInformacion_' + imputadoId + '" class="alert alert-info alert-dismissable" style="display: none">' + '        			<button type="button" class="close" data-dismiss="alert">&times;</button>' + '        			<strong id="strInformacion"></strong>' + '    			</div>' + '			</div>' + '			</div>' + '		</div>' + '</div>';
            idsImputados[k] = imputadoId;
        });
        //llena todos los combos para los imputados
        var tiposMedidas = [];
        var autoridadEmisora = [];
        for (var i = 1; i <= totalRecords; i++) {
            tiposMedidas.push('select_mcautelares_medidas_' + idsImputados[i - 1]);
            autoridadEmisora.push('select_mcautelares_autoridad_' + idsImputados[i - 1]);
        }
        fillCombo(tiposMedidas, 'tiposmedidascautelares/TiposmedidascautelaresFacade', 'cveTipoMedidaCautelar', 'desTipoMedidaCautelar');
        fillCombo(autoridadEmisora, 'autoridadesemisoras/AutoridadesemisorasFacade', 'cveAutoridadEmisora', 'desAutoridadEmisora');
    } else {
        //habilita campos
        disabledFields(false, true);
        //regresa el foco al campo numero
        $('#input_mcautelares_numero').focus();
        showMessage('No se encuentran Imputados relacionados. Verifique los datos.', 'information');
        tbody += 'ERROR. POSIBLE PERDIDA DE RELACI&Oacute;N AL OBTENER LOS IMPUTADOS. VERIFIQUE.';
    }
    //llena el acordeon
    $('#accordion').empty().append(tbody);
    //datepicker para las fechas de los formularios dinAmicos
    $('.datepicker').each(function() {
        $(this).datepicker().on('changeDate', function(e) {
            $(this).datepicker('hide');
        });
    });
    return;
}

/**
 * Cambia el valor de todas las fechas iniciales de las medidas cautelares
 **/
$('#divFormulario').on('blur', '.fechaMedidasIgualesInicio', function() {
    var fullId = $(this).prop('id');
    var id = fullId.split('_');
    id = id[id.length - 1];
    var fechaInicial = $('#' + fullId).val();
    //recorre todas las fechas de las medidas y cambia valores
    $.each($('input[id^=input_mcautelares_finicial_' + id + '-]'), function(k, v) {
        $(this).val(fechaInicial);
    });
});

/**
 * Cambia el valor de todas las fechas finales de las medidas cautelares
 **/
$('#divFormulario').on('blur', '.fechaMedidasIgualesFinal', function() {
    var fullId = $(this).prop('id');
    var id = fullId.split('_');
    id = id[id.length - 1];
    var fechaFinal = $('#' + fullId).val();
    //recorre todas las fechas de las medidas y cambia valores
    $.each($('input[id^=input_mcautelares_ffinal_' + id + '-]'), function(k, v) {
        $(this).val(fechaFinal);
    });
});

/**
 * Cambia el valor de todos los combos de Autoridad Emisora de un Imputado
 **/
$('#divFormulario').on('change', '.select_mcautelares_autoridad', function() {
    var fullId = $(this).prop('id');
    var id = fullId.split('_');
    id = id[id.length - 1];
    var opcionAutoridad = $('#' + fullId).find('option:selected').val();
    //recorrer todos los combos del imputado y cambiar los valores
    $.each($('select[id^=select_mcautelares_autoridad_' + id + '-]'), function(k, v) {
        $(this).val(opcionAutoridad);
    });
});

/**
 * Muestra/Oculta los campos para capturar los datos iguales de las medidas cautelares
 **/
$('#divFormulario').on('click', '.medidasDatosIguales', function() {
    var fullId = $(this).prop('id');
    var id = fullId.split('_')[1];
    var check = $('#' + fullId).prop('checked');
    if (check) {
        $('#divMedidasDatosIguales_' + id).show();
    } else {
        $('#divMedidasDatosIguales_' + id).hide();
        $('#select_mcautelares_autoridad_' + id).val(0);
        $('#input_mcautelares_finicial_' + id).val('');
        $('#input_mcautelares_ffinal_' + id).val('');
        //recorrer todos los combos del imputado y cambiar los valores
        $.each($('select[id^=select_mcautelares_autoridad_' + id + '-]'), function(k, v) {
            $(this).val(0);
        });
        //recorre todas las fechas de las medidas y cambia valores
        $.each($('input[id^=input_mcautelares_finicial_' + id + '-]'), function(k, v) {
            $(this).val('');
        });
        $.each($('input[id^=input_mcautelares_ffinal_' + id + '-]'), function(k, v) {
            $(this).val('');
        });
    }
});

function validateDatesRange(start, end) {
    var startDate = start.split('/');
    var endDate = end.split('/');
    status = '';
    startDate = startDate[2] + '-' + startDate[1] + '-' + startDate[0];
    endDate = endDate[2] + '-' + endDate[1] + '-' + endDate[0];
    if (startDate < endDate) {
        status = 'ok';
    } else {
        status = 'LA FECHA DE TERMINO DEBE SER MAYOR A LA DE INICIO.';
    }
    return status;
}

/**
 * FunciOn para guardar la informaciOn de los imputados en el array -medidasCautelares-
 * @param {integer} idImputado Es el Id del imputado a guardar
 */
function saveImputadoInfo(idImputado) {
    var idTr = '';
    var autoridad = '';
    var finicial = '';
    var ffinal = '';
    var apelacion = '';
    var message = '';
    var estado = false;
    var fullId = '';
    var totalMedidasImputado = 0;
    $('#tablaMedidasCautelares_' + idImputado).find('tr').each(function(k, v) {
        totalMedidasImputado++;
        idTr = $(this).prop('id');
        idMedida = idTr.split('/')[1];
        fullId = idImputado + '-' + idMedida;
        autoridad = $('#select_mcautelares_autoridad_' + fullId).val();
        finicial = $('#input_mcautelares_finicial_' + fullId).val();
        ffinal = $('#input_mcautelares_ffinal_' + fullId).val();
        apelacion = $('#select_mcautelares_apelacion_' + fullId).val();

        //validaciOn de los campos
        var mcautelaresFields = [
            { name: 'AUTORIDAD EMISORA', value: autoridad },
            { name: 'FECHA DE INICIO', value: finicial }
        ];
        var mcautelaresState = validateFields(mcautelaresFields);
        var fechasState = 'ok';
        if( ffinal != '' ){
        	fechasState = validateDatesRange(finicial, ffinal);
        }
        if (mcautelaresState == true && fechasState == 'ok') {
            findMedida(fullId);
            //guarda los datos en el array -medidasCautelares-
            medidasCautelares.data[medidasCautelares.counter] = {
                fullId: fullId,
                idImputadoCarpeta: idImputado,
                idMedida: idMedida,
                autoridad: autoridad,
                finicial: finicial,
                ffinal: ffinal,
                apelacion: apelacion
            }
            medidasCautelares.counter++;
            message = 'La informci&oacute;n del imputado esta completa.';
            showMessage(message, 'success', '', 'mensajeMedida_' + fullId);
            estado = true;
        } else {
            colapsaAcordeon();
            //abre el acordeon
            $('#collapse' + idImputado).collapse("show");
            $('#collapseMedida_' + fullId).collapse('show');
            //mostrar mensaje de informaciOn faltante
            message = 'Complete los siguientes campos:<br/>';
            $.each(mcautelaresState, function(k, v) {
                message += '- ' + v + '<br/>';
            });
            if (fechasState != '') {
                if (fechasState != 'ok') {
                    message += '- ' + fechasState + '<br/>';
                }
            }
            showMessage(message, 'information', '', 'mensajeMedida_' + fullId);
            estado = false;
            return estado;
        }
    });
    return estado;
}

function validaMedidaImputados() {
    var idRenglon = '';
    var idMedida = '';
    var idTabla = '';
    var idImputado = '';
    var arregloMedidas = '';
    var estado = false;
    var test = $(' table [id^=tablaMedidasCautelares_]').each(function(k, v) {
        var arregloMedidas = new Array();
        idTabla = $(this).prop('id');
        idImputado = idTabla.split('_')[1];
        if ($('#imputadoCheck_' + idImputado).prop('checked')) {
            $(this).find('tr').each(function() {
                idRenglon = $(this).prop('id');
                idMedida = idRenglon.split('/')[1];
                arregloMedidas[k] = idMedida;
            });
            if (arregloMedidas.length == 0) {
                $('#collapse' + idImputado).collapse("show");
                showMessage('Debe definir al menos una Medida Cautelar.', 'information', '', 'mensajeMedidaMinima_' + idImputado);
                estado = false;
            } else {
                estado = true;
            }
        }
    });
    return estado;
}

/**
 * Busca Imputados de las Medidas Cautelares, si existe lo borra y reduce en 1 el contador
 * @param {integer} idImputadoCarpeta Es el ID de ImputadoCarpeta
 */
function findMedida(fullId) {
    //validar la existencia del elemento a travEs de idImputadoCarpeta
    var item_id = find_in_object(medidasCautelares.data, 'fullId', fullId);
    //si existe el elemento lo borra
    if (item_id > -1) {
        medidasCautelares.data.splice(item_id, 1);
        medidasCautelares.counter--;
    }
    return;
}

function findMedida2(idImputadoCarpeta) {
    var item_id = -1;
    do {
        item_id = find_in_object(medidasCautelares.data, 'idImputadoCarpeta', idImputadoCarpeta);
        //si existe el elemento lo borra
        if (item_id > -1) {
            medidasCautelares.data.splice(item_id, 1);
            medidasCautelares.counter--;
        }
    } while (item_id != -1);
    return;
}

/**
 * FunciOn para limpiar los campos de un imputado
 * @param {integer} idImputado Es el Id del Imputado
 */
function cleanImputadoInfoFields(idImputado) {
    $('#select_mcautelares_medidas_' + idImputado).prop("selectedIndex", 0);
    $('#select_mcautelares_autoridad_' + idImputado).prop("selectedIndex", 0);
    $('#input_mcautelares_finicial_' + idImputado).val('');
    $('#input_mcautelares_ffinal_' + idImputado).val('');
    $('#select_mcautelares_apelacion_' + idImputado).prop("selectedIndex", 0);
    return;
}

/**
 * Funcion para obtener los imputados que tienen 'check' en la tabla, estos se guardarAn en la tabla -tblautosimputados-
 * @param {string} option Recibe 'checked' o 'full', para mostrar los imputados seleccionados o todos ellos, respectivamente
 * @return {array} ids Regresa el array de los IDs de los imputados
 */
function getImputados(option) {
    var option = option || 'full';
    //obtiene IDs de check de la tabla de imputados, correspondientes a 'idImputadoCarpeta' de la tabla -tblimputadoscarpetas-
    var ids = [],
        idsCheck = [],
        idsFull = [];
    var state = false;
    var idImputado = 0;
    var counter = 0,
        counter2 = 0;
    var apelacionState = '';
    var idTr = '';
    var idMedida = '';
    $.each($('.imputadoCheck'), function(k, v) {
        state = $(this).prop('checked');
        idImputado = $(this).val();
        //recorre la tabla de medidas cautelares del imputado
        $('#tablaMedidasCautelares_' + idImputado).find('tr').each(function() {
            idTr = $(this).prop('id');
            idMedida = idTr.split('/')[1];
            //obtiene estado de apelacion
            apelacionState = $('#select_mcautelares_apelacion_' + idImputado + '-' + idMedida).val();
            if (state) {
                //guarda en array
                idsCheck[counter++] = { idImputado: idImputado, medida: idMedida, apelacion: apelacionState };
            }
            idsFull[counter2++] = { idImputado: idImputado, medida: idMedida, apelacion: apelacionState };
        });
        if (state && idTr == '') { // no existen medidas registradas, obtiene la cantidad de imputados con check
            idsFull[counter++] = { idImputado: idImputado, medida: idMedida, apelacion: apelacionState };
        }
    });
    //en caso de no tener medidas registradas, iguala los arreglos
    if (idTr == '') {
        idsCheck = idsFull;
    }
    if (option == 'checked') {
        ids = idsCheck;
    } else if (option == 'full') {
        ids = idsFull;
    }
    return ids;
}

/**
 * FunciOn para la validaciOn de checks antes de guardar la medida cautelar
 */
function validateChecks() {
    var state = false;
    //obtiene los imputados seleccionados
    var imputadosList = getImputados('checked');
    if (imputadosList.length > 0) {
        state = true;
    }
    return state;
}

/**
 * FunciOn para la validaciOn de la existencia de Medidas cautelares en el array -medidasCautelares-
 */
function validateMedidas() {
    var state = false;
    var arraySize = medidasCautelares.data.length;
    if (arraySize > 0) {
        state = true;
    }
    return state;
}

/**
 * FunciOn para guardar las Medidas Cautelares
 */

function saveMcautelares() {
    //recorrer los imputados marcados y validar que las medidas asignadas tengan la informacion completa, si la medida esta apelada, verificar que tenga la informacion completa
    colapsaAcordeon();
    $('#btn_mcautelares_delete').prop('disabled', true).hide();
    //varibles de control
    var idActuacion = $('#idActuacion').val() > 0 ? $('#idActuacion').val() : '';
    var numActuacion = 0;
    var aniActuacion = 0;
    var idReferencia = carpetasJudiciales.idReferencia;
    var numero = carpetasJudiciales.numero;
    var anio = carpetasJudiciales.anio;
    var cveTipoCarpeta = carpetasJudiciales.cveTipoCarpeta;
    var cveJuzgado = $('#cveTipoJuzgado').val();
    //campos de captura de la medida
    var mcSintesis = $('#input_mcautelares_sintesis').val();
    var mcNotificacion = $('#select_mcautelares_notificacion').val();
    var mcObservaciones = editor.getContent();
    var activo = 'S';
    var imputadosList = getImputados('checked');
    var apelaciones = Apelaciones.apelacion;
    var accion = '';
    if (idActuacion == '') {
        //es insercion
        accion = 'guardaMedidasCautelares';
    } else {
        //es actualizacion
        accion = 'actualizaMedidasCautelares';
    }
    //validaciOn de los campos de la medida
    var mcFields = [
        { name: 'JUZGADO', value: cveJuzgado },
        { name: 'S&Iacute;NTESIS', value: mcSintesis },
        { name: 'TIPO DE NOTIFICACION', value: mcNotificacion },
        { name: 'CONTENIDO DEL DOCUMENTO', value: mcObservaciones }
    ];
    var mcState = validateFields(mcFields);
    //validaciOn de los check
    var imputadosState = validateChecks();
    var medidaImputados = false;
    //validacion del array de medidas cautelares
    if (mcState == true && imputadosState == true) { //&& medidasState == true){
        //validaciOn de contenido de las medidas cautelares
        medidaImputados = validaMedidaImputados();
        var imputados = getImputados('checked');
        var estadoImputados = false;
        var estadoImputados2 = true;
        $.each(imputados, function(index, value) {
            if (value.idImputado != 'undefined') {
                estadoImputados = saveImputadoInfo(value.idImputado);
                if (estadoImputados == false) {
                    estadoImputados2 = false;
                    return false;
                }
            }
        });
        var medidas = medidasCautelares.data;
        //validacion de contenido de informacion en las apelaciones
        var estadoApelaciones = false;
        estadoApelaciones = validarApelaciones();
        if (estadoApelaciones == true && estadoImputados == true && estadoImputados2 == true && medidaImputados == true) {
            //guarda medida cautelar
            $.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php", {
                idActuacion: idActuacion,
                cveTipoActuacion: cveTipoActuacion,
                idReferencia: idReferencia,
                numero: numero,
                anio: anio,
                cveTipoCarpeta: cveTipoCarpeta,
                cveJuzgado: cveJuzgado,
                sintesis: mcSintesis,
                observaciones: mcObservaciones,
                cveUsuario: cveUsuario,
                activo: activo,
                cveTipoNotificacion: mcNotificacion,
                listaImputados: imputadosList,
                apelaciones: apelaciones,
                medidas: medidas,
                accion: accion
            }, function(response) {
                var object = eval('(' + response + ')');
                var totalRecords = object.totalCount;
                var message = object.text;
                if (totalRecords > 0) {
                    var data = object.data[0];
                    $('#idActuacion').val(data.idActuacion);
                    showMessage(message, 'success');
                    if ($('#procedencia').val() == 1) {
                        getTree();
                    }
                    $('#inputPDF').show();
                    $('#inputVisor').show();
                } else {
                    showMessage(message, 'error');
                }
            });
        } else {
            //no entro
        }
    } else {
        var message = 'Complete los siguientes campos:<br/>';
        $.each(mcState, function(k, v) {
            message += '- ' + v + '<br/>';
        });
        if (!imputadosState) {
            message += '- Definir al menos un imputado<br/>';
        }
        message += 'Verifique.';
        showMessage(message, 'information');
    }
    return;
}

/**
 * FunciOn para la eliminaciOn lOgica de un Auto, solo se cambia el estado de Activo, las tablas relacionadas no se tocan
 */
function deleteMedida() {
    //borra de forma logica la actuacion
    var idActuacion = $('#idActuacion').val();
    var activo = 'N';
    $.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php", {
        idActuacion: idActuacion,
        activo: activo,
        accion: 'borraMedidaCautelar'
    }, function(response) {
        var object = eval('(' + response + ')');
        var totalRecords = object.totalCount;
        var message = object.text;
        if (totalRecords > 0) {
            showMessage(message, 'success');
            cleanFields();
            if ($('#procedencia').val() == 1) {
                getTree();
            }
        } else {
            showMessage(message, 'error');
        }
    });
    return;
}

/**
 * FunciOn para buscar dentro de un array un elemento a travEs de una llave, el resultado es el indice del elemento
 * @param {array} array Es el array en donde se buscarA el elemento
 * @param {string} property Es el nombre del campo en el cual se buscarA
 * @param {string} value Es el valor a encontrar
 * @return {integer} index Si encuentra el elemento regresa '-1' en otro caso regresa la posiciOn del elemento
 */
function find_in_object(array, property, value) {
    var index2 = array.map(function(d) {
        return d[property];
    });
    var index = index2.indexOf(value);
    return index;
}

/**
 * Busca una apelaciOn, si existe la borra y reduce en 1 el contador
 * @param {integer} idImputadoCarpeta Es el ID de ImputadoCarpeta
 */
function findApelacion(fullId) {
    //validar la existencia del elemento a travEs de idImputadoCarpeta
    var item_id = find_in_object(Apelaciones.apelacion, 'fullId', fullId);
    //si existe el elemento lo borra
    if (item_id > -1) {
        Apelaciones.apelacion.splice(item_id, 1);
        Apelaciones.contador--;
    }
    return;
}

function findApelacion2(idImputadoCarpeta) {
    var item_id = -1;
    do {
        item_id = find_in_object(Apelaciones.apelacion, 'idImputadoCarpeta', idImputadoCarpeta);
        //si existe el elemento lo borra
        if (item_id > -1) {
            Apelaciones.apelacion.splice(item_id, 1);
            Apelaciones.contador--;
        }
    } while (item_id != -1);
    return;
}

/**
 * FunciOn para guardar las Apelaciones en el array -Apelaciones-
 */
function addApelacion() {
    //campos de captura de ApelaciOn
    var idImputadoCarpeta = $('#idImputadoCarpeta').val();
    var idMedidaCautelar = $('#idMedidaCautelar').val();
    var apelacionSentido = $('#select_mcautelares_sentidotoca').val();
    var apelacionNumero = $('#input_mcautelares_numerotoca').val();
    var apelacionAnio = $('#input_mcautelares_aniotoca').val();
    var apelacionSala = $('#select_mcautelares_salastoca').val();
    var fullId = idImputadoCarpeta + '-' + idMedidaCautelar;
    var comboApelacion = 0;
    var estadoBoton = true;
    //campos de la apelaciOn
    var apelacionFields = [
        { name: 'Sentido', value: apelacionSentido },
        { name: 'N&uacute;mero', value: apelacionNumero },
        { name: 'A&ntilde;o', value: apelacionAnio },
        { name: 'Sala', value: apelacionSala }
    ];
    findApelacion(fullId);
    var estado = verifyApelaciones(apelacionFields);
    //ingresar registro al array
    if (estado) {
        Apelaciones.apelacion[Apelaciones.contador] = {
            id: Apelaciones.contador,
            fullId: fullId,
            idImputadoCarpeta: idImputadoCarpeta,
            idMedidaCautelar: idMedidaCautelar,
            apelacionSentido: apelacionSentido,
            apelacionNumero: apelacionNumero,
            apelacionAnio: apelacionAnio,
            apelacionSala: apelacionSala
        };
        Apelaciones.contador++;
        comboApelacion = '1';
        estadoBoton = false;
    } else {
        comboApelacion = '0';
        estadoBoton = true;
    }
    //cambia boton
    var idUnico = idImputadoCarpeta + '-' + idMedidaCautelar;
    editButton(idUnico, estadoBoton);
    //cambia el select de apelacion
    var idSelect = '#select_mcautelares_apelacion_' + idImputadoCarpeta + '-' + idMedidaCautelar;
    $(idSelect).prop('selectedIndex', comboApelacion);
}

/**
 * Funcion para validar las apelaciones antes de guardar el formulario
 */
function validarApelaciones() {
    //obtener numero de imputados
    var imputadosList = getImputados('checked');
    var idImputado = 0;
    var idMedida = '';
    var estadoApelacion = 'N';
    var estadosArreglo = [];
    var estado = true;
    var fullId = '';
    $.each(imputadosList, function(index, value) {
        idImputado = value['idImputado'];
        idMedida = value['medida'];
        estadoApelacion = value['apelacion'];
        fullId = idImputado + '-' + idMedida;
        if (estadoApelacion == 'S') {
            //verificar si el imputado tiene apelacion definida
            var apelacionPosicion = find_in_object(Apelaciones.apelacion, 'fullId', fullId);
            var elemento = Apelaciones.apelacion[apelacionPosicion];
            //validar que la apelacion tenga los datos completos
            if (elemento.apelacionSentido == 0 || elemento.apelacionNumero == '' || elemento.apelacionAnio == '' || elemento.apelacionSala == 0) {
                //si los datos no estan completos abrir la ventana de la apelacion con el imputado correspondiente
                var nombreImputado = $.trim($('#collapsed' + idImputado).text());
                showMessage('Falta completar la informaci&oacute;n de la apelaci&oacute;n de ' + nombreImputado, 'information');
                //a la apelacion le hace falta informacion, se abre la ventana para solicitar la captura de la informacion pendiente
                loadApelacionInfo(fullId);
                //abre el div del imputado
                $('#collapse' + idImputado).addClass('in');
                //abre el div de la medida cautelar
                medidasImputadosAccordion(fullId);
                $('#collapseMedida_' + fullId).addClass('in');
                estadosArreglo[index] = false;
            } else {
                estadosArreglo[index] = true;
            }
        } else {
            estadosArreglo[index] = true;
        }
    });
    $.each(estadosArreglo, function(index, value) {
        if (value == false) {
            estado = false;
        }
    });
    return estado;
}

/**
 * FunciOn para cargar la infomaciOn de una apelaciOn ya sea para captura o modificaciOn
 * @param {integer} idImputadoCarpeta Id del ImputadoCarpeta
 */
function loadApelacionInfo(fullId) {
    var contenidoDocumento = editor.getContent();
    localStorage.contenidoDocumento = contenidoDocumento;
    var idImputado = fullId.split('-');
    var tablaInfo = '<table><tr><td style="text-align:right;">Apelaci&oacute;n de:</td>' + '<td style="text-align:left; padding-left:10px;"><b>' + $.trim($('#collapsed' + idImputado[0]).text()) + '</b></td></tr>' + '<tr><td style="text-align:right;">Para la Medida Cautelar:</td>' + '<td style="text-align:left; padding-left:10px;"><b>' + $('#medidaImputado_' + fullId).text() + '</b></td></tr></table>';
    //limpia campos de apelaciOn
    cleanFields(2);
    //$('#idImputadoCarpeta').val( $('#imputadoCheck_' + idImputado ).val() );
    $('#idImputadoCarpeta').val(idImputado[0]);
    $('#idMedidaCautelar').val(idImputado[1]);
    $('#imputadoNameForm').empty().html(tablaInfo);
    //obtiene la posicion del elemento en el array
    var index = '';
    $.each(Apelaciones.apelacion, function(k, v) {
        if (v.fullId == fullId) {
            index = k;
            return;
        }
    });
    //valida si existe un indice, significa que es consulta o modificacion de la apelacion y muestra el contenido en el formulario de Apelaciones
    if (parseInt(index) > -1) {
        var element = Apelaciones.apelacion[index];
        //llena el formulario con los datos del array
        $('#select_mcautelares_sentidotoca').val(element['apelacionSentido']);
        $('#input_mcautelares_numerotoca').val(element['apelacionNumero']);
        $('#input_mcautelares_aniotoca').val(element['apelacionAnio']);
        $('#select_mcautelares_salastoca').val(element['apelacionSala']);
    }
    //cambia titulo
    titulo = '<a href="#" onclick="returnFromApelacion()" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / ' + titulos['titulo4'];
    $('#medidasCautelaresTitulo').empty().append(titulo);
    //abre modulo de captura de apelaciOn
    changeDivForm(3);
}

/**
 * FunciOn para habilitar/deshabilitar los botones de ediciOn
 * @param {integer} idImputadoCarpeta Identificador del boton
 * @param {boolean} disabled true/false
 */
function editButton(idImputadoCarpeta, disabled) {
    var remove = '';
    var add = ''
    if (disabled == false) {
        remove = 'btn-default';
        add = 'btn-primary';
    } else if (disabled == true) {
        remove = 'btn-primary';
        add = 'btn-default';
    }
    $('#edit_' + idImputadoCarpeta).prop('disabled', disabled).removeClass(remove).addClass(add);
    return;
}

/**
 * FunciOn de la invocaciOn principal para la bUsqueda
 */
function mainSearch() {
    //limpia datos previos
    $("#totalReg").empty();
    $('#cmbPaginacion').empty();
    $('#cmbNumReg').prop('selectedIndex', 0);
    $('#tableSearch').empty();
    findMedidasCautelares();
}

/**
 * FunciOn buscar Medidas Cautelares con los parametros definidos
 */
function findMedidasCautelares(idActuacion) {
    var idActuacion = idActuacion || '';
    //carga variables
    var page = $("#cmbPaginacion").val();
    var cantReg = $("#cmbNumReg").val();
    var tipoCarpeta = $('#select_mcautelares_carpeta_busqueda option:selected').val();
    tipoCarpeta = (tipoCarpeta != 0 ? tipoCarpeta : '');
    var numActuacion = $('#input_mcautelares_numero_busqueda').val();
    var anioActuacion = $('#input_mcautelares_anio_busqueda').val();
    var fechaInicial = '';
    var fechaFinal = '';
    if (tipoCarpeta == '' && numActuacion == '' && anioActuacion == '') {
        fechaInicial = $('#input_mcautelares_finicial_busqueda').val();
        fechaFinal = $('#input_mcautelares_ffinal_busqueda').val();
    }
    var activo = 'S';
    var tableContent = '';
    var cveJuzgadoBusqueda = ($('#cveTipoJuzgado_busqueda').val() != 0) ? $('#cveTipoJuzgado_busqueda').val() : cveJuzgado;
    $.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php", {
        idActuacion: idActuacion,
        cveTipoCarpeta: tipoCarpeta,
        numero: numActuacion,
        anio: anioActuacion,
        cveJuzgado: cveJuzgadoBusqueda,
        cveTipoActuacion: cveTipoActuacion,
        txtFecInicialBusqueda: fechaInicial,
        txtFecFinalBusqueda: fechaFinal,
        activo: activo,
        pag: page,
        cantxPag: cantReg,
        accion: 'buscarMedidasCautelares'
    }, function(response) {
        var object = eval('(' + response + ')');
        var totalRecords = object.totalCount;
        if (totalRecords > 0) {
            var data = object.data;
            //muestra contenido en tabla
            tableContent += '' + '<table id="tblResultados" class="table table-hover table-striped table-bordered">' + '	<thead>' + '		<tr>' + '			<th>Consecutivo</th>' + '			<th>No. Actuaci&oacute;n / A&ntilde;o Actuaci&oacute;n</th>' + '			<th>Tipo carpeta</th>' + '			<th>S&iacute;ntesis</th>' + '			<th>Fecha registro</th>' + '		</tr>' + '	</thead>' + '	<tbody id="">';
            $.each(data, function(k, v) {
                //llena objeto para mostrar en tabla
                findContent.regs[k] = {
                    idActuacion: v.idActuacion,
                    numActuacion: v.numActuacion,
                    aniActuacion: v.aniActuacion,
                    cveTipoActuacion: v.cveTipoActuacion,
                    idReferencia: v.idReferencia,
                    numero: v.numero,
                    anio: v.anio,
                    cveTipocarpeta: v.cveTipocarpeta,
                    cveJuzgado: v.cveJuzgado,
                    cveTipojuzgado: v.cveTipojuzgado,
                    sintesis: v.sintesis,
                    observaciones: v.observaciones,
                    cveUsuario: v.cveUsuario,
                    activo: v.activo,
                    fechaRegistro: v.fechaRegistro, //fechaRegistro:dateFormat(v.fechaRegistro),
                    fechaActualizacion: v.fechaActualizacion, //fechaActualizacion:dateFormat(v.fechaActualizacion),
                    cveTipoNotificacion: v.cveTipoNotificacion,
                    descTipoCarpeta: v.descTipoCarpeta,
                    imputados: v.imputados,
                    medidascautelares: v.medidascautelares
                };
                var counter = parseInt(k) + 1;
                var txtSintesis = '';
                if (v.sintesis.length > 50) {
                    txtSintesis = v.sintesis.substring(0, 50) + '...';
                } else {
                    txtSintesis = v.sintesis;
                }
                tableContent += "<tr onclick='showInfo(" + k + ")'>";
                tableContent += '<td>' + counter + '</td>';
                tableContent += '<td>' + v.numActuacion + ' / ' + v.aniActuacion + '</td>';
                tableContent += '<td> ' + v.descTipoCarpeta + ' - ' + v.numero + '/' + v.anio + '</td>'; //
                tableContent += '<td>' + txtSintesis + '</td>';
                tableContent += '<td>' + v.fechaRegistro + '</td>'; //tableContent += '<td>' + dateFormat(v.fechaRegistro) + '</td>';
                tableContent += '</tr>';
            });
            if (idActuacion != '') {
                showInfo(0);
                return;
            }
            tableContent += '' + '	</tbody>' + '</table>';

            $('#tableSearch').html(tableContent);
            $('#tblResultados').DataTable({
                paging: false
            });
            getPages(page, cantReg);
            changeModule(5);
        } else {
            showMessage('No se encontraron resultados con los par&aacute;metro elegidos. Intente con otros.', 'warning');
        }
    });
}

/**
 * FunciOn para obtener las paginas de la tabla de resultados
 * @param {integer} page Es el nUmero de la pAgina a la que se cambiarA
 * @param {integer} cantReg Es el nUmero de registros a mostrar en la pAgina
 */
function getPages(page, cantReg) {
    var tipoCarpeta = $('#select_mcautelares_carpeta_busqueda option:selected').val();
    tipoCarpeta = (tipoCarpeta != 0 ? tipoCarpeta : '');
    var numActuacion = $('#input_mcautelares_numero_busqueda').val();
    var anioActuacion = $('#input_mcautelares_anio_busqueda').val();
    var fechaInicial = '';
    var fechaFinal = '';
    if (tipoCarpeta == '' && numActuacion == '' && anioActuacion == '') {
        fechaInicial = $('#input_mcautelares_finicial_busqueda').val();
        fechaFinal = $('#input_mcautelares_ffinal_busqueda').val();
    }
    var cveJuzgadoBusqueda = ($('#cveTipoJuzgado_busqueda').val() != 0) ? $('#cveTipoJuzgado_busqueda').val() : cveJuzgado;
    var totalPages = 0;
    $.ajax({
        type: 'POST',
        async: false,
        data: {
            cveTipoCarpeta: tipoCarpeta,
            numero: numActuacion,
            anio: anioActuacion,
            cveJuzgado: cveJuzgadoBusqueda,
            cveTipoActuacion: cveTipoActuacion,
            txtFecInicialBusqueda: fechaInicial,
            txtFecFinalBusqueda: fechaFinal,
            activo: 'S',
            cantxPag: cantReg,
            accion: 'getPaginas'
        },
        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
        success: function(response) {
            var json = "";
            json = eval("(" + response + ")");
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
    var objeto = findContent.regs[posicion];
    //muestra formulario
    changeDivForm(1);
    disabledFields(true, false);
    //llena formulario principal
    $('#idActuacion').val(objeto.idActuacion);
    $('#cveTipoJuzgado').val(objeto.cveJuzgado + '/' + objeto.cveTipojuzgado);
    $('#select_mcautelares_carpeta').val(objeto.cveTipocarpeta);
    $('#input_mcautelares_numero').val(objeto.numero);
    $('#input_mcautelares_anio').val(objeto.anio);
    $('#input_mcautelares_sintesis').val(objeto.sintesis);
    $('#select_mcautelares_notificacion').val(objeto.cveTipoNotificacion);
    localStorage.setItem("textoObservaciones", objeto.observaciones);
    //llenareditor(objeto.observaciones);
    //muestra imputados
    imputadosTable(objeto.imputados, objeto.cveTipocarpeta);
    //muestra medidas cautelares
    medidasCautelaresTabla(objeto.medidascautelares);
    //info carpetas
    carpetasJudiciales.idReferencia = objeto.idReferencia;
    carpetasJudiciales.numero = objeto.numero;
    carpetasJudiciales.anio = objeto.anio;
    carpetasJudiciales.cveTipoCarpeta = objeto.cveTipocarpeta;
    carpetasJudiciales.cveJuzgado = objeto.cveJuzgado;
    //llena array de datos para apelacion de imputados
    $('#label_mcautelares_text1').empty().append('No. de ' + objeto.descTipoCarpeta);
    //limpia tabla de resultados
    $('#auto_tbody').html("");
    //desbloquea el boton de eliminar
    if (crud.delete == 'S') {
        $('#btn_mcautelares_delete').prop("disabled", false);
    }
    $('#btn_mcautelares_delete').show();
    llenareditor(objeto.observaciones);
    changeDivForm(1);
    $('#inputPDF').show();
    $('#inputVisor').show();
    muestraOcultaBotones();
}

/*
* Si se consulta un formulario de primera instancia desde una adscripcion de 
* segunda instancia, se ocultan los botones del formulario, excepto 
* el boton de visor de documentos
*/
muestraOcultaBotones = function() {
    var cveAdscripcion = $("#SysCveAdscripcion").val();
    var idActuacion = $("#idActuacion").val();
    var cveJuzgadoArbol = $("#juzgadoOrigenArbol").val();
    var instanciaSesion = obtenerInstanciaSesion(cveAdscripcion);
    
//    if ( instanciaSesion == 2 && origen == "" ) {
//        $("#idAgregar").parent().hide();
//        $("#inputGuardar").parent().hide();
//        $("#inputLimpiar").parent().hide();
//        $("#inputConsultar").parent().hide();
//        $("#inputEliminar").parent().hide();
//        $("#inputImprimir").parent().hide();
//        $("#inputPDF").parent().hide();
//    }
    if ( idActuacion != "" ) {
        if ( cveJuzgadoArbol != 0 ) {
            
            if ( cveJuzgadoArbol != cveAdscripcion ) {
                $("#btn_buscaCarpeta").hide();
                $("#btn_mcautelares_save").parent().hide();
                $("#btn_mcautelares_clean").parent().hide();
                $("#btn_mcautelares_search").parent().hide();
                $("#btn_mcautelares_delete").parent().hide();
                $("#inputPDF").parent().hide();
            }
        } else {
            
            if ( instanciaSesion == 2 && cveJuzgadoArbol == 0 ) {
                $("#btn_buscaCarpeta").hide();
                $("#btn_mcautelares_save").parent().hide();
                $("#btn_mcautelares_clean").parent().hide();
                $("#btn_mcautelares_search").parent().hide();
                $("#btn_mcautelares_delete").parent().hide();
                $("#inputPDF").parent().hide();
            }
        }
    }
};
/*
* Funcion para consultar la instancia de la adscripcion donde el usuario
* se encuentra logueado 
* @param {type} cveAdscripcion
* @returns {String}         */
obtenerInstanciaSesion = function(cveAdscripcion){
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

function medidasCautelaresTabla(objeto) {
    Apelaciones.apelacion = [];
    Apelaciones.contador = 0;
    var apelacion = '';
    var boton = '';
    var fullId = '';
    var apelacion = '';
    $.each(objeto, function(indice, medida) {
        apelacion = (medida.Apelada == 'N' ? 0 : 1);
        boton = (medida.Apelada == 'N' ? true : false);
        agregaRenglonMedida(medida.idImputadoCarpeta, medida.cveTipoMedidaCautelar, medida.desMedidaCautelar);
        fechaMedida();
        fullId = medida.idImputadoCarpeta + '-' + medida.cveTipoMedidaCautelar;
        comboEspecial('autoridadesemisoras/AutoridadesemisorasFacade.Class.php', 'select_mcautelares_autoridad_' + fullId, medida.cveAutoridadEmisora, 'cveAutoridadEmisora', 'desAutoridadEmisora');
        $('#input_mcautelares_finicial_' + fullId).val(medida.fechaInicio);
        $('#input_mcautelares_ffinal_' + fullId).val(medida.fechaTermina);
        //habilita el combo y boton de ediciOn
        $('#select_mcautelares_apelacion_' + fullId).prop('selectedIndex', apelacion).prop('disabled', false);
        editButton(fullId, boton);
        //Agrega apelacion al array
        if (medida.Apelada == 'S') {
            apelacion = medida.autosapelados; // v.autosapelados[0];
            Apelaciones.apelacion[Apelaciones.contador] = {
                id: Apelaciones.contador,
                fullId: fullId,
                idImputadoCarpeta: medida.idImputadoCarpeta,
                idMedidaCautelar: medida.cveTipoMedidaCautelar,
                apelacionSentido: apelacion.cveSentido,
                apelacionNumero: apelacion.numToca,
                apelacionAnio: apelacion.numAnio,
                apelacionSala: apelacion.cveSala
            };
            Apelaciones.contador++;
        }
        verificaCantidadMedidas(medida.idImputadoCarpeta);
    });
}

function imputadosMedidaCautelar(idReferencia, idActuacion) {
    $.ajax({
        type: "POST",
        async: false,
        dataType: "text",
        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
        data: {
            idActuacion: idActuacion,
            idReferencia: idReferencia,
            accion: 'imputadosMedidaCautelar'
        },
        success: function(response) {
            imputadosMC = response;
        },
        error: function(objeto, quepaso, otroobj) {
            showMessage(quepaso, 'warning');
        }
    });
}

function comboEspecial(url, combo, idSelected, key, description) {
    $.post('../fachadas/sigejupe/' + url, {
            activo: 'S',
            accion: 'consultar'
        },
        function(response) {
            var object = eval("(" + response + ")");
            var options = '<option value="0">--SELECCIONE--</option>';
            if (object.totalCount > 0) {
                $.each(object.data, function(k, v) {
                    options += '<option value="' + v[key] + '">' + v[description] + '</option>';
                });
                $('#' + combo).empty().append(options);
                $('#' + combo).val(idSelected);
            } else {
                showMessage('No existen registros', 'warning');
            }
        });
    return;
}

/**
 * Funcion para mostrar del Auto seleciconado de la bUsqueda, los imputados vinculados
 * @param {array} imputados Es el array con los IDs de los imputados
 */
function imputadosTableCheck(imputados, tipoCarpeta) {
    Apelaciones.apelacion = [];
    Apelaciones.contador = 0;
    $.each(imputados, function(k, v) {
        var idImputadoCarpeta = v.idImputadoCarpeta;
        var apelacion = (v.Apelada == 'N' ? 0 : 1);
        var boton = (v.Apelada == 'N' ? true : false);
        //marca check
        $('#imputadoCheck_' + idImputadoCarpeta).prop('checked', true);
        //llena los campos del imputado
        var auxFecha = v.fechaInicio.split(' ');
        var fechaInicio = auxFecha[0].split('-');
        auxFecha = v.fechaTermina.split(' ');
        var fechaTermina = auxFecha[0].split('-');
        fechaInicio = fechaInicio[2] + '/' + fechaInicio[1] + '/' + fechaInicio[0];
        fechaTermina = fechaTermina[2] + '/' + fechaTermina[1] + '/' + fechaTermina[0];
        comboEspecial('tiposmedidascautelares/TiposmedidascautelaresFacade.Class.php', 'select_mcautelares_medidas_' + idImputadoCarpeta, v.cveTipoMedidaCautelar, 'cveTipoMedidaCautelar', 'desTipoMedidaCautelar');
        comboEspecial('autoridadesemisoras/AutoridadesemisorasFacade.Class.php', 'select_mcautelares_autoridad_' + idImputadoCarpeta, v.cveAutoridadEmisora, 'cveAutoridadEmisora', 'desAutoridadEmisora');
        $('#input_mcautelares_finicial_' + idImputadoCarpeta).val(fechaInicio);
        $('#input_mcautelares_ffinal_' + idImputadoCarpeta).val(fechaTermina);
        //habilita el combo y boton de ediciOn
        $('#select_mcautelares_apelacion_' + idImputadoCarpeta).prop('selectedIndex', apelacion).prop('disabled', false);
        editButton(idImputadoCarpeta, boton)
            //Agrega apelacion al array
        var apelacion = v.autosapelados;
        Apelaciones.apelacion[Apelaciones.contador] = {
            id: Apelaciones.contador,
            idImputadoCarpeta: idImputadoCarpeta,
            apelacionSentido: apelacion.cveSentido,
            apelacionNumero: apelacion.numToca,
            apelacionAnio: apelacion.numAnio,
            apelacionSala: apelacion.cveSala
        };
        Apelaciones.contador++;
    });
    return;
}

function returnFromApelacion() {
    addApelacion();
    changeDivForm(4);
    var contenidoDocumento = localStorage.contenidoDocumento;
    llenareditor(contenidoDocumento);
    localStorage.removeItem("contenidoDocumento");
}

/**
 * Funcion para verificar si los campos capturados de la apelacion contiene informaciOn
 * @param {object} apelacion Es el objeto con los campos de la apelaciOn
 * @param {boolean} estado Regresa -true- si al menos un elemento del objeto contiene informacion, o -false- en caso de estar vacio el objeto
 */
function verifyApelaciones(apelacion) {
    var estado = false;
    var counter = 0;
    var totalElements = apelacion.length;
    if (totalElements > 0) {
        $.each(apelacion, function(index, value) {
            if (value['value'] == 0 || value['value'] == '') {
                counter++;
            }
        });
        if (totalElements != counter) {
            //si el numero de elementos es diferente al contador, significa que al menos un elemento del array si tiene informacion
            estado = true;
        }
    }
    return estado;
}

/**
 * Al cambiar el combo de apelacion abre el modulo para capturar o eliminar una apelaciOn 
 */
$("#divFormulario").on('change', '.imputadoApelacion', function() {
    var contenidoDocumento = editor.getContent();
    localStorage.contenidoDocumento = contenidoDocumento;
    var selectId = $(this).prop('id');
    var idImputadoCarpeta = selectId.split('_');
    idImputadoCarpeta = idImputadoCarpeta[idImputadoCarpeta.length - 1]
    var value = $('#' + selectId + ' option:selected').val();
    if (value == 'S') {
        loadApelacionInfo(idImputadoCarpeta);
        $('#' + selectId).prop('selectedIndex', 'N');
    } else if (value == 'N') {
        //se elimina del array Apelaciones
        findApelacion(idImputadoCarpeta);
        editButton(idImputadoCarpeta, true);
    }
});

function colapsaAcordeon(idImputado) {
    var idImputado = idImputado || '';
    var totalCheck = $('input:checkbox').length;
    //colapsa todos los elementos del acordeon 
    for (var i = 1; i <= totalCheck; i++) {
        //colapsa todos excepto el activo
        if (i != idImputado) {
            $('#collapse' + i).removeClass("in");
        }
    }
}

llenareditor = function(value) {
    try {
        editor.ready(function() {
            setTimeout(function() {
                editor.setContent(value, true);
            }, 500);
        });
    } catch (e) {
        alert(e);
    }
};

cargaJuzgados = function() {
    var strDatos = "accion=distrito";
    var hiddencveAdcripcion = $("#SysCveAdscripcion").val();
    var hiddencveJuzgadoOrigenArbol = $("#juzgadoOrigenArbol").val();
    var idActuacion = $("#idActuacion").val();
    var origen = $("#origen").val();
    if ( idActuacion != "" && idActuacion > 0 ) {
        if ( hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol ) {
            if ( origen == "" ) {
                strDatos = "accion=getJuzgadoActuacion&idActuacion=" + idActuacion;
            }
        } else {
            if ( hiddencveJuzgadoOrigenArbol != 0 ) {
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
        success: function(datos) {
            var json = "";
            json = eval("(" + datos + ")");
            if (json.totalCount > 0) {
                $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").empty();
                        //.append('<option value="0/0">Seleccione una opci&oacute;n</option>');
                for (var i = 0; i < json.totalCount; i++) {
                    if (json.data[i].cveTipojuzgado == 1) { //limita a mostrar solo el/los juzgados de control
                        $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                    }
                    if (cveJuzgado == json.data[i].cveJuzgado) {
                        $("#cveTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                        $("#cveTipoJuzgado_busqueda option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                    }
                        $('#cveTipoJuzgadoAlt').val(json.data[i].cveTipojuzgado);
                    }
            } else {
                $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").empty().append('<option value="0/0">Sin registros</option>');
            }
            cargaTipoCarpeta();
        },
        error: function(objeto, quepaso, otroobj) {
            showMessage("Error en la peticion:\n\n" + quepaso, 'error');
        }
    });
};

cargaTipoCarpeta = function(seccion) {
    var seccion = seccion || 1;
    $('#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda').empty();
    var tipoJuzgado = (seccion == 1) ? $("#cveTipoJuzgado").val().split("/") : $("#cveTipoJuzgado_busqueda").val().split("/");
    var strDatos = "accion=consultar";
    $.ajax({
        type: "POST",
        url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
        data: strDatos,
        async: false,
        dataType: "html",
        success: function(datos) {
            var json = "";
            json = eval("(" + datos + ")");
            if (json.totalCount > 0) {
                $("#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                for (var i = 0; i < json.totalCount; i++) {
                    switch (tipoJuzgado[1]) {
                        case "1": // tipo de juzgado de control
                            if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1" || json.data[i].cveTipoCarpeta == "7") { // control, auxiliar, exhorto
                                $("#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            }
                            break;
                        case "2": // tipo de juzgado juicio
                            if (json.data[i].cveTipoCarpeta == "3" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // exhorto, amparo 
                                $("#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            }
                            break;
                        case "3": // tipo de juzgado ejecucion
                            if (json.data[i].cveTipoCarpeta == "5" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // exhorto, amparo
                                $("#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            }
                            break;
                        case "4": // tipo de juzgado tribunal
                            if (json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // exhorto, amparo 
                                $("#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            }
                            break;
                        case "5":
                            break;
                    }
                }
            }
        },
        error: function(objeto, quepaso, otroobj) {
            showMessage("Error en la peticion:\n\n" + quepaso, 'error');
        }
    });
};

function selectMedidasCautelares(idImputado) {
    var opcionTxt = $('#select_mcautelares_medidas_' + idImputado).find('option:selected').text();
    var opcionId = $('#select_mcautelares_medidas_' + idImputado).find('option:selected').val();
    var idCheck = '';
    var medidas = '';
    var idRenglon = '';
    var existeMedida = false;
    $.each($('.imputadoCheck'), function(llave, valor) {
        idCheck = $(this).prop('id');
        idCheck = idCheck.split('_')[1];
        //valida que la medida no este aplicada en el imputado
        $.each($('.renglonMedida'), function(llave2, valor2) {
            idRenglon = $(this).prop('id');
            if (idRenglon == (idImputado + '/' + opcionId)) {
                existeMedida = true;
                return;
            }
        });
        var renglonMedidaImputado = '';
        //inserta en la tabla si la medida no la tiene el imputado
        if (idImputado == idCheck && existeMedida == false) {
            agregaRenglonMedida(idImputado, opcionId, opcionTxt);
            fechaMedida();
            fillCombo(['select_mcautelares_autoridad_' + idImputado + '-' + opcionId], 'autoridadesemisoras/AutoridadesemisorasFacade', 'cveAutoridadEmisora', 'desAutoridadEmisora');
        }
    });
    $('#select_mcautelares_medidas_' + idImputado).val(0);
    verificaCantidadMedidas(idImputado);
}

function agregaRenglonMedida(idImputado, opcionId, opcionTxt) {
    var renglonMedidaImputado = '<tr id="' + idImputado + '/' + opcionId + '" class="renglonMedida"><td style="width:90%;"><p><a id="medidaImputado_' + idImputado + '-' + opcionId + '" style="text-decoration:underline;" role="button" data-toggle="collapse" href="#collapseMedida_' + idImputado + '-' + opcionId + '" onclick="medidasImputadosAccordion(\'' + idImputado + '-' + opcionId + '\');" aria-expanded="false" aria-controls="collapseExample" class="collapseMedida">' + opcionTxt + '</a></p><div data-medidaImputado="' + idImputado + '-' + opcionId + '"  class="collapse" id="collapseMedida_' + idImputado + '-' + opcionId + '"><div class="well">' + '<div class="form-group"> <!-- Autoridad Emisora -->' + '				<label class="control-label col-xs-12 col-sm-2 col-md-2 needed">Autoridad emisora</label>' + '				<div class="col-xs-12 col-sm-10 col-md-10">' + '					<select id="select_mcautelares_autoridad_' + idImputado + '-' + opcionId + '" class="form-control" tabindex=""></select>' + '				</div>' + '			</div>' + '			<div class="form-group">' + '				<label class="control-label col-xs-12 col-sm-2 col-md-2 needed">Periodo de tiempo</label>' + '				<div class="col-xs-6 col-sm-4 col-md-3">' + '					<input type="text" id="input_mcautelares_finicial_' + idImputado + '-' + opcionId + '" placeholder="FECHA DE INICIO" class="form-control fecha"/>' + '				</div>' + '				<div class="col-xs-6 col-sm-4 col-md-3">' + '				 	<input type="text" id="input_mcautelares_ffinal_' + idImputado + '-' + opcionId + '" placeholder="FECHA DE TERMINO" class="form-control fecha"/>' + '				</div>' + '				<div class="col-xs-2">' + '				</div>' + '			</div>' + '			<div class="form-group"> <!-- Apelacion -->' + '				<label class="control-label col-xs-12 col-sm-2 col-md-2">Apelaci&oacute;n del imputado</label>' + '				<div class="col-xs-12 col-sm-8 col-md-7">' + '					<select id="select_mcautelares_apelacion_' + idImputado + '-' + opcionId + '" class="imputadoApelacion">' + '						<option value="N">NO</option>' + '						<option value="S">SI</option>' + '					</select>' + '					<button id="edit_' + idImputado + '-' + opcionId + '" onclick="loadApelacionInfo(\'' + idImputado + '-' + opcionId + '\')" type="button" class="btn btn-default btn-sm" aria-label="Left Align" disabled="disabled">' + '						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Apelaci&oacute;n' + '					</button>' + '				</div>' + '			</div> <!-- Apelacion/ -->' + ' 		<div class="form-group"><div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1" id="mensajeMedida_' + idImputado + '-' + opcionId + '"></div></div>' + '</div></div></td><td style="width:10%;"><button type="button" class="btn btn-danger" onclick="$(this).parent().parent().remove(); eliminaRegistroMedidaCautelar(' + idImputado + ',' + opcionId + ');"><span class="glyphicon glyphicon-trash " aria-hidden="true"></span></button></td></tr>';

    $('#tablaMedidasCautelares_' + idImputado).append(renglonMedidaImputado);
    return;
}

function eliminaRegistroMedidaCautelar(idImputado, idMedida) {
    verificaCantidadMedidas(idImputado);
    //elimina del array la informaciOn del Imputado
    findMedida(idImputado + '-' + idMedida);
    //elimina del array la informacion de la apelacion del imputado
    findApelacion(idImputado + '-' + idMedida);
}

function verificaCantidadMedidas(idImputado) {
    //cuenta cantidad de medidas por imputado
    var totalMedidasImputado = $('#tablaMedidasCautelares_' + idImputado + ' tr').length;
    //si la cantidad de medidas es igual o mayor a 2, habilita el check para la aplicacion de los mismos datos; en caso contrario bloquea el check y limpia los campos
    if (totalMedidasImputado >= 2) {
        $('#medidasDatosIguales_' + idImputado).prop('disabled', false);
    } else {
        $('#medidasDatosIguales_' + idImputado).prop('disabled', true).prop('checked', false);
        $('#divMedidasDatosIguales_' + idImputado).hide();
        $('#select_mcautelares_autoridad_' + idImputado).val(0);
        $('#input_mcautelares_finicial_' + idImputado + ', #input_mcautelares_ffinal_' + idImputado).val('');
    }
}

/*
 * Oculta todos los DIVs de las medidas cautelares, excepto la activa
 */
function medidasImputadosAccordion(id) {
    var id = id || '0-0';
    var idImputado = id.split('-')[0];
    var idDiv = '';
    var divActivo = '';
    $('#tablaMedidasCautelares_' + idImputado).find('div').each(function(k, v) {
        idDiv = $(this).prop('id');
        if (idDiv != '') {
            if (idDiv != 'collapseMedida_' + id) {
                $(this).removeClass('in');
            } else {
                divActivo = $(this);
            }
        }
    });
};

var listaMedidasImputados = {
    medidasImputados: [],
    contadores: []
};

/**
 * Al presionar el check de los imputados valida habilita/deshabilita el combo de apelaciOn
 */
$('#divFormulario').on('click', '.imputadoCheck', function(e) {
    var selectedId = $(this).prop('id');
    var idImputado = selectedId.split('_')[1];
    var check = $('#' + selectedId).prop('checked');
    if (check) {
        colapsaAcordeon(idImputado);
        //abre el acordeon
        $('#collapse' + idImputado).collapse("show");
    } else {
        var r = confirm("¿Realmente desea desasignar a este Imputado? ");
        if (r == true) {
            $('#' + selectedId).prop('checked', false);
            colapsaAcordeon();
            //cierra el acordeon
            $('#collapse' + idImputado).collapse("hide");
            //elimina del array la informaciOn del Imputado
            findMedida2(idImputado);
            //elimina del array la informacion de la apelacion del imputado
            findApelacion2(idImputado);
            //limpia los campos del imputado
            cleanImputadoInfoFields(idImputado)
                //reset del boton de edicion de apelacion
            editButton(idImputado, true);
            //quita check de mismos datos
            $('#medidasDatosIguales_' + idImputado).prop('checked', false);
            //oculta div de mismos datos
            $('#divMedidasDatosIguales_' + idImputado).hide();
            //elimina contenido de la tabla de medidas
            $('#tablaMedidasCautelares_' + idImputado).empty();
        } else {
            $('#' + selectedId).prop('checked', true);
        }
    }
});

/**
 * Cambio de etiquetas al momento de cambiar el combo de carpetas
 */
$('#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda').on('change', function() {
    var label = $(this).find('option:selected').text();
    var key = $(this).find('option:selected').val();
    label = (key > 0 ? label : '');
    $('#label_mcautelares_text1, #label_mcautelares_text2').empty().html("No. de " + label + "");
    //Limpia los campos de captura de llaves al cambiar la Carpeta
    cleanFields(3);
});

/**
 * Al salir del foco del nUmero y año de la causa, consulta la carpeta judicial
 */
$("#btn_buscaCarpeta").on('click', function() {
    var carpeta = $('#select_mcautelares_carpeta option:selected').val();
    var causa_numero = $('#input_mcautelares_numero').val();
    var causa_anio = $('#input_mcautelares_anio').val();
    var cveJuzgadoBusqueda = $('#cveTipoJuzgado').val();
    cveJuzgadoBusqueda = cveJuzgadoBusqueda.split('/')[0];
    var activo = 'S';
    var accion = 'obtenerAuto';
    var idActuacion = idActuacion || '';
    var idCarpetaJudicial = idCarpetaJudicial || '';
    var mensajeBusqueda = '';
    if (carpeta != '' && carpeta > 0) {
        if (causa_numero != '') {
            if (causa_anio != '') {
                $.ajax({
                    async: false,
                    type: 'POST',
                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                    data: {
                        idActuacion: idActuacion,
                        numero: causa_numero,
                        anio: causa_anio,
                        cveTipoCarpeta: carpeta,
                        cveJuzgado: cveJuzgadoBusqueda,
                        cveTipoActuacion: cveTipoActuacion,
                        activo: activo,
                        accion: accion
                    }
                }).done(function(response) {
                    var object = eval("(" + response + ")");
                    var totalRecords = object.totalCount;
                    var message = '';
                    if (totalRecords > 0) {
                        var data = object.data;
                        var referencia = object.referencia[0];
                        carpetasJudiciales.idReferencia = referencia.idReferencia;
                        carpetasJudiciales.numero = referencia.numero;
                        carpetasJudiciales.anio = referencia.anio;
                        carpetasJudiciales.cveTipoCarpeta = referencia.cveTipoCarpeta;
                        carpetasJudiciales.cveJuzgado = referencia.cveJuzgado;
                        cleanFields(4);
                        disabledFields(false, false);
                        $('#accordion').empty();
                        imputadosTable(response);
                        $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden", "true").after('').append('&nbsp;Datos encontrados.');
                    } else {
                        cleanFields(4);
                        disabledFields(false, true);
                        if ('text' in object) {
                            message = object.text;
                        } else {
                            message = 'Error.';
                        }
                        showMessage(message, 'information');
                        $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
                    }
                });
            } else {
                $('#input_mcautelares_anio').focus();
                mensajeBusqueda = 'Necesita ingresar el a&ntilde;o.';
                showMessage(mensajeBusqueda, 'warning');
                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + mensajeBusqueda);
            }
        } else {
            $('#input_mcautelares_numero').focus();
            mensajeBusqueda = 'Necesita ingresar el n&uacute;mero.';
            showMessage(mensajeBusqueda, 'warning');
            $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + mensajeBusqueda);
        }
    } else {
        $('#select_mcautelares_carpeta').focus();
        mensajeBusqueda = 'Necesita definir la carpeta.';
        showMessage(mensajeBusqueda, 'warning');
        $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + mensajeBusqueda);
    }
});

/**
 * ConfirmaciOn de la eliminaciOn de una Medida Cautelar
 */
$('#btn_mcautelares_delete').click(function() {
    showMessage('Esta a punto de eliminar la informaci&oacute;n.', 'warning');
    var response = confirm("¿Realmente desea eliminar el registro?");
    if (response) {
        $("#divAdvertencia").hide();
        deleteMedida()
        cleanFields();
        $('#btn_mcautelares_delete').prop("disabled", true);
        $('#btn_mcautelares_delete').hide();
    }
});

//validaciOn de teclas numEricas
$('#input_mcautelares_numero, #input_mcautelares_anio, #input_mcautelares_numero_busqueda, #input_mcautelares_anio_busqueda, #input_mcautelares_numerotoca, #input_mcautelares_aniotoca').keypress(validateNumber);
//validacion para cambio de foco en Intro
$('#input_mcautelares_numero').keypress(function(event) { changeFocus(event, 'input_mcautelares_anio'); });
$('#input_mcautelares_anio').keypress(function(event) { changeFocus(event, 'input_mcautelares_sintesis'); });
$('#input_mcautelares_sintesis').keypress(function(event) { changeFocus(event, 'select_mcautelares_notificacion'); });
$('#input_mcautelares_numero_busqueda').keypress(function(event) { changeFocus(event, 'input_mcautelares_anio_busqueda'); });
$('#input_mcautelares_numerotoca').keypress(function(event) { changeFocus(event, 'input_mcautelares_aniotoca'); });
$('#input_mcautelares_aniotoca').keypress(function(event) { changeFocus(event, 'select_mcautelares_salastoca'); });
//calendarios para la bUsqueda
$('#input_mcautelares_finicial_busqueda, #input_mcautelares_ffinal_busqueda').datepicker().on('changeDate', function(e) { $(this).datepicker('hide'); });

/**
 * Variable para almacenar la informacion de las carpetas judiciales
 */
var carpetasJudiciales = {
    idReferencia: 0,
    numero: 0,
    anio: 0,
    cveTipoCarpeta: 0,
    cveJuzgado: 0
};

/**
 * Variable para almacenar la informaciOn de las Apelaciones
 */
var Apelaciones = {
    apelacion: [],
    contador: 0
}

/**
 * Variable para almacenar registros en la bUsqueda
 */
var findContent = {
    regs: []
};

/**
 * Variable para almacenar los permisos del formulario
 */
var crud = {
    create: 'N',
    read: 'N',
    update: 'N',
    delete: 'N'
};

/**
 * Variable para almacenar las Medidas Cautelares
 */
var medidasCautelares = {
    data: [],
    counter: 0
}

/**
 * Variables varias
 */
var titulos = { 'titulo1': 'Medidas Cautelares ', 'titulo2': 'B&uacute;squeda', 'titulo3': 'Resultados', 'titulo4': 'Captura de Apelaci&oacute;n' };
var cveJuzgado = $('#SysCveAdscripcion').val();
var cveUsuario = $('#SysCveUsuarioSistema').val();
var cveTipoActuacion = 9;
var imputadosMC = '';

var medidasImputados = [];

function fechaMedida() {
    $('.fecha').datetimepicker({
        locale: 'es',
        sideBySide: false,
        format: "DD/MM/YYYY",
        ignoreReadonly: true
    });
}

function visorDocuemntos() {
    $.ajax({
        type: 'POST',
        url: 'visorpdf/index.php',
        data: { idCarpetaJudicial: "", idActuacion: $('#idActuacion').val(), cveTipoDocumento: 16 }, //malo
        async: false,
        dataType: 'html',
        beforeSend: function() {
            $('#visor').html('<h3>Consultando informaci&oacute;n ... espere.</h3>');
        },
        success: function(data) {
            $('#visor').html(data);
        },
        error: function(objeto, quepaso, otroobj) {
            $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. ' + otroobj + '</h3>');
            console.log('\nOBJ: ' + objeto + '\nQ: ' + quepaso + '\nO:' + otroobj)
        }
    });
};

function enviar() {
    var strDatos = "accion=generarJson";
    strDatos += "&cveTipo=2"; //2 = actuacion
    strDatos += "&cveTipoDocumento=16"; //tipo documento
    strDatos += "&idActuacion=" + $("#idActuacion").val();

    $.ajax({
        type: "POST",
        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
        data: strDatos,
        async: true,
        dataType: "html",
        beforeSend: function(objeto) {
            // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
        },
        success: function(datos) {
            var json = "";
            json = eval("(" + datos + ")"); //Parsear JSON
            if (json.totalCount > 0) {
                generaPDF(datos);
            }
        },
        error: function(objeto, quepaso, otroobj) {
            showMessage("Error en la peticion:\n\n" + quepaso, 'error');
        }
    });

};

//funcion para bloquear los campos y evitar cambios cuando viene del arbol
function bloqueaCamposLlave() {
    $('#cveTipoJuzgado, #select_mcautelares_carpeta, #input_mcautelares_numero, #input_mcautelares_anio').prop('disabled', true);
}

function obtieneDatosCarpeta() {
    var idCarpetaJudicialArbol = $('#idCarpetaJudicialArbol').val();
    var cveTipoCarpetaArbol = $('#cveTipoCarpetaArbol').val();
    $('#select_mcautelares_carpeta').val(cveTipoCarpetaArbol);
    var urlFacade = "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php";
    var dataFacade = "accion=consultar&activo=S&idCarpetaJudicial=" + idCarpetaJudicialArbol;
    $.ajax({
        async: false,
        type: 'POST',
        url: urlFacade,
        data: dataFacade
    }).done(function(response) {
        var objeto = eval('(' + response + ')');
        var data = '';
        if (objeto.totalCount > 0) {
            data = objeto.data[0];
            $('#input_mcautelares_numero').val(data.numero);
            $('#input_mcautelares_anio').val(data.anio);
        }
    });
    //obtencion de los datos para la seleccion del combo de juzgado y relacionado con 
    var urlFacade = "../fachadas/sigejupe/actaminima/ActaminimaFacade.Class.php";
    var dataFacade = "accion=carpetaArbol&idCarpetaJudicial=" + idCarpetaJudicialArbol;
    $.ajax({
        async: false,
        type: 'POST',
        url: urlFacade,
        data: dataFacade
    }).done(function(response) {
        var objeto = eval('(' + response + ')');
        $('#cveTipoJuzgado').val(objeto.idJuzgado);
    });
}

$(function() {
    setPermissions();
    disabledFields(false, true);
    //muestra contenido de notificaciones
    fillCombo(['select_mcautelares_notificacion'], 'tiposnotificaciones/TiposnotificacionesFacade', 'cveTipoNotificacion', 'desTipoNotificacion');
    //muestra contenido de sentidos
    fillCombo(['select_mcautelares_sentidotoca'], 'sentidosresoluciones/SentidosresolucionesFacade', 'cveSentido', 'desSentido');
    cargaJuzgados(); //carga los Juzgados
    //ObtenciOn de salas para los imputados a travEs del webservice 
    getSalas();
    //inicializacion del editor
    editor = UE.getEditor('input_mcautelares_observaciones');
    editor.ready(function() {
        editor.setContent();
    });

    medidasCautelares.data = [];
    Apelaciones.apelacion = [];

    //validacion de datos para el arbol
    if ($('#procedencia').val() == 1) {
        if ($('#idActuacion').val() != '' && $('#idActuacion').val() != 0) { //idActuacionArbol
            findMedidasCautelares($('#idActuacion').val()); //idActuacionArbol
        } else if ($('#idCarpetaJudicialArbol').val() != '' && $('#cveTipoCarpetaArbol').val() != '') { //no es de actuacion
            obtieneDatosCarpeta();
        }
        $('.botonesArbol').hide();
        bloqueaCamposLlave();
    }
});
