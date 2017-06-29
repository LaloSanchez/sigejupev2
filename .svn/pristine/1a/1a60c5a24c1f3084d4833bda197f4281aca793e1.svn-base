                <div class="page-header position-relative">
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div id="simplewizard" class="wizard" data-target="#simplewizard-steps">
                                <ul class="steps">
                                    <li data-target="#simplewizardstep1" class="active"><span class="step">1</span>Paso 1<span class="chevron"></span></li>
                                    <li data-target="#simplewizardstep2"><span class="step">2</span>Paso 2<span class="chevron"></span></li>
                                    <li data-target="#simplewizardstep3"><span class="step">3</span>Paso 3<span class="chevron"></span></li>
                                    <li data-target="#simplewizardstep4"><span class="step">4</span>Paso 4<span class="chevron"></span></li>
                                    <li data-target="#simplewizardstep5"><span class="step">5</span>Paso 5<span class="chevron"></span></li>
                                    <li data-target="#simplewizardstep6"><span class="step">6</span>Paso 6<span class="chevron"></span></li>
                                    <li data-target="#simplewizardstep7"><span class="step">7</span>Paso 7<span class="chevron"></span></li>
                                </ul>
                            </div>
                            <div class="step-content" id="simplewizard-steps">
                                <div class="step-pane active" id="simplewizardstep1"><h3>Datos de la Audiencia</h3>
                                    <div id="divPaso1" data-rel="cat_solicitudesaudiencias">
                                        <iframe src="js/controles/pasos/paso1.php" width=100% height=500></iframe>
                                    </div>
                                </div>
                                <div class="step-pane" id="simplewizardstep2"><h3>Datos del/los Imputado(s)</h3>
                                    <div id="divPaso2" data-rel="cat_imputadossolicitudes">
                                          <iframe src="js/controles/pasos/paso2.php" width=100% height=500></iframe>
                                    </div>
                                </div>
                                <div class="step-pane" id="simplewizardstep3"><h3>Datos del/los Ofendido(s)</h3>
                                    <div id="divPaso3" data-rel="">
                                        
                                    </div>
                                </div>
                                <div class="step-pane" id="simplewizardstep4"><h3>Datos del/los Delito(s)</h3>
                                    <div id="divPaso4" data-rel="cat_delitossolicitudes">
                                        
                                    </div>
                                </div>
                                <div class="step-pane" id="simplewizardstep5"><h3>Relación Imputados, Ofendidos y Delitos</h3>
                                    <div id="divPaso5" data-rel="cat_impofedelsolicitudes">
                                        
                                    </div>
                                </div>
                                <div class="step-pane" id="simplewizardstep6"><h3>Resumen</h3>
                                    <div id="divPaso6" data-rel="">
                                        
                                    </div>
                                </div>
                                <div class="step-pane" id="simplewizardstep7"><h3>Resumen</h3>
                                    <div id="divPaso7" data-rel="">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="actions actions-footer" id="simplewizard-actions">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm btn-prev"> <i class="fa fa-angle-left"></i>Regresar</button>
                                    <button type="button" class="btn btn-default btn-sm btn-next" data-last="Terminar">Continuar<i class="fa fa-angle-right"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="js/controles/pasos/paso1.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $('#simplewizardinwidget').wizard();
            

            var wizard = $('#simplewizard').wizard();

            wizard.on('finished', function (e) {
                Notify('Thank You! All of your information saved successfully.', 'bottom-right', '5000', 'blue', 'fa-check', true);
            });

            EjecutarPaso("#divPaso1");

            wizard.on('changed', function (e) {
                var info = $('#simplewizard').wizard('selectedItem');

                var paso = "#divPaso" + info.step;

                EjecutarPaso(paso);

            });


            function EjecutarPaso(paso) {
                var id_tabla                = $(paso).data('rel');
                var carga_ruta              = peticion_ajax + "ListarCampos_Genericos&tabla=" + id_tabla;
                var registro_ruta           = peticion_ajax + "Registrar_Generico&tabla=" + id_tabla;
                var edicion_ruta            = peticion_ajax + "Datos_Genericos&tabla=" + id_tabla;
                var borrar_ruta             = peticion_ajax + "Baja";
                var datos_referencia_ruta   = peticion_ajax + "Datos_Referencia";
                var edicion_ref_ruta        = peticion_ajax + "Valores_Referencia"; 
                var carga_tabla             = peticion_ajax + "procesar_tabla_generica&tabla=" + id_tabla + "&f=s&columnas=sNombre,nuc,numeroimputados,consignacion,iId";

                var datos_cargados  = [];
                var edicion = false;
                var campos = [];
                var tabs = [];
                var cajas_contenido = [];
                var cajas = [];
                var hayimagen = false;

                if($(this).data('rel') == 'editar')  {
                    var datos_ruta = edicion_ruta + "&id=" + $(this).data("id");
                    var id_edicion = $(this).data("id");
                    $.ajax({
                        async: false,
                        url: datos_ruta,
                        dataType: "json"
                    }).done(function( json_usuario ) {
                        if(json_usuario.r) {
                            datos_cargados = json_usuario.id;
                            edicion = true;
                        }   else    {
                            alert("Error al hacer la petición");
                            return false;
                        }
                    });
                }

                $.getJSON( carga_ruta, function( json ) {

                    if(edicion) {
                        var nuevo_campo = {
                            defecto: null,
                            etiqueta: "",
                            longitud: 100,
                            nombre: "iId",
                            nulo: "YES",
                            regex: "",
                            tab: "",
                            tipo: "int"
                        };

                        json[100] = nuevo_campo;
                    }

                    $.each(json, function(campo, valor)    {
                        if(campo == 'tabs') {
                            var contador_tabs = 0;
                            var estado_tab = "";
                            var estado_caja = "";

                            $.each(valor, function(campo_tab, valor_tab)    {

                                if(contador_tabs == 0)  {
                                    estado_tab = 'class="active"';
                                    estado_caja = 'tab-pane in active';
                                }   else    {
                                    estado_tab = '';
                                    estado_caja = 'tab-pane';
                                }
                                tabs.push('<li '+estado_tab+'><a data-toggle="tab" href="#'+valor_tab+'">'+valor_tab+'</a></li>');

                                var div_tab_contenido = $("<div/>", {
                                    "id": valor_tab,
                                    "class": estado_caja,
                                    html: form
                                });

                                cajas.push(valor_tab);
                                cajas_contenido.push(div_tab_contenido);

                                contador_tabs++;
                            });
                        }
                    });

                    $.each(json, function(campo, valor)    {
                        if(campo != 'tabs') {
                            if(valor.nombre == "REFERENCIA")    {

                                var columnas_tablas = valor.referencia_tabla;
                                var columnas = columnas_tablas.split(",");
                                var th_tabla = "";
                                var id_campo = "ref_" + valor.defecto;

                                var input = $('<select multiple="multiple" style="width:100%;" class="multiselect2" id="'+id_campo+'" name="'+id_campo+'[]"><option></option></select>');
                                var select_tabla = '<input type="hidden" id="'+id_campo+'_tabla" name="'+id_campo+'_tabla" value="'+valor.regex+'"/>';
                                var select_campo = '<input type="hidden" id="ref_campo" name="ref_campo" value="'+valor.nulo+'"/>';

                                var div_input = $("<div/>", {
                                    "class": "col-sm-9"
                                }).append(input).append(select_tabla).append(select_campo).append($("<hr/>"));

                                var label = $("<label/>", {
                                    "for": id_campo, 
                                    "class": "col-sm-3 control-label no-padding-right", 
                                    html: valor.etiqueta 
                                });

                                var div_campo = $("<div/>", {
                                    "class": "form-group"
                                }).append(label).append(div_input);

                                for(var c=0;c<columnas.length; c++) {
                                    th_tabla += "<th>" + columnas[c] + "</th>";
                                }

                                var tabla = "<table id=\"ref_searchable\" class=\"table table-bordered table-hover table-striped table-condensed flip-content\" data-columnas=\""+valor.referencia_valor+"\" data-tabla=\""+valor.defecto+"\"><thead>"+th_tabla+"</thead><tbody></tbody</table>";

                                var div_tabla = $("<div/>", {
                                    "class": "flip-scroll"
                                }).append(tabla);

                                var div = $('<div/>').append(div_campo).append(div_tabla);


                                if(edicion) {
                                    var datos_ref_ruta = edicion_ref_ruta + "&tabla=" + valor.regex + "&tablaval=" + valor.defecto + "&referencia="+ valor.nulo + "&id=" + id_edicion;
                                    $.ajax({
                                        async: false,
                                        url: datos_ref_ruta,
                                        dataType: "json"
                                    }).done(function( json_ref ) {
                                        if(json_ref.r) {
                                            console.log(json_ref.v);
                                            $.each(json_ref.v, function(campo, valor)    {

                                                if($("#C" + valor.id).length < 1) {
                                                    var nuevo = $("<option/>", {
                                                        "value": valor.id, 
                                                        "text": valor.text, 
                                                        "id": "C" + valor.id 
                                                    });
                                                    input.append(nuevo);
                                                }

                                                var arreglo = input.val() || [];
                                                arreglo.push(valor.id);
                                                input.val(arreglo);
                                            });
        
                                        }   else    {
                                            alert("Error al hacer la petición");
                                            return false;
                                        }
                                    });
                                }
                            }   else    {

                                var extra_input = '';

                                //Solicitud a una tabla foránea
                                if(valor.tipo == 'int' && valor.referencia_tabla != '' && valor.referencia_tabla != null)   {
                                    var input = $("<input/>", {
                                        "type": 'hidden', 
                                        "style": 'width:100%;', 
                                        "class": 'select2', 
                                        "id": valor.nombre, 
                                        "name": valor.nombre, 
                                        "data-tabla": valor.referencia_tabla, 
                                        "data-campo": valor.referencia_campo, 
                                        "data-llave": valor.referencia_valor
                                    });

                                    if(valor.nulo == 'NO')  {
                                        input.attr({"data-bv-notempty": "true", "data-bv-notempty-message": "Este campo es necesario y no puede ir vacío"});
                                    }

                                    if(valor.tipo_peticion) {
                                        if(valor.tipo_peticion == 'AJAX' || valor.tipo_peticion == 'A') {
                                            input.attr({"data-tipopeticion": 'ajax'});
                                        }   else    {
                                            input.attr({"data-tipopeticion": 'simple'});
                                        }
                                    }
                                }   else
                                //Para objetos de tipo check
                                if(valor.tipo == 'int' && valor.longitud == 1) {
                                        var respuesta_campo = "0";
                                        var respuesta_checked = "";
                                        if(edicion) {
                                            if(datos_cargados[valor.nombre] != undefined)  {
                                                respuesta_campo = datos_cargados[valor.nombre]
                                                if(respuesta_campo == "1")  {
                                                    respuesta_checked = "checked";
                                                }
                                            }
                                        }

                                        var input = '<input type="hidden" name="'+valor.nombre+'" id="'+valor.nombre+'" value="'+respuesta_campo+'" />';
                                            input+= '<input type="checkbox" class="checkbox-slider colored-blue" name="'+valor.nombre+'" id="'+valor.nombre+'" value="1" '+respuesta_checked+'/>';
                                            input+= '<span class="text"></span>';
                                }   else
                                //Para objetos de tipo lista
                                if(valor.tipo == 'enum')    {
                                    var input = $('<div/>', {
                                        "class": "control-group"
                                    });

                                    $.each(valor.valores_enum, function(id, valor_enum)    {

                                        var radio_input = $('<input/>', {
                                            "name": valor.nombre,
                                            "name": valor.nombre, 
                                            "type": "radio",
                                            "class": "inverted", 
                                            "value": valor_enum
                                        });

                                        if(edicion && valor_enum == datos_cargados[valor.nombre]) {
                                            radio_input.attr("checked", "checked");
                                        }   else
                                        if(valor.defecto != null && valor.defecto != "" && valor_enum == valor.defecto) {
                                            radio_input.attr("checked", "checked");
                                        }

                                        radios = $('<div/>', {
                                            "class": "radio"
                                        }).append($('<label/>').append(radio_input).append($('<span/>', {
                                            "class": "text", 
                                            html: valor_enum
                                        })));

                                        input.append(radios);
                                    });
                                }   else
                                //Para objetos de tipo blob
                                if(valor.tipo == 'blob' || valor.tipo == 'longblob')    {

                                        hayimagen = true;

                                        var imagen = $("<img/>",    {
                                            "id": "imagen",
                                            "style": "width:65px; height:65px;"
                                        });

                                        if(edicion) {
                                            if(datos_cargados[valor.nombre] != undefined) {
                                                respuesta_campo = datos_cargados[valor.nombre]
                                                imagen.attr("src", respuesta_campo);
                                            }
                                        }

                                        var input_file = $("<input/>", {
                                            "id": valor.nombre, 
                                            "name": valor.nombre, 
                                            "type": "file", 
                                            "class": "form-control", 
                                            "accept": "image/*"
                                        }).on('change', function() {
                                            if (this.files && this.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $("#imagen").attr('src', e.target.result);
                                                }

                                                reader.readAsDataURL(this.files[0]);
                                            }
                                        });

                                        var div_input = $("<div/>", {
                                            "class": "databox-right padding-top-30"
                                        }).append(input_file);

                                        var div_imagen = $("<div/>", {
                                            "class": "databox-left no-padding"
                                        }).append(imagen);

                                        var input = $("<div/>", {
                                            "class": "databox"
                                        }).append(div_imagen).append(div_input);
                                }    else    {
                                    var input = $("<input/>", {
                                        "id": valor.nombre, 
                                        "name": valor.nombre, 
                                        "type": 'text', 
                                        "class": 'form-control', 
                                        "placeholder": valor.etiqueta, 
                                        "maxlength": valor.longitud
                                    });

                                    if(valor.nulo == 'NO')  {
                                        input.attr({"data-bv-notempty": "true", "data-bv-notempty-message": "Este campo es necesario y no puede ir vacío"});
                                    }

                                    if(valor.regex != '')  {
                                        input.attr({
                                            "data-bv-regexp": "true", 
                                            "data-bv-regexp-regexp": valor.regex, 
                                            "data-bv-regexp-message": "El campo " + valor.etiqueta.toLowerCase() + " debe tener esta estructura: " + valor.regex
                                        });
                                    }

                                    if(valor.tipo == 'int' || valor.tipo == 'decimal') {
                                        input.attr({
                                            "data-bv-regexp": "true", 
                                            "data-bv-regexp-regexp": "[0-9]+$", 
                                            "data-bv-regexp-message": "Solo se permiten números"
                                        });
                                    }
                                    if(valor.tipo == 'datetime')    {
                                        input.datetimepicker({
                                            locale: 'es', 
                                            format: 'YYYY-MM-DD HH:mm'
                                        });
                                    }
                                    if(valor.tipo == 'date')    {
                                        input.datetimepicker({
                                            locale: 'es', 
                                            format: 'YYYY-MM-DD'
                                        });
                                    }
                                }

                                if(valor.defecto != null && valor.defecto != "")    {
                                    if(valor.longitud != "1")    {
                                        input.val(valor.defecto);
                                    }
                                }

                                if(paso == '#divPaso1') {
                                    if(typeof InitiateStep1.SetConfigByInput == 'function') {
                                        input = InitiateStep1.SetConfigByInput(valor, input);
                                    }
                                    if(typeof InitiateStep1.SetExtraInput == 'function') {
                                        extra_input = InitiateStep1.SetExtraInput(valor);
                                    }
                                }

                                if(paso == '#divPaso2') {
                                    if(typeof InitiateStep2.SetConfigByInput == 'function') {
                                        input = InitiateStep2.SetConfigByInput(valor, input);
                                    }
                                    if(typeof InitiateStep2.SetExtraInput == 'function') {
                                        extra_input = InitiateStep2.SetExtraInput(valor);
                                    }
                                }

                                if(paso == '#divPaso3') {
                                    if(typeof InitiateStep3.SetConfigByInput == 'function') {
                                        input = InitiateStep3.SetConfigByInput(valor, input);
                                    }
                                    if(typeof InitiateStep3.SetExtraInput == 'function') {
                                        extra_input = InitiateStep3.SetExtraInput(valor);
                                    }
                                }

                                if(paso == '#divPaso4') {
                                    if(typeof InitiateStep4.SetConfigByInput == 'function') {
                                        input = InitiateStep4.SetConfigByInput(valor, input);
                                    }
                                    if(typeof InitiateStep4.SetExtraInput == 'function') {
                                        extra_input = InitiateStep4.SetExtraInput(valor);
                                    }
                                }

                                if(paso == '#divPaso5') {
                                    if(typeof InitiateStep5.SetConfigByInput == 'function') {
                                        input = InitiateStep5.SetConfigByInput(valor, input);
                                    }
                                    if(typeof InitiateStep5.SetExtraInput == 'function') {
                                        extra_input = InitiateStep5.SetExtraInput(valor);
                                    }
                                }

                                if(paso == '#divPaso6') {
                                    if(typeof InitiateStep6.SetConfigByInput == 'function') {
                                        input = InitiateStep6.SetConfigByInput(valor, input);
                                    }
                                    if(typeof InitiateStep6.SetExtraInput == 'function') {
                                        extra_input = InitiateStep6.SetExtraInput(valor);
                                    }
                                }

                                if(paso == '#divPaso7') {
                                    if(typeof InitiateStep7.SetConfigByInput == 'function') {
                                        input = InitiateStep7.SetConfigByInput(valor, input);
                                    }
                                    if(typeof InitiateStep7.SetExtraInput == 'function') {
                                        extra_input = InitiateStep7.SetExtraInput(valor);
                                    }
                                }

                                if(edicion) {
                                    if(datos_cargados[valor.nombre] != undefined)  {
                                        if(valor.longitud != "1")    {
                                            input.val(datos_cargados[valor.nombre]);
                                        }
                                    }
                                    if(valor.nombre == 'iId')   {
                                        input.attr("type", "hidden");
                                    }
                                }

                                if(valor.nombre=='iId_Entidad'){
                                    input.attr("type", "hidden");
                                }

                                if(extra_input != "")    {
                                    var simple_input = input;

                                    var extras_input = $("<span/>", {
                                        "class": "input-group-btn"
                                    }).append(extra_input);

                                    input = $("<div/>", {
                                        "class": "input-group"
                                    }).append(simple_input).append(extras_input);

                                    extra_input = '';
                                }

                                var div_input = $("<div/>", {
                                    "class": "col-sm-9"
                                }).append(input);

                                var label = $("<label/>", {
                                    "for": valor.nombre, 
                                    "class": "col-sm-3 control-label no-padding-right", 
                                    html: valor.etiqueta 
                                });

                                var div = $("<div/>", {
                                    "class": "form-group"
                                }).append(label).append(div_input);                                
                            }
                            
                            var div_extra = "";
                            if(paso == "#divPaso2"){
                                div_extra = InitiateStep2.SetExtraDiv(valor);
                            }
                            if(paso == "#divPaso4"){
                                div_extra = InitiateStep4.SetExtraDiv(valor);
                            }

                            if(valor.tab != "") {
                                var id_tab = cajas.indexOf(valor.tab);
                            }   else    {
                                var id_tab = 0;
                            }

                            cajas_contenido[id_tab].append(div).append(div_extra);
                        }
                    });

                    var div_respuesta = $("<div/>", {
                        "id": "div_respuesta"
                    });

                    var div_todas = $("<div/>", {
                        "class": "tab-content"
                    }).append(cajas_contenido);

                    var form = $("<form/>", {
                        "id": id_tabla, 
                        "class": "form-horizontal bv-form", 
                        "role": "form", 
                        "novalidate": "novalidate", 
                        "data-bv-message": "This value is not valid",
                        "data-bv-feedbackicons-valid": "glyphicon glyphicon-ok",
                        "data-bv-feedbackicons-invalid": "glyphicon glyphicon-remove",
                        "data-bv-feedbackicons-validating": "glyphicon glyphicon-refresh",
                        html: div_todas
                    }).bootstrapValidator({
                        excluded: [':disabled']
                    }).on('submit', function(event){
                        event.stopPropagation();
                        event.preventDefault();
                        return false;
                    });

                    var lista = $('<ul/>', {
                        "class": "nav nav-tabs", 
                        "id": "myTab",
                        html: tabs.join("")
                    });

                    var div_tab = $('<div/>', {
                        "class": "tabbable",
                    }).append(div_respuesta).append(lista).append(form);

                    $(paso).html(div_tab);

                    $('.select2').parents('.bootbox').removeAttr('tabindex');

                    $.each($('.select2'),function(index)    {

                        var field = "";
                        var record = "";
                        var exsb = "";

                        var seleccion = this;
                        var tabla_referencia = $(this).data('tabla');
                        var campo_referencia = $(this).data('campo');
                        var llave_referencia = $(this).data('llave');

                        var busca_por = $(this).data('buscapor') || '';
                        if(busca_por != '') {
                            sb = busca_por.split("=");
                            field = sb[0];
                            record = sb[1];
                            exsb = "&buscapor=" + field + "&default=" + record;
                        }
                        var tipo_peticion = $(this).data('tipopeticion');
                        var url_solicita_datos_referencia = datos_referencia_ruta + "&tabla=" + tabla_referencia + "&campo=" + campo_referencia + "&llave=" + llave_referencia + exsb;

                        if(tipo_peticion == 'ajax') {
                            $(seleccion).select2({
                                placeholder: "SELECCIONA",
                                minimumInputLength: 1,
                                ajax: {
                                    url: url_solicita_datos_referencia, 
                                    dataType: 'json',
                                    quietMillis: 250,
                                    data: function (term, page) {
                                        return {
                                            q: term,
                                        };
                                    },
                                    results: function (data, page) {
                                        return { results: data.v };
                                    },
                                    cache: true
                                },
                                initSelection: function(element, callback) {
                                    var id = $(element).val();
                                    if (id != "") {
                                        $.ajax(url_solicita_datos_referencia + "&default=" + id, {
                                            dataType: "json"
                                        }).done(function(data) { callback(data.v[0]); });
                                    }
                                },
                                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
                            });
                        }   else    {
                            $.ajax(url_solicita_datos_referencia, {
                                dataType: "json", 
                                async: false, 
                            }).done(function(data) {
                                $(seleccion).select2({
                                    data: data.v,
                                });
                            });
                        }
                    });

                    var campos_referencias = $('#ref_searchable').data('columnas');
                    var tablas_referencias = $('#ref_searchable').data('tabla');

                    $('#ref_searchable').dataTable({
                        "bDestroy" : true,
                        "sDom": "Tflt<'row DTTTFooter'<'col-sm-6'i><'col-sm-6'p>>",
                        "aaSorting": [[0, 'asc']],
                        "aLengthMenu": [
                           [5, 10, 20, 50, -1],
                           [5, 10, 20, 50, "All"]
                        ],
                        "iDisplayLength": 5,
                        "oTableTools": {
                            "aButtons": [],
                            "sSwfPath": "swf/copy_csv_xls_pdf.swf"
                        },
                        "language": {
                            "search": "",
                            "sLengthMenu": "_MENU_",
                            "oPaginate": {
                                "sPrevious": "Prev",
                                "sNext": "Next"
                            }
                        },
                        // "pagingType": "simple",
                        "processing": true,
                        "serverSide": true,
                        "ajax": "inc/ajax.php?solicitud=procesar_tabla_generica&columnas=" + campos_referencias + "&tabla=" + tablas_referencias
                    });

                    $(".multiselect2").select2();

                    $(paso).on("click", ".agregar_registro", function()   {
                        var ctabla = $(this).data('tabla');
                        var cid = $(this).data('llave');
                        var cvalor = $(this).data('valor');

                        if($("#C" + cid).length < 1) {
                            var nuevo = $("<option/>", {
                                "value": cid, 
                                "text": cvalor, 
                                "id": "C" + cid 
                            });
                            $("#ref_" + ctabla).append(nuevo);
                        }

                        var arreglo = $("#ref_" + ctabla).val() || [];
                        arreglo.push(cid);
                        $("#ref_" + ctabla).val(arreglo);
                        $("#ref_" + ctabla).select2();
                    });

                    if(paso == '#divPaso1') {
                        InitiateStep1.init();
                    }
                    
                    if(paso == '#divPaso2') {
                        InitiateStep2.init();
                    }
                    if(paso == '#divPaso4'){
                        InitiateStep4.init();
                    }
                });
            }
            
            $('#WiredWizard').wizard();

        });
    </script>
                