<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idSolicitud = isset($_POST['idSolicitud']) ? $_POST['idSolicitud'] : '';
    ?>

    <style>
        input[type=text] {
            text-transform: uppercase;
        }
    </style>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Apelante(s) Solicitud
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <div class="tab-content">
                    <!-- PASO 3 DATOS GENERALES DEL OFENDIDO-->

                    <!--campo de solicitud de audiencia-->


                    <input type="hidden" name="IdSolicitudAudiencia" id="IdSolicitudAudiencia"
                           value="<?php echo $idSolicitud; ?>"/>

                    <div class="tab-pane active" id="divGeneralApelantePaso4">
                        <form action="" id="form-apelante-general">
                            <input type="hidden" name="accion" id="accion" value="guardar"/>
                            <input type="hidden" name="idApelanteSolicitud" id="idApelanteSolicitud"/>
                            <input type="hidden" name="activo" id="activo" value="S"/>

                            <p class="col-lg-12" style="color:darkred;">
                                Los campos marcados con (*) son obligatorios.
                            </p>
                            <hr/>

                            <div id="nombreDatosGeneralesApelante" style="margin-left:15px; margin-bottom: 25px;">
                            </div>

                            <div>
                                <div class="col-lg-12">

                                    <label class="control-label col-xs-3" for="cmbTipoPersonaApelante">
                                        Tipo de Persona <span class="requerido">(*)</span>
                                    </label>

                                    <div class="col-xs-6">
                                        <select id="cmbTipoPersonaApelante" class="form-control"
                                                name="cmbTipoPersonaApelante"
                                                onchange="validaPersona();">
                                            <option value="0">Seleccione una opci&oacute;n</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <br/>
                                <div id="divPersonaFisicaApelante">
                                    <!--<div class="contenedor">-->
                                    <div class="col-lg-6">
                                        <label class="control-label"
                                               for="txtNombreApelante">Nombre <span
                                                class="requerido">(*)</span></label>

                                        <div>
                                            <input type="text" class="form-control"
                                                   id="txtNombreApelante"
                                                   name="txtNombreApelante">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="control-label"
                                               for="txtPaternoApelante">Paterno <span
                                                class="requerido">(*)</span></label>

                                        <div>
                                            <input type="text" class="form-control datoTipoCadena"
                                                   id="txtPaternoApelante" name="txtPaternoApelante">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="control-label"
                                               for="txtMaternoApelante">Materno <span
                                                class="requerido">(*)</span></label>

                                        <div>
                                            <input type="text" class="form-control"
                                                   id="txtMaternoApelante"
                                                   name="txtMaternoApelante">
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="col-lg-3">
                                        <label class="control-label"
                                               for="cmbGeneroApelante">G&eacute;nero <span
                                                class="requerido">(*)</span></label>

                                        <div>
                                            <select id="cmbGeneroApelante" class="form-control"
                                                    name="cmbGeneroApelante" required="">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>


                                    <!-- combo tipo de apelante -->

                                    <div class="col-lg-3">
                                        <label for="cmbTipoApelante">
                                            Tipo de Apelante <span class="requerido">(*)</span>
                                        </label>

                                        <div>
                                            <select name="cmbTipoApelante" id="cmbTipoApelante" class="form-control">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- termina combo tipo de apelante -->


                                </div>
                                <div class="clearfix"></div>
                                <br/>
                                <div id="divPersonaMoralApelante" style="display:none;">
                                    <div class="col-lg-8">
                                        <label class="control-label" for="txtnombreMoralApelante">
                                            Nombre Persona Moral <span class="requerido">(*)</span>
                                        </label>

                                        <div>
                                            <input type="text" class="form-control datoTipoCadena"
                                                   id="txtnombreMoralApelante"
                                                   name="txtnombreMoralApelante">
                                        </div>
                                    </div>


                                    <!-- combo tipo apelante -->
                                    <div class="col-lg-4">
                                        <label for="cmbTipoApelanteMoral">
                                            Tipo de Apelante
                                            <span class="requerido">(*)</span>
                                        </label>
                                        <div>
                                            <select name="cmbTipoApelanteMoral" id="cmbTipoApelanteMoral"
                                                    class="form-control">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- termina combo tipo apelante -->

                                </div>

                                <div class="clearfix"></div>
                                <br/><br/>

                                <div class="col-lg-12">
                                    <button class="btn btn-primary" id="guardar-general-apelante">
                                        Guardar Datos del Apelante.
                                    </button>
                                    <a href="#" id="limpiar-general-apelante" class="btn btn-primary">
                                        Limpiar
                                    </a>
                                </div>

                                <div class="clearfix"></div>
                                <br/>

                                <div id="alert-general-apelante" class="alert" style="display: none;">
                                </div>

                            </div>
                        </form>

                    </div>

                </div>
            </div>

            <div>
                <div class="clearfix"></div>
                <br/>
                <div class="form-group col-lg-12">
                    <div style="text-align: center">
                        <label class="caption">
                            <strong>LISTA DE APELANTES</strong>
                        </label>
                    </div>


                    <table id="tableResultadosApelante" class='table table-bordered tblGridAgrega'>
                        <tr class='trGridAgrega'>
                            <th>Tipo Apelante</th>
                            <th>Tipo Persona</th>
                            <th>Nombre</th>
                            <th>G&eacute;nero</th>
                            <th>Eliminar</th>
                        </tr>
                        <tbody id="tabla-apelantes">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--</div>-->
    </div>

    <script type="text/javascript">


        comboTipoPersonaApelante = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false", soloVictima: 'N'},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoPersonaApelante').empty();
                        $('#cmbTipoPersonaApelante').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTipoPersonaApelante').append('<option value="' + object.cveTipoPersona + '">' + object.desTipoPersona + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Tipos Personas Apelante:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipos personas Apelante:\n\n" + otroobj);
                }
            });
        };

        comboGeneroApelante = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbGeneroApelante').empty();
                        $('#cmbGeneroApelante').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbGeneroApelante').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Genero Apelante:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la petición de Genero Apelante:\n\n" + otroobj);
                }
            });
        };

        comboTipoApelante = function () {

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposapelantes/TiposapelantesFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoApelante').empty();
                        $('#cmbTipoApelanteMoral').empty();
                        $('#cmbTipoApelante').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        $('#cmbTipoApelanteMoral').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTipoApelante').append('<option value="' + object.cveTipoApelante + '">' + object.desTipoApelante + '</option>');
                                $('#cmbTipoApelanteMoral').append('<option value="' + object.cveTipoApelante + '">' + object.desTipoApelante + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tipos de Apelante:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la petición de tipos de Apelante:\n\n" + otroobj);
                }
            });

        }

        validaPersona = function () {
            if ($("#cmbTipoPersonaApelante").val() == 1) {
                $('#divPersonaFisicaApelante').show();
                $('#divPersonaMoralApelante').hide();
            } else if ($("#cmbTipoPersonaApelante").val() == 2 || $("#cmbTipoPersonaApelante").val() == 3) {
                $('#divPersonaFisicaApelante').hide();
                $('#divPersonaMoralApelante').show();
            }
        }

        //valida apelante general
        validateApelante = function () {
            var mensaje = "";
            var error = true;

            if ($("#cmbTipoPersonaApelante").val() == "1") {

                if ($('#txtNombreApelante').val() == "" || $('#txtNombreApelante').val() == "0") {
                    mensaje += "*Capture Nombre del Apelante\n";
                    error = false;
                }
                if ($('#txtPaternoApelante').val() == "" || $('#txtPaternoApelante').val() == "0") {
                    mensaje += "*Capture apellido paterno del Apelante\n";
                    error = false;
                }

                if ($('#txtMaternoApelante').val() == "" || $('#txtMaternoApelante').val() == "0") {
                    mensaje += "*Capture apellido materno del Apelante\n";
                    error = false;
                }

                if ($('#cmbGeneroApelante').val() == "" || $('#cmbGeneroApelante').val() == "0") {
                    mensaje += "*Seleccione Genero del Apelante\n";
                    error = false;
                }

                if ($('#cmbTipoApelante').val() == "" || $('#cmbTipoApelante').val() == '0') {
                    mensaje += "*Selecciona el tipo de Apelante\n";
                    error = false;
                }


            } else if ($("#cmbTipoPersonaApelante").val() == "2" || $("#cmbTipoPersonaApelante").val() == "3") {

                if ($('#txtnombreMoralApelante').val() == "" || $('#txtnombreMoralApelante').val() == "0") {
                    mensaje += "*Escribe el Nombre de la Persona Moral\n";
                    error = false;
                }

                if ($('#cmbTipoApelanteMoral').val() == "" || $('#cmbTipoApelanteMoral').val() == '0') {
                    mensaje += "*Selecciona el tipo de Apelante\n";
                    error = false;
                }


            } else if ($("#cmbTipoPersonaApelante").val() == "0") {
                mensaje += "*Seleccione el Tipo de Persona\n";
                error = false;
            }


            if (!error) {
                alert(mensaje);
            }
            return error;
        }

        modificarApelante = function (apelante) {
            $("#idApelanteSolicitud").val(apelante.idApelanteSolicitud);
            $("#tabla-apelantes > tr").removeClass('success');
            $("tr").filter('[data-apelante="' + apelante.idApelanteSolicitud + '"]').addClass('');

            $('#myTab3 a:first').tab('show');


            //cargar datos en el formulario
            $("#cmbTipoPersonaApelante").val(apelante.cveTipoPersona).change();
            if (apelante.cveTipoPersona == 1) {

                $("#txtNombreApelante").val(apelante.nombre);
                $("#txtPaternoApelante").val(apelante.paterno);
                $("#txtMaternoApelante").val(apelante.materno);
                $("#cmbGeneroApelante").val(apelante.cveGenero);
                $("#cmbTipoApelante").val(apelante.cveTipoApelante);

            } else if (apelante.cveTipoPersona == 2 || apelante.cveTipoPersona == 3) {

                $("#txtnombreMoralApelante").val(apelante.nombreMoral);
                $("#cmbTipoApelanteMoral").val(apelante.cveTipoApelante);

            }

            $("#guardar-general-apelante").text("Editar Datos del Apelante.");


            /*
             * mostrar etiqueta con el nombre del ofendido en cada una de las secciones
             */

            var nombre = "";

            if (apelante.cveTipoPersona == 1) {

                nombre = apelante.nombre + " " + apelante.paterno + " " + apelante.materno;

            } else if (apelante.cveTipoPersona == 2 || apelante.cveTipoPersona == 3) {

                nombre = apelante.nombreMoral;

            }

            //inicia consulta de la referencia de la carpeta
            var referencia = "";

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ofendidossolicitudes/OfendidossolicitudesFacade.Class.php",
                global: false,
                async: true,
                dataType: "json",
                data: {
                    accion: "consultarreferenciacarpeta",
                    idSolicitudAudiencia: $("#IdSolicitudAudiencia").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {

                    if (datos.data.cveTipoCarpeta != "") {
                        referencia += "  <br>Carpeta: " + datos.data.desCarpeta + " No: " + datos.data.numero + "/" + datos.data.anio;
                    } else if (datos.data.nuc != "" && datos.data.carpetaInv != "") {
                        referencia += "  <br>Carpeta de inv: " + datos.data.carpetaInv + " NUC: " + datos.data.nuc;
                    } else if (datos.data.nuc != "" && datos.data.carpetaInv == "") {
                        referencia += " <br> NUC: " + datos.data.nuc;
                    } else if (datos.data.nuc == "" && datos.data.carpetaInv != "") {
                        referencia += "  <br>Carpeta de inv: " + datos.data.carpetaInv;
                    }

                    $("#nombreDatosGeneralesApelante").html('<b>Capture los datos generales del apelante: ' + nombre + referencia + '</b>');

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de referencia de carpeta:\n\n" + otroobj);
                }
            });

            //termina consulta de la referencia de la carpeta

        }

        eliminarApelante = function (idApelante) {

            $("tr").filter('[data-apelante="' + idApelante + '"]').removeClass('success').addClass('danger');

            bootbox.dialog({
                message: "\u00bfSeguro quieres eliminar el Apelante seleccionado?",
                closeButton: false,
                buttons: {
                    danger: {
                        callback: function () {
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/apelantessolicitudes/ApelantessolicitudesFacade.Class.php",
                                data: {
                                    accion: 'baja',
                                    idApelanteSolicitud: idApelante,
                                    idSolicitudAudiencia: $("#IdSolicitudAudiencia").val()
                                },
                                dataType: "json",
                                beforeSend: function () {
                                },
                                success: function (data) {
                                    try {

                                        if (data.status == 'ok') {

                                            $("#alert-general-apelante").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                            cargarTablaApelantes(data.data.idSolicitudAudiencia);
                                            $("#idApelanteSolicitud").val('');
                                            $("#limpiar-general-apelante").trigger('click');

                                        } else {
                                            $("tr").filter('[data-apelante="' + idApelante + '"]').removeClass('danger');
                                            $("#alert-general-apelante").removeClass('alert-success').addClass('alert-warning').html('<strong>' + data.mensaje + '</strong>').show();
                                        }

                                        setTimeout(function () {
                                            $("#alert-general-apelante").hide();
                                        }, 3000);

                                    } catch (e) {
                                        alert("Error al eliminar el apelante seleccionado:" + e);
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    alert("Error al eliminar el apelante seleccionado:" + otroobj);
                                }
                            });

                        },
                        label: "Aceptar",
                        className: "btn-primary"
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {
                            $("tr").filter('[data-apelante="' + idApelante + '"]').removeClass('danger');
                        }
                    }
                }
            });


        }

        cargarTablaApelantes = function (idsolicitudaudiencia) {

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/apelantessolicitudes/ApelantessolicitudesFacade.Class.php",
                data: {accion: 'consultar', idSolicitudAudiencia: idsolicitudaudiencia, activo: 'S'},
                dataType: "json",
                beforeSend: function () {
                },
                success: function (data) {
                    try {
                        if (parseInt(data.totalCount) > 0) {
                            var html = "";
                            $.each(data.data, function (k, e) {
                                var success = '';//($("#idOfendidoSolicitud").val() == e.idOfendidoSolicitud) ? 'success' : '';
                                html += "<tr data-apelante='" + e.idApelanteSolicitud + "' class='trSeleccion " + success + "'>";
                                html += "<td style='cursor:pointer;' onclick='modificarApelante(" + JSON.stringify(e) + ")'>" + e.desTipoApelante + "</td>";
                                html += "<td style='cursor:pointer;' onclick='modificarApelante(" + JSON.stringify(e) + ")'>" + e.desTipoPersona + "</td>";
                                if (e.cveTipoPersona == 1) {
                                    html += "<td style='cursor:pointer;' onclick='modificarApelante(" + JSON.stringify(e) + ")'>" + e.nombre + " " + e.paterno + " " + e.materno + "</td>";
                                } else if (e.cveTipoPersona == 2 || e.cveTipoPersona == 3) {
                                    html += "<td style='cursor:pointer;' onclick='modificarApelante(" + JSON.stringify(e) + ")'>" + e.nombreMoral + "</td>";
                                }
                                html += "<td style='cursor:pointer;' onclick='modificarApelante(" + JSON.stringify(e) + ")'>" + e.desGenero + "</td>";
                                html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='eliminarApelante(" + e.idApelanteSolicitud + ");'></center></td>";

                                html += "</tr>";

                            });
                            $("#tabla-apelantes").html(html);
                            $("#tableResultadosApelante").show();

                        } else {
                            $("#idApelanteSolicitud").val('');
                            $("#tableResultadosApelante").hide();
                        }


                    } catch (e) {
                        alert("Error al consultar Ofendidos:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al consultar Ofendidos:" + otroobj);
                }
            });


        }


        $(function () {

            comboTipoPersonaApelante();
            comboGeneroApelante();
            comboTipoApelante();
            cargarTablaApelantes($("#IdSolicitudAudiencia").val());

            $("#cmbTipoPersonaApelante").val(1);


            $("#form-apelante-general").on('submit', function (e) {

                e.preventDefault();

                if (validateApelante()) {

                    var apelante = $(this).serialize() + '&idSolicitudAudiencia=' + $('#IdSolicitudAudiencia').val();

                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/apelantessolicitudes/ApelantessolicitudesFacade.Class.php",
                        data: apelante,
                        dataType: "json",
                        beforeSend: function () {
                        },
                        success: function (data) {
                            try {
                                if (data.status == "ok") {

                                    $("#alert-general-apelante").removeClass('alert-warning').addClass('alert-success').html('<strong>' + data.mensaje + '</strong>').show();

                                    //$("#form-ofendido-general")[0].reset();
                                    $("#idApelanteSolicitud").val(data.data.idApelanteSolicitud);
                                    $("#guardar-general-apelante").text("Editar Datos Generales del Apelante");
                                    cargarTablaApelantes(data.data.idSolicitudAudiencia);

                                } else {
                                    var mensajes = "";
                                    mensajes += "<ul>";
                                    $.each(data.mensaje, function (k, e) {
                                        mensajes += "<li><strong>" + e + "</strong></li>";
                                    });
                                    mensajes += "</ul>";

                                    $("#alert-general-apelante").removeClass('alert-success').addClass('alert-warning').html(mensajes).show();

                                }

                                setTimeout(function () {
                                    $("#alert-general-apelante").hide();
                                }, 3000);

                            } catch (e) {
                                alert("Error al guardar información general del Ofendido:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error al guardar información general del Ofendido:" + otroobj);
                        }
                    });

                }
            });
            //termina agregar ofendido

            //acciones de limpiar
            //limpiar formulario general del ofendo
            $("#limpiar-general-apelante").on('click', function (e) {
                e.preventDefault();
                $('#divPersonaMoralApelante').hide();
                $('#divPersonaFisicaApelante').show();
                $("#tabla-apelantes > tr").removeClass('success');
                $("#form-apelante-general #idApelanteSolicitud").val("");
                $("#form-apelante-general #activo").val("S");
                $("#form-apelante-general")[0].reset();


                $("#nombreDatosGeneralesApelante").html('');

                $("#guardar-general-apelante").text("Guardar Datos Generales del Apelante.");
            });


        });


    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>