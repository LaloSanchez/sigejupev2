// ********** Israel HernAndez SAnchez - Octubre 2016 - israelhs 

// De acuerdo a la funcionalidad perticular de este módulo, hay secciones y funcionalidades que estan validadas en codigo duro
// tales funcionalidades estan ligadas al grupo del usuario de transparencia con valor en variable de sesion  ["cveGrupo"]=> "205"
// entre las funcionalidades validadas de esta forma esta:
//     -la lista de juzgados/salas para la consulta de sentencias y actualizaciOn de su status

//definicion de variables
// variables globales
var g = {
    cveJuzgado: $('#SysCveAdscripcion').val(),
    juzgado: "cveTipoJuzgado",
    juzgadoConsulta: "cveTipoJuzgado",
    juzgadoBusqueda: "cveTipoJuzgado_busqueda",
    tipoJuzgado: "cveTipoJuzgadoAlt",
    carpeta: "tipoCarpeta",
    carpetaBusqueda: "tipoCarpetaBusqueda",
    ta: "31",
    idGrupo: $("#cveGrupoUsuario").val(),
    crud: {
        create: 'N',
        read: 'N',
        update: 'N',
        delete: 'N'
    } // Variable para almacenar los permisos del formulario
};
var titulos = { 'titulo1': 'Resoluciones P&uacute;blicas ', 'titulo2': 'B&uacute;squeda', 'titulo3': 'Resultados' };

if (ue != undefined) {
    ue.destroy();
}
var ue = null;

//realiza la busqueda de dentencias
$('.btn-buscar').on("click", function(){
    //limpia datos previos
    $("#totalReg").empty();
    $('#cmbPaginacion').empty();
    $('#cmbNumReg').prop('selectedIndex', 0);
    $('#tableSearch').empty();
    buscarRegistros();
    //muestraSeccion(3);
});

//limpia los campos de la seccion principal
$('.btn-limpiar').on("click", function(){
    cleanFields();
});

//limpia los campos de la seccion de busqueda
$('.btn-limpiarBusqueda').on("click", function(){
    cleanFields(2);
});

/**
 * FunciOn para buscar registros
 */
function buscarRegistros(idActuacion) {
    var idActuacion = idActuacion || '';
    //carga variables
    var page = $("#cmbPaginacion").val();
    var cantReg = $("#cmbNumReg").val();
    var tipoCarpeta = $('#' + g.carpetaBusqueda + ' option:selected').val();
    tipoCarpeta = (tipoCarpeta != 0 ? tipoCarpeta : '');
    var txtTipoCarpeta = $('#' + g.carpetaBusqueda + ' option:selected').text();
    var numActuacion = $('#numeroBusqueda').val();
    var anioActuacion = $('#anioBusqueda').val();
    var fechaInicial = '';
    var fechaFinal = '';
    var tipoFiltro = $('#tipoFiltro').val();

    if (tipoCarpeta == '' && numActuacion == '' && anioActuacion == '') {
        fechaInicial = $('#finicial_busqueda').val();
        fechaFinal = $('#ffinal_busqueda').val();
    }
    var tableContent = '';
    var cveJuzgadoBusqueda = '0/0'; //si es usuario de transparencia no envia datos para que haga la consulta en todos los juzgados
    if( g.idGrupo != '205' ){
        cveJuzgadoBusqueda = $('#SysCveAdscripcion').val() + '/' + $('#cveTipoJuzgadoAlt').val();
    }
    cveJuzgadoBusqueda = ($('#' + g.juzgadoBusqueda).val() != '0/0') ? $('#' + g.juzgadoBusqueda).val() : cveJuzgadoBusqueda;
    var dataFacade = "accion=buscarSentenciaPublica&idActuacion=" + idActuacion + "&cveTipoCarpeta=" + tipoCarpeta + "&numero=" + numActuacion + "&anio=" + anioActuacion + "&cveJuzgado=" + cveJuzgadoBusqueda + "&txtFecInicialBusqueda=" + fechaInicial + "&txtFecFinalBusqueda=" + fechaFinal + "&pag=" + page + "&cantxPag=" + cantReg + "&tipoFiltro=" + tipoFiltro;

    $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/sentenciaspublicas/SentenciaspublicasFacade.Class.php",
                data: dataFacade,
                async: true,
                dataType: "html",
                success: function (response) {

    // $.post("../fachadas/sigejupe/sentenciaspublicas/SentenciaspublicasFacade.Class.php", {
        // idActuacion: idActuacion,
        // cveTipoCarpeta: tipoCarpeta,
        // numero: numActuacion,
        // anio: anioActuacion,
        // cveJuzgado: cveJuzgadoBusqueda,
        // txtFecInicialBusqueda: fechaInicial,
        // txtFecFinalBusqueda: fechaFinal,
        // pag: page,
        // cantxPag: cantReg,
        // tipoFiltro:tipoFiltro,
        // accion: 'buscarSentenciaPublica'
    //}, function(response) {
        response = jQuery.parseJSON( response );
        // response = jQuery.parseJSON( response );
        if( eval( response.status ) ){
            if( idActuacion != '' ){
                $.each( response.data, function(k,v){
                    registros.reg[k] = {
                                    id:v.id,
                                    numeroAct:v.numeroAct,
                                    anioAct:v.anioAct,
                                    idTipoAct:v.idTipoAct,
                                    ref:v.ref,
                                    numero:v.numero,
                                    anio:v.anio,
                                    carpeta:v.carpeta,
                                    descCarpeta:v.descCarpeta,
                                    juzgado:v.juzgado,
                                    tipoJuzgado:v.tipoJuzgado,
                                    descJuzgado:v.descJuzgado,
                                    sintesis:v.sintesis,
                                    descSintesis:v.descSintesis,
                                    observaciones:v.observaciones,
                                    tipoResolucion:v.tipoResolucion,
                                    descTipoResolucion:v.descTipoResolucion,
                                    tipoProcedimiento:v.tipoProcedimiento,
                                    descTipoProcedimiento:v.descTipoProcedimiento,
                                    registro:v.registro,
                                    definiciones:v.definiciones,
                                    correcciones:v.correcciones
                    };
                    //return;
                });
                    muestraRegistro( 0 );
                //return;
            }else{
                //variables para mostrar registros
                g.juzgadoConsulta = cveJuzgadoBusqueda
                var tablaResultados = '<table class="table table-bordered table-hover" id="tblResultados">';
                tablaResultados += '<thead><tr>'
                                + '<th>#</th>'
                                + '<th>Estado</th>'
                                + '<th>Juzgado</th>'
                                + '<th>Carpeta</th>'
                                + '<th>Sintesis</th>'
                                + '<th>Tipo de Resoluci&oacute;n</th>'
                                + '<th>Tipo de Procedimiento</th>'
                                + '<th>Fecha de registro</th>'
                                + '</tr></thead><tbody>';
                $.each( response.data, function(k,v){
                    registros.reg[k] = {
                                    id:v.id,
                                    numeroAct:v.numeroAct,
                                    anioAct:v.anioAct,
                                    idTipoAct:v.idTipoAct,
                                    ref:v.ref,
                                    numero:v.numero,
                                    anio:v.anio,
                                    carpeta:v.carpeta,
                                    descCarpeta:v.descCarpeta,
                                    juzgado:v.juzgado,
                                    tipoJuzgado:v.tipoJuzgado,
                                    descJuzgado:v.descJuzgado,
                                    sintesis:v.sintesis,
                                    descSintesis:v.descSintesis,
                                    observaciones:v.observaciones,
                                    tipoResolucion:v.tipoResolucion,
                                    descTipoResolucion:v.descTipoResolucion,
                                    tipoProcedimiento:v.tipoProcedimiento,
                                    descTipoProcedimiento:v.descTipoProcedimiento,
                                    registro:v.registro,
                                    definiciones:v.definiciones,
                                    correcciones:v.correcciones
                    };
                    // tablaResultados += "<tr onclick='muestraRegistro(" + JSON.stringify( v ) + ")'>"
                    var color = '';
                    switch( v.definiciones.idEstado ){
                        case '1':
                            color = 'blue';
                            break;
                        case '2':
                            color = 'green';
                            break;
                        case '3':
                            color = 'yellow';
                            break;
                        default:
                            color = 'none';
                            break;
                    }
                    tablaResultados += "<tr onclick='muestraRegistro(" + k + ")'>"
                                    + '<td>' + eval( k+1 ) + '</td>'
                                    + '<td style="border-left-color:' + color + '; border-left-width:5px;">' + v.definiciones.estado + '</td>'
                                    + '<td>' + v.descJuzgado + '</td>'
                                    + '<td>' + v.descCarpeta + '&nbsp;' + v.numero + ' / ' + v.anio + '</td>'
                                    + '<td>' + v.descSintesis + '</td>'
                                    + '<td>' + v.descTipoResolucion + '</td>'
                                    + '<td>' + v.descTipoProcedimiento + '</td>'
                                    + '<td>' + dateFormat(v.registro) + '</td>'
                                    + '</tr>';
                });
                tablaResultados += '</tbody></table>';
                $("#tablaResultados").empty().html(tablaResultados);
                $('#tblResultados').DataTable({
                    paging: false
                });
                getPages(page, cantReg);

                showMessage( response.mensaje, 'success', 'busqueda' );
                muestraSeccion(3);
            }
        }else{
            showMessage( response.mensaje, 'error', 'busqueda' );
        }
    }
    });
}

/**
 * FunciOn para obtener las paginas de la tabla de resultados
 * @param {integer} page Es el nUmero de la pAgina a la que se cambiarA
 * @param {integer} cantReg Es el nUmero de registros a mostrar en la pAgina
 */
function getPages(page, cantReg) {
    var tipoCarpeta = $('#tipoCarpetaBusqueda option:selected').val();
    var numActuacion = $('#numeroBusqueda').val();
    var anioActuacion = $('#anioBusqueda').val();
    var fechaInicial = '';
    var fechaFinal = '';
    if ((tipoCarpeta == '' || tipoCarpeta == 0) && numActuacion == '' && anioActuacion == '') {
        fechaInicial = $('#finicial_busqueda').val();
        fechaFinal = $('#ffinal_busqueda').val();
    }
    var cveJuzgadoBusqueda = ($('#' + g.juzgadoBusqueda).val() != '0/0') ? $('#' + g.juzgadoBusqueda).val().split('/')[0] : $('#SysCveAdscripcion').val();
    var totalPages = 0;
    $.ajax({
        type: 'POST',
        async: false,
        data: {
            cveTipoCarpeta: tipoCarpeta,
            numero: numActuacion,
            anio: anioActuacion,
            cveJuzgado: cveJuzgadoBusqueda,
            cveTipoActuacion: g.ta,
            txtFecInicialBusqueda: fechaInicial,
            txtFecFinalBusqueda: fechaFinal,
            activo: 'S',
            cantxPag: cantReg,
            accion: 'getPaginas'
        },
        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
        success: function(response) {
            var json = "";
            json = jQuery.parseJSON( response );
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
* FunciOn para mostrar el detalle de un registro seleccionado
**/
function muestraRegistro(idRegistro){
    var dataRegistro = registros.reg[ idRegistro ];
    muestraSeccion(1);
    //llena la informaciOn de la secciOn principal
    $('#idActuacion').val( dataRegistro.id );
    $('#idCarpetaJudicialArbol').val( dataRegistro.ref );
    $('#cveTipoJuzgado').val( dataRegistro.juzgado + '/' + dataRegistro.tipoJuzgado );
    cargaTipoCarpeta(g.carpeta, g.carpetaBusqueda);
    $('#carpetaNumero').val( dataRegistro.numero );
    $('#carpetaAnio').val( dataRegistro.anio );
    $('#tipoProcedimiento').val( dataRegistro.tipoProcedimiento );
    $('#tipoResolucion').val( dataRegistro.tipoResolucion );
    $('#textSintesis').val( dataRegistro.sintesis );

    llenareditor( dataRegistro.observaciones );    

    //llena la informaciOn de la secciOn de definiciones
    //crea los campos necesarios

    // var definiciones = (dataRegistro.definiciones.id != 'undefined') ? dataRegistro.definiciones.definiciones : dataRegistro.definiciones ;
    var definiciones = dataRegistro.definiciones ;
    var estadoSentencia = definiciones.idEstado;
    $('#cveEstado').val( estadoSentencia );

    definiciones = definiciones.definiciones.split(',');
    for( var i=2; i<= definiciones.length ; i++ ){ //inicia en 2 debido a que ya existe el primer grupo de definiciones
        agregaDefinicion();
    }

    //llena los campos creados anteriormente
    var indice = 0;
    var elements = document.getElementById("tagForm");    
    for (i = 1; i < elements.length; i = i + 2) {
        if (elements[i].name.indexOf("tag[") > -1){
            var valores = definiciones[ indice ]; //.split('|');
            elements[i].value = valores;
            indice++;
        }
    }

    //muestra historico de correcciones
    tablaCorrecciones( dataRegistro.correcciones );

    //muestra campos de acciones adicionales
    if( estadoSentencia != 2 ){
        $('#btn_eliminar, #inputPDF').show().prop('disabled',false);
    }else if( estadoSentencia == 2 ){
        $('#btn_guardaSentenciaPublica, #btn_eliminar, #inputPDF, #btn-switch').hide();
        $('.definiciones, .removeButton, .addButton').prop('disabled', true);
        ocultaCamposAprobada();
        $('#divAdvertencia_estado').empty().append('Esta Resoluci&oacute;n ya se encuentra APROBADA para su versi&oacute;n P&uacute;blica.').addClass('alert-success').show();
    }
    if( estadoSentencia == 1){
        $('#divAdvertencia_estado').empty().append('Esta Resoluci&oacute;n se encuentra PENDIENTE DE REVISI&Oacute;N por parte del Depto. de Transparencia.').addClass('alert-info').show();
    }
    if( estadoSentencia == 3 ){
        $('#btn_guardaSentenciaPublica, #btn-switch').show();
        $('#divAdvertencia_estado').empty().append('Esta Resoluci&oacute;n NECESITA CORREGIRSE para su versi&oacute;n P&uacute;blica.').addClass('alert-warning').show();
    }
    $('#inputVisor').show().prop('disabled',false);
    cargarOpcionesGrupo();
    $('#tipoCarpeta').val( dataRegistro.carpeta );
    if( estadoSentencia == 2 ){
        ocultaCamposAprobada();
    }
}

//eliminacion lOgica
$('#btn_eliminar').on("click", function(){
    var eliminacion = confirm("Se eliminará el registro. ¿Desea continuar?");
    if( eliminacion ){
        eliminaSentenciaPublica();
    }
    return;
});

function eliminaSentenciaPublica(){
    var idActuacion = $('#idActuacion').val();
    var accion = 'eliminaSentenciaPublica';
    var urlFacade = "../fachadas/sigejupe/sentenciaspublicas/SentenciaspublicasFacade.Class.php";
    var dataFacade = "IdActuacion=" + idActuacion + "&accion=" + accion;
    $.ajax({
        async: false,
        type: 'POST',
        url: urlFacade,
        data: dataFacade
    }).done(function(response) {
        response = jQuery.parseJSON( response );
        if( eval( response.status ) ){
            muestraSeccion(1);
            showMessage( response.mensaje, 'success' );
            recargaArbol();
        }else{
            showMessage( response.mensaje, 'error' );
        }
    });
}

function recargaArbol(){
    if ($('#procedencia').val() == 1) {
        getTree();
    }
}

llenareditor = function(value) {
    try {
        ue.ready(function() {
            setTimeout(function() {
                ue.setContent(value);
            }, 1000);
        });
    } catch (e) {
        alert(e);
    }
};

/**
 * Muestra en el formulario, la informaciOn del renglOn elegido de la tabla de resultado de la bUsqueda
 * @param {int} position Es la posiciOn del elemento en el arreglo 
 */
function showInfo(posicion) {
    var objeto = findContent.regs[posicion];
    //muestra formulario
    cambiarSeccion(1);
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
    if (g.crud.delete == 'S') {
        $('#btn_mcautelares_delete').prop("disabled", false);
    }
    $('#btn_mcautelares_delete').show();
    llenareditor(objeto.observaciones);
    cambiarSeccion(1);
    $('#inputPDF').show();
    $('#inputVisor').show();
}

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


//Valida que exista el contenido del documento (Sentencia)
function validaSentencia() {
	var contenido = ue.getContent();
	if( contenido === '' ){
		showMessage('Debe escribir la Resoluci&oacute;n y porteriormente convertirla a Vista Publica.','warning','definiciones');
		return true;
	}
	return false;
}

//Accion(es) al guardar la Sentencia
$('#btn_guardaSentenciaPublica').on("click", function(){
    switch_mode();
	guardaSentencia();
	return;
});

//Guarda la Sentencia PUblica
function guardaSentencia() {
	//****** tipo actuacion debe ir en el controller
	//definiciOn de variables 
	var infoCompleta = false;
	var idActuacion = $('#idActuacion').val();
	var idReferencia = $('#idCarpetaJudicialArbol').val();
	var numero = $('#carpetaNumero').val();
	var anio = $('#carpetaAnio').val();
	var tipoCarpeta = $('#tipoCarpeta').val();
	var juzgado = $('#cveTipoJuzgado').val().split('/')[0];
	var sintesis = $('#textSintesis').val();
    var observaciones = ue.getContent();
	// var observaciones = ue.getAllHtml();
 //    observaciones = observaciones.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
	var tipoResolucion = $('#tipoResolucion').val();
	var tipoProcedimiento = $('#tipoProcedimiento').val();
	var definiciones = globales.toString();
	var accion = ( idActuacion == '' || idActuacion == '0'  ) ? 'guardarSentenciaPublica' : 'actualizarSentenciaPublica';
	
	//validacion de informaciOn completa
	var data = [ idReferencia, numero, anio, tipoCarpeta, juzgado, sintesis, observaciones, tipoResolucion, tipoProcedimiento ];
	$.each( data , function(k,v){
		if( v == 0 || v == '' ){
			infoCompleta = false;
			return infoCompleta;
		}else{
			infoCompleta = true;
		}
	});

    //validacion de etiquetas
    if (campos_vacios()){
        infoCompleta = false;
    }

	//validaciOn para la ejecuciOn de la funciOn
	if( infoCompleta ){
		var urlFacade = "../fachadas/sigejupe/sentenciaspublicas/SentenciaspublicasFacade.Class.php";
//		var dataFacade = "idActuacion=" + idActuacion + "&idReferencia=" + idReferencia + "&numero=" + numero + "&anio=" + anio + "&cveTipoCarpeta=" + tipoCarpeta + "&cveJuzgado=" + juzgado + "&sintesis=" + sintesis + "&observaciones=" + observaciones + "&tipoResolucion=" + tipoResolucion + "&tipoProcedimiento=" + tipoProcedimiento + "&definiciones=" + definiciones + "&accion=" + accion;
	    $.ajax({
	        async: false,
	        type: 'POST',
	        url: urlFacade,
	        data: {
                idActuacion:idActuacion,
                idReferencia:idReferencia,
                numero:numero,
                anio:anio,
                cveTipoCarpeta:tipoCarpeta,
                cveJuzgado:juzgado,
                sintesis:sintesis,
                observaciones:observaciones,
                tipoResolucion:tipoResolucion,
                tipoProcedimiento:tipoProcedimiento,
                definiciones:definiciones,
                accion:accion
            }
	    }).done(function(response) {
	    	var response = jQuery.parseJSON( response );
            if( eval(response.status) ){
                showMessage(response.mensaje,'success');
                $('#idActuacion').val( response.data.id );
                $('#inputVisor').show().prop('disabled',false);
                $('#inputPDF').show().prop('disabled',false);
                recargaArbol();
                $('#divAdvertencia_estado').empty().append('Esta Resoluci&oacute;n se encuentra PENDIENTE DE REVISIÓN por parte del Depto. de Transparencia.').addClass('alert-info');
            }else{
                showMessage(response.mensaje,'error');
            }
	    });
	}else{
		showMessage('Necesita completar la informaci&oacute;n del Formulario. Revise e intente de nuevo.', 'warning');
	}
	return;
}

//AcciOn al cambiar el Juzgado
$("#" + g.juzgado).change(function() {
    cargaTipoCarpeta(g.carpeta, g.carpetaBusqueda);
});

$('#' + g.juzgadoBusqueda).change(function() {
    cargaTipoCarpeta(g.carpeta, g.carpetaBusqueda,2);
});

//AcciOn al presionar botOn de Buscar Expediente
$('#btn_buscaCarpeta').click(function() {
    buscaCarpeta();
});

function buscaCarpeta(){
    var juzgado = $('#' + g.juzgado).val().split("/")[0];
    var carpeta = $('#' + g.carpeta).val();
    var numero = $('#carpetaNumero').val();
    var anio = $('#carpetaAnio').val();
    var toca = 6; //identificador de la toca
    var busquedaPor = 'expediente';
    var idActuacion = $('#idActuacion').val();
    var campos = validaCampos(
        [{
            "value": juzgado,
            "name": "Juzgado"
        }, {
            "value": carpeta,
            "name": "Carpeta"
        }, {
            "value": numero,
            "name": "NÃºmero"
        }, {
            "value": anio,
            "name": "AÃ±o"
        }]);
    if (campos) {
        //valida buscar por expediente o por toca
        if (carpeta == toca) {
            busquedaPor = 'toca';
        }
        busquedaExpediente(busquedaPor, juzgado, carpeta, numero, anio, idActuacion);
    } else {
        alert(' Por favor ingrese los campos faltantes: ' + campos);
    }
    var datos = {};
}
/**
 * FunciOn para buscar expediente y toca
 **/
function busquedaExpediente(busquedaPor, juzgado, carpeta, numero, anio, idActuacion) {
    var busquedaPor = busquedaPor || 'expediente';
    var juzgado = juzgado || '0';
    var carpeta = carpeta || '0';
    var numero = numero || '0';
    var anio = anio || '0';
    var idActuacion = idActuacion || '0';
    var urlFacade = "../fachadas/sigejupe/sentenciaspublicas/SentenciaspublicasFacade.Class.php";
    var dataFacade = "numero=" + numero + "&anio=" + anio + "&cveTipoCarpeta=" + carpeta + "&cveJuzgado="+juzgado;
    var respuesta = '';
    if (busquedaPor == 'expediente') {
        dataFacade += "&accion=consultarExpediente&idActuacion=" + idActuacion;
    } else if (busquedaPor == 'toca') {
        dataFacade += "&accion=consultarToca";
    }
	var mensaje = { "error":"No existen datos relacionados.", "encontrado":"Datos validos.", "existente":"Ya existe un registro con estos datos."}
    var spanMensaje = $('#resultadoBusquedaActuacion');
    spanMensaje.empty().append( 'Buscando...' )
    $.ajax({
        async: false,
        type: 'POST',
        url: urlFacade,
        data: dataFacade
    }).done(function(response) {
        console.log("response:");
        console.log(response);
        var objeto = jQuery.parseJSON( response );
        console.log("objeto:");
        console.log(objeto);
    	var status = objeto.status;
    	var idReferencia = objeto.data;
    	if( status == 'ok' ){
    		$('#idCarpetaJudicialArbol').val( idReferencia );
    		spanMensaje.empty().append( mensaje['encontrado'] );
    	}else if( status == 'error' ){
            $('#idCarpetaJudicialArbol').val('');
            spanMensaje.empty().append( mensaje['error'] );
        }else if( status == 'existente' ){
    		$('#idCarpetaJudicialArbol').val('');
    		spanMensaje.empty().append( mensaje['existente'] );
        }
    });
    return respuesta;
}

/**
 * Valida que antes de guardar o actualizar, todos los campos contegan informaciOn
 * @param {array} array Es el arraglo de campos a validar
 * @return {boolean} state Regresa 'true' si todos los campos contienen informaciOn
 */
function validaCampos(array) {
    var state = true;
    var error = [];
    var counter = 0;
    $.each(array, function(k, v) {
        if (v.value == '' || v.value == 0 || v.value == null) {
            state = false;
            error += v.name + ', ';
            return;
        }
    });
    if (!state) {
        //elimina ultima ','
        state = error.slice(0, -2) + '.';
    }
    return state;
}
/**
 * FunciOn para obtener el tipo de carpeta
 **/
function cargaTipoCarpeta(idTipoCarpeta, idTipoCarpetaBusqueda, seccion) {
    var seccion = seccion || 1;
    var idTipoCarpeta = idTipoCarpeta || 'vacio';
    var idTipoCarpetaBusqueda = idTipoCarpetaBusqueda || 'vacio';
    var idsCombos = "#" + idTipoCarpeta + ", #" + idTipoCarpetaBusqueda;
    var tipoJuzgado = (seccion == 1) ? $("#" + g.juzgado).val().split("/") : $("#" + g.juzgadoBusqueda).val().split("/");
    var strDatos = "accion=consultar";
    $(idsCombos).empty().append($('<option></option>').val(0).html("Cargando..."));
    $.ajax({
        type: "POST",
        url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
        data: strDatos,
        async: false,
        dataType: "html",
        success: function(datos) {
            var json = "";
            var cveTipoCarpeta = "";
            var desTipoCarpeta = "";
            json = eval("(" + datos + ")");
            if (json.totalCount > 0) {
                $(idsCombos).empty().append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                for (var i = 0; i < json.totalCount; i++) {
                    cveTipoCarpeta = json.data[i].cveTipoCarpeta;
                    desTipoCarpeta = json.data[i].desTipoCarpeta;
                    console.log(tipoJuzgado[1]);
                    switch (tipoJuzgado[1]) {
                        case "1": // tipo de juzgado de control
                            // if (cveTipoCarpeta == "2" || cveTipoCarpeta == "1" || cveTipoCarpeta == "7") { // control, auxiliar, exhorto
                            if (cveTipoCarpeta == "2") { // control
                                $(idsCombos).append($('<option></option>').val(cveTipoCarpeta).html(desTipoCarpeta));
                            }
                            break;
                        case "2": // tipo de juzgado juicio
                            // if (cveTipoCarpeta == "3" || cveTipoCarpeta == "7" || cveTipoCarpeta == "8") { // exhorto, amparo 
                            if (cveTipoCarpeta == "3") { // juicio
                                $(idsCombos).append($('<option></option>').val(cveTipoCarpeta).html(desTipoCarpeta));
                            }
                            break;
                        case "3": // tipo de juzgado ejecucion
                            if (cveTipoCarpeta == "5" || cveTipoCarpeta == "7" || cveTipoCarpeta == "8") { // exhorto, amparo
                                $(idsCombos).append($('<option></option>').val(cveTipoCarpeta).html(desTipoCarpeta));
                            }
                            break;
                        case "4": // tipo de juzgado tribunal
                            // if (cveTipoCarpeta == "4" || cveTipoCarpeta == "7" || cveTipoCarpeta == "8") { // exhorto, amparo 
                            if (cveTipoCarpeta == "4") { // tribunal
                                $(idsCombos).append($('<option></option>').val(cveTipoCarpeta).html(desTipoCarpeta));
                            }
                            break;
                        case "5": // tipo de juzgado: Tribunal de Alzada
                        case "8":
                            if (cveTipoCarpeta == "6") { // toca
                                $(idsCombos).append($('<option></option>').val(cveTipoCarpeta).html(desTipoCarpeta));
                            }
                            break;
                    }
                }
                // $(idsCombos).append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
            }
        },
        error: function(objeto, quepaso, otroobj) {
            showMessage("Error en la peticion:\n\n" + quepaso, 'error');
        }
    });
}
/**
 * FunciOn para obtener y asignar los permisos del usuario activo sobre el formulario
 */
function definePermisos() {
    var cveUsuarioSistema = $('#SysCveUsuarioSistema').val();
    var cvePerfilSesion = $('#SysCvePerfil').val();
    insert_numEmpleado = cveUsuarioSistema;
    $.get("../archivos/" + cveUsuarioSistema + ".json", function(response) {
        var perfiles = response.perfiles[0],
        i = 0,
        permisoFormulario = '';
        for (i = 0; i < perfiles.totPerfiles; i++) {
            if (cvePerfilSesion == perfiles.perfil[i].cvePerfil) {
                $.each(perfiles.perfil[i].permisos, function(k, vnombre) {
                    if (vnombre.nomFormulario == "CARPETAS JUDICIALES" || vnombre.nomFormulario == "TOCAS") {
                        $.each(vnombre.hijos, function(k2, nombreHijo) {
                            if (nombreHijo.nomFormulario == "RESOLUCION PUBLICA") {
                                permisoFormulario = nombreHijo.permisoFormulario[0];
                                g.crud.create = permisoFormulario.create;
                                g.crud.read = permisoFormulario.read;
                                g.crud.update = permisoFormulario.update;
                                g.crud.delete = permisoFormulario.delete;
                                return false;
                            }
                        });
                    }
                });
            }
        }
        console.log(g.crud);
        cargarOpcionesGrupo();        
    });
}

/**
 * FunciOn para obtener los juzgados por distrito
 **/
function cargaJuzgados(idComboJuzgado, idComboJuzgadoBusqueda, idTipoJuzgado, idTipoCarpeta, idTipoCarpetaBusqueda) {
    var idComboJuzgado = idComboJuzgado || '';
    var idComboJuzgadoBusqueda = idComboJuzgadoBusqueda || '';
    var idTipoJuzgado = idTipoJuzgado || '';
    // var strDatos = "accion=conSalas";
    var strDatos = "accion=distrito";
    $.ajax({
        type: "POST",
        url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
        data: strDatos,
        async: false,
        dataType: "html",
        success: function(datos) {
            var json = eval("(" + datos + ")");
            if (json.totalCount > 0) {
                $("#" + idComboJuzgado + ", #" + idComboJuzgadoBusqueda).empty().append('<option value="0/0">Seleccione una opci&oacute;n</option>');
                for (var i = 0; i < json.totalCount; i++) {
                    if (json.data[i].cveTipojuzgado == 1 || json.data[i].cveTipojuzgado == 2 || json.data[i].cveTipojuzgado == 4 || json.data[i].cveTipojuzgado == 5) { //limita a mostrar solo el/los juzgados de control
                        $("#" + idComboJuzgado + ", #" + idComboJuzgadoBusqueda).append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                    }
                    if (g.cveJuzgado == json.data[i].cveJuzgado) {
                        $("#" + idComboJuzgado + " option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                        $("#" + idTipoJuzgado).val(json.data[i].cveTipojuzgado);
                        $("#" + idComboJuzgadoBusqueda + " option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                    }
                }
            } else {
                $("#" + idComboJuzgado + ", #" + idComboJuzgadoBusqueda).empty().append('<option value="0/0">Sin registros</option>');
            }
            cargaTipoCarpeta(idTipoCarpeta, idTipoCarpetaBusqueda);
        },
        error: function(objeto, quepaso, otroobj) {
            showMessage("Error en la peticion:\n\n" + quepaso, 'error');
        }
    });
}

/**
* FunciOn para obtener los tribunales de alzada
**/
function cargaTribunales(){
//g.juzgado, g.juzgadoBusqueda, g.tipoJuzgado, g.carpeta, g.carpetaBusqueda
    var strDatos = "accion=tribunales",
    objeto = '',
    opciones = '<option value="0/0">--SELECCIONE--</option>';
    $.ajax({
        type: "POST",
        url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
        data: strDatos,
        async: false,
        dataType: "json",
        success: function(datos) {
            if( datos.totalCount > 0){
                $.each( datos.data, function(k,v){
                    opciones += '<option value="'+v.cveJuzgado + '/5">' + v.desJuzgado + '</option>';
                });
            }else{
                opciones = '<option value="0/0">Sin registros</option>';
            }
            $("#" + g.juzgado + ", #" + g.juzgadoBusqueda).empty().append( opciones );
            cargaTipoCarpeta(g.carpeta, g.carpetaBusqueda);
        }
    });
}

/**
 * FunciOn para la obtenciOn de informacion de tablas y llenado de combos
 * @param {array} selectIds Ids de los combos donde se mostraran los datos
 * @param {string} facade Es la ruta de la fachada que se invoca, solo se define la carpeta y el nombre del archivo sin la extensiOn Class en adelante. Ej. tiposcarpetas/TiposcarpetasFacade
 * @param {string} value Es el identificador del campo llave
 * @param {string} descripction Es el identificador del campo de descripciOn
 */
function llenaCombo(selectIds, facade, value, description) {
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
 * @param {integer} idSeccion Id del mOdulo. 1:principal, 2:bUsqueda
 */
function muestraSeccion(idSeccion) {
    cambiarSeccion(idSeccion);

}

/**
 * Muestra/Oculta el div del formulario y la tabla de bUsqueda
 * @param {int} opc Recibe un parametro para mostrar el DIV correspondiente
 */
function cambiarSeccion( seccion ) {
	var titulo = titulos['titulo1'];
    if ( seccion === 1) { //muestra formulario principal
        $("#divConsulta, #divResultados").hide("fade");
        $("#divFormulario").show("slide");
        titulo = titulos['titulo1'];
        cargaTipoCarpeta(g.carpeta, g.carpetaBusqueda);
        cleanFields(seccion);
    } else if ( seccion === 2) { //muestra el formulario de consulta
        $("#divFormulario, #divResultados").hide("fade");
        $("#divConsulta").show("slide");
        titulo = '<a href="#" onclick="muestraSeccion(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / ' + titulos['titulo2'];
        cargaTipoCarpeta(g.carpeta, g.carpetaBusqueda, 2);
        cleanFields(seccion);
    } else if ( seccion === 3) { //muestra el formulario de resultados
        $("#divFormulario, #divConsulta").hide("fade");
        $("#divResultados").show("slide");
        titulo = '<a href="#" onclick="muestraSeccion(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / <a href="#" onclick="muestraSeccion(6)" style="text-decoration:underline;">' + titulos['titulo2'] + '</a> / ' + titulos['titulo3'];
    }
    $('#tituloSentenciasPublicas').empty().append(titulo);
}

/**
 * Limpia el contenido del formulario
 * @param {integer} idSeccion Recibe el Id del mOdulo del que se limpiaran sus campos
 */
function cleanFields(idSeccion) {
    try{
    var idSeccion = idSeccion || '1';
    if (idSeccion == 1) { //seccion de captura
        //reinicia campos de texto y combos
        $('#cveTipoJuzgado').val('0/0');
        cargaTipoCarpeta(g.carpeta, g.carpetaBusqueda);        
        $('#idActuacion, #carpetaNumero, #carpetaAnio, #textSintesis').val('');
        $('#tipoProcedimiento, #tipoResolucion').val(0);
        //eliminacion de definiciones adicionales
        $( "div[data-tag-index]" ).each( function(){
            $(this).remove();
        });
        //desbloqueo del boton para agregar definiciones
        $('.addButton, .removeButton').prop('disabled',false);
        //reset de campos de definiciones
        $('.definiciones').prop('disabled',false).val('');        
        //limpia contenido del documento
        ue.setContent('');
        $('#value').val("NOMBRES");
        modo = 0;
        $("#switch").val("1");
        //limpia mensaje de busqueda de expediente
        $('#resultadoBusquedaActuacion').empty();
        //oculta botones
        $('#btn_eliminar').hide().prop('disabled',true);
        $('#inputVisor').hide().prop('disabled',true);
        $('#inputPDF').hide().prop('disabled',true);
        //campos de estatus
        $('#optionsRadiosOk').prop('checked',true);
        // $('#optionsRadiosCorregir').removeAttr("checked");
        $('#span_TransparenciaGuardaEstatus').removeClass('glyphicon-repeat').addClass('glyphicon-ok');
        $('#div_TextCorreccion').hide();
        $('#text_Correccion').val('');
        $('#idCorreccion').val('0'); //debe ser '0' al reiniciar el campo
        $('#tbodyCorrecciones').empty();
        $('#div_tablaCorrecciones').hide();
        $("input[name='radioEstatus']").prop('disabled',false);
    } else if (idSeccion == 2) { //seccion de busqueda
        //reinicia campos de texto y combos
        $('#numeroBusqueda, #anioBusqueda').val('');
        $('#tipoCarpetaBusqueda, #tipoFiltro').val(0);
        //asigna las fechas de busqueda al dia actual
        $('.fechaHoy').val( $('#fecha').val() );
    }
    $('#divAdvertencia_estado').empty().removeClass('alert-success').removeClass('alert-warning').removeClass('alert-info');
    }catch(e){
        console.log('Ocurri&oacute; un error al limpiar los campos del formulario. Para garantizar la conclusi&oacute;n del proceso que esta ejecutando, vuelva a iniciar el m&oacute;dulo.');
    }
    return;
}

//calendarios para la bUsqueda
$('#finicial_busqueda, #ffinal_busqueda').datepicker().on('changeDate', function(e) { $(this).datepicker('hide'); });

function agregaDefinicion() {
    tagIndex++;
    var $template = $('#tagTemplate'),
        $clone = $template.clone().removeClass('hide').removeAttr('id').attr('data-tag-index', tagIndex).insertBefore($template);
    // Update the name attributes
    $clone.find('[name="tag"]').attr('name', 'tag[' + tagIndex + '].tag').end().find('[name="valor"]').attr('name', 'tag[' + tagIndex + '].valor').end();
    // Add new fields
    // Note that we also pass the validator rules for new field as the third parameter
    $('#tagForm').formValidation('addField', 'tag[' + tagIndex + '].tag', tagValidators).formValidation('addField', 'tag[' + tagIndex + '].valor', valorValidators);
}

function visorDocumentos() {
    $.ajax({
        type: 'POST',
        url: 'visorpdf/index.php',
        data: { idCarpetaJudicial: "", idActuacion: $('#idActuacion').val(), cveTipoDocumento: 33 }, //malo
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
    strDatos += "&cveTipoDocumento=33"; //tipo documento
    strDatos += "&idActuacion=" + $("#idActuacion").val();

    $.ajax({
        type: "POST",
        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
        data: strDatos,
        async: true,
        dataType: "html",
        success: function(datos) {
            var json = "";
            json = eval("(" + datos + ")"); //Parsear JSON
            if (json.totalCount > 0) {
                generaPDF(datos);
                showMessage('Correcto!: se genero el pdf correctamente', 'success');
            }else{
                showMessage('Ocurri&oacute; un error al generar el PDF.', 'error');
            }
        },
        error: function(objeto, quepaso, otroobj) {
            showMessage("Error en la peticion:\n\n" + quepaso, 'error');
        }
    });

};

//obtiene datos de una carpeta a travÃ©s de los datos del expediente penal
function obtieneDatosCarpeta(){
    var juzgado = $('#SysCveAdscripcion').val();
    var idCarpetaJudicialArbol = $('#idCarpetaJudicialArbol').val();
    $('#tipoCarpeta').val( $('#cveTipoCarpetaArbol').val() ); //tipo de carpeta
    //obtencion de los datos de la carpeta
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
            $('#carpetaNumero').val(data.numero);
            $('#carpetaAnio').val(data.anio);
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


//validacion de datos para el arbol
function desdeExpedientePenal() {
    var idActuacion = $('#idActuacion').val();
    if ($('#procedencia').val() == 1) {
        if ( idActuacion != '' && idActuacion != 0 ) { //idActuacionArbol
            buscarRegistros( idActuacion );
            $('.btn-limpiar, .btn-consultar').hide();
        } else if ($('#idCarpetaJudicialArbol').val() != '' && $('#cveTipoCarpetaArbol').val() != '') { //no es de actuacion
            obtieneDatosCarpeta();
            buscaCarpeta();
        }
    }
}

/**
* Function to switch forms permissions between Judge session and Information Access Administrators session
**/
function cargarOpcionesGrupo() {
    var idGrupo = $('#cveGrupoUsuario').val();
        vistaJuez = false,
        vistaTransparencia = false,
        edoSentencia = $('#cveEstado').val();

    if( idGrupo != 0 && idGrupo != undefined && idGrupo > 0 ){
        if( idGrupo == 205 ){ //grupo de transparencia, mismo valor que en la sesiOn
            vistaTransparencia = true;
        }else{ //cualquier otro grupo
            vistaJuez = true;
        }
    }

    //Hide section/fields/buttons occording to user permissions
    if(g.crud.create == 'N') {
        $('#btn_guardaSentenciaPublica, #inputPDF, #btn-switch, .removeButton, .addButton, #btn_buscaCarpeta').hide();
        $('.definiciones').prop('disabled',true);
    }else if(g.crud.create == 'S'){
        if( edoSentencia == 1 || edoSentencia == 3 ){ //waiting or for correction
            if( vistaJuez ){
                $('#btn_guardaSentenciaPublica, #inputPDF, #btn-switch, .removeButton, .addButton').show();
                $('.definiciones').prop('disabled',false);
            }
            if( vistaTransparencia ){
                $('#btn_guardaSentenciaPublica, #inputPDF, #btn-switch, .removeButton, .addButton, #btn_buscaCarpeta').hide();
                $('.definiciones').prop('disabled',true);
                $('#div_cambioEstado, #btn_TransparenciaGuardaEstatus').show();
            }
        }else if( edoSentencia == 2 ){ //approved
            if( vistaJuez ){
                $('#btn_guardaSentenciaPublica, #inputPDF, #btn-switch, .removeButton, .addButton').hide();
                $('.definiciones').prop('disabled',true);
            }
            // if( vistaTransparencia ){
            //     $('#btn_guardaSentenciaPublica, #inputPDF, #btn-switch, .removeButton, .addButton, #btn_buscaCarpeta').show();
            //     $('.definiciones').prop('disabled',false);
            // }
        }
    }

    if(g.crud.read == 'N') {
        $('.btn-consultar').hide();
    }

    if(g.crud.update == 'N') {
        $('#div_cambioEstado, #btn_TransparenciaGuardaEstatus').hide();
    }else if(g.crud.update == 'S'){
        if( vistaJuez ){
            $('#div_cambioEstado, #btn_TransparenciaGuardaEstatus').hide();
        }
        if( vistaTransparencia ){
            $('#div_cambioEstado, #btn_TransparenciaGuardaEstatus').show();
        }
    }

    if(g.crud.delete == 'N') {
        $('#btn_eliminar').hide();
    }
    return;
}

//Accion al guardar el Estatus de la sentencia
$('#btn_TransparenciaGuardaEstatus').on('click', function(){
    var idActuacion = $('#idActuacion').val(),
    radioAprobada = $("input[name='radioEstatus']:checked").val(),
    text_Correccion = $('#text_Correccion').val(),
    longitud_text_Correccion = text_Correccion.length,
    validacion = false;
    if( idActuacion != '' ){ //validar que tenga una actuacion activa para actualizacion
        if( radioAprobada >= '0' ){ //validar que este seleccionada una opcion del radio
            if( radioAprobada == '0' ){ //validar que tenga un texto definido
                if( longitud_text_Correccion >= '20' ){ //validar que exista un texto en el campo de correcciOn, de al menos 20 caracteres
                    validacion = true;
                }else{
                    showMessage('Escriba una descripci&oacute;n de la correcci&oacute;n de al menos 20 caract&eacute;res.','information');
                }
            }else{
                if( radioAprobada == '1' ){
                    validacion = true;
                }
            }
        }else{
            showMessage('Seleccione el Estatus de la Resoluci&oacute;n P&uacute;blica.', 'information');
        }
    }else{
        showMessage('No ha definido ninguna Resoluci&oacute;n P&uacute;blica para actualizar el Estatus. Verifique.', 'information');
    }

    if( validacion ){
        estadoSentencia( radioAprobada );
    }else{
        showMessage('Ocurri&oacute; un error, intente nuevamente.');
    }
});

/**
* Function to change the Judgment status
* @param action apruebaSentencia | correccionSentencia
**/
function estadoSentencia( action ){
    var action = action || '0',
    idActuacion = $('#idActuacion').val(),
    idCorreccion = $('#idCorreccion').val(),
    text_Correccion = $('#text_Correccion').val();
    if( action == '1' ){
        action = 'apruebaSentencia';
    }else{
        action = 'correccionSentencia';
    }
    if( idActuacion != 0 || idActuacion != undefined || idActuacion > 0 ){
        try{
            $.ajax({
                type: 'POST',
                async: false,
                data: {
                    IdActuacion: idActuacion,
                    idCorreccion:idCorreccion,
                    correccion: text_Correccion,
                    accion: action
                },
                url: "../fachadas/sigejupe/sentenciaspublicas/SentenciaspublicasFacade.Class.php",
                success: function(response) {
                    response = jQuery.parseJSON( response );
                    if( response.status == 'ok' ){
                        showMessage(response.message,'success'); //Response Message
                        if( response.data.estado == 3 ){ // Correction Request
                            $('#divAdvertencia_estado').empty().append('Esta Resoluci&oacute;n NECESITA CORREGIRSE para su versión Pública.').removeClass('alert-info').removeClass('alert-success').addClass('alert-warning'); // Status message Judgment
                            $('#idCorreccion').val( response.data.idCorreccion );
                        }else if( response.data.estado == 2 ){ // Approved Judgment
                            $('#divAdvertencia_estado').empty().append('Esta Resoluci&oacute;n ya se encuentra APROBADA para su versión Pública.').removeClass('alert-info').removeClass('alert-warning').addClass('alert-success'); // Status message Judgment
                            ocultaCamposAprobada();
                        }
                        //llenado de la tabla de correcciones
                        tablaCorrecciones( response.data.correcciones );
                    }else{
                        showMessage(response.message,'error'); //Response Message
                    }
                }
            });
        }catch( e ){
            alert(e);
        }
    }
}

/**
* FunciOn para ocular los campos al aprovar la sentencia
**/
function ocultaCamposAprobada(){
    //hide Save button
    $('#btn_TransparenciaGuardaEstatus').hide();
    $("input[name='radioEstatus']").prop('disabled',true);
}

/**
* FunciOn para el llenado de la tabla de correcciones
**/
function tablaCorrecciones( objeto ){
    var tbodyCorrecciones = '';
    console.log('objeto');
    if( objeto.length > 0){
        $.each( objeto, function(k,v){
            tbodyCorrecciones += '<tr>'
                            + '<td>' + eval(k+1) + '</td>'
                            + '<td>' + v.fechaRegistro + '</td>'
                            + '<td>' + v.correccion + '</td>'
                            + '<td>' + v.fechaActualizacionSP + '</td>'
                            + '</tr>';
        });
        $('#div_tablaCorrecciones').show();
    }else{
        tbodyCorrecciones = '<tr><td colspan="4">SIN REGISTROS</td></tr>';
        $('#div_tablaCorrecciones').hide();
    }
    $('#tbodyCorrecciones').empty().append( tbodyCorrecciones );
    return;
}

//Acciones al presionar el Radio con 'Aprobar'
$('#optionsRadiosCorregir').on('click', function(){
    $('#span_TransparenciaGuardaEstatus').removeClass('glyphicon-ok').addClass('glyphicon-repeat');
    $('#div_TextCorreccion').show();
    $('#text_Correccion').val('');
});

//Acciones al presionar el Radio con 'Corregir'
$('#optionsRadiosOk').on('click', function(){
    $('#span_TransparenciaGuardaEstatus').removeClass('glyphicon-repeat').addClass('glyphicon-ok');
    $('#div_TextCorreccion').hide();
    $('#text_Correccion').val('');
});


var registros = {
    reg: []
};

$(function() {
    definePermisos();

    //llena combo de juzgados
    if( g.idGrupo == '205' ){
        cargaTribunales();
    }else{
        cargaJuzgados(g.juzgado, g.juzgadoBusqueda, g.tipoJuzgado, g.carpeta, g.carpetaBusqueda);
    }

    //llena los datos de los combos estaticos
    llenaCombo(['tipoProcedimiento'], 'tiposprocedimientos/TiposprocedimientosFacade', 'cveTipoProcedimiento', 'desTipoProcedimiento');
    llenaCombo(['tipoResolucion'], 'sentidosresoluciones/SentidosresolucionesFacade', 'cveSentido', 'desSentido');

    //inicializacion del editor
    ue = UE.getEditor('editor');
    ue.ready(function() {
        ue.setContent();
    });

    $('#tagForm').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                'tag[0].tag': tagValidators,
                'tag[0].valor': valorValidators
            }
        })
        // Add button click handler
        .on('click', '.addButton', function() {
            agregaDefinicion();
        })
        // Remove button click handler
        .on('click', '.removeButton', function() {
            var $row = $(this).parents('.addedField'),
            index = $row.attr('data-tag-index');
            // Remove fields
            $('#tagForm').formValidation('removeField', $row.find('[name="tag[' + index + '].tag"]')).formValidation('removeField', $row.find('[name="tag[' + index + '].valor"]'));
            // Remove element containing the fields
            $row.remove();
        });

    $('#btn_eliminar').hide().prop('disabled',true);
    $('#inputVisor').hide().prop('disabled',true);
    $('#inputPDF').hide().prop('disabled',true);
    desdeExpedientePenal();
});