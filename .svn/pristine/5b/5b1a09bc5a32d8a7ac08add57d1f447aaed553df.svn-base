var quejaConsejo = function(){
	return {
        cargaJuzgados:function () {
            var strDatos = "accion=consultar";
            // var cveJuzgado = $('#hiddenCveAdscripcion');
            var self = this;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                success: function (datos) {
                    console.log(datos);
                    var json = "";
                    json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        $("#cveTipoJuzgado_busqueda").empty().append('<option value="0/0">Seleccione una opci&oacute;n</option>');
                        for (var i = 0; i < json.totalCount; i++) {
                            if( json.data[i].cveTipojuzgado >= 1 && json.data[i].cveTipojuzgado <= 4 && json.data[i].activo == 'S' ){ 
                                $("#cveTipoJuzgado_busqueda").append($('<option></option>').val(json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                            }
/*                            if(cveJuzgado.val() == json.data[i].cveJuzgado){
                                $("#cveTipoJuzgado_busqueda option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
                                $('#cveTipoJuzgadoAlt').val(json.data[i].cveTipojuzgado);
                            }    */
                        }
                    }else{
                        $("#cveTipoJuzgado_busqueda").empty().append('<option value="0/0">Sin registros</option>');
                    }
                    self.cargaTipoCarpeta();
                },
                error: function (objeto, quepaso, otroobj) {
                    muestraMensaje("Error en la peticion:\n\n" + quepaso , 'error');
                }
            });
        },
        cargaTipoCarpeta:function(){
            $('#cmbTipoCarpeta_busqueda').empty();
            var tipoJuzgado = $("#cveTipoJuzgado_busqueda").val().split("/");
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
                         $("#cmbTipoCarpeta_busqueda").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
                            switch(tipoJuzgado[1]){
                                case "1": // tipo de juzgado de control
                                    if(json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1" || json.data[i].cveTipoCarpeta == "7" ){ // control, auxiliar, exhorto
                                        $("#cmbTipoCarpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "2": // tipo de juzgado juicio
                                    if(json.data[i].cveTipoCarpeta == "3" ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#cmbTipoCarpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "3": // tipo de juzgado ejecucion
                                    if(json.data[i].cveTipoCarpeta == "5" ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#cmbTipoCarpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "4": // tipo de juzgado tribunal
                                    if(json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#cmbTipoCarpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "5": 
                                break;
                            }    
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    muestraMensaje("Error en la peticion:\n\n" + quepaso, 'error');
                }
            });
        },        
        buscarQuejaInterpuesta:function(){
            var self = this;
            var cveTipoJuzgado_busqueda = $('#cveTipoJuzgado_busqueda').val().split('/')[0];
            var cmbTipoCarpeta_busqueda = ( $('#cmbTipoCarpeta_busqueda').val() > 0 ? $('#cmbTipoCarpeta_busqueda').val() : '' );
            var txtNumero_busqueda = $('#txtNumero_busqueda').val();
            var txtAnio_busqueda = $('#txtAnio_busqueda').val();
            var txtNumeroActuacion_busqueda = $('#txtNumeroActuacion_busqueda').val();
            var txtAnioActuacion_busqueda = $('#txtAnioActuacion_busqueda').val();
            var txtFechaInicial_busqueda = $('#fechaInicial').val();
            var txtFechaFinal_busqueda = $('#fechaFinal').val();
            if( cmbTipoCarpeta_busqueda != ''  || txtNumero_busqueda != '' || txtAnio_busqueda != '' || txtNumeroActuacion_busqueda != '' || txtAnioActuacion_busqueda != ''){ //si alguno de los parametros no es 0 o vacio, considera tales parametros para la busqueda y desprecia la fecha
                txtFechaInicial_busqueda = '';
                txtFechaFinal_busqueda = '';
            }
            var data = "cveJuzgado=" + cveTipoJuzgado_busqueda + "&cveTipoCarpeta=" + cmbTipoCarpeta_busqueda + "&numero=" + txtNumero_busqueda + "&anio=" + txtAnio_busqueda + "&numActuacion=" + txtNumeroActuacion_busqueda + "&aniActuacion=" + txtAnioActuacion_busqueda +"&fechaDesde=" + txtFechaInicial_busqueda + "&fechaHasta=" + txtFechaFinal_busqueda + "&paginacion=true&cantxPag=10&pag=1&accion=buscaQuejasInterpuestas";
            var urlPeticion = "../fachadas/sigejupe/quejapromociones/QuejapromocionesFacade.Class.php";
            $.ajax({
                method: "POST",
                url: urlPeticion,
                data: data,
                success: function (respuesta) {
                    var tipoMensaje = 'error';
                    var objeto = eval('(' + respuesta + ')');
                    if( objeto.estatus == 'OK' ){
                        tipoMensaje = 'success';
                        muestraMensaje(objeto.mensaje,tipoMensaje);
                        self.muestraResultados( respuesta );
                        return;
                    }
                    muestraMensaje(objeto.mensaje,tipoMensaje);
                }
            });
        },
        muestraResultados:function( resultados ){
            var page = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var datosResultados = eval( '(' + resultados + ')' );
            datosResultados = datosResultados.data;
            //armado de tabla
            var tablaCabecera = '<table id="tblResultados" class="table col-md-12 table-striped table-bordered table-hover"><thead>'
                    + '<tr><th style="width:5%">#</th>'
                    + '     <th style="width:20%">JUZGADO</th>'
                    + '     <th style="width:15%">SINTESIS</th>'
                    + '     <th style="width:20%">QUEJOSOS</th>'
                    + '     <th style="width:20%">JUEZ</th>'
                    + '     <th style="width:10%">ESTATUS</th>'
                    + '     <th style="width:10%">FECHA REGISTRO</th></tr>'
                    + '</thead>';
            var tablaCuerpo = '';
            $.each( datosResultados, function(index, actuacion){
                var ac = actuacion;
                // console.log(ac);
                var quejosos = '';
                $.each( ac.quejosos, function(index, quejoso){
                    quejosos += '- ' + quejoso.nombreCompleto + '<br/>';
                });
                tablaCuerpo += '<tr onclick="javascript:queja.muestraRegistro(' +  index + ')">'
                            + '<td>' + parseInt(index + 1) + '</td>'
                            + '<td>' + ac.cveJuzgado.desJuzgado + '<br/><small>ACTUACION&Oacute;N: ' + ac.numActuacion + ' / ' + ac.aniActuacion + '<br/>'
                            + ac.cveTipoCarpeta.desTipoCarpeta + ': ' + ac.numero + ' / ' + ac.anio + '</small></td>'
                            + '<td>' + ac.sintesis + '</td>'
                            + '<td><b>' + ac.tipoQuejoso + '</b></br>' + quejosos + '</td>'
                            + '<td>' + ac.quejaPromocion.juzgador + '</td>'
                            + '<td>' + ac.estatusQueja.descEstatus + '</td>'
                            + '<td>' + ac.fechaRegistro + '</td>'
                            + '</tr>';
                arrayDatosResultados.datos[index] = {
                    idActuacion:ac.idActuacion,
                    numActuacion:ac.numActuacion,
                    aniActuacion:ac.aniActuacion,
                    cveTipoActuacion:ac.cveTipoActuacion,
                    idReferencia:ac.idReferencia,
                    numero:ac.numero,
                    anio:ac.anio,
                    noFojas:ac.noFojas,
                    cveTipoCarpeta:ac.cveTipoCarpeta.cveTipoCarpeta,
                    desTipoCarpeta:ac.cveTipoCarpeta.desTipoCarpeta,
                    cveJuzgado:ac.cveJuzgado,
                    sintesis:ac.sintesis,
                    observaciones:ac.observaciones,
                    cveUsuario:ac.cveUsuario,
                    activo:ac.activo,
                    fechaRegistro:ac.fechaRegistro,
                    fechaActualizacion:ac.fechaActualizacion,
                    imputados:ac.imputados,
                    ofendidos:ac.ofendidos,
                    idActuacionesEstatus:ac.estatusQueja.idActuacionesEstatus,
                    cveEstatus:ac.estatusQueja.cveEstatus,
                    descEstatus:ac.estatusQueja.descEstatus,
                    idQuejaPromocion:ac.quejaPromocion.idQuejaPromocion,
                    idJuzgador:ac.quejaPromocion.idJuzgador,
                    juzgador:ac.quejaPromocion.juzgador,
                    acuerdo:ac.quejaPromocion.acuerdo,
                    fechaAcuerdo:ac.quejaPromocion.fechaAcuerdo,
                    resolucion:ac.quejaPromocion.resolucion,
                    fechaResolucion:ac.quejaPromocion.fechaResolucion,
                    quejosos:ac.quejosos,
                    quienSeQueja:ac.quienSeQueja,
                    idQuienSeQueja:ac.idQuienSeQueja,
                    tipoQuejoso:ac.tipoQuejoso };
            });
            var tablaFinal = '</table>';
            $('#divTablaResultados').empty().html( tablaCabecera + tablaCuerpo + tablaFinal );
            $('#tblResultados').DataTable({
                paging: false
            });
            this.getPages(page, cantReg);

            this.cambiaSeccion('resultados');
        },
        actualizaEstadoQueja:function( idActuacion, idActuacionesEstatus, cveEstatus ){
            var idActuacion = idActuacion || 0;
            var idActuacionesEstatus = idActuacionesEstatus || 0;
            var cveEstatus = cveEstatus || 0;
            var data = "idActuacion=" + idActuacion + "&idActuacionesEstatus=" + idActuacionesEstatus + "&cveEstatus=" + cveEstatus + "&accion=updateActuacionesestatusJuez";
            var urlPeticion = "../fachadas/sigejupe/actuacionesestatus/ActuacionesestatusFacade.Class.php";
            $.post(urlPeticion,data,function(response){
                return response;
            });
        },
        muestraRegistro:function(posicion){
            var rg = arrayDatosResultados.datos[posicion];
            //actualizacion del estado de la queja
            this.actualizaEstadoQueja(rg.idActuacion, rg.idActuacionesEstatus, 39); //idActuacion, cveEstatus -tabla de estados-
            //despliegue de la informaciOn de la queja seleccionada
            var datosQuejosos = '';
            var valor = '';
            var idChecks = [];
            var trQuejosos = '';
            $('#hiddenIdActuacion').val( rg.idActuacion );
            $('#hiddenIdQuejaPromocion').val( rg.idQuejaPromocion );
            $('#hiddenIdActuacionesEstatus').val( rg.idActuacionesEstatus );
            //bloqueo de campos de acuerdo al estatus de la queja
            if( rg.cveEstatus >= 40 ){
                $('#btnResolver').prop('disabled',true);
                $('#btnLimpiarAcuerdo').prop('disabled',true);
                //botones de pdf y visor
                $('#inputVisor').show();
                $('#inputPDF').show();
                //digitalizador
                $('#inputDigitalizar').show();
            }
            if( rg.idQuienSeQueja == 1 ){ //imputado
                datosQuejosos = rg.imputados;
                valor = 1;
                //obtencion quejosos relacionados, para el check
                $.each( rg.quejosos, function(index,quejoso){
                    $.each( rg.imputados, function(index,imputado){
                        if( quejoso.idImputadoCarpeta == imputado.idImputadoCarpeta){
                            idChecks[idChecks.length] = quejoso.idImputadoCarpeta;
                            trQuejosos += '<tr>'
                                + '<td colspan="2">' + imputado.nombre + '</td>'
                                + '<td>' + imputado.descTipoPersona + '</td></tr>';
                        }
                    } );
                } );
            }else if( rg.idQuienSeQueja == 2 ){ //ofendidos
                datosQuejosos = rg.ofendidos;
                valor = 2;
                //obtencion quejosos relacionados, para el check
                $.each( rg.quejosos, function(index,quejoso){
                    $.each( rg.ofendidos, function(index,ofendido){
                        if( quejoso.idOfendidoCarpeta == ofendido.idOfendidoCarpeta){
                            idChecks[idChecks.length] = quejoso.idOfendidoCarpeta;
                            trQuejosos += '<tr>'
                                + '<td colspan="2">' + ofendido.nombre + '</td>'
                                + '<td>' + ofendido.descTipoPersona + '</td></tr>';
                        }
                    } );
                } );
            }else{
                var nombre = '';
                valor = 3;
                var self = this;
                var genero = '';
                $.each( rg.quejosos, function(index,quejoso){
                    if( quejoso.cveTipoPersona.cveTipoPersona == 1){ //persona fisica
                        nombre = quejoso.paterno + ' ' + quejoso.materno + ' ' + quejoso.nombre;
                        genero = '<dt>G&eacute;nero: </dt><dd>' + quejoso.cveGenero.desGenero + '</dd>';
                    }else{
                        nombre = quejoso.nombreCompleto;
                        genero = '';
                    }
                    trQuejosos += '<tr>'
                        + '<td colspan="2">' + quejoso.nombreCompleto + '<br/>'
                        + '<small><dl class="dl-horizontal">'
                        // + '<dt>G&eacute;nero: </dt><dd>' + quejoso.cveGenero.desGenero + '</dd>'
                        + genero
                        + '<dt>Municipio: </dt><dd>' + quejoso.cveMunicipio.desMunicipio + '</dd>'
                        + '<dt>Domicilio: </dt><dd>' + quejoso.domicilio + '</dd>'
                        + '<dt>Correo: </dt><dd>' + quejoso.email + '</dd>'
                        + '<dt>Tel&eacute;fono: </dt><dd>' + quejoso.telefono + '</dd></dl></small></td>'
                        + '<td>' + quejoso.cveTipoPersona.desTipoPersona + '</td></tr>';
                });
            }

            var tabla = '<table style="margin-left:auto; margin-right: auto; width: 90%;" class="table table-hover table-bordered">'
						+ '<tr><td colspan="3" style="text-align:center;"><b>DETALLES DE LA QUEJA</b></td></tr>'
						+ '<tr><td colspan="3">' + rg.cveJuzgado.desJuzgado + '</td></tr>'
						+ '<tr><td>' + rg.desTipoCarpeta + ': ' + rg.numero +' / ' + rg.anio + '</td><td>PROMOCI&Oacute;N: ' + rg.numActuacion + ' / ' + rg.aniActuacion + '</td><td>FOJAS: ' + rg.noFojas + '</td></tr>'
						+ '<tr><td colspan="3">SINTESIS:<br/>' + rg.sintesis + '</td></tr>'
						+ '<tr><td colspan="3">Queja interpuesta por ' + rg.tipoQuejoso + '</td></tr>'
						+ '<tr><td colspan="2"><b>QUEJOSO</b></td><td><b>TIPO PERSONA</b></td></tr>';
				tabla += trQuejosos;
				tabla += '<tr><td colspan="3">QUEJA:<br/>' + rg.observaciones + '</td></tr>'
						+ '</table>';
            var tablaAcuerdo = '<table style="margin-left:auto; margin-right: auto; width: 90%;" class="table table-hover table-bordered">'
                        + '<tr><td style="text-align:center;"><b>TEXTO DEL ACUERDO</b><br/>'
                        + 'Acuerdo registrado en la fecha ' +  rg.fechaAcuerdo + ' por el Juzgador ' + rg.juzgador + '</td></tr>'
                        + '<tr><td style="text-align:justify;">' + rg.acuerdo + '</td></tr>'
                        + '</table>';

                $('#divAcuerdoTabla').empty().append( tabla );
				$('#divAcuerdoJuez').empty().append( tablaAcuerdo );
                llenareditor(rg.resolucion);
            this.cambiaSeccion('acuerdo');
        },
        getPages:function(page, cantReg){
            var cveJuzgadoBusqueda = $('#cveTipoJuzgado_busqueda').val();
            cveJuzgadoBusqueda = cveJuzgadoBusqueda.split('/');
            var tipoCarpeta = ( $('#cmbTipoCarpeta_busqueda').val() > 0 ? $('#cmbTipoCarpeta_busqueda').val() : '' );
            var numero = $('#txtNumero_busqueda').val();
            var anio = $('#txtAnio_busqueda').val();
            var txtNumeroActuacion_busqueda = $('#txtNumeroActuacion_busqueda').val();
            var txtAnioActuacion_busqueda = $('#txtAnioActuacion_busqueda').val();
            var fechaInicial = $('#fechaInicial').val();
            var fechaFinal = $('#fechaFinal').val();
            if( tipoCarpeta != ''  || numero != '' || anio != '' || txtNumeroActuacion_busqueda != '' || txtAnioActuacion_busqueda != ''){ //si alguno de los parametros no es 0 o vacio, considera tales parametros para la busqueda y desprecia la fecha
                fechaInicial = '';
                fechaFinal = '';
            }

            var totalPages = 0;
            $.ajax({
                type:'POST',
                async:false,
                data:{
                    numActuacion:txtNumeroActuacion_busqueda,
                    aniActuacion:txtAnioActuacion_busqueda,
                    cveJuzgado:cveJuzgadoBusqueda[0],
                    cveTipoCarpeta:tipoCarpeta,
                    numero:numero,
                    anio:anio,
                    cveTipoActuacion:'27', 
                    txtFecInicialBusqueda:fechaInicial,
                    txtFecFinalBusqueda:fechaFinal,
                    activo:'S', 
                    cantxPag:cantReg,
                    accion:'getPaginas'
                },
                url:"../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                success:function(response){
                    var json = eval("(" + response + ")");
                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#totalReg").html("<b>Total:" + json.totalCount + "</b>");
                        page = (page==null) ? 1 : page;
                        $("#cmbPaginacion").val(page);
                    } else {
                        muestraMensaje('Sin resultados.','information');
                    }
                }
            }); 
            return;
        },
        cambiaSeccion:function(seccion){
            switch(seccion){
                case 'busqueda':
                    this.limpiarFormulario('acuerdo');
                    this.limpiarFormulario('resultados');
                    $('#divBusqueda').show("slide");
                    $('#divResultados').hide("fade");
                    $('#divAcuerdo').hide("fade");
                    break;
                case 'resultados':
                    // this.limpiarFormulario('capturaResultados');
                    $('#divBusqueda').hide("fade");
                    $('#divResultados').show("slide");
                    $('#divAcuerdo').hide("fade");
                    break;
                case 'acuerdo':
                    $('#divBusqueda').hide("fade");
                    $('#divResultados').hide("fade");
                    $('#divAcuerdo').show("slide");
                    break;
            }
        },
        limpiarFormulario:function(seccion){
        	switch( seccion ){
        		case 'busqueda':
                    $('#cveTipoJuzgado_busqueda').val( $("#hiddenCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val() );
                    this.cargaTipoCarpeta();
                    $('#txtNumero_busqueda').val('');
                    $('#txtAnio_busqueda').val('');
                    $('#txtNumeroActuacion_busqueda').val('');
                    $('#txtAnioActuacion_busqueda').val('');
                    $('#fechaInicial').val( $('#fechaHoy').val() );
                    $('#fechaFinal').val( $('#fechaHoy').val() );
                    $('#hiddenIdActuacion').val('');
                    $('#hiddenIdQuejaPromocion').val('');
                    $('#hiddenIdActuacionesEstatus').val('');
        			break;
                case 'resultados':
                    $('#divTablaResultados').empty();
                    $('#hiddenIdActuacion').val('');
                    $('#hiddenIdQuejaPromocion').val('');
                    $('#hiddenIdActuacionesEstatus').val('');
                    break;
                case 'acuerdo':
                    $('#divAcuerdoTabla').empty();
                    editor.setContent("", false);
                    $('#hiddenIdActuacion').val('');
                    $('#hiddenIdQuejaPromocion').val('');
                    $('#hiddenIdActuacionesEstatus').val('');
                    $('#btnResolver').prop('disabled',false);
                    $('#btnLimpiarAcuerdo').prop('disabled',false);
                    //botones de pdf y visor
                    $('#inputVisor').hide();
                    $('#inputPDF').hide();
                    //digitalizador
                    $('#inputDigitalizar').hide();
                    break;
        		case 'acuerdoTexto':
                    editor.setContent("", false);
        			break;
        	}
        },
        resolver:function(){
            var idActuacion = $('#hiddenIdActuacion').val();
            var idActuacionesEstatus = $('#hiddenIdActuacionesEstatus').val();
            var idQuejaProm = $('#hiddenIdQuejaPromocion').val();
            var textoAcuerdo = editor.getContent();
            var fechaHoy = $('#fechaHoy').val().split(' ');
            var fechaHoyTmp = fechaHoy[0].split('/');
            fechaHoy = fechaHoyTmp[2] + '-' + fechaHoyTmp[1] + '-' + fechaHoyTmp[0] + ' ' + fechaHoy[1];
            var strDatos = "accion=guardar&idQuejaProm=" + idQuejaProm + "&resolucion=" + textoAcuerdo + "&fechaResolucion=" + fechaHoy;
            var self = this;
            //guarda el Acuerdo
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/quejapromociones/QuejapromocionesFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                success: function (respuesta) {
                    var objeto = eval('(' + respuesta + ')');
                    if( objeto.totalCount > 0 ){
                        //resuelve
                        self.actualizaEstadoQueja( idActuacion, idActuacionesEstatus, 40 ); //40, resuelta por el consejo
                        $('#btnResolver').prop('disabled',true);
                        $('#btnLimpiarAcuerdo').prop('disabled',true);
                        muestraMensaje('Acuerdo Guardado correctamente.','success');
                        //botones de pdf y visor
                        $('#inputVisor').show();
                        $('#inputPDF').show();
                        //digitalizador
                        $('#inputDigitalizar').show();
                    }else{
                        muestraMensaje('No se Guard&oacute; el Acuerdo. Intente nuevamente.','error');
                    }
                }
            });
        },
        visorDocumentos:function() {
            $.ajax({
                type: 'POST',
                url: 'visorpdf/index.php',
                data: {idCarpetaJudicial: "", idActuacion: $('#hiddenIdActuacion').val(), cveTipoDocumento: 27},
                async: false,
                dataType: 'html',
                beforeSend: function () {
                    $('#visor').html('<h3>Consultando informaci&oacute;n ... espere.</h3>');
                },
                success: function (data) {
                    $('#visor').html(data);
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. '+  otroobj +'</h3>'); 
                    console.log('\nOBJ: '+objeto+ '\nQ: '+quepaso+'\nO:'+otroobj)
                }
            });
        },
        enviar:function(){
            var strDatos = "accion=generarJson";
                strDatos += "&cveTipo=2"; //2 = actuacion
                strDatos += "&cveTipoDocumento=27"; //tipo documento
                strDatos += "&idActuacion="+$("#hiddenIdActuacion").val();
                
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
        },
        digitalizar:function(){

        }

	}
}

var arrayDatosResultados = {
    datos:[]
}