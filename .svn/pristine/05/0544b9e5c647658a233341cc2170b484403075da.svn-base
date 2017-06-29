<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    if (isset($_POST['idSolicitud'])) {
        $idSolicitud = $_POST['idSolicitud'];
    }
    ?>
    <style>
        .trGridAgrega {
            color: #ffffff !important;
            background-color: #881518 !important;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Delito(s)
            </h5>
        </div>
        <div class="panel-body bodyDelitos">
            <!--------------------AQUI COMIEZA EL CUERPO DEL FORMULARIO------------------>
            <input type="hidden" name="idSolicitud" id="idSolicitud" value="<?php echo $idSolicitud; ?>"/>
            <div class="widget-body padding-5 divDelitos">
                <form role="form" id="historia_filtros">
                    <div class="row">
                        <div class="col-lg-10 col-sm-10 col-xs-10 col-md-offset-1" id="datos-juzgado">
                            <div class="col-xs-9">
                                <input type="hidden" name="numDelitos" id="numDelitos" readonly="readonly"/>

                                <div class="col-lg-12"><br>
                                    <div>
                                        <span
                                            class="input-group-addon no-padding-top no-padding-bottom padding-left-5 padding-right-5">
                                        </span>
                                        <input type="hidden" style="width:100%;" id="filtro_delito" data-accion="delito"
                                               name="filtro_delito" class="selecto2" placeholder="Buscar Delito..."/>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-3">
                                <button type="button" name="btnAgregaDelito" id="btnAgregaDelito" onclick="agregaDelito();"
                                        class="btn btn-primary">Agregar
                                </button>
                                <button type="button" name="btnLimpiar" id="btnLimpiar" onclick="limpiar();"
                                        class="btn btn-primary">Limpiar
                                </button>
                            </div>

                            <div class="form-group col-lg-12"></div>
                            <br><br>
                            <div class="form-group">
                                <div id="divAlertWarningDelito" class="alert alert-warning alert-dismissable"
                                     style="display:none;">
                                    <strong>Advertencia!</strong> Mensaje
                                </div>
                                <div id="divAlertSuccesDelito" class="alert alert-success alert-dismissable"
                                     style="display:none;">

                                    <strong>Correcto!</strong> Mensaje
                                </div>
                                <div id="divAlertDagerDelito" class="alert alert-danger alert-dismissable"
                                     style="display:none;">

                                    <strong>Error!</strong> Mensaje
                                </div>
                                <div id="divAlertInfoDelito" class="alert alert-info alert-dismissable"
                                     style="display:none;">

                                    <strong>Informaci&oacute;n!</strong> Mensaje
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <div class="form-group col-lg-12">
                                    <div style="text-align: center">
                                        <label class="caption">LISTADO DE DELITOS</label>
                                    </div>
                                    <div id="divResultadosDelitos"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </form>

            </div>
            <!--------------------AQUI TERMINA EL CUERPO DEL FORMULARIO------------------>
        </div>
    </div>

    <script type="text/javascript">
        cargaDelitosSolicitudes = function () {
            var idSolicitud = $("#idSolicitud").val();
            $('#divResultadosDelitos').html("");
            $.ajax({
                type: "POST",
                global: false,
                url: "../fachadas/sigejupe/delitossolicitudes/DelitossolicitudesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarDelitos", idSolicitudAudiencia: idSolicitud},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        if (datos.totalCount > 0) {
                            var tabla = "";
                            tabla += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                            tabla += '<tr class="trGridAgrega">';
                            tabla += '<th width="80%" >Delito</th>';
                            tabla += '<th width="20%">Eliminar</th></tr>';
                            $.each(datos.data, function (key, value) {
                                tabla += "<tr  class='trSeleccion'  id='ref_" + value.cveDelito + "'>";
                                tabla += "<td style='display:none;'><input type='text' class='txtDelito' name='txtDelito_" + value.cveDelito + "' id='txtDelito_" + value.cveDelito + "' value='" + value.cveDelito + "' /></td>";
                                tabla += "<td>" + value.desDelito + "</td>";
                                tabla += '<td><center><img class="eliminarDelito" onclick="eliminarDelito(' + value.idDelitoSolicitud + ');" idDelitoSolicitud="' + value.idDelitoSolicitud + '" src="img/eliminar.png" width="35px" style="cursor:pointer;"></center></td>';
                                tabla += "</tr>";
                            });
                            tabla += '</table>';
                            $('#divResultadosDelitos').html(tabla);
                            $('#divResultadosDelitos').show("");
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

        eliminarDelito = function (id) {
            bootbox.dialog({
                message: "\u00bf Desea eliminar el delito? Se eliminaran las relaciones (paso 5)",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/delitossolicitudes/DelitossolicitudesFacade.Class.php",
                                async: false,
                                dataType: "json",
                                data: {
                                    accion: "eliminarDelito",
                                    idDelitoSolicitud: id
                                },
                                beforeSend: function (objeto) {
                                },
                                success: function (datos) {
                                    if (datos.status == "ok") {
                                        $("#divAlertSuccesDelito").html("");
                                        $("#divAlertSuccesDelito").html(datos.msj);
                                        $("#divAlertSuccesDelito").show("");
                                        setTimeAlert("divAlertSuccesDelito");
                                    } else {
                                        $("#divAlertWarningDelito").html("");
                                        $("#divAlertWarningDelito").html(datos.msj);
                                        $("#divAlertWarningDelito").show("");
                                        setTimeAlert("divAlertWarningDelito");
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    alert("Error al eliminar delito::\n\n" + otroobj);
                                }
                            });
                            cargaDelitosSolicitudes();
                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {

                        }
                    }
                }
            });
        }

        agregaDelito = function () {
            if ($(".selecto2").select2("val") != "") {
                var idSolicitud = $("#idSolicitud").val();
                var idDelito = $(".selecto2").select2("val");
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/delitossolicitudes/DelitossolicitudesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        accion: "guardar",
                        idSolicitudAudiencia: idSolicitud,
                        cveDelito: idDelito,
                        activo: 'S'
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.status == "ok") {
                            $("#divAlertSuccesDelito").html("");
                            $("#divAlertSuccesDelito").html(datos.msj);
                            $("#divAlertSuccesDelito").show("");
                            setTimeAlert("divAlertSuccesDelito");
                            limpiar();
                            cargaDelitosSolicitudes();
                        } else {
                            $("#divAlertWarningDelito").html("");
                            $("#divAlertWarningDelito").html(datos.msj);
                            $("#divAlertWarningDelito").show("");
                            setTimeAlert("divAlertWarningDelito");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de agrega delitos:\n\n" + otroobj);
                    }
                });
            } else {
                alert("Seleccione un delito");
            }
        }

        limpiar = function () {
            $(".selecto2").select2("val", '');
        };

        $(function () {
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
                                if (data.totalCount > 0) {
                                    return {
                                        results: $.map(data.data, function (item) {
                                            return {
                                                text: item.desDelito,
                                                id: item.cveDelito
                                            }
                                        })
                                    };
                                } else {
                                    return {
                                        results: ""
                                    };
                                }
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