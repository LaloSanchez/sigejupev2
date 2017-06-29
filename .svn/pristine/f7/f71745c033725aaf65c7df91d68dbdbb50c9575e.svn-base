<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    if (isset($_POST['idSolicitud'])) {
        $idSolicitud = $_POST['idSolicitud'];
    }
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Delito(s)
            </h5>
        </div>
        <div class="panel-body bodyDelitos">
            <!--------------------AQUI COMIEZA EL CUERPO DEL FORMULARIO------------------>
            <input type="hidden" name="idSolicitud" id="idSolicitud" value="<?php echo $idSolicitud; ?>" />
            <div class="widget-body padding-5">
                <form role="form" id="historia_filtros">
                    <div class="row">
                        <div class="col-lg-10 col-sm-10 col-xs-10 col-md-offset-1" id="datos-juzgado">
                            <div class="col-xs-11">
                                <input type="hidden" name="numDelitos" id="numDelitos" readonly="readonly"/>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span
                                            class="input-group-addon no-padding-top no-padding-bottom padding-left-5 padding-right-5">
                                        </span>
                                        <input style="width: 900px" type="hidden" style="width:100%;" id="filtro_delito" data-accion="delito" name="filtro_delito" class="selecto2" placeholder="Buscar Delito..."/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-1">
                                <button type="button" name="agregaDelito" id="agregaDelito" class="btn btn-primary">Agregar</button>
                            </div>
                            <br/>
                            <table id="tablaDelitos" border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">
                                <thead class="trGridAgrega">
                                    <tr>
                                        <th>Delito</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <br/>
                            <div style="display: none;" class="alert alert-success alert-dismissable mensaje"></div>
                        </div>
                    </div>
                </form>

            </div>
            <!--------------------AQUI TERMINA EL CUERPO DEL FORMULARIO------------------>
        </div>
    </div>

    <script type="text/javascript">


        cargaSolicitudAudiencias = function () {
            var idSolicitud = $("#idSolicitud").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", idSolicitudAudiencia: idSolicitud},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (key, val) {
                                $("#numDelitos").val(val.numDelitos);
                            });
                        } else {
                            alert("No existen delitos para esta Solicitud");
                        }
                    } catch (e) {
                        alert("Error al cargar solicitud:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de solicitud:\n\n" + otroobj);
                }
            });
        };
        cargaDelitosSolicitudes = function () {
            $("#tablaDelitos tbody").empty();
            var idSolicitud = $("#idSolicitud").val();
            var tabla = "";
            var bandera = true;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/delitossolicitudes/DelitossolicitudesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarDelitos", idSolicitudAudiencia: idSolicitud},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        if (datos.totalCount > 0) {
                            console.log(datos);
                            $.each(datos.data, function (key, value) {
                                tabla += "<tr  class='trSeleccion'  id='ref_" + value.cveDelito + "'>";
                                tabla += "<td style='display:none;'><input type='text' class='txtDelito' name='txtDelito_" + value.cveDelito + "' id='txtDelito_" + value.cveDelito + "' value='" + value.cveDelito + "' /></td>";
                                tabla += "<td>" + value.desDelito + "</td>";
                                tabla += '<td><center><img class="eliminarDelito" idDelitoSolicitud="' + value.idDelitoSolicitud + '" src="img/eliminar.png" width="35px" style="cursor:pointer;"></center></td>';
                                tabla += "</tr>";
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar solicitud:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de solicitud:\n\n" + otroobj);
                }
            });
            $("#tablaDelitos").append(tabla);
        };
        ////////////////////////////////////////////////////////
        /////////////////INICIALIZA FUNCIONES///////////////////
        ////////////////////////////////////////////////////////


        $(function () {


            ////////////////////////////////////////////////////////
            /////////////////FUNCIONES DE JAVASCRIPT////////////////
            ////////////////////////////////////////////////////////

            $.each($('.selecto2'), function (index) {
                var seleccion = this;
                var facade = $(this).data('accion');
                var url = "";
                var accion = "";
                if (facade == "delito") {
                    url = "../fachadas/sigejupe/delitos/DelitosFacade.Class.php"
                }
                $(seleccion).select2({
                    placeholder: "SELECCIONA",
                    minimumInputLength: 0,
                    ajax: {
                        url: url,
                        type: 'POST',
                        dataType: 'json',
                        quietMillis: 250,
                        data: function (term, page) {
                            if (facade == "delito") {
                                return {
                                    desDelito: term,
                                    accion: "consultarLike",
                                    activo: "S"
                                };
                            }
                        },
                        results: function (data) {
                            if (facade == "delito") {
                                return {
                                    results: $.map(data.data, function (item) {
                                        return {
                                            text: item.desDelito,
                                            id: item.cveDelito
                                        }
                                    })
                                };
                            }
                        },
                        cache: true
                    },
                    initSelection: function (element, callback) {
                    },
                    escapeMarkup: function (m) {
                        return m;
                    } // we do not want to escape markup since we are displaying html in results
                });
            });
            $('#agregaDelito', 'body').click(function () {
                var select = $(".selecto2").select2("val");
                $(".mensaje").empty();
                var idSolicitud = $("#idSolicitud").val();
                var idDelito = $(".selecto2").select2("val");
                var mensaje = "";
                var ndelitos = $("#numDelitos").val();
                var rowCount = $("#tablaDelitos >tbody >tr").find(".txtDelito").length;
                if (rowCount >= ndelitos) {
                    mensaje += "<strong>SOLO PUEDES AGREGAR " + ndelitos + " DELITOS</strong>";
                    $(".mensaje").append(mensaje);
                    $(".mensaje").show();
                    setTimeout(function () {
                        $(".mensaje").hide();
                    }, 4000);
                    return false;
                }
                if (idDelito == "") {
                    mensaje += "<strong>DEBES ELEGIR UN DELITO</strong>";
                    $(".mensaje").append(mensaje);
                    $(".mensaje").show();
                    setTimeout(function () {
                        $(".mensaje").hide();
                    }, 4000);
                    return false;
                }
                var tabla = "";
                var bandera = true;
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/delitossolicitudes/DelitossolicitudesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "guardaDelitos", idSolicitudAudiencia: idSolicitud, cveDelito: idDelito, activo: 'S'},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            if (datos.status == "ok") {
                                mensaje += "<strong>" + datos.mensaje + "</strong>";
                                cargaDelitosSolicitudes();
                            } else {
                                mensaje += "<strong>" + datos.mensaje + "</strong>";
                            }
                        } catch (e) {
                            alert("Error al cargar audiencia:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de audiencias:\n\n" + otroobj);
                    }
                });
                $(".mensaje").append(mensaje);
                $(".mensaje").show();
                setTimeout(function () {
                    $(".mensaje").hide();
                }, 4000);
                $(".selecto2").select2("val", '');
            });
            $(".bodyDelitos").delegate(".eliminarDelito", "click", function () {
                if (confirm('\u00bf Se eliminara toda relación correspondiente a esta solicitud')) {
                    $(".mensaje").empty();
                    var idSolicitud = $("#idSolicitud").val();
                    var idDelitoSolicitud = $(this).attr("idDelitoSolicitud");
                    var mensaje = "";
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/delitossolicitudes/DelitossolicitudesFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardar", idSolicitudAudiencia: idSolicitud, idDelitoSolicitud: idDelitoSolicitud, activo: 'N'},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                console.log(datos);
                                if (datos.totalCount > 1) {
                                    mensaje += "<strong>" + datos.text + "</strong>";
                                } else {
                                    mensaje += "<strong>" + datos.text + "</strong>";
                                }
                            } catch (e) {
                                alert("Error al cargar audiencia:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de audiencias:\n\n" + otroobj);
                        }
                    });
                    cargaDelitosSolicitudes();
                    $(".mensaje").append(mensaje);
                    $(".mensaje").show();
                    setTimeout(function () {
                        $(".mensaje").hide();
                    }, 4000);
                }
            });

            cargaSolicitudAudiencias();
            cargaDelitosSolicitudes();
        });

    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>