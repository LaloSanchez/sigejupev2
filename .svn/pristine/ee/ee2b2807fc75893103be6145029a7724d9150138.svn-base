var RecibosProvisional = function () {
    return {
        limpiar: function (form) {
            $(form)[0].reset();
        },
        buscarProvisional: function (pagina) {
            var txtFechaFinal = $("#txtFechaFinal");
            var txtFechaInicial = $("#txtFechaInicial");
            var txtNumeroCarpeta = $("#txtNumeroCarpetaConsulta");
            var txtAniNumero = $("#txtAniNumeroConsulta");
            var txtReciboDe = $("#txtReciboDeConsulta");
            var cmbJuzgados = $("#cmbJuzgadosConsulta");
            var txtidReferencia = $("#txtidReferenciaConsulta");
            var txtNvaInstancia = $("#txtNvaInstancia");
            var bntBuscar = $("#bntBuscar");
            var jsonDetalles = getDetalle();
            var object = new ajax();
            try {
                object.overrideMimeType("text/xml");
            } catch (e) {
            }
            bntBuscar.style.display = 'none';
            object.open("POST", 'ConsultasController.php', true);
            object.onreadystatechange = function () {
                if (object.readyState == 4) {
                    if (object.status == 200) {

                        try {
                            var xml = object.responseXML.documentElement;
                            var type = xml.getElementsByTagName('mensaje').item(0).getElementsByTagName('type').item(0).firstChild.nodeValue;
                            var text = xml.getElementsByTagName('mensaje').item(0).getElementsByTagName('text').item(0).firstChild.nodeValue;
                            new mensaje(type, text, true);
                            ajustar(parent.$("Contenido"));
                            bntBuscar.style.display = 'block';
                        } catch (e) {
                            var datagrid = new dhtmlXmlDatagrid();
                            datagrid.setImagenPath("../../../../img/");
                            datagrid.setMouseOver('#CCCCCC');
                            datagrid.setMouseOut('#FFFFFF');
                            datagrid.setSizeTable("99%");
                            datagrid.setPaginacion(true);
                            datagrid.setBorder(1);
                            datagrid.setTagImg("deposito");
                            datagrid.setShowImg("checksi.jpg");
                            datagrid.setNumFilas(50);
                            datagrid.setShowPagina("buscarProvisional");
                            datagrid.setClase('datagridSimple')
                            datagrid.setHeadersP("Recibos Provisionales");
                            datagrid.setColspanP("9"); // 90%
                            datagrid.setStyleColsP('recibo2'); //,'deposito2'
                            datagrid.setHeaders("No", "No. Recibo", "Juzgado", "Exp.", "Año", "importe", "Recibi\u00f3 de", "Registro", "Activaci\u00f3n"); //,"Dep\u00f3sito","autorizaci\u00f3n","fecha","importe","Fecha Comparecencia"
                            datagrid.setTamCols('5%', "5%", '25%', '5%', '5%', '10%', '25%', '10%', '10%'); // ,"5%","10%","5%","5%","5%"
                            datagrid.setStyleCols('recibo', 'recibo', 'recibo', 'recibo', 'recibo', 'recibo', 'recibo', 'recibo', 'recibo'); //,'deposito','deposito','deposito','importe','comparecencia'
                            datagrid.setDocumentXml(object.responseXML);
                            datagrid.setTagShow("numReciboProvisional", "cveAdscripcion", "numExpediente", "anioExpediente", "importeTotal", "reciboDe", "fechaRegistro", "fechaActivacion", "fechaComparecencia");
                            datagrid.setTagHidden("idRecibo", "anioExpedicion", "cveUsuarioRegistra", "fechaModificacion", "cveEstatus", "cveMateria", "renglones", "referencia", "observaciones", "cveDepositoGrantia", "cveUsuarioActiva");
                            datagrid.setTitle("Resultado de consulta");
                            datagrid.setOnclick("seleccionProvisional", "idRecibo");
                            datagrid.loadXml();
                            ajustar(parent.$("Contenido"));
                            bntBuscar.style.display = 'block';
                        }
                    } else {
                        new mensaje("importante", "Ocurrio un error el servidor no responde", true);
                        ajustar(parent.$("Contenido"));
                    }
                }
            }
            object.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;charset=UTF8');
            object.send("txtidReferencia=" + txtidReferencia.value.trim() + "&txtNumeroCarpeta=" + txtNumeroCarpeta.value.trim() + "&txtAniNumero=" + txtAniNumero.value.trim() + "&txtImporte=" + txtImporte.value.trim() + "&txtReciboDe=" + txtReciboDe.value.trim() + "&cmbJuzgados=" + cmbJuzgados.value.trim() + "&jsonDetalles=" + jsonDetalles + "&txtNvaInstancia=" + txtNvaInstancia.value + txtObservaciones.contentWindow.document.body.innerHTML + "&txtFechaFinal=" + txtFechaFinal.value.trim() + "&txtFechaInicial=" + txtFechaInicial.value.trim() + "&accion=provisionales" + "&pagina=" + pagina + "&filas=" + 50);
        }

    }
}