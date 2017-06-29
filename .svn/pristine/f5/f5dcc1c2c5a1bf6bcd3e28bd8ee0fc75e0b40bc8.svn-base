                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#inicio" id="set_sucursal">Home</a>
                        </li>
                        <li class="active">Programaci&oacute;n de Salas</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Programaci&oacute;n de Salas
                        </h1>
                    </div>
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

                        <div class="col-xs-12 col-md-12">

                            <div class="widget">

                                <div class="widget-header bordered-bottom bordered-yellow">
                                    <span class="widget-caption">Disponibilidad de Salas</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="widget-body padding-5">
                                    <form role="form" id="historia_filtros">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon no-padding-top no-padding-bottom padding-left-5 padding-right-5"><img src="assets/img/iconos/user-id.png" style="height:24px;width:24px;"></span>
                                                        <input type="hidden" data-tabla="cat_juzgados" data-campo="sNombre" data-llave="iId" style="width:100%" id="filtro_juzgado" name="filtro_juzgado" class="selecto2" placeholder="Juzgado">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon no-padding-top no-padding-bottom padding-left-5 padding-right-5"><img src="assets/img/iconos/user-id.png" style="height:24px;width:24px;"></span>
                                                        <input type="hidden" data-tabla="cat_meses" data-campo="sNombre" data-llave="iId" style="width:100%" id="filtro_mes" name="filtro_mes" class="selecto2" placeholder="Mes">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon no-padding-top no-padding-bottom padding-left-5 padding-right-5"><img src="assets/img/iconos/user-id.png" style="height:24px;width:24px;"></span>
                                                        <input type="text" style="width:100%; height: 33px !important;" id="filtro_anio" name="filtro_anio" placeholder="Por A&ntilde;o" value="<?php echo date("Y")?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons-preview padding-10">
                                            <a href="javascript:void(0);" class="btn btn-labeled btn-palegreen" id="consultar">
                                                <i class="btn-label fa"></i>Consultar
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-blue" id="limpiar">
                                                <i class="btn-label fa"></i>Limpiar
                                            </a>
                                        </div>
                                    </form>
                                    <!-- <div class="flip-scroll"> -->

                                        <table class="table table-bordered table-hover table-striped" id="searchable">
                                            <thead class="bordered-darkorange">
                                                <tr role="row">
                                                    <th>#</th>
                                                    <th>SALA</th>
                                                    <th>CONDICI&Oacute;N</th>
                                                    <th>FECHA INICIO</th>
                                                    <th>HORA INICIO</th>
                                                    <th>FECHA FIN</th>
                                                    <th>HORA FIN</th>
                                                </tr>
                                            </thead>

                                            <tbody id="body-searchable">
                                                
                                            </tbody>
                                        </table>

                                    <!-- </div> -->
                                    

                                    <div class="buttons-preview padding-10">
                                        <a href="javascript:void(0);" class="btn btn-labeled btn-palegreen abre_modal" id="abrir_modal">
                                            <i class="btn-label fa fa-plus"></i>Guardar Todo
                                        </a>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


                <div id="modal_registrarcliente" style="display:none;">
                    <div class="row">
                        <div class="col-md-12" id="carga_modal">
                            
                        </div>
                    </div>
                </div>


    <script type="text/javascript">
        //alert(peticion_ajax);
            
        var id_tabla                = "cat_programaciones";
        var carga_ruta              = peticion_ajax + "ListarCampos_Genericos&tabla=" + id_tabla;
        var registro_ruta           = peticion_ajax + "Registrar_Generico&tabla=" + id_tabla;
        var edicion_ruta            = peticion_ajax + "Datos_Genericos&tabla=" + id_tabla;
        var borrar_ruta             = peticion_ajax + "Baja";
        var datos_referencia_ruta   = peticion_ajax + "Datos_Referencia";
        var edicion_ref_ruta        = peticion_ajax + "Valores_Referencia"; 
        var carga_tabla             = peticion_ajax + "procesar_tabla_generica&tabla=" + id_tabla + "&f=s&columnas=iId_Mes,iAnio,dFechaInicial,dFechaFinal,iId_Juzgado,dFechaRegistro,dFechaActualizacion";
        //var carga_tabla             = "inc/ajax.php?solicitud=select_programaciones&tabla=" + id_tabla;
        

        /*var oTable = $('#searchable').dataTable({
            "sDom": "Tflt<'row DTTTFooter'<'col-sm-6'i><'col-sm-6'p>>",
            "aaSorting": [[1, 'asc']],
            "aLengthMenu": [
               [5, 10, 20, 50, -1],
               [5, 10, 20, 50, "All"]
            ],
            "iDisplayLength": 10,
            "oTableTools": {
                "aButtons": [
                    "copy",
                    "print",
                    {
                        "sExtends": "collection",
                        "sButtonText": "Save <i class=\"fa fa-angle-down\"></i>",
                        "aButtons": ["csv", "xls", "pdf"]
                    }],
                "sSwfPath": "assets/swf/copy_csv_xls_pdf.swf"
            },
            "language": {
                "search": "",
                "sLengthMenu": "_MENU_",
                "oPaginate": {
                    "sPrevious": "Prev",
                    "sNext": "Next"
                }
            },
            "processing": true,
            "serverSide": true,
            "ajax": carga_tabla
        });*/

        $(".page-body").on("click", ".abre_modal", function()   {
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
                }else{
                    // var nuevo_campo = {
                    //     defecto: null,
                    //     etiqueta: "",
                    //     longitud: 100,
                    //     nombre: "iId_Entidad",
                    //     nulo: "YES",
                    //     regex: "",
                    //     tab: "",
                    //     tipo: "int"
                    // };

                    // json[100] = nuevo_campo;
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
                            console.log(valor);
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
                                        // alert("Error al hacer la petición");
                                        // return false;
                                    }
                                });
                            }
                        }   else    {
                            //console.log("no es referencia");
                            console.log(valor);
                            var extra_input = '';

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
                                if(valor.defecto == 'EAN13')    {
                                    var url_pedirEAN13 = "inc/ajax.php?solicitud=EAN13";

                                    $.ajax(url_pedirEAN13, {
                                        dataType: "json", 
                                        async: false, 
                                    }).done(function(json) {
                                        if(json.Code != "")   {
                                            input.val(json.Code);
                                        }
                                    }).error(function() {
                                        OpenWarning("Ocurrió un error al generar el EAN13, contacte al administrador");
                                    });

                                    extra_input = '<a class="btn btn-default icon-only success regenerar_ean13" href="javascript:void(0);" data-input="sCodigo"><i class="glyphicon glyphicon-refresh"></i></a>';
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
                            if (valor.nombre == "iAnio") {
                                var fecha = new Date();
                                input.val(fecha.getFullYear());
                            }
                            if (valor.nombre == "dFechaInicial" || valor.nombre == "dFechaFinal"){
                                input.attr("readonly", true);
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

                        if(valor.tab != "") {
                            var id_tab = cajas.indexOf(valor.tab);
                        }   else    {
                            var id_tab = 0;
                        }

                        cajas_contenido[id_tab].append(div);
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

                bootbox.dialog({
                    message: div_tab, 
                    title: "Nuevo Registro",
                    className: "modal-darkorange",
                    buttons: {
                        success: {
                            label: "Guardar",
                            className: "guardar-registro btn-success",
                            callback: function ()   {
                                // $("#iId_Entidad").val(data_sesion.USUARIO_EMPRESA_ID);
                                var formulario_tabla = "#" + id_tabla;

                                var bootstrapValidatorx = $(formulario_tabla).data('bootstrapValidator');

                                bootstrapValidatorx.validate();

                                var valido = bootstrapValidatorx.isValid();

                                if(valido)  {
                                    url_registro_ruta = registro_ruta + "&" + $(formulario_tabla).serialize() + '&notverify=true';
                                    div_respuesta.html('<center><img src="assets/img/cargando.gif" width="50px"><br/>Cargando...</center>');
                                    $('.bootbox').animate({scrollTop:0}, '5');

                                    var formData = new FormData();

                                    $.each($("input[type=file]"), function()    {
                                        formData.append($(this).attr('id'), $(this)[0].files[0]);
                                    });

                                    console.log(formData);

                                    // $.getJSON( url_registro_ruta, function( json ) {
                                    $.ajax({
                                        dataType: "json",
                                        url: url_registro_ruta,
                                        type: 'POST',
                                        data: formData,
                                        mimeType:"multipart/form-data",
                                        processData: false,
                                        contentType: false,
                                        cache: false,
                                        success: function(json) { 
                                            if(json.r)  {
                                                var respuesta_i = $('<i/>', {
                                                    "class": "fa fa-check success",
                                                    html: "&nbsp" 
                                                });
                                                var respuesta_div = $('<h5/>', {
                                                    "class": conf_clase_success
                                                }).append(respuesta_i).append(" El registro fue guardado con éxito");

                                                div_respuesta.html(respuesta_div);

                                                //oTable.api().ajax.reload();
                                                consultarProgramaciones();
                                            }   else    {
                                                var respuesta_i = $('<i/>', {
                                                    "class": "fa fa-times darkorange"
                                                });
                                                var respuesta_div = $('<h5/>', {
                                                    "class": conf_clase_error
                                                }).append(respuesta_i).append(" " + json.id);

                                                div_respuesta.html(respuesta_div);
                                            }
                                        }

                                    }).error(function() {
                                            var respuesta_i = $('<i/>', {
                                                "class": "fa fa-times darkorange"
                                            });
                                            var respuesta_div = $('<h5/>', {
                                                "class": conf_clase_error
                                            }).append(respuesta_i).append("Ocurrió un error de respuesta: #1001");

                                            div_respuesta.html(respuesta_div);
                                    });
                                }

                                return false;
                            }
                        },
                        "Limpiar": {
                            className: "btn-blue",
                            callback: function ()   {

                                var formulario_tabla = '#' + id_tabla;
                                var bootstrapValidatorx = $(formulario_tabla).data('bootstrapValidator');

                                bootstrapValidatorx.resetForm();
                                
                                $(formulario_tabla)[0].reset();
                                return false;
                            }
                        },
                        "Cerrar": {
                            className: "btn-danger", 
                            callback: function()    {
                                return true;
                            }
                        }
                    }
                }).find("div.modal-dialog").addClass("large_modal");

                $('.select2').parents('.bootbox').removeAttr('tabindex');

                $.each($('.select2'),function(index)    {
                    var seleccion = this;
                    var tabla_referencia = $(this).data('tabla');
                    var campo_referencia = $(this).data('campo');
                    var llave_referencia = $(this).data('llave');
                    var tipo_peticion = $(this).data('tipopeticion');
                    var url_solicita_datos_referencia = datos_referencia_ruta + "&tabla=" + tabla_referencia + "&campo=" + campo_referencia + "&llave=" + llave_referencia;
                    
                    if(tipo_peticion == 'ajax') {
                        console.log('ajax');
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
                        console.log('otro');
                        $.ajax(url_solicita_datos_referencia, {
                            dataType: "json", 
                            async: false, 
                        }).done(function(data) {
                            console.log(data.v);
                            $(seleccion).select2({
                                data: data.v,
                            });
                        });
                    }


                    /////************ PARA UNO ESPECIFICO

                    // if($(this).id == 'iId_Mes') {
                    //     $(this).on('select2:select', function() {
                    //         console.log($(this));
                    //     })
                    // }
                });
                
                $.each($('.selecto2'),function(index)    {
                    console.log('entra');
                    $(this).val("");
                    $(this).attr("disabled", false);
                    var seleccion = this;
                    var tabla_referencia = $(this).data('tabla') || "";
                    var campo_referencia = $(this).data('campo') || "";
                    var llave_referencia = $(this).data('llave') || "";
                    var url_solicita_datos_referencia = datos_referencia_ruta + "&tabla=" + tabla_referencia + "&campo=" + campo_referencia + "&llave=" + llave_referencia + "&funciones=select2";

                    $(this).select2({
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
                                var id_t = "";
                                var rec = [];
                                datos = data.v;
                                // dat = datos;
                                // $.each(datos, function(id, obj)  {
                                //  if(obj != undefined)    {
                                //      var texto = dat[id].text;
                                //      findAndRemove(datos, 'text', texto);
                                //  }
                                // });

                                return { results: datos };
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
                        "sSwfPath": "assets/swf/copy_csv_xls_pdf.swf"
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
                    "ajax": "inc/ajax.php?solicitud=select_programaciones&tabla=" + tablas_referencias + "&cveMes="
                });

                $(".multiselect2").select2();

                $("div.modal-dialog").on("click", ".agregar_registro", function()   {
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

                $("div.modal-dialog").on("click", ".regenerar_ean13", function()    {
                    var en_input = $(this).data('input');
                    sCodigo = "#" + en_input;
                    $(sCodigo).attr("disabled", true);
                    $(sCodigo).val("Generando...");
                    $.getJSON('inc/ajax.php?solicitud=EAN13', function(json)    {
                        if(json.Code != "")   {
                            $(sCodigo).attr("disabled", false);
                            $(sCodigo).val(json.Code);
                        }
                    }).error(function() {
                        OpenWarning("No se pudo pedir el EAN13, contacte a un administrador");
                    });
                });

                $("div.modal-dialog").on("select2-selecting", "#iId_Mes", function(e)    {
                    var mes = e.val;
                    var anio = $("#iAnio").val();
                    var url = "inc/ajax.php?solicitud=obtener_progrmacion_mensual&cveMes=" + mes + "&anio=" + anio;
                    if ( anio != "" || anio.length > 0 ) {
                        $.getJSON(url, function(json)   {
                            try{
                                $("#dFechaInicial").val(json.fechaInicial);
                                $("#dFechaFinal").val(json.fechaFinal);
                            }catch(e){
                                alert(e);
                            }
                        });
                    }
                     
                });
                

            });
        });

        $(".page-body").on("click", ".eliminar_registro", function()    {
            var url_eliminar = borrar_ruta + "&tabla=" + id_tabla + "&id=" + $(this).data('id');
            var info = $(this).data('info');
            if(info == undefined)   {
                info = "";
            }
            bootbox.confirm("¿Seguro que desea eliminar este registro?<br/>" + info, function (result) {
                if (result) {
                    $.getJSON( url_eliminar, function( json ) {
                        if(json.r)  {
                            oTable.api().ajax.reload();
                        }   else    {
                            OpenWarning("No se pudo eliminar el registro, contacte al administrador <br/>Código: #1002");
                        }
                    });
                }
            });
        });
        
        $(document).on("keyup", "#iAnio", function(e){
            //e = e || window.event;
            var charCode = (typeof e.which == "number") ? e.which : e.keyCode;
            /*if (charCode) {
                alert("Caracter: " + String.fromCharCode(charCode));
            }*/
            //console.log(charCode);
            if ( (charCode >= 96 && charCode <= 105) || charCode == 8 || charCode == 13 ) {
                if (validarAnio() && $("#iId_Mes").val() != "") {
                    var mes = $("#iId_Mes").val();
                    var anio = $(this).val();
                    //console.log(mes);
                    //console.log(anio);
                    var url = "inc/ajax.php?solicitud=obtener_progrmacion_mensual&cveMes=" + mes + "&anio=" + anio;
                    $.getJSON(url, function(json)   {
                        try{
                            $("#dFechaInicial").val(json.fechaInicial);
                            $("#dFechaFinal").val(json.fechaFinal);
                        }catch(e){
                            alert(e);
                        }
                    });
                } else {
                    console.log('no entra en el if');
                }
            }    

            if ( $(this).val().length == 0 ) {
                $("#dFechaInicial").val("");
                $("#dFechaFinal").val("");
            }
        });
        
        $(".widget-body").on('resize', function()   {
            //oTable.css('width', '100%');
            $("#searchable").css('width', '100%');
        });
        
        function validarAnio(){
            var anio = $("#iAnio").val();
            //alert(anio.length);
            console.log(anio);
            if ( isNaN(parseInt(anio)) ){
                return false;
            } else if ( anio == 0 ){
                return false;
            } else if ( anio == "" ) {
                return false;
            } else if ( anio.length < 4 ) {
                return false;
            } else if ( parseInt(anio) < 2000 ) {
                return false;
            }
            else {
                return true;
            }
        }
        
        $(".selecto2").on("change", function(){
            //consultarProgramaciones();
        });
        
        $("#filtro_anio").on("change", function(){
            var anio = $(this).val();
            if ( !isNaN(parseInt(anio)) && anio > 1900 ) {
                //consultarProgramaciones();
            }    
        });
        
        $(document).on("click", "#limpiar", function(){
            $("#filtro_mes").select2("val","");
            $("#filtro_juzgado").select2("val","");
        })
        
        function consultarProgramaciones(){
            var mes = $("#filtro_mes").length > 0 ? $("#filtro_mes").val() : "";
            var anio = $("#filtro_anio").length > 0 ? $("#filtro_anio").val() : "";
            var juzgado = $("#filtro_juzgado").length > 0 ? $("#filtro_juzgado").val() : "";
            var url = "inc/ajax.php?solicitud=select_programaciones&cveMes=" + mes + "&anio=" + anio + "&juzgado=" + juzgado + "&tabla=cat_programaciones";
            $.getJSON(url, function(json)   {
                try{
                    console.log(json);
                    datos = json.length;
                   console.log(datos);
                   var html = "";
                   for ( var n = 0; n < datos; n++ ) {
                       html += "<tr>";
                       html += "<td>" + json[n].Mes + "</td>";
                       html += "<td>" + json[n].iAnio + "</td>";
                       html += "<td>" + formatoFecha(json[n].dFechaInicial) + "</td>";
                       html += "<td>" + formatoFecha(json[n].dFechaFinal) + "</td>";
                       html += "<td>" + json[n].Juzgado + "</td>";
                       html += "<td><button class='btn btn-xs btn-labeled btn-success abre_modal' data-rel='editar' data-id='" + json[n].iId + "'><span class='btn-label icon fa fa-pencil'></span>Editar</button></td>";
                       html += "</tr>";
                   }
                   $("#body-searchable").html(html);
                }catch(e){
                    alert(e);
                }
            });
        }
        
        function formatoFecha(campo) {
            var fecha = campo.split(' ');
            if (fecha.length > 1) {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
            } else {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0];
            }
        }
        $(document).ready(function(){
            //consultarProgramaciones();
            $.each($('.selecto2'),function(index)    {
                    $(this).val("");
                    $(this).attr("disabled", false);
                    var seleccion = this;
                    var tabla_referencia = $(this).data('tabla') || "";
                    var campo_referencia = $(this).data('campo') || "";
                    var llave_referencia = $(this).data('llave') || "";
                    var url_solicita_datos_referencia = datos_referencia_ruta + "&tabla=" + tabla_referencia + "&campo=" + campo_referencia + "&llave=" + llave_referencia + "&funciones=select2";

                    $(this).select2({
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
                                var id_t = "";
                                var rec = [];
                                datos = data.v;
                                // dat = datos;
                                // $.each(datos, function(id, obj)  {
                                //  if(obj != undefined)    {
                                //      var texto = dat[id].text;
                                //      findAndRemove(datos, 'text', texto);
                                //  }
                                // });

                                return { results: datos };
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
                });
                
            $("#searchable th").each(function(){
                $(this).addClass("sorting");
            });
                  
        });
    </script>

