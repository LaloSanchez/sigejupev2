var LoginJs = function () {
    return {
        fielnetPJ: Object(),
        useFEPJ: false,
        canFEPJ: false,
        enterFn: function (event) {
            var key = window.event ? event.keyCode : event.which;
            if (key === 13) {
                if ($("#txtUsuario").val() === "") {
                    $("#txtUsuario").focus();
                } else if ($("#txtPassword").val() === "") {
                    $("#txtPassword").focus();
                } else {
                    $("#btnIngresar").click();
                }
            }
        },
        init: function () {
            this.fielnetPJ = new fielnet.Firma({
                subDirectory: "js/scriptsFirma",
                ajaxAsync: false,
                controller: "../controladores/sigejupe/firmaelectronicahtml5/FirmaElectronicaController.php"
            });// Verifica que la firma este disponible 
            if (this.fielnetPJ.validateWebBrowser()) {
                this.useFEPJ = true;
            } else {
                this.useFEPJ = false;
                $('.useFirma').hide();
            }
            this.fielnetPJ.readCertificateAndPrivateKey("cer", "key");
        },
        verificaFirma: function () {
            $("#divErrorMnj").hide("fadeOut");
            $("#conectando").show();
            var self = this;
            self.fielnetPJ.validateKeyPairs($("#txtPassword").val(), function (result) {
                if (result.state == 0) {
                    self.fielnetPJ.setReferencia("Acceso al sistema sigejupe: usuario: " + $("#txtUsuario").val());
                    self.fielnetPJ.signPKCS1("Acceso al sistema sigejupe", fielnet.Digest.SHA2, fielnet.Encoding.UTF8, function (signResult) {
                        if (signResult.state == 0) {
                            self.loginAutorize();
                        } else {
                            $("#divErrorMnj").html(signResult.description);
                            $("#divErrorMnj").show("fade");
                            $("#conectando").hide();
                            $("#btnIngresar").prop("disabled", false);
                        }
                    });
                } else {
                    $("#divErrorMnj").html(result.description);
                    $("#divErrorMnj").show("fade");
                    $("#conectando").hide();
                    $("#btnIngresar").prop("disabled", false);
                }
            });
        },
        verificar: function () {
            var txtUsuario = $('#txtUsuario').val().trim();
            var txtPassword = $('#txtPassword').val().trim();
            var txtCer = $('#cer').val().trim();
            var txtKey = $('#key').val().trim();
            var self = this;
            if ((txtUsuario !== "") && (txtPassword !== "")) {
                if (this.useFEPJ && this.canFEPJ) {
                    if ((txtKey !== "") && (txtCer !== "")) {
                        self.verificaFirma();
                    } else {
                        $("#divErrorMnj").html("Por favor ingrese su archivo .cer y/o su archivo .key.");
                        $("#divErrorMnj").show("fade");
                    }
                } else {
                    self.loginAutorize();
                }
            } else {
                $("#divErrorMnj").html("Por favor ingrese usuario y/o contrase&ntilde;a.");
                $("#divErrorMnj").show("fade");

            }
        },
        loginAutorize: function () {
            var tipoUrs = "1";
            if ($("#chkTipoUsuario").is(':checked')) {
                tipoUrs = "2";
            }
            if (($("#chkUseFirma").is(":checked")) && ($("#cer").val() == "" || $("#key").val() == "")) {
                var mensaje = "";
                if ($("#cer").val() == "") {
                    mensaje = " - .CER";
                }
                if ($("#key").val() == "") {
                    mensaje += " - .KEY";
                }
                $("#divErrorMnj").html("FALTA PROPORCIONAR EL(LOS) ARCHIVO(S): " + mensaje);
                $("#divErrorMnj").show("fade");
                return false;
            }
            var self = this;
            $.ajax({
                type: "POST",
                url: "../fachadas/gestion/login/LoginFacade.Class.php",
                async: true,
                dataType: "json",
                data: {
                    usuario: $.trim($('#txtUsuario').val()),
                    password: $.trim($('#txtPassword').val()),
                    tipoUsuario: tipoUrs
                },
                beforeSend: function (datos) {
                    $("#conectando").show();
                    $("#btnIngresar").prop("disabled", true);
                },
                success: function (result) {
                    if (result !== "") {
                        if (result.estatus === "ok") {
                            if (self.useFEPJ) {
                                localStorage.clear();
                                self.fielnetPJ.saveCertificateAndPrivateKey(fielnet.Storages.LOCAL_STORAGE, "cer_" + result.cveUsuario, "key_" + result.cveUsuario);
                            }
                            $(location).attr('href', result.location);
                        } else {
                            $("#divErrorMnj").html("Usuario o contrase&ntilde;a incorrecta");
                            $("#divErrorMnj").show("fade");
                            $("#conectando").hide();
                            $("#btnIngresar").prop("disabled", false);
                        }
                    }
                }
            });
        },
        useFirma: function () {
            if (this.useFEPJ) {
                this.canFEPJ = ($("#chkUseFirma").is(":checked")) ? true : false;
                if (this.canFEPJ) {
                    $('.firmaElectronica').show();
                } else {
                    $('.firmaElectronica').hide();
                }
            }
            return false;
        }
    }
}