var promocionesQueja = function () {
    return {
        buscaRelacion:function(){ //busca los datos en la carpeta judicial
            this.limpiarFormulario('capturaRegistroValido');
            this.bloqueaCampos('principal',false);
            var actuacion = $('#hiddenIdActuacion');
            var juzgado = $('#cveTipoJuzgado');
            var carpeta = $('#cmbTipoCarpeta');
            var numero = $('#txtNumero');
            var anio = $('#txtAnio');
            var data = {
                idActuacion:actuacion.val(),
                cveJuzgado:juzgado.val(),
                cveTipoCarpeta: carpeta.val(),
                numero: numero.val(),
                anio: anio.val(),
                accion: "buscaRelacionParaQueja"
            }
            var self = this;
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
                        $('#quejaImputados').attr("data-listaQuejosos", JSON.stringify(objeto.datos.imputados));
                        $('#quejaOfendidos').attr("data-listaQuejosos", JSON.stringify(objeto.datos.ofendidos));
                        $('#idReferencia').val(objeto.datos.idReferencia);
                        self.bloqueaCampos('principal',false);
                    }else{
                        self.bloqueaCampos('principal',true);
                    }
                    muestraMensaje(objeto.mensaje,tipoMensaje);
                    muestraMensaje(objeto.mensaje,tipoMensaje,'','msjQuejosos');
                }});
        },
    	muestraAcordeon:function(objeto,datos,descTipoQuejoso,valor){ //muestra el acordeon con los datos de los quejosos
            var objeto = objeto || '';
            var datos = datos || '';
            var listaQuejosos = '';
            var tipoQuejoso = '';
            var descTipoQuejoso = descTipoQuejoso || '';
            var valor = valor || '';
            // console.log('objeto');
            // console.log(objeto);
            if( objeto != ''){
                listaQuejosos = eval(objeto.getAttribute("data-listaquejosos"));
                tipoQuejoso = objeto.getAttribute("data-tipoQuejoso");
                valor = objeto.value;
                $('#emailNotificacion').val('');
            }else if( datos != '' ){
                listaQuejosos = datos;
                tipoQuejoso = descTipoQuejoso;
            }
            $('#subtituloQuejosos').empty().append( tipoQuejoso );
            var tabla = "";
            var tr = "", tdCheck = "";
            var idQuejoso = "";
            if( valor == "1" || valor == "2"){ //muestra los datos almacenados en el DOM del radio
                $.each( listaQuejosos ,function(index,quejoso){
                    if( valor == "1" ){
                        idQuejoso = quejoso.idImputadoCarpeta;
                    }else if( valor == "2" ){
                        idQuejoso = quejoso.idOfendidoCarpeta;
                    }

                    tdCheck = '<input type="checkbox" id="' + idQuejoso + '" class="checkboxQuejosos" onclick="javascript:queja.checkQuejoso(this,\'quejoso_' + idQuejoso + '\')"/>';
                    tr += '<tr><td id="quejoso_' + idQuejoso + '">' + quejoso.nombre.toUpperCase() + '</td><td>' + quejoso.descTipoPersona.toUpperCase() + '</td><td align="center">' + tdCheck + '</td></tr>';
                });
                $('#divCorreoNotificacion').show();
                $('#quejosoManual').hide();
                $('#legendTipoPersona').empty();
                $('#divInfoPersona').hide();
                this.limpiarFormulario('radioTipoPersona');
            }else{ //muestra la seccion de captura del quejoso
                $('#divCorreoNotificacion').hide();
                $('#quejosoManual').show();
            }
            $('#tblQuejososBody').empty().append(tr);
    		$('#collapseQuejosos').addClass('in');
    	},
        cargaTipoCarpeta:function(seccion){
            var seccion = seccion || 1;
            $('#cmbTipoCarpeta, #cmbTipoCarpeta_busqueda').empty();
            var tipoJuzgado = ( seccion == 1) ? $("#cveTipoJuzgado").val().split("/") : $("#cveTipoJuzgado_busqueda").val().split("/");
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
                         $("#cmbTipoCarpeta, #cmbTipoCarpeta_busqueda").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
                            switch(tipoJuzgado[1]){
                                case "1": // tipo de juzgado de control
                                    if(json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1" || json.data[i].cveTipoCarpeta == "7" ){ // control, auxiliar, exhorto
                                        $("#cmbTipoCarpeta, #cmbTipoCarpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "2": // tipo de juzgado juicio
                                    if(json.data[i].cveTipoCarpeta == "3" ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#cmbTipoCarpeta, #cmbTipoCarpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "3": // tipo de juzgado ejecucion
                                    if(json.data[i].cveTipoCarpeta == "5" ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#cmbTipoCarpeta, #cmbTipoCarpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "4": // tipo de juzgado tribunal
                                    if(json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#cmbTipoCarpeta, #cmbTipoCarpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
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
        cargaJuzgados:function () {
            var strDatos = "accion=distrito";
            var cveJuzgado = $('#hiddenCveAdscripcion');
            var self = this;
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
                            if( json.data[i].cveTipojuzgado >= 1 && json.data[i].cveTipojuzgado <= 4 && json.data[i].activo == 'S' ){ //limita a mostrar solo el/los juzgados de control
                                $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").append($('<option></option>').val(json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                            }
                            if(cveJuzgado.val() == json.data[i].cveJuzgado){
                                $("#cveTipoJuzgado option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
                                $("#cveTipoJuzgado_busqueda option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
                                $('#cveTipoJuzgadoAlt').val(json.data[i].cveTipojuzgado);
                            }    
                        }
                    }else{
                        $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").empty().append('<option value="0/0">Sin registros</option>');
                    }
                    self.cargaTipoCarpeta();
                },
                error: function (objeto, quepaso, otroobj) {
                    muestraMensaje("Error en la peticion:\n\n" + quepaso , 'error');
                }
            });
        },
        obtieneMunicipos:function (idEstado) {
            var idEstado = idEstado || '';
            $.post('../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php',
                    {activo: 'S', accion: 'consultar', cveEstado:idEstado},
            function (response) {
                var object = eval("(" + response + ")");
                var options = '';
                var selectedOption = '';
                if (object.totalCount > 0) {
                    options = '<option value="0">--SELECCIONE--</option>';
                    $.each(object.data, function (k, v) {
                        options += '<option value="' + v.cveMunicipio + '" >' + v.desMunicipio + '</option>';
                    });
                } else {
                    options = '<option value="0">--SIN REGISTROS--</option>';
                    alert('No existen registros para los Municipios.');
                }
                $('#cmbMunicipio').append(options);
            });
            return null;
        },
        cambiaTipoPersona:function(objeto){
            $('#legendTipoPersona').empty().append( objeto.getAttribute("data-tipoPersona") );
            this.limpiarFormulario('camposQuejosoManual');
            switch( objeto.value ){
                case "1": //muestra campos de persona fisica
                    $('#quejosoPaterno, #quejosoMaterno, #divGenero').show();
                    $('#quejosoNombre').removeClass('col-md-10').addClass('col-md-4');
                    $('#divCorreoNotificacion').hide();
                    break;
                case "2": //muestra campos de persona moral y otra, son los mismos
                case "3":
                    $('#quejosoPaterno, #quejosoMaterno, #divGenero').hide();
                    $('#quejosoNombre').removeClass('col-md-4').addClass('col-md-10');
                    $('#cmbGenero').val(3);
                    break;
            }
            $('#divInfoPersona').show();
        },
        limpiarFormulario:function(seccion){
            var seccion = seccion || 'capturaGlobal';
            switch(seccion){
                case 'capturaGlobal':
                    $('#cveTipoJuzgado').val( $("#hiddenCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val() );
                    $('#cmbTipoCarpeta').val(0); //combos
                    $('#txtNumero, #txtAnio').val(''); //inputs
                case 'capturaRegistroValido':
                    $('#txtNumActuacion2').prop('disabled',true).val('');
                    $('#txtAniActuacion2').prop('disabled',true).val('');
                    this.bloqueaCampos('principal',true);
                    $('#idReferencia').val('');
                    $('#hiddenIdActuacion').val('');
                    $('#txtFojas, #txtSintesis').val(''); //inputs
                    $('#cmbJuzgadores').val(0); //combos
                    this.limpiarFormulario('radioAsignacionNumero');
                    this.limpiarFormulario('radioQuienEmiteQueja');
                    this.limpiarFormulario('radioTipoPersona');
                    this.limpiarFormulario('camposQuejosoManual');
                    $('#emailNotificacion').val('');
                    $('#tblQuejososBody').empty();
                    UE.getEditor('txtQueja').setContent("", false);
                    $('#collapseQuejosos').removeClass('in');
                    $('.radioQuienEmite').prop('disabled',true);
                    $('.asignacionNumero').prop('disabled',false);
                    $('#asigNumeroAutomatico').prop('checked',true);
                    $('#inputGuardar').attr('value', 'Guardar').prop('disabled',false);
                    $('#inputVisor').hide();
                    $('#inputPDF').hide();
                    $('#inputDigitalizar').hide();
                    $('#divEliminar').hide();
                    $('#divBtnAgregarQuejoso').show();
                    //botones de pdf y visor
                    $('#inputVisor').hide();
                    $('#inputPDF').hide();
                    //digitalizador
                    $('#inputDigitalizar').hide();
                    //resolucion de juez y consejo
                    $('#divResolucionJuez').hide();
                    $('#fechaResolucionJuez').empty();
                    $('#resolucionJuez').empty();
                    $('#divResolucionConsejo').hide();
                    $('#fechaResolucionConsejo').empty();
                    $('#resolucionConsejo').empty();
                    break;
                case 'capturaBusqueda':
                    $('#cveTipoJuzgado_busqueda').val( $("#hiddenCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val() );
                    this.cargaTipoCarpeta(2);
                    $('#txtNumero_busqueda').val('');
                    $('#txtAnio_busqueda').val('');
                    $('#txtNumeroActuacion_busqueda').val('');
                    $('#txtAnioActuacion_busqueda').val('');
                    $('#fechaInicial').val( $('#fechaHoy').val() );
                    $('#fechaFinal').val( $('#fechaHoy').val() );
                    break;
                case 'capturaResultados':
                    $('#tblQuejososBody').empty();
                    break;
                case 'radioAsignacionNumero':
                    $('#asignacionNumero').prop( "checked", true );
                    break;
                case 'radioQuienEmiteQueja':
                    $.each( document.getElementsByName('radioQuienEmiteQueja'), function(index, element){ //limpia los check del tipo de persona
                        if( $(this).prop('checked') == true ){
                            $(this).removeAttr('checked');
                            return;
                        }
                    });
                    break;
                case 'radioTipoPersona':
                    $.each( document.getElementsByName('tipoPersona'), function(index, element){ //limpia los check del tipo de persona
                        if( $(this).prop('checked') == true ){
                            $(this).removeAttr('checked');
                            return;
                        }
                    });
                    break;
                case 'camposQuejosoManual':
                    $('#quejosoPaterno').val('').prop('disabled',false);
                    $('#quejosoMaterno').val('').prop('disabled',false);
                    $('#quejosoNombre').val('').prop('disabled',false);
                    $('#cmbGenero').val(0).prop('disabled',false);
                    $('#cmbMunicipio').val(0).prop('disabled',false);
                    $('#quejosoDomicilio').val('').prop('disabled',false);
                    $('#quejosoTelefono').val('').prop('disabled',false);
                    $('#quejosoCorreo').val('').prop('disabled',false);
                    break;
            }
        },
        agregarQuejosoManual:function(){
            //limpia campos de captura y texto de leyenda
            var tipoPersona = '', descTipoPersona = '';
            var nombre = '';

            $.each( document.getElementsByName('tipoPersona'), function(index, element){ //limpia los check del tipo de persona
                if( $(this).prop('checked') == true ){
                    descTipoPersona = element.getAttribute("data-tipoPersona");
                    tipoPersona = element.value;
                    return;
                }
            });

            var quejosoPaterno = $('#quejosoPaterno');
            var quejosoMaterno = $('#quejosoMaterno');
            var quejosoNombre = $('#quejosoNombre');
            var quejosoGenero = $('#cmbGenero');
            var quejosoMunicipio = $('#cmbMunicipio');
            var quejosoDomicilio = $('#quejosoDomicilio');
            var quejosoCorreo = $('#quejosoCorreo');
            var quejosoTelefono = $('#quejosoTelefono');
            var camposValidacionOtra = '';
            var quejasValidacionOtra = '';
            if( tipoPersona == 1 ){ //persona fisica
                camposValidacionOtra = [
                    {name:'APELLIDO PATERNO',value:quejosoPaterno.val()},
                    {name:'APELLIDO MATERNO',value:quejosoMaterno.val()},
                    {name:'NOMBRE',value:quejosoNombre.val()},
                    {name:'GENERO',value:quejosoGenero.val()},
                    {name:'MUNICIPIO',value:quejosoMunicipio.val()},
                    {name:'DOMICILIO',value:quejosoDomicilio.val()},
                    {name:'<b>CORREO DE NOTIFICACION</b>',value:quejosoCorreo.val()},
                    {name:'TEL&Eacute;FONO CELULAR',value:quejosoTelefono.val()}];
                quejasValidacionOtra = this.validaCampos(camposValidacionOtra);
            }else{ //persona moral y otra
                camposValidacionOtra = [
                    {name:'NOMBRE',value:quejosoNombre.val()},
                    {name:'MUNICIPIO',value:quejosoMunicipio.val()},
                    {name:'DOMICILIO',value:quejosoDomicilio.val()},
                    {name:'<b>CORREO DE NOTIFICACION</b>',value:quejosoCorreo.val()},
                    {name:'TEL&Eacute;FONO CELULAR',value:quejosoTelefono.val()}];
                quejasValidacionOtra = this.validaCampos(camposValidacionOtra);
            }
            var correoValido = false;
            if( !quejosoCorreo.val().correo() ){
                correoValido = false;
            }else{
                correoValido = true;
            }

            if( quejasValidacionOtra == true && correoValido == true ){
                //elimina renglon anterior
                $('#' + $('#idRenglon').val() ).remove();
                $('#idRenglon').val('');

                if( tipoPersona == 1 ){ //persona fisica
                    nombre = $('#quejosoPaterno')[0].value.toUpperCase() + ' ' + $('#quejosoMaterno')[0].value.toUpperCase() + ' ' + $('#quejosoNombre')[0].value.toUpperCase();
                }else{ //persona moral
                    nombre = $('#quejosoNombre')[0].value.toUpperCase();
                }
                var idTr = this.uniqId();
                var datosQuejoso =  JSON.stringify( {tipoPersona:tipoPersona,
                    quejosoPaterno:quejosoPaterno.val(),
                    quejosoMaterno:quejosoMaterno.val(),
                    quejosoNombre:quejosoNombre.val(),
                    quejosoGenero:quejosoGenero.val(),
                    quejosoMunicipio:quejosoMunicipio.val(),
                    quejosoDomicilio:quejosoDomicilio.val(),
                    quejosoCorreo:quejosoCorreo.val(),
                    quejosoTelefono:quejosoTelefono.val(),
                    quejosomodifica:true,
                    quejosoRenglon:idTr} );
                var tdBorrado = '<button type="button" class="btn btn-danger btn-partes" aria-label="Left Align" onclick="javascript:queja.eliminaQuejosoTabla(this)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>';
                var tr = '<tr data-datosQuejoso=\'' + datosQuejoso + '\' class="datosQuejoso"  id="' + idTr + '">'
                    + '<td style="border-left-color: green; border-left-width: 5px;" onclick="javascript:queja.muestraInfoQuejoso(this)">' + nombre + '</td>'
                    + '<td onclick="javascript:queja.muestraInfoQuejoso(this)">' + descTipoPersona + '</td><td align="center">' + tdBorrado + '</td></tr>';
                $('#tblQuejososBody').append(tr);
                this.limpiarFormulario('camposQuejosoManual');
                this.limpiarFormulario('radioTipoPersona');
                $('#divInfoPersona').hide();
                $('#legendTipoPersona').empty();
                $('#btnAgregarQuejoso').attr('value', 'Agregar quejoso');
            }else{
                mensaje = 'Complete los siguientes campos:<br/>';
                $.each(quejasValidacionOtra,function(k,v){
                    mensaje += '- ' + v + '<br/>';
                }); 
                mensaje += (correoValido == false) ? '- CORREO ELECTR&Oacute;NICO NO VALIDO.' : '';
                muestraMensaje(mensaje,'information','_quejoso');
            }
        },
        eliminaQuejosoTabla:function(objeto,libre){
            var libre = libre || false;
            if( libre ){
                objeto.closest('tr').remove();
            }else{
                if( confirm( 'Esta a punto de eliminar al Quejoso de la lista. ¿Desea continuar?' ) ){
                    objeto.closest('tr').remove();
                }
            }
            return false;
        },
        checkQuejoso:function(objeto,idTd){
            if(objeto.checked){
                $('#' + idTd).attr('style','border-left-color: green; border-left-width: 5px;');
            }else{
                $('#' + idTd).attr('style','border-left-color: green; border-left-width: 0px;');
            }
        },
        limpiaSeleccionQuejosos:function(){
            //quita la clase de renglon selecconado de todos los reglones
            $.each( $('.datosQuejoso'), function(index,renglon){
                $(this).attr('style','background-color:none;');
            });
        },
        muestraInfoQuejoso:function(objeto){
            this.limpiaSeleccionQuejosos();
            //ilumina el renglon seleccionado
            objeto.parentNode.setAttribute('style','background-color:lightcoral;');

            var infoQuejoso = eval('(' + objeto.parentNode.getAttribute("data-datosQuejoso") + ')');
            var leyenda = '';
            if( infoQuejoso.tipoPersona == 1 ){ //persona fisica
                $('#quejosoPaterno, #quejosoMaterno, #divGenero').show();
                $('#quejosoNombre').removeClass('col-md-10').addClass('col-md-4');
                leyenda = 'Persona F&iacute;sica';
            }else{ //persona moral u otra
                $('#quejosoPaterno, #quejosoMaterno, #divGenero').hide();
                $('#quejosoNombre').removeClass('col-md-4').addClass('col-md-10');
                leyenda = ( infoQuejoso.tipoPersona == 2 ) ? 'Persona Moral' : 'Persona: Otra';
            }
            var campoDeshabilitado = false;
            if( infoQuejoso.quejosomodifica == true){
                // campoDeshabilitado = true;
                // this.eliminaQuejosoTabla(objeto.parentNode,true);
                $('#idRenglon').val( infoQuejoso.quejosoRenglon );
                $('#btnAgregarQuejoso').attr('value', 'Actualizar Información del quejoso');
            }else{
                campoDeshabilitado = true;
                $('#divBtnAgregarQuejoso').hide();
            }
            $('#tipoPersona' + infoQuejoso.tipoPersona).prop('checked',true);
            $('#legendTipoPersona').show().empty().append( leyenda );
            $('#quejosoPaterno').val( infoQuejoso.quejosoPaterno ).prop('disabled',campoDeshabilitado);
            $('#quejosoMaterno').val( infoQuejoso.quejosoMaterno ).prop('disabled',campoDeshabilitado);
            $('#quejosoNombre').val( infoQuejoso.quejosoNombre ).prop('disabled',campoDeshabilitado);
            $('#cmbGenero').val( infoQuejoso.quejosoGenero ).prop('disabled',campoDeshabilitado);
            $('#cmbMunicipio').val( infoQuejoso.quejosoMunicipio ).prop('disabled',campoDeshabilitado);
            $('#quejosoDomicilio').val( infoQuejoso.quejosoDomicilio ).prop('disabled',campoDeshabilitado);
            $('#quejosoCorreo').val( infoQuejoso.quejosoCorreo ).prop('disabled',campoDeshabilitado);
            $('#quejosoTelefono').val( infoQuejoso.quejosoTelefono ).prop('disabled',campoDeshabilitado);
            $('#quejososManual').show();
            $('#divInfoPersona').show();
        },
        obtieneJuzgadores:function(){
            $.post('../fachadas/sigejupe/quejapromociones/QuejapromocionesFacade.Class.php',
                    {accion: 'consultarJuzgadoresQuejas'},
            function (response) {
                var object = eval("(" + response + ")");
                var options = '';
                var selectedOption = '';
                var nombre = '';
                if (object.estatus == 'OK') {
                    options = '<option value="0">--SELECCIONE--</option>';
                    $.each(object.datos, function (k, v) {
                        if( v.activo == 'N'){}
                        options += '<option value="' + v.idJuzgador + '" >' + v.nombreJuzgador + '</option>';
                    });
                } else {
                    options = '<option value="0">--SIN REGISTROS--</option>';
                    alert('No existen registros para los Juzgadores.');
                }
                $('#cmbJuzgadores').append(options);
            });
        },
        guardarQueja:function(){
            $('#inputGuardar').prop('disabled',true);
            var self = this;
            //obtencion de los campos
            var idActuacion = $('#hiddenIdActuacion').val();
            var idReferencia = $('#idReferencia').val();
            var txtNumActuacion2 = $('#txtNumActuacion2');
            var txtAniActuacion2 = $('#txtAniActuacion2');
            var idAsignacionNumero = 0;
            $.each( document.getElementsByName('asigNumero'), function(index, element){ //limpia los check del tipo de persona
                if( $(this).prop('checked') == true ){
                    idAsignacionNumero = $(this).val();
                    return;
                }
            });
            var camposValidacionPromocion = '';
            var promocionValidacion = '';
            if( idAsignacionNumero == 2 ){ //asignacion manual
                //validar que los campos de numero y a~o de promociOn no esten vacios
                camposValidacionPromocion = [
                    {name:'N&Uacute;MERO DE LA PROMOCI&Oacute;N',value:txtNumActuacion2.val()},
                    {name:'A&Ntilde;O DE LA PROMOCI&Oacute;N',value:txtAniActuacion2.val()}];
                promocionValidacion = this.validaCampos(camposValidacionPromocion);
            }else{
                promocionValidacion = true;
            }
            var cveJuzgado = $('#cveTipoJuzgado').val().split('/');
            var cveCarpeta = $('#cmbTipoCarpeta');
            var numero = $('#txtNumero');
            var anio = $('#txtAnio');
            var fojas = $('#txtFojas');
            var sintesis = $('#txtSintesis');
            var idQuienEmiteQueja = 0;
            $.each( document.getElementsByName('radioQuienEmiteQueja'), function(index, element){ //limpia los check del tipo de persona
                if( $(this).prop('checked') == true ){
                    idQuienEmiteQueja = $(this).val();
                    return;
                }
            });
            //obtencion de los datos de la tabla de quejosos
            // PENDIENTE
            var emailNotificacion = $('#emailNotificacion');
            var idTipoPersona = 0
            $.each( document.getElementsByName('tipoPersona'), function(index, element){ //limpia los check del tipo de persona
                if( $(this).prop('checked') == true ){
                    idTipoPersona = $(this).val();
                    return;
                }
            });

            var cmbJuzgadores = $('#cmbJuzgadores');
            var txtQueja = UE.getEditor('txtQueja');

            //Validacion de los campos requeridos
            var camposValidacionGlobal = [
                {name:'JUZGADO',value:cveJuzgado[0]},
                {name:'CARPETA RELACIONADA',value:cveCarpeta.val()},
                {name:'NO. DE CARPETA',value:numero.val()},
                {name:'A&Ntilde;O DE CARPETA',value:anio.val()},
                {name:'NO. DE FOJAS',value:fojas.val()},
                {name:'SINTESIS',value:sintesis.val()},
                {name:'DEFINA QUIEN EMITE LA QUEJA',value:idQuienEmiteQueja},
                {name:'JUEZ',value:cmbJuzgadores.val()},
                {name:'TEXTO DE LA QUEJA',value:txtQueja}];
            var quejasValidacion = this.validaCampos(camposValidacionGlobal);

            var txtQueja = UE.getEditor('txtQueja').getAllHtml();
            txtQueja = txtQueja.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');

            var idsQuejosos = [];
            var datosQuejosos = [];
            var cantidadQuejosos = false;
            var correoNotificacion = false;
            var seccionQuejosos = false;
            var correoValido = false;
            if( idQuienEmiteQueja == 1 || idQuienEmiteQueja == 2 ){ //quejoso: imputado u ofendido
                //validar que al menos un quejoso este selecionado
                $.each( $('input:checkbox'), function(index, element){ 
                    if( $(this).prop('checked') == true ){
                        idsQuejosos.push(element.id);
                    }
                });
                cantidadQuejosos = ( idsQuejosos.length > 0 ) ? true : false;
                //validar que se haya proporcionado correo de notificacion
                correoNotificacion = ( emailNotificacion.val() != '' ) ? true : false;
                if( emailNotificacion.val() != '' ){
                    correoNotificacion = true;
                    if( !emailNotificacion.val().correo() ){
                        correoValido = false;
                    }else{
                        correoValido = true;
                    }
                }else{
                    correoNotificacion = false;
                }
                //validaciOn global de quejoso imputado u ofendido
                seccionQuejosos = (cantidadQuejosos && correoNotificacion) ? true : false;
            }else if( idQuienEmiteQueja == 3 ){ //quejoso: otro
                var datosQuejoso = '';
                //validar que al menos un quejoso este registrado
                $.each( $('.datosQuejoso') ,function(index, elemento){
                    datosQuejoso = eval('(' + elemento.getAttribute("data-datosQuejoso") + ')');
                    datosQuejosos.push(datosQuejoso);
                }); 
                cantidadQuejosos = ( datosQuejosos.length > 0 ) ? true : false;
                //tanto en persona fisica como en moral o utro, todos los campos deben de ingresarse
                correoNotificacion = true;
                correoValido = true;
                //validaciOn global de quejoso imputado u ofendido
                seccionQuejosos = (cantidadQuejosos && correoNotificacion) ? true : false;
            }
            var mensaje = '';
            if( promocionValidacion == true && quejasValidacion == true && seccionQuejosos == true && correoValido == true){
                var accion = ( idActuacion == '' ) ? 'guardaQueja' : 'actualizaQueja';
                var datosEnvio = 'accion=' + accion + '&idAsignacionNumero=' + idAsignacionNumero + '&numActuacionManual=' + txtNumActuacion2.val() + '&anioActuacionManual=' + txtAniActuacion2.val() + '&cveJuzgado=' + cveJuzgado[0] + '&cveCarpeta=' + cveCarpeta.val() + '&numero=' + numero.val() + '&anio=' + anio.val() + '&fojas=' + fojas.val() + '&sintesis=' + sintesis.val() + '&idQuienEmiteQueja=' + idQuienEmiteQueja + '&emailNotificacion=' + emailNotificacion.val() + '&cmbJuzgadores=' + cmbJuzgadores.val() + '&txtQueja=' + txtQueja + '&idsQuejosos=' + JSON.stringify(idsQuejosos) + '&datosQuejosos=' + JSON.stringify(datosQuejosos) + '&idActuacion=' + idActuacion + '&idReferencia=' + idReferencia;
                var urlPeticion = "../fachadas/sigejupe/quejosospromociones/QuejosospromocionesFacade.Class.php";
                $.ajax({
                    method: "POST",
                    url: urlPeticion,
                    data: datosEnvio,
                    success: function (respuesta) {
                        var tipoMensaje = 'error';
                        var objeto = eval('(' + respuesta + ')');
                        if( objeto.estatus == 'OK' ){
                            tipoMensaje = 'success';
                            //muestra datos de la actuacion
                            $('#txtNumActuacion2').val( objeto.datos.numActuacion );
                            $('#txtAniActuacion2').val( objeto.datos.aniActuacion );
                            //bloquea campos de edicion
                            $('.asignacionNumero').prop('disabled',true);
                            // self.bloqueaCampos('principal',true);
                            //asigna valores a campos ocultos
                            $('#hiddenIdActuacion').val( objeto.datos.idActuacion );
                            //botones de pdf y visor
                            $('#inputVisor').show();
                            $('#inputPDF').show();
                            //digitalizador
                            $('#inputDigitalizar').show();
                            if( $('#procedencia').val() == 1 ){
                                getTree();
                            }
                        }
                        muestraMensaje(objeto.mensaje,tipoMensaje);
                        $('#inputGuardar').prop('disabled',false);
                    }});
            }else{
                mensaje = 'Complete los siguientes campos:<br/>';

                $.each(promocionValidacion,function(k,v){
                    mensaje += '- ' + v + '<br/>';
                }); 

                $.each(quejasValidacion,function(k,v){
                    mensaje += '- ' + v + '<br/>';
                }); 
                mensaje += ( cantidadQuejosos == false ) ? '- DEFINIR AL MENOS UN QUEJOSO<br/>' : '';
                mensaje += ( correoNotificacion == false ) ? '- DEFINIR UN CORREO ELECTR&Oacute;NICO PARA NOTIFICACI&Oacute;N<br/>' : '';
                mensaje += ( correoValido == false ) ? '- EL CORREO ELECTR&Oacute;NICO NO ES V&Aacute;LIDO<br/>' : '';

                muestraMensaje(mensaje,'information');
                $('#inputGuardar').prop('disabled',false);
            }
        },
        validaCampos:function(array){
            var state = true;
            var empty = [];
            var counter = 0;
            $.each(array, function(k,v){
                if(v.value == '' || v.value == 0 || v.value == null){
                    state = false;
                    empty[counter++] = v.name;
                    return;
                }
            });
            if(!state){
                state = empty;
            }
            return state;
        },
        bloqueaCampos:function(seccion,estado){
            switch(seccion){
             case 'principal':
                $('#txtFojas').prop('disabled',estado);
                $('#txtSintesis').prop('disabled',estado);
                $('.radioQuienEmite').prop('disabled',estado);
                $('#emailNotificacion').prop('disabled',estado);
                $('#cmbJuzgadores').prop('disabled',estado);
                break;
            }
        },
        cambiaSeccion:function(seccion){
            switch(seccion){
                case 'principal':
                    $('#divResultados').hide("fade");
                    $('#divConsulta').hide("fade");
                    $('#divFormulario').show("slide");
                    break;
                case 'consulta':
                    this.limpiarFormulario('capturaGlobal');
                    this.limpiarFormulario('capturaBusqueda');
                    $('#divFormulario').hide("fade");
                    $('#divResultados').hide("fade");
                    $('#divConsulta').show("slide");
                    break;
                case 'resultados':
                    this.limpiarFormulario('capturaResultados');
                    $('#divFormulario').hide("fade");
                    $('#divConsulta').hide("fade");
                    $('#divResultados').show("slide");
                    break;
            }
        },
        buscarQuejas:function( idActuacion ){
            var self = this;
            var idActuacion = idActuacion || '';
            var cveTipoJuzgado_busqueda = $('#cveTipoJuzgado_busqueda').val();
            cveTipoJuzgado_busqueda = cveTipoJuzgado_busqueda.split('/');
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
            var data = "idActuacion=" + idActuacion + "&cveJuzgado=" + cveTipoJuzgado_busqueda[0] + "&cveCarpeta=" + cmbTipoCarpeta_busqueda + "&numero=" + txtNumero_busqueda + "&anio=" + txtAnio_busqueda + "&numActuacion=" + txtNumeroActuacion_busqueda + "&aniActuacion=" + txtAnioActuacion_busqueda +"&fechaDesde=" + txtFechaInicial_busqueda + "&fechaHasta=" + txtFechaFinal_busqueda + "&paginacion=true&cantxPag=10&pag=1&accion=buscarQuejas";
            var urlPeticion = "../fachadas/sigejupe/quejosospromociones/QuejosospromocionesFacade.Class.php";
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
                        showMessage('Sin resultados.','information');
                    }
                }
            }); 
            return;
        },
        muestraResultados:function(resultados){
            var page = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var datosResultados = eval( '(' + resultados + ')' );
            datosResultados = datosResultados.data;
            //armado de tabla
            var tablaCabecera = '<table id="tblResultados" class="table col-md-12 table-striped table-bordered table-hover"><thead>'
                    + '<tr><th style="width:10%">#</th>'
                    + '     <th style="width:10%">ACTUACI&Oacute;N No. / A&Ntilde;O</th>'
                    + '     <th style="width:10%">CARPETA No. / A&Ntilde;O</th>'
                    + '     <th style="width:20%">SINTESIS</th>'
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
                            + '<td>' + ac.numActuacion + ' / ' + ac.aniActuacion + '</td>'
                            + '<td>' + ac.cveTipoCarpeta.desTipoCarpeta + '</br>' + ac.numero + ' / ' + ac.anio + '</td>'
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
            if( $('#procedencia').val() == 1 ){ //viene del arbol
                this.muestraRegistro(0);
                $('#inputLimpiar').hide();
                $('#inputConsultar').hide();
                return;
            }
            var tablaFinal = '</table>';
            $('#divTablaResultados').empty().html( tablaCabecera + tablaCuerpo + tablaFinal );
            $('#tblResultados').DataTable({
                paging: false
            });
            this.getPages(page, cantReg);

            this.cambiaSeccion('resultados');
        },
        muestraRegistro:function(posicion){
            var rg = arrayDatosResultados.datos[posicion];
            $('#hiddenIdActuacion').val( rg.idActuacion );
            $('#txtNumActuacion2').val( rg.numActuacion );
            $('#txtAniActuacion2').val( rg.aniActuacion );
            $('#cveTipoJuzgado').val( rg.cveJuzgado.cveJuzgado );
            $('#cmbTipoCarpeta').val( rg.cveTipoCarpeta );
            $('#txtNumero').val( rg.numero );
            $('#txtAnio').val( rg.anio );
            $('#txtFojas').val( rg.noFojas );
            $('#txtSintesis').val( rg.sintesis );
            //checkbox quien emite
            $('#' + rg.quienSeQueja).prop( "checked", true );
            //tabla y array de quejosos, y correo de notificacion si aplica
            var datosQuejosos = '';
            var valor = 0;
            var idChecks = [];
            //obtencion del correo de notificacion
            $('#emailNotificacion').val( rg.quejosos[0].email );
            if( rg.idQuienSeQueja == 1 ){ //imputado
                datosQuejosos = rg.imputados;
                valor = 1;
                //obtencion quejosos relacionados, para el check
                $.each( rg.quejosos, function(index,quejoso){
                    $.each( rg.imputados, function(index,imputado){
                        if( quejoso.idImputadoCarpeta == imputado.idImputadoCarpeta){
                            idChecks[idChecks.length] = quejoso.idImputadoCarpeta;
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
                        }
                    } );
                } );
            }else{
                var tdBorrado = '';
                var tr = '';
                var datosQuejoso = '';
                var nombre = '';
                valor = 3;
                var self = this;
                $.each( rg.quejosos, function(index,quejoso){
                    if( quejoso.cveTipoPersona.cveTipoPersona == 1){ //persona fisica
                        nombre = quejoso.nombre;
                    }else{
                        nombre = quejoso.nombreCompleto;
                    }
                    var idTr = self.uniqId();
                    datosQuejoso =  JSON.stringify( {tipoPersona:quejoso.cveTipoPersona.cveTipoPersona,
                        quejosoPaterno:quejoso.paterno,
                        quejosoMaterno:quejoso.materno,
                        quejosoNombre:nombre,
                        quejosoGenero:quejoso.cveGenero.cveGenero,
                        quejosoMunicipio:quejoso.cveMunicipio.cveMunicipio,
                        quejosoDomicilio:quejoso.domicilio,
                        quejosoCorreo:quejoso.email,
                        quejosoTelefono:quejoso.telefono,
                        quejosomodifica:false,
                        quejosoRenglon:idTr} );
                    tdBorrado = '<button type="button" class="btn btn-danger btn-partes" aria-label="Left Align" disabled="disabled"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>';
                    tr = '<tr data-datosQuejoso=\'' + datosQuejoso + '\' class="datosQuejoso" id="' + idTr + '">'
                        + '<td style="border-left-color: green; border-left-width: 5px;" onclick="javascript:queja.muestraInfoQuejoso(this)">' + quejoso.nombreCompleto + '</td>'
                        + '<td onclick="javascript:queja.muestraInfoQuejoso(this)">' + quejoso.cveTipoPersona.desTipoPersona + '</td><td align="center">' + tdBorrado + '</td></tr>';
                    $('#tblQuejososBody').append(tr);
                });
                $('#subtituloQuejosos').empty().append( rg.tipoQuejoso );                
                $('#divCorreoNotificacion').hide();
                $('#quejosoManual').hide();
                $('#collapseQuejosos').addClass('in');
            }
            //activa checks
            if( rg.idQuienSeQueja == 1 || rg.idQuienSeQueja == 2 ){ //los muestra si quien se queja es imputado u ofendido
                this.muestraAcordeon('',datosQuejosos,rg.tipoQuejoso,valor);
                $.each( idChecks, function(index, check){
                    $('#' + check).prop('checked',true);
                    $('#quejoso_' + check).attr('style','border-left-color: green; border-left-width: 5px;');
                } );
                //deshabilita todos los checks
                $.each( $('input:checkbox'), function(index, element){ 
                    $(this).prop('disabled',true);
                });
            }
            $('#cmbJuzgadores').val( rg.idJuzgador );
            llenareditor( rg.observaciones );

            //valida respuesta del juez y del consejo
            var fechaTmp = '';
            var fecha2 = '';
            if( rg.cveEstatus == 40 ){ //resuelta por el consejo
                fechaTmp = rg.fechaResolucion.split(' ');
                rg.fechaResolucion = fechaTmp[0].split('-');
                rg.fechaResolucion = rg.fechaResolucion[2] + '/' + rg.fechaResolucion[1] + '/' + rg.fechaResolucion[0] + ' ' + fechaTmp[1];
                $('#divResolucionConsejo').show();
                $('#fechaResolucionConsejo').empty().append( rg.fechaResolucion );
                $('#resolucionConsejo').empty().append( rg.resolucion );
            }
            if( ( rg.cveEstatus == 38 || rg.cveEstatus == 38 ) || rg.cveEstatus == 40 ){ //acordada o resuelta por el juez
                fechaTmp = rg.fechaAcuerdo.split(' ');
                rg.fechaAcuerdo = fechaTmp[0].split('-');
                rg.fechaAcuerdo = rg.fechaAcuerdo[2] + '/' + rg.fechaAcuerdo[1] + '/' + rg.fechaAcuerdo[0] + ' ' + fechaTmp[1];
                $('#divResolucionJuez').show();
                $('#fechaResolucionJuez').empty().append( rg.fechaAcuerdo );
                $('#resolucionJuez').empty().append( rg.acuerdo );
            }

            $('#inputGuardar').attr('value', 'Queja Registrada').prop('disabled',true);
            $('.radioQuienEmite').prop('disabled',true);
            $('.asignacionNumero').prop('disabled',true);
            $('#asigNumeroAutomatico').prop('checked',true).prop('checked',false);
            $('#inputVisor').show();
            $('#inputPDF').show();
            $('#divEliminar').show();
            this.cambiaSeccion('principal');
            return;
        },
        promocionManual:function(objeto){
            if( objeto.value == 1 ){ //numeraciOn automAtica
                $('#txtNumActuacion2').prop('disabled',true).val('');
                $('#txtAniActuacion2').prop('disabled',true).val('');
            }else if( objeto.value == 2 ){ //numeraciOn manual
                $('#txtNumActuacion2').prop('disabled',false).val('');
                $('#txtAniActuacion2').prop('disabled',false).val('');
            }
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
        eliminaQueja:function(){
            var idActuacion = $('#hiddenIdActuacion').val();
            var urlPeticion = "../fachadas/sigejupe/quejosospromociones/QuejosospromocionesFacade.Class.php";
            var datos = "accion=eliminaQueja&idActuacion=" + idActuacion;
            var self = this;
            if( confirm( 'Esta a punto de eliminar esta Queja. ¿Desea continuar?' ) ){
                $.ajax({
                    type:'POST',
                    async:false,
                    data:datos,
                    url:urlPeticion,
                    success:function(response){
                        var objeto = eval("(" + response + ")");
                        // var tipoMensaje = '';
                        // tipoMensaje = ;
                        self.limpiarFormulario( 'capturaGlobal' );
                        self.bloqueaCampos('principal');
                        muestraMensaje( objeto.mensaje, ( objeto.estatus == 'OK' ) ? 'success' : 'error');
                        if( $('#procedencia').val() == 1 ){
                            getTree();
                        }
                    }
                });
            }
        },
        uniqId:function() {
          return Math.round(new Date().getTime() + (Math.random() * 100));
        },
        cancelaQuejosoManual:function(){
            $('#idRenglon').val('');
            this.limpiarFormulario('camposQuejosoManual');
            this.limpiarFormulario('radioTipoPersona');
            $('#divInfoPersona').hide();
            $('#legendTipoPersona').empty();
            $('#btnAgregarQuejoso').attr('value', 'Agregar quejoso');
            this.limpiaSeleccionQuejosos();
        },
        obtieneDatosCarpeta:function(){
            var idCarpetaJudicialArbol = $('#idCarpetaJudicialArbol').val();
            var cveTipoCarpetaArbol = $('#cveTipoCarpetaArbol').val();
            var urlFacade = "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php";
            var dataFacade = "accion=consultar&activo=S&idCarpetaJudicial=" + idCarpetaJudicialArbol;
            $.ajax({ async: false, type: 'POST', url: urlFacade, data: dataFacade
            }).done(function(response)  {
                var objeto = eval('(' + response + ')');
                var data = '';
                if(objeto.totalCount>0){
                    data = objeto.data[0];
                    $('#txtNumero').val( data.numero );
                    $('#txtAnio').val( data.anio );
                }
            });
            //obtencion de los datos para la seleccion del combo de juzgado y relacionado con 
            var urlFacade = "../fachadas/sigejupe/actaminima/ActaminimaFacade.Class.php";
            var dataFacade = "accion=carpetaArbol&idCarpetaJudicial=" + idCarpetaJudicialArbol;
            var self = this;
            $.ajax({ async: false, type: 'POST', url: urlFacade, data: dataFacade
            }).done(function(response)  {
                var objeto = eval('(' + response + ')');
                $('#cveTipoJuzgado').val( objeto.idJuzgado );
                self.cargaTipoCarpeta(2);
                //seleccion de la carpeta
                $('#cmbTipoCarpeta').val( cveTipoCarpetaArbol );
                // self.buscaRelacion();
            });
        }


    }
}

var arrayDatosResultados = {
    datos:[]
}
String.prototype.correo = function () {
    return /^[a-z0-9._%+-]{2,}@([a-z0-9.-]{2,}\.)[a-z]{2,4}/i.test(this);
}
