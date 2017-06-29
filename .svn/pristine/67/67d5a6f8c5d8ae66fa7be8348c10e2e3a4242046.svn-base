var videoAudiencias = function () {
    return {
        hasFlash: false,
        tiposcarpetas: new Object(),
        limpiar: function (reset) {
            $("#informationTable tbody > tr").remove();
            $(".informacion, .msj").hide();
            $(".msj").html("");
            if (reset == 1) {
                $("#fechaConsultar").val(moment().format('DD/MM/YYYY'));
                $("#fechaConsultarEnd").val(moment().format('DD/MM/YYYY'));
            }
        },
        limpiarDetalles: function () {
            $("#informationTableDetalle tbody > tr").remove();
            $(".detallesWrong, .infoDetalle").hide();
            $(".detallesWrong").html("");
        },
        consultar: function (pagAux) {
            this.limpiar();
            var pagina = 1;
            if (pagAux == 0 || pagAux == "" || pagAux == "undefined") {
                pagina = $("#cmbPaginacion").val();
            }
            var cantReg = $("#cmbNumReg").val();
            var urlToSend = "../fachadas/sigejupe/videoaudiencias/VideoaudienciasFacade.Class.php";
            var dataSend = {
                "accion": "consultar",
                "fechaInicial": this.convertirFecha($("#fechaConsultar").val()),
                "fechaFinal": this.convertirFecha($("#fechaConsultarEnd").val()),
                "pag": pagina,
                "cantxPag": cantReg
            }

            $.ajax({
                type: "POST",
                url: urlToSend,
                data: dataSend,
                async: true,
                success: function (data) {
                    try {
                        var datos = eval("(" + data + ")");
                        if (datos.type == "OK") {
                            var table = "<tbody>";
                            $('#cmbPaginacion').find('option').remove().end();
                            var options = "";
                            $.each(datos.paginas, function (index, val) {
                                if (pagina == val) {
                                    pagina = val;
                                    options += "<option value='" + val + "' selected='selected' >" + val + "</option>";
                                } else {
                                    options += "<option value='" + val + "' >" + val + "</option>";
                                }
                            });
                            var count = 1;
                            if (pagina != 1) {
                                count = (pagina - 1) * cantReg;
                            }
                            $("#cmbPaginacion").append(options);
                            $.each(datos.data, function (index, val) {
                                var accion = "";
                                if (val.idEstatus == 1) {
                                    accion = " onclick='javascript:videoAudiencia.getVideo(" + val.idAudiencia + ")' style='cursor:pointer' ";
                                }
                                table += "<tr " + accion + " >";
                                table += "<td>" + count + "</td>";
                                table += "<td>" + val.numCausa + "</td>";
                                table += "<td>" + val.numAuxiliar + "</td>";
                                table += "<td>" + val.fecha + "</td>";
                                table += "<td>" + val.catalago + "</td>";
                                table += "<td>" + val.sala + "</td>";
                                table += "<td>" + val.estatus + "</td>";
                                table += "</tr>";
                                count++;
                            });
                            table += "</tbody>";
                            $("#informationTable").append(table);
                            $(".informacion").show();
                        } else {
                            $(".msj").html(datos.text);
                            $(".msj").show();
                        }
                    } catch (e) {
                        $(".msj").html("NO SE ENCONTRARON AUDIENCIAS");
                        $(".msj").show();
                    }
                }
            });
        },
        getVideo: function (idAudiencia, modal) {
            var url = "sigejupe/videoaudiencias/frmVideoAudiencias.php";
            var datos = {
                "idAudiencia": idAudiencia
            }
            if (modal == 1) {
                datos.modal = 1
            }
            $(".renderVideo").load(url, datos, function () {
                if (modal != 1) {
                    $("#renderVideo").modal("show");
                } else {
                    $(".outadienciavideo").hide();
                    $("#renderVideo .close").hide();
                    $(".closeModalVideoAudiencia").hide();
                    $("#renderVideo").find("div").removeClass("modal-content");
                    $("#renderVideo").removeClass("modal fade");
                }
            });
        },
        getVideAudiencia: function (idAudiencia, modal) {
            this.limpiarDetalles();
            $("#errorload").html("");
            var dataSend = {
                "accion": "consultarAudiencia",
                "idAudiencia": idAudiencia,
            }
            var urlToSend = "../fachadas/sigejupe/videoaudiencias/VideoaudienciasFacade.Class.php";
            var self = this;
            $.ajax({
                type: "POST",
                url: urlToSend,
                data: dataSend,
                async: true,
                success: function (data) {
                    try {
                        var datos = eval("(" + data + ")");
                        var table = "<tbody>";
                        table += "<tr>";
                        table += "<th>LISTA DE VIDEOS</th>";
                        table += "</tr>";
                        var li = '';
                        var count = 1;
                        $.each(datos.videoslist, function (index, val) {
                            li += '<li class="vjs-playlist-item" tabindex="0" onclick=\'videoAudiencia.generaStream("' + val.idAudienciaAuronix + '", "' + val.rutaVideo + '", "' + val.idVideoAudiencia + '")\' >' +
                                    '<picture class="vjs-playlist-thumbnail">' +
                                    '<source srcset="img/logoLogin.png" type="image/jpeg" media="(min-width: 400px;)">' +
                                    '<img src="img/logoLogin.png"></picture>' +
                                    '<cite class="vjs-playlist-name" title="Audiencia ' + count + '">Grabaci&oacute;n ' + count + '</cite></li>';
//                            table += "<tr><td><a onclick='videoAudiencia.generaStream(\"" + val.idAudienciaAuronix + "\", \"" + val.rutaVideo + "\", \"" + val.idVideoAudiencia + "\")' > " + val.rutaVideo + " </a></td></tr>";
                            count++;
                        });
                        $("#playListIntems").html(li);
//                        table += "<tr><td colspan='2'><button class='btn btn-primary btn-block' onclick='javascript:videoAudiencia.download(0)' ><i class='fa fa-download' ></i> Descargar</button></td></tr>";
//                        table += "<tr><td colspan='2'>Lista de Videos</td></tr>";
                        table += "</tbody>";
//                        if (self.verificaplugins()) {
//                            if (typeof datos.streaming.success != "undefined") {
//                                if (datos.streaming.success == 'OK') {
////                                    self.iniciaVideo(datos.streaming.pathstream);
//                                    self.iniciaVideo();
//                                } else {
//                                    $("#errorload").html("<div class='alert alert-danger' >" +
//                                            +"NO TIENES FLASH INSTALADO DESCARGALO <br /> " +
//                                            +" <button class='btn btn-primary' onclick='javascript:videoAudiencia.downloadPlugin()' ><i class='fa fa-download' ></i> Descargar Flash</button></div>");
//                                }
//                            } else {
//                                self.iniciaVideo();
//                            }
//                        } else {
//                            console.log("MOSTRAMOS EL BOTON DE DESCARGA DEL PLUGIN");
//                        }
//                        $("#informationTableDetalle").append(table);


                        var tableDetalle = "<tbody>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th colspan='2' class='text-center' >Informaci&oacute;n de la Audiencia</th>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>Causa</th>";
                        tableDetalle += "<td>" + datos.Causa + "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>Auxiliar</th>";
                        tableDetalle += "<td>" + datos.numAuxiliar + "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>Fecha de Inicio de Audiencia</th>";
                        tableDetalle += "<td>" + datos.fechaInicialAudiencia + "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>Fecha de termino de Audiencia</th>";
                        tableDetalle += "<td>" + datos.fechaFinalAudiencia + "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>Audiencia</th>";
                        tableDetalle += "<td>" + datos.cveCatAudiencia + "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>Sala</th>";
                        tableDetalle += "<td>" + datos.Sala + "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>Estatus</th>";
                        tableDetalle += "<td>" + datos.estatus + "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>JUEZ</th>";
                        tableDetalle += "<td>" + datos.juez + "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>CARPETA INV.</th>";
                        tableDetalle += "<td>" + datos.carpetaInv + "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>NUC</th>";
                        tableDetalle += "<td>" + datos.NUC + "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>IMPUTADOS</th>";
                        tableDetalle += "<td>";
                        $.each(datos.imputados, function (index, val) {
                            tableDetalle += val.Nombre;
                            tableDetalle += "<br>";
                        });
                        tableDetalle += "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>OFENDIDOS</th>";
                        tableDetalle += "<td>";
                        $.each(datos.ofendidos, function (index, val) {
                            tableDetalle += val.Nombre;
                            tableDetalle += "<br>";
                        });
                        tableDetalle += "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "<tr>";
                        tableDetalle += "<th>DELITOS</th>";
                        tableDetalle += "<td>";
                        $.each(datos.delitos, function (index, val) {
                            tableDetalle += val.delito;
                            tableDetalle += "<br>";
                        });
                        tableDetalle += "</td>";
                        tableDetalle += "</tr>";
                        tableDetalle += "</tbody>";
                        $("#informationTableDetalleAudiencia").append(tableDetalle);
                        $(".infoDetalle").show();
                    } catch (e) {
                        $(".detallesWrong").html("NO SE ENCONTRARON AUDIENCIAS");
                        $(".detallesWrong").show();
                    }
                }
            });
        },
        generaStream: function (idAudienciaAuronix, rutaVideo, idVideo) {
            var self = this;
            self.iniciaVideo("rtmp://187.210.39.117:1935/vod2/&mp4:" + rutaVideo);
//            var self = this;
//            var urlToSend = "../fachadas/sigejupe/videoaudiencias/VideoaudienciasFacade.Class.php";
//            var dataSend = {
//                "accion": "generaStream",
//                "idAudienciaAuronix": idAudienciaAuronix,
//                "rutaVideo": rutaVideo,
//                "idVideo": idVideo
//            }
//
//            $.ajax({
//                type: "POST",
//                url: urlToSend,
//                data: dataSend,
//                async: true,
//                success: function (data) {
//                    try {
//                        data = eval("(" + data + ")");
//                        if (data.type == 'OK') {
//                            self.iniciaVideo(data.pathstream);
//                        } else {
//                            alert(data.pathstream);
//                            self.iniciaVideo("");
//                        }
//                    } catch (ex) {
//                        $(".msj").html("NO SE ENCONTRO EL VIDEO DE LA AUDIENCIA");
//                        $(".msj").show();
//                    }
//        }
//});
        },
        download: function (idvideo) {
            var urlToSend = "../fachadas/sigejupe/videoaudiencias/VideoaudienciasFacade.Class.php";
            var dataSend = {
                "accion": "descargavideoaudiencia",
                "idvideo": idvideo
            }

            $.ajax({
                type: "POST",
                url: urlToSend,
                data: dataSend,
                async: true,
                success: function (data) {
                    try {
                        data = eval("(" + data + ")");
                        if (data.type == "OK") {
                            window.location.replace(encodeURI("../fachadas/sigejupe/videoaudiencias/VideoaudienciasFacade.Class.php?action=descargavideoaudienciadownload&idvideo=" + data.idvideo));
                        } else {
                            $(".msj").html(data.text);
                            $(".msj").show();
                        }
                    } catch (ex) {
                        $(".msj").html("NO SE ENCONTRO EL VIDEO DE LA AUDIENCIA");
                        $(".msj").show();
                    }
                }
            });
        },
        convertirFecha: function (fechaTxt) {
            if (fechaTxt != "" || fechaTxt != 0) {
                fechaTxt = fechaTxt.split("/");
                var nuevaFecha = fechaTxt[2] + '-' + fechaTxt[1] + "-" + fechaTxt[0];
                return nuevaFecha;
            } else
                return '';
        },
        installedFlash: function () {
            var hasFlash = false;
            try {
                var ao = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
                if (ao) {
                    hasFlash = !hasFlash;
                }
            } catch (e) {
                if (navigator.mimeTypes
                        && navigator.mimeTypes['application/x-shockwave-flash'] != undefined
                        && navigator.mimeTypes['application/x-shockwave-flash'].enabledPlugin) {
                    hasFlash = !hasFlash;
                }
            }
            return hasFlash;
        },
        contains: function (ua, cadena) {
            return (ua.indexOf(cadena) != -1);
        },
        verificaplugins: function () {
            var toreturn = false;
            var ua = window.navigator.userAgent;
            if (this.installedFlash() || this.contains(ua, "Mac")) {
                toreturn = true;
            } else {
                toreturn = false;
            }
            return toreturn;
        },
        downloadPlugin: function () {
            var ua = window.navigator.userAgent;
            var urltoRedirect = "http://localhost/transcode/flash-plugins/";
            if (this.contains(ua, "Linux"))
            {
                if (this.contains(ua, "Fedora"))
                {
                    if (this.contains(ua, "x86_64"))
                        parent.location = urltoRedirect + "/linux64/flash-plugin-11.2.202.577-release.x86_64.rpm";
                    else
                        parent.location = urltoRedirect + "/linux32/flash-plugin-11.2.202.577-release.i386.rpm";
                } else
                {
                    if (this.contains(ua, "x86_64"))
                        parent.location = urltoRedirect + "/linux64/install_flash_player_11_linux.x86_64.tar.gz";
                    else
                        parent.location = urltoRedirect + "/linux32/install_flash_player_11_linux.i386.tar.gz";
                }
            } else if (this.contains(ua, "Mac"))
            {
                if (this.contains(ua, "Safari"))
                    parent.location = urltoRedirect + "/macosx10.6-10.11/safari_firefox/install_flash_player_osx.dmg";
                else
                    parent.location = urltoRedirect + "/macosx10.6-10.11/opera_chromium/install_flash_player_osx_ppapi.dmg";
            } else if (this.contains(ua, "Windows"))
            {

                if ((this.contains(ua, "NT 6.1")) || (this.contains(ua, "NT 6.0")) || (this.contains(ua, "NT 5.1")) || (this.contains(ua, "XP")) || (this.contains(ua, "NT 5.2")))
                {
                    if (this.contains(ua, "Firefox"))
                        parent.location = urltoRedirect + "windows7-vista-xp/firefox/install_flash_player.exe";
                    else if (this.contains(ua, "Opera"))
                        parent.location = urltoRedirect + "windows7-vista-xp/opera_chromium/install_flash_player_ppapi.exe";
                    else
                        parent.location = urltoRedirect + "windows7-vista-xp/iexplorer/install_flash_player_ax.exe";
                } else if (this.contains(ua, "NT 6.2") || contains(ua, "NT 10.0") || contains(ua, "NT 4.0") ||
                        contains(ua, "WinNT4.0") || contains(ua, "WinNT") || contains(ua, "Windows NT"))
                {
                    if (this.contains(ua, "Firefox"))
                        parent.location = urltoRedirect + "windows10-8/firefox/install_flash_player.exe";
                    else if (this.contains(ua, "Opera"))
                        parent.location = urltoRedirect + "/windows10-8/opera-chromium/install_flash_player_ppapi.exe";
                }
            }
        },
        iniciaVideo: function (file) {
            videojs('my-video').dispose();
            $("#preview-player").html("<video id='my-video' class='vjs-tech' preload='auto' poster='img/logoLogin.png' controls data-setup='{}'><source src='" + file + "' type='rtmp/mp4'></video>");
//            $("#rendervideo").html("<video id='my-video' class='video-js' controls preload='auto' width='640' height='264' poster='img/logoLogin.png' data-setup='{}'><source src='http://187.210.39.117/stream/streaming/prueba/index.m3u8' type='application/x-mpegURL'>");
            videojs('my-video');
            videojs('my-video').play();
        },
        getTipoCarpetas: function () {
            var urlToSend = "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php";
            var self = this;
            $.ajax({
                url: urlToSend,
                type: "POST",
                data: {
                    accion: 'consultar'
                },
                beforeSend: function () {
                    ToggleLoading(1);
                },
                success: function (data) {
                    var datos = eval("(" + data + ")");
                    self.tiposcarpetas = datos;
                    var options = "";
                    $.each(datos.data, function (index, val) {
                        if ((val.cveTipoCarpeta == 8) || (val.cveTipoCarpeta == 2) || (val.cveTipoCarpeta == 7) || (val.cveTipoCarpeta == 1))
                            options += "<option value='" + val.cveTipoCarpeta + "' >" + val.desTipoCarpeta + "</option>";
                    });
                    $("#cmbTipoCarpeta").append(options)

                    ToggleLoading(2);
                }
            });
        },
        getJuzgadores: function (type) {
            var cmJuzgado = '';
            if (type == 1)
                cmJuzgado = $("#cmbJuzgados").val();
            var urlToSend = "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php";
            $.ajax({
                url: urlToSend,
                type: "POST",
                data: {
                    accion: 'getJuzgadores',
                    cveJuzgado: cmJuzgado
                },
                beforeSend: function () {
                    ToggleLoading(1);
                },
                success: function (data) {
                    $("#cmbJuez").select2('val', '');
                    var datos = eval("(" + data + ")");
                    $("#cmbJuez option").remove();
                    if (datos.type == 'OK') {
                        var options = "";
                        options += "<option></option>";
                        $.each(datos.data, function (index, val) {
                            var status = '';
                            if (val.activo == 'N') {
                                status = '(Inactivo)';
                            }
                            options += "<option value='" + val.id + "' >" + val.nombre + ' ' + status + "</option>";
                        });
                        $("#cmbJuez").append(options)

                        ToggleLoading(2);
                    }
                }
            });
        },
        getJuzgadorJuzgado: function () {
            this.getJuzgadores(1);
        },
        limpiarGral: function () {
            this.limpiar();
            $("#cmbJuzgados").select2('val', '').trigger("change");
            $("#cmbTipoCarpeta").select2('val', '');
            $("#cmbJuez").select2('val', '');
            $("#txtNumero").val('');
            $("#txtAnio").val('');
            $("#fechaConsultar").val('');
            $("#fechaConsultarEnd").val('');
        },
        consultarGral: function (pagAux) {
            this.limpiar();
            var pagina = 1;
            if (pagAux == 0 || pagAux == "" || pagAux == "undefined") {
                pagina = $("#cmbPaginacion").val();
            }
            console.log($("#cmbTipoCarpeta").val())
            var cantReg = $("#cmbNumReg").val();
            var urlToSend = "../fachadas/sigejupe/videoaudiencias/VideoaudienciasFacade.Class.php";
            var dataSend = {
                "accion": "consultarGral",
                "cmbJuzgados": $("#cmbJuzgados").val(),
                "cmbTipoCarpeta": $("#cmbTipoCarpeta").val(),
                "txtNumero": $("#txtNumero").val(),
                "txtAnio": $("#txtAnio").val(),
                "cmbJuez": $("#cmbJuez").val(),
                "fechaInicial": this.convertirFecha($("#fechaConsultar").val()),
                "fechaFinal": this.convertirFecha($("#fechaConsultarEnd").val()),
                "pag": pagina,
                "cantxPag": cantReg
            }

            $.ajax({
                type: "POST",
                url: urlToSend,
                data: dataSend,
                async: true,
                success: function (data) {
                    try {
                        $("#informationTable tbody").remove();
                        var datos = eval("(" + data + ")");
                        if (datos.type == "OK") {
                            var table = "<tbody>";
                            $('#cmbPaginacion').find('option').remove().end();
                            var options = "";
                            $.each(datos.paginas, function (index, val) {
                                if (pagina == val) {
                                    pagina = val;
                                    options += "<option value='" + val + "' selected='selected' >" + val + "</option>";
                                } else {
                                    options += "<option value='" + val + "' >" + val + "</option>";
                                }
                            });
                            var count = 1;
                            if (pagina != 1) {
                                count = (pagina - 1) * cantReg;
                            }
                            $("#cmbPaginacion").append(options);
                            $.each(datos.data, function (index, val) {
                                var accion = "";
                                if (val.idEstatus == 2) {
                                    accion = " onclick='javascript:videoAudiencia.getVideo(" + val.idAudiencia + ")' style='cursor:pointer' ";
                                }
                                table += "<tr " + accion + " >";
                                table += "<td>" + count + "</td>";
                                table += "<td>" + val.numCausa + "</td>";
                                table += "<td>" + val.numAuxiliar + "</td>";
                                table += "<td>" + val.fecha + "</td>";
                                table += "<td>" + val.catalago + "</td>";
                                table += "<td>" + val.sala + "</td>";
                                table += "<td>" + val.estatus + "</td>";
                                table += "</tr>";
                                count++;
                            });
                            table += "</tbody>";
                            $("#informationTable").append(table);
                            $(".informacion").show();
                        } else {
                            $(".msj").html(datos.text);
                            $(".msj").show();
                        }
                    } catch (e) {
                        $(".msj").html("NO SE ENCONTRARON AUDIENCIAS");
                        $(".msj").show();
                    }
                }
            });
        },
        getCarpetaJuzgado: function () {
            var data = $('#cmbJuzgados').select2('data');
            var options = "";
            options = "<option></option>";
            var datos = this.tiposcarpetas;
            var n = data.text.search("CODIGO ANTERIOR");
            $("#cmbTipoCarpeta option").remove();
            if (n > 0) {
                $.each(datos.data, function (index, val) {
                    if ((val.cveTipoCarpeta == 8) || (val.cveTipoCarpeta == 4) || (val.cveTipoCarpeta == 7)) {
                        options += "<option value='" + val.cveTipoCarpeta + "' >" + val.desTipoCarpeta + "</option>";
                    }
                });
            }
            var n = data.text.search("CONTROL");
            if (n > 0) {
                $.each(datos.data, function (index, val) {
                    if ((val.cveTipoCarpeta == 8) || (val.cveTipoCarpeta == 2) || (val.cveTipoCarpeta == 7) || (val.cveTipoCarpeta == 1)) {
                        options += "<option value='" + val.cveTipoCarpeta + "' >" + val.desTipoCarpeta + "</option>";
                    }
                });
            }
            var n = data.text.search("EJECUCION");
            if (n > 0) {
                $.each(datos.data, function (index, val) {
                    if ((val.cveTipoCarpeta == 8) || (val.cveTipoCarpeta == 7) || (val.cveTipoCarpeta == 5)) {
                        options += "<option value='" + val.cveTipoCarpeta + "' >" + val.desTipoCarpeta + "</option>";
                    }
                });
            }
            var n = data.text.search("ENJUICIAMIENTO");
            if (n > 0) {
                $.each(datos.data, function (index, val) {
                    if ((val.cveTipoCarpeta == 8) || (val.cveTipoCarpeta == 7) || (val.cveTipoCarpeta == 3)) {
                        options += "<option value='" + val.cveTipoCarpeta + "' >" + val.desTipoCarpeta + "</option>";
                    }
                });
            }
            options += "<option>SIN RELACION</option>";
            $("#cmbTipoCarpeta").append(options);
        }
    }
}