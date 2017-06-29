var firmaElectronica = function () {
    return {
        cveTipoActuacion: 0,
        idActuacion: 0,
        scapeUrl: "",
        desActuacion: "",
        archivoDesc: "",
        cveOrigen: 0,
        cveGrupo: "",
        nombreUsuario: "",
        ignorarFirmaLogin: false,
        fAutografa: true,
        isHTML5: false,
        download: false,
        callbackFn: null,
        validateFormToSign: function () {
            var self = this;
            $.ajax({
                type: "POST",
                url: self.scapeUrl + "/controladores/sigejupe/firmaelectronicahtml5/FirmaElectronicaController.php",
                data: {
                    accion: "estadoActualFirma",
                    cveTipoDocumentoFirma: self.cveTipoActuacion
                },
                async: false,
                dataType: "json",
                beforeSend: function () {
                    $(".notsign").remove();
                    $(".btnverify").remove();
                    $(".wait").show();
                    $("#btnSign").hide();
                },
                success: function (datos) {
                    try {
                        if (datos.ok == "ok") {
                            if (self.idActuacion != "") {
                                self.validateStatusSignActuacion();
                            }
                        } else {
                            alert(datos.msj);
                        }
                    } catch (e) {
                        alert("ERROR. SE PERDIO LA CONEXION, INTENTELO DE NUEVO POR FAVOR.");
                    }
                },
                failure: function (response) {
                    alert("Error en la peticion:\n\n" + response);
                }
            });
        },
        validateStatusSignActuacion: function () {
            var self = this;
            $("#botonFirmar").show();
            $("#botonUrlPdf").hide();
            $("#divKey").show();
            $("#divCer").show();
            $.ajax({
                type: "POST",
                url: self.scapeUrl + "/controladores/sigejupe/firmaelectronicahtml5/FirmaElectronicaController.php",
                data: {
                    accion: "selectGeneralStatus",
                    idReferencia: self.idActuacion,
                    cveTipoDocumentoFirma: self.cveTipoActuacion,
                    hacerDigestionPdf: self.hacerDigestionPdf,//se realiza la digestion en caso de no estar
                    cveGrupo: self.cveGrupo
                },
                async: false,
                dataType: "json",
                beforeSend: function () {
                    $(".wait").show();
                    $("#btnSign").hide();
                },
                success: function (datos) {
                    $(".wait").hide();
                    if (datos.estatus === "ok") {//se puede continuar con el firmado del documento
                        $('#hddDigestiones').val("");
                        if (self.hacerDigestionPdf != "S") {//si no se indico que se realizara la digestion del archivo
                            self.generaPDF();//realiza la creacion del archivo (si no existe) y la digestion del mismo si no se ha llevado a cabo
                        } else {
                            var nombreArchivo = datos.resultados[0].fileNameFirma.split('/');
                            nombreArchivo = nombreArchivo[nombreArchivo.length-1];//obtenemos solo el nombre del archivo
                            self.push_digestion_json(nombreArchivo, datos.resultados[0].digestion);
                        }
                        $("#spanMnjFirma").html(datos.msj);
                        $("#spanMnjFirma").show();
                        $("#firmaElectronicaModal").modal("show");
                        if (!self.ignorarFirmaLogin) {
                            var usuario = $('#hddIdUsuario').val();
                            console.log("usuario firma: " + usuario);
                            var obj = fielnetPJ.loadCertificateAndPrivateKey(fielnet.Storages.LOCAL_STORAGE, "cer_" + usuario, "key_" + usuario);
                            if (obj.state < 0) {//validamos si la firma electronica se cargo desde el login
                                fielnetPJ.readCertificate("cer");
                                fielnetPJ.readPrivateKey("key");
                                console.log("no se cargo el certificado  y llave privada");
                                console.log("error: " + obj.description);
                            } else {
                                $("#divKey").hide();
                                $("#divCer").hide();
                            }
                        } else {
                            fielnetPJ.readCertificateAndPrivateKey('cer','key');
                        }
                    } else {
                        if (datos.urlPDF != null && datos.urlPDF == "S") {
                            $("#spanMnjFirma").html(datos.msj);
                            $("#spanMnjFirma").show();
                            $("#firmaElectronicaModal").modal("show");
                            $("#botonFirmar").hide();
                            $("#botonUrlPdf").show();
                            $("#hddUrlPdf").val(datos.urlPDF);
                            if ((typeof self.callbackFn === 'function') && (self.callbackFn)) {
                                self.callbackFn();
                            } else {
                                console.log("no se realizo el llamado de la funcion callbackFn");
                            }
                        } else {
                            alert(datos.msj);
                        }
                    }
                },
                failure: function (response) {
                    alert("Error en la peticion:\n\n" + response);
                }
            });
        },
        doSign: function () {
            if (fielnetPJ.validateWebBrowser()) {
                this.doSignFielNet();
                this.isHTML5 = true;
            } else {
                this.doSignJava();
                this.isHTML5 = false;
            }
            return false;
        },
        doSignFielNet: function () {
            /* Inicia Proceso de Firmado */
            this.generaPDF();
            var usuario = $('#hddIdUsuario').val();
            var obj = fielnetPJ.loadCertificateAndPrivateKey(fielnet.Storages.LOCAL_STORAGE, "cer_" + usuario, "key_" + usuario);
            if (obj.state < 0) {
                /* Abrimos el Modal */
                fielnetPJ.readCertificate("cer");
                fielnetPJ.readPrivateKey("key");
                $('.firmaElectronicaModal').modal('show');
            } else {
                this.generaFirmas();
            }
        },
        generaFirmas: function () {
            var self = this;
            fielnetPJ.addExtraParameters("&idReferencia=" + this.idActuacion + "&cveTipoDocumentoFirma=" + this.cveTipoActuacion + "&cveOrigenReferencia=" + this.cveOrigen + "&cveGrupo=" + this.cveGrupo + "&nombreUsuario=" + this.nombreUsuario);
            fielnetPJ.signFileDigest("hddDigestiones", fielnet.Digest.SHA2, function (e) {
                try {
                    if (e.urlPDF != null && e.urlPDF == "S") {
                        $("#spanMnjFirma").html(e.msj);
                        $("#spanMnjFirma").show();
                        $("#firmaElectronicaModal").modal("show");
                        $("#botonFirmar").hide();
                        $("#botonUrlPdf").show();
                        $("#hddUrlPdf").val(e.urlPDF);
                        if ((typeof self.callbackFn === 'function') && (self.callbackFn)) {
                            self.callbackFn();
                        }
                    } else {
                        alert(e.msj);
                    }
                } catch (e) {
                    alert("ERROR. SE PERDIO LA CONEXIÓN CON EL SERVIDOR DE LA FIRMA ELECTRONICA. INTENTELO DE NUEVO.");
                }
            });
        },
        descargarUrlPDF: function () {
            $.ajax({
                type: "POST",
                url: this.scapeUrl + "/controladores/sigejupe/firmaelectronicahtml5/FirmaElectronicaController.php",
                data: {
                    accion: "verPdf",
                    idReferencia: this.idActuacion,//id de la actuacion a consultar pdf
                    cveTipoDocumentoFirma: this.cveTipoActuacion
                },
                async: false,
                dataType: "json",
                success: function (datos) {
                    try {
                        if (datos.estatus == "ok") {
                            window.open(this.scapeUrl + datos.imagen.ruta,"PDF FIRMADO","width=900,height=500,s crollbars=NO");
                        } else {
                            alert(datos.msj);
                        }
                    } catch(e) {
                        alert("ERROR. SE PERDIO LA CONEXIÓN CON EL SERVIDOR. POR FAVOR INTENTELO NUEVAMENTE.");
                    }
                },
                failure: function (response) {
                    alert("Error en la peticion:\n" + response);
                }
            });
        },
        verificarFirmaLogin: function () {
            $("#botonFirmar").show();
            $("#botonUrlPdf").hide();
            $("#spanMnjFirma").text("");
            $(".txtresponseModal").html('');
            var self = this;
            fielnetPJ.validateKeyPairs(document.getElementById("pass_firma").value, function (resultado) {
                if (resultado.state == 0) {
                    self.generaFirmas();
                } else {
                    alert(resultado.description);
                }
            });
            return false;
        },
        doSignJava: function () {
            var idActuacion = this.idActuacion;
            var self = this;
            if (idActuacion != "") {
                $.ajax({
                    type: "POST",
                    url: self.scapeUrl + "/controller/firmaelectronicahtml5/FirmaElectronicaController.php",
                    data: {
                        action: "RegistroTransferenciaFirma",
                        operation: "j03",
                        textRef: "Firma Electronica",
                        attrSign: "1",
                        validity: "3600",
                        idActuacion: idActuacion,
                        cveTipoActuacion: self.cveTipoActuacion,
                        cveOrigen: self.cveOrigen
                    },
                    async: false,
                    dataType: "json",
                    beforeSend: function () {
                        $(".wait").show();
                        $("#btnSign").hide();
                        $(".notsign").remove();
                        $(".btnverify").remove();
                    },
                    success: function (datos) {
                        $(".wait").hide();
                        if (datos != "") {
                            if (datos.estatus == "ok") {
                                var totalCount = datos.resultados.length;
                                if (totalCount > 0) {
                                    for (var i = 0; i < totalCount; i++) {
                                        if (datos.resultados[i].estado == "0") {
                                            var descripcion = datos.resultados[i].descripcion;
                                            var estado = datos.resultados[i].estado;
                                            var transferencia = datos.resultados[i].transferencia;
                                            var codigo = datos.resultados[i].codigo;
                                            self.commitDocuments(transferencia, codigo);
                                        }
                                    }
                                }
                            }
                        } else if (datos.estatus == "CurpNotFound") {
                            $(".firmtobtns").append("<div class='alert alert-danger notsign' >TU CURP NO ES V&Aacute;LIDA, POR FAVOR VER&Iacute;FICALA.</div>");
                            $(".firmtobtns").show();
                        } else if (datos.estatus == "SessionNotFound") {
                            $(".firmtobtns").append("<div class='alert alert-danger notsign' >POR FAVOR VER&Iacute;FICA TU SESION.</div>");
                            $(".firmtobtns").show();
                        }
                    },
                    failure: function (response) {
                        alert("Error en la peticion:\n\n" + response);
                    }
                });
            } else {
                alert("NO SE ENCONTRO LA ACTUACION");
            }
        },
        commitDocuments: function (transferencia, codigo) {
            if (transferencia !== "" && codigo != "") {
                var idActuacion = this.idActuacion;
                var self = this;
                var error = false;
                $.ajax({
                    type: "POST",
                    url: self.scapeUrl + "/controller/pdfactuaciones/GeneraPdfFirmaController.php",
                    data: {
                        action: "doPDF",
                        idActuacion: idActuacion,
                        cveTipoActuacion: self.cveTipoActuacion,
                        cveOrigen: self.cveOrigen
                    },
                    async: false,
                    dataType: "json",
                    beforeSend: function () {
                        $(".wait").show();
                        $("#btnSign").hide();
                    },
                    success: function (datos) {
                        $(".wait").hide();
                        if (datos != "") {
                            if (datos.type === "OK") {
                                error = self.digestionArchivo(transferencia, codigo, datos.filePath, datos.idImagenOriginal, datos.fileName);
                            } else {
                                alert("Ocurrio un error en la generacion del pdf");
                                error = true;
                            }
                        } else {
                            alert("Ocurrio un error en la generacion pdf");
                            error = true;
                        }
                        return error;
                    },
                    failure: function (response) {
                        alert("Error en la peticion:\n\n" + response);
                    }
                });
            }
        },
        digestionArchivo: function (transfer, codigo, file, idImagenOriginal, fileName) {
            if (transfer !== "" && file != "" && codigo != "") {
                var error = false;
                var self = this;
                $.ajax({
                    type: "POST",
                    url: self.scapeUrl + "/controller/firmaelectronica/FirmaElectronicaController.php",
                    data: {
                        action: "DigestionArchivoFirma",
                        transfer: transfer,
                        textRef: self.archivoDesc,
                        file: file
                    },
                    async: true,
                    dataType: "json",
                    beforeSend: function () {
                        $(".wait").show();
                        $("#btnSign").hide();
                    },
                    success: function (datos) {
                        $(".wait").hide();
                        $("#btnSign").show();
                        if (datos != "") {
                            if (datos.estatus == "ok") {
                                var totalCount = datos.resultados.length;
                                if (totalCount > 0) {
                                    for (var i = 0; i < totalCount; i++) {
                                        if (datos.resultados[i].estado == "0") {
                                            var descripcion = datos.resultados[i].descripcion;
                                            var estado = datos.resultados[i].estado;
                                            var idRegistro = datos.resultados[i].idRegistro;
                                            self.UpdateTransferenciaFirma(transfer, codigo, idRegistro, idImagenOriginal, fileName);
                                        }
                                    }
                                }
                            } else if (datos.estatus == "CurpNotFound") {
                                $(".firmtobtns").append("<div class='alert alert-danger notsign' >TU CURP NO ES V&Aacute;LIDA, POR FAVOR VER&Iacute;FICALA.</div>");
                                $(".firmtobtns").show();
                            } else if (datos.estatus == "SessionNotFound") {
                                $(".firmtobtns").append("<div class='alert alert-danger notsign' >POR FAVOR VER&Iacute;FICA TU SESION.</div>");
                                $(".firmtobtns").show();
                            } else {
                                alert(datos.mnj);
                                error = true;
                            }
                        } else {
                            alert("Ocurrio un error en la peticion");
                            error = true;
                        }
                    },
                    failure: function (response) {
                        alert("Error en la peticion:\n\n" + response);
                    }
                });
            }
            return error;
        },
        UpdateTransferenciaFirma: function (transfer, codigo, idRegistro, idImagenOriginal, fileName) {
            if (transfer != "" && codigo != "" && idRegistro != "") {
                var idActuacion = this.idActuacion;
                var self = this;
                $.ajax({
                    type: "POST",
                    url: self.scapeUrl + "/controller/actuacionesfirmadas/ActuacionesFirmadasController.php",
                    data: {
                        action: "select",
                        idActuacion: idActuacion,
                        cveTipoActuacion: self.cveTipoActuacion,
                        cveOrigen: self.cveOrigen
                    },
                    async: false,
                    dataType: "json",
                    beforeSend: function () {
                        $(".wait").show();
                        $("#btnSign").hide();
                    },
                    success: function (datos) {
                        $(".wait").hide();
                        $("#btnSign").show();
                        if (datos != "") {
                            if (datos.estatus == "ok") {
                                var totalCount = datos.totalCount;
                                for (var i = 0; i < totalCount; i++) {
                                    $.ajax({
                                        type: "POST",
                                        url: self.scapeUrl + "/controller/actuacionesfirmadas/ActuacionesFirmadasController.php",
                                        data: {
                                            action: "update",
                                            idActuacionFirmada: datos.resultados[i].idActuacionFirmada,
                                            transferenciaFirma: transfer,
                                            tokenFirma: codigo,
                                            idRegistroFirma: idRegistro,
                                            idImagenOriginal: idImagenOriginal,
                                            fileNameFirma: fileName,
                                            cveOrigen: self.cveOrigen
                                        },
                                        async: false,
                                        dataType: "json",
                                        beforeSend: function () {
                                            $(".btnverify").remove();
                                            $(".wait").show();
                                            $("#btnSign").hide();
                                        },
                                        success: function (datos) {
                                            $(".wait").hide();
                                            if (datos != "") {
                                                self.generacionJar(codigo);
                                                alert("Esta por descargarse un JAR, por favor ejecutalo!!");
                                                $(".firmtobtns").append("<div class='btnverify' ><button class='btn btn-info frmBoton' onclick='javascript:firma.verificarFirma(\"" + codigo + "\")' >Verificar Firma</button></div>");
                                            }
                                        },
                                        failure: function (response) {
                                            alert("Error en la peticion:\n\n" + response);
                                        }
                                    });
                                }
                            }
                        } else if (datos.estatus == "CurpNotFound") {
                            $(".firmtobtns").append("<div class='alert alert-danger notsign' >TU CURP NO ES V&Aacute;LIDA, POR FAVOR VER&Iacute;FICALA.</div>");
                            $(".firmtobtns").show();
                        } else if (datos.estatus == "SessionNotFound") {
                            $(".firmtobtns").append("<div class='alert alert-danger notsign' >POR FAVOR VER&Iacute;FICA TU SESION.</div>");
                            $(".firmtobtns").show();
                        }
                    },
                    failure: function (response) {
                        alert("Error en la peticion:\n\n" + response);
                    }
                });
            }
        },
        generacionJar: function (codigo) {
            $("#codigo").val(codigo);
            if ($("#codigo").val() !== "") {
                $("#frmGeneraJar").submit();
            }
        },
        verificarFirma: function (verificarFirma) {
            if (verificarFirma != "") {
                var self = this;
                $.ajax({
                    type: "POST",
                    url: self.scapeUrl + "/controller/firmaelectronica/FirmaElectronicaController.php",
                    data: {
                        "action": "verificarFirma",
                        "idReferencia": verificarFirma,
                    },
                    async: false,
                    dataType: "json",
                    beforeSend: function () {
                        $(".wait").show();
                        $("#btnSign").hide();
                        $(".notsign").remove();
                        $(".btnverify").hide();
                    },
                    success: function (datos) {
                        $(".wait").hide();
                        if (datos != "") {
                            if (datos.type == "Error") {
                                var str = "<div class='alert alert-info notsign' style='margin-top: 5px;' >Documento a&uacuten no ha sido Firmado.</div>";
                                $(".firmtobtns").append(str);
                                $("#btnSign").show();
                                $(".btnverify").css({"display": "inline-block"}).show();
                            } else {
                                $(".btnverify").remove();
                                self.getPdfSimple();
                                self.validateFormToSign();
                                if ((self.callbackFn) && (typeof self.callbackFn === 'function')) {
                                    self.callbackFn();
                                }
                            }
                        } else if (datos.estatus == "CurpNotFound") {
                            $(".firmtobtns").append("<div class='alert alert-danger notsign' >TU CURP NO ES V&Aacute;LIDA, POR FAVOR VER&Iacute;FICALA.</div>");
                            $(".firmtobtns").show();
                        } else if (datos.estatus == "SessionNotFound") {
                            $(".firmtobtns").append("<div class='alert alert-danger notsign' >POR FAVOR VER&Iacute;FICA TU SESION.</div>");
                            $(".firmtobtns").show();
                        }
                    },
                    failure: function (response) {
                        alert("Error en la peticion:\n\n" + response);
                    }
                });
            }
        },
        getPdfSimple: function () {
            var idActuacion = this.idActuacion;
            var self = this;
            if (idActuacion != "") {
                $("#btnuploadKey").hide();
                $(".btntoDownload").hide();
                $.ajax({
                    type: "POST",
                    url: self.scapeUrl + "/controller/firmaelectronicajava/FirmaElectronicaController.php",
                    data: {
                        action: "pdfSimplePersonalSimple",
                        activo: "S",
                        idReferencia: idActuacion,
                        cveReferencia: self.cveTipoActuacion,
                        cveOrigen: self.cveOrigen,
                        fAutografa: self.fAutografa
                    },
                    async: false,
                    dataType: "json",
                    beforeSend: function () {
                        $(".wait").show();
                        $("#btnSign").hide();
                        $("#btnuploadKey").hide();
                    },
                    success: function (datos) {
//                        datos = eval("(" + datos + ")");
                        if (datos != "") {
                            if (datos.type == 'OK') {
                                $(".wait").hide();
                                $("#btnSign").show();
                                if (self.download) {
                                    $(".btntoDownload").show();
                                    $("#btnSign").hide();
                                }
                            } else {
                                $("#btnuploadKey").show();
                                alert(datos.text)
                            }
                        } else if (datos.estatus == "CurpNotFound") {
                            $(".firmtobtns").append("<div class='alert alert-danger notsign' >TU CURP NO ES V&Aacute;LIDA, POR FAVOR VER&Iacute;FICALA.</div>");
                            $(".firmtobtns").show();
                        } else if (datos.estatus == "SessionNotFound") {
                            $(".firmtobtns").append("<div class='alert alert-danger notsign' >POR FAVOR VER&Iacute;FICA TU SESION.</div>");
                            $(".firmtobtns").show();
                        }
                    },
                    failure: function (response) {
                        $("#btnuploadKey").show();
                        alert("Error en la peticion:\n\n" + response);
                    }
                });
            } else {
                alert("Para obtener un PDF firmado, es necesario consultar la actuaci�n");
            }

        },
        downloadFirma: function () {
            $("#idActuacionDownloadcto").val(0);
            $("#idorigencionDownloadcto").val(0);
            $("#idtipoActuacionDownloadcto").val(0);
            if (this.idActuacion != "") {
                $("#idActuacionDownloadcto").val(this.idActuacion);
                $("#idorigencionDownloadcto").val(this.cveOrigen);
                $("#idtipoActuacionDownloadcto").val(this.cveTipoActuacion);
                $("#imprimirDctoFirmado").submit();
            } else {
                alert("NO SE ENCONTRO EL DOCUMENTO");
            }
        },
        generaPDF: function () {
            var idActuacion = this.idActuacion;
            var self = this;
            $.ajax({
                type: "POST",
                url: self.scapeUrl + "/controladores/sigejupe/firmaelectronicahtml5/FirmaElectronicaController.php",
                data: {
                    accion: "doPDFDigestion",
                    idReferencia: idActuacion,
                    cveTipoDocumentoFirma: self.cveTipoActuacion
                },
                async: false,
                dataType: "json",
                beforeSend: function () {
                    $(".wait").show();
                },
                success: function (datos) {
                    $(".wait").hide();
                    try {
                        if (datos.estatus == "ok") {
                            var nombreArchivo = datos.resultados[0].fileNameFirma.split('/');
                            nombreArchivo = nombreArchivo[nombreArchivo.length-1];//obtenemos solo el nombre del archivo
                            self.push_digestion_json(nombreArchivo, datos.resultados[0].digestion);
                        } else {
                            alert(datos.msj);
                        }
                    } catch(e) {
                        alert("ERROR DE CONEXION DE RED. INTENTELO NUEVAE");
                    }
                },
                failure: function (response) {
                    alert("Error en la peticion:\n\n" + response);
                }
            });
        },
        push_digestion_json: function (file_name_and_extension, digestion) {
            if ($('#hddDigestiones').val() != "") {
                var json_digestiones_exist = jQuery.parseJSON($('#hddDigestiones').val());
                json_digestiones_exist.digestiones.push(
                        {documento: file_name_and_extension, digestion: digestion}
                );
                $('#hddDigestiones').val(JSON.stringify(json_digestiones_exist));
            } else {
                // no hay archivos, crear json
                var json_digestiones = '{"digestiones":[{"documento":"' + file_name_and_extension + '", "digestion":"' + digestion + '"}]}';
                $('#hddDigestiones').val(json_digestiones);
            }
        },
        getPDFHTML5: function () {
            var idReferencia = this.idActuacion;
            var tipoReferencia = this.cveTipoActuacion;
            var cveOrigen = this.cveOrigen;
            var fAutografa = this.fAutografa;
            var self = this;
            $.ajax({
                type: "POST",
                url: self.scapeUrl + "/controller/firmaelectronicahtml5/FirmaElectronicaController.php",
                data: {
                    "metodo": "firmaArchivos",
                    "idReferencia": idReferencia,
                    "tipoReferencia": tipoReferencia,
                    "cveOrigen": cveOrigen,
                    "fAutografa": fAutografa
                },
                async: false,
                dataType: "json",
                beforeSend: function () {
                    $(".wait").show();
                    $("#btnSign").hide();
                    $(".notsign").remove();
                    $(".btnverify").hide();
                },
                success: function (datos) {
                    $(".wait").hide();
                    if (datos != "") {
                        if (datos.type == "Error") {
                            if (self.cveTipoActuacion != 17) {
                                var str = "<div class='alert alert-info notsign' style='margin-top: 5px;' >Documento a&uacuten no ha sido Firmado.</div>";
                                $(".firmtobtns").append(str);
                                $("#btnSign").show();
                                $(".btnverify").css({"display": "inline-block"}).show();
                            } else if (self.cveTipoActuacion == 17) {
                                $("#divSnackBar").html('Documento a&uacuten no ha sido Firmado.');
                                $("#divSnackBarQuit").show("fast");
                                $("#divBackCoverQuit").show();
                            }
                        } else {
                            if (self.cveTipoActuacion != 17) {
                                $(".btnverify").remove();
                                self.getPdfSimple();
                                self.validateFormToSign();
                            } else if (self.cveTipoActuacion == 17) {
                                $("#btnGenerarPDF").hide();
                                $("#verifySign").remove();
                            }
                            if ((self.callbackFn) && (typeof self.callbackFn === 'function')) {
                                self.callbackFn();
                            }
                        }
                    } else if (datos.estatus == "CurpNotFound") {
                        $(".firmtobtns").append("<div class='alert alert-danger notsign' >TU CURP NO ES V&Aacute;LIDA, POR FAVOR VER&Iacute;FICALA.</div>");
                        $(".firmtobtns").show();
                    } else if (datos.estatus == "SessionNotFound") {
                        $(".firmtobtns").append("<div class='alert alert-danger notsign' >POR FAVOR VER&Iacute;FICA TU SESION.</div>");
                        $(".firmtobtns").show();
                    }
                },
                failure: function (response) {
                    alert("Error en la peticion:\n\n" + response);
                }
            });
        }
    }
}