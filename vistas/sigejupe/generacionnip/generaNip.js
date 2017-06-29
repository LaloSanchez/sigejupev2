var NIP = function () {
    return {
        limpiar: function () {},
        generaNip: function (tipo) {
            $(".infos").html('');
            $(".btns").hide();
            var self = this;
            if (parseInt(tipo) > 0) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/generacionNip/GeneracionNipFacade.Class.php",
                    data: {
                        'tipo': tipo,
                        'accion': 'getCodigo'
                    },
                    async: true,
                    dataType: 'json',
                    beforeSend: function () {
                        $(".infos").html("<div class='alert alert-info text-center' >Cargando Informaci&oacute;n Espere..</div>")
                    },
                    success: function (datos) {
                        try {
                            if (datos.type == 'OK') {
                                $(".infos").html("<div class='alert alert-info text-center' >" + datos.text + "</div>")
                                self.getNips();
                            } else {
                                $(".infos").html("<div class='alert alert-danger text-center' >" + datos.text + "</div>")
                            }
                        } catch (Exception) {
                            $(".infos").html("<div class='alert alert-danger text-center' >NO SE PUDO GENERAR EL NIP</div>")
                        }
                        $(".btns").show();
                    }
                });
            }
            return false;
        },
        getNips: function (pagAux) {
            $("#tblNips tbody > tr").remove();
            $('.renderInfo').hide();
            $(".infos").html('');
            $(".btns").hide();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/generacionNip/GeneracionNipFacade.Class.php",
                data: {
                    'accion': 'getNips',
                    'fechaInicial': $("#fechainicial").val(),
                    'fechaFinal': $("#fechafinal").val(),
                    'nip': $("#nip").val()
                },
                async: true,
                dataType: 'json',
                beforeSend: function () {
                    $(".infos").html("<div class='alert alert-info text-center' >Cargando Informaci&oacute;n Espere..</div>")
                },
                success: function (datos) {
                    $(".infos").html("")
                    try {
                        if (datos.type == 'OK') {
                            if (datos.data.length > 0) {
                                var table = '';
                                $.each(datos.data, function (index, val) {
                                    table += '<tr>';
                                    table += '<td>' + val.nip + '</td>';
                                    table += '<td>' + val.vigencia + '</td>';
                                    table += '<td>' + val.carpeta + '</td>';
                                    table += '<td>' + val.status + '</td>';
                                    table += '</tr>';
                                });
                                $("#tblNips tbody").append(table);
                                $('.renderInfo').show();
                            } else {
                                $(".infos").html("<div class='alert alert-info text-center' >NO HAY NIPS</div>")
                                $('.renderInfo').hide();
                                $(".btns").show();
                            }
                        } else {
                            if (pagAux == 0) {
                                $(".infos").html("<div class='alert alert-info text-center' >NO HAY NIPS</div>")
                                $('.renderInfo').hide();
                                $(".btns").show();
                            }
                        }
                    } catch (Exception) {
                        $(".infos").html("<div class='alert alert-danger text-center' >NO SE PUDO GENERAR EL NIP</div>")
                    }
                    $(".btns").show();
                }
            });
            return false;
        }
    }
}