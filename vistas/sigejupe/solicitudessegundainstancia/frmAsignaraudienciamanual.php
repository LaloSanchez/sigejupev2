<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idSolicitud = isset($_POST['idSolicitud']) ? $_POST['idSolicitud'] : '';
//print_r($_SESSION);
    ?>

    <style>
        .trGridAgrega {
            color: #ffffff;
            background-color: #427468;
        }

        .trSeleccion:hover {
            background-color: #dff0d8;
            cursor: pointer;
        }

        input[type=text] {
            text-transform: uppercase;
        }

        #accordion .panel-heading {
            background-color: #E9E7E7 !important;
        }

        #accordion .panel-heading:hover {
            background-color: #CDCDCD !important;
        }

        hr {
            margin-top: 0px !important;
        }
    </style>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Datos de la Audiencia.
            </h5>
        </div>
        <div class="panel-body">

            <div class="col-lg-12">

                <form id="guardar-solicitud-audiencia">

                    <input type="hidden" name="accion" value="asignarAudienciaManual"/>

                    <input type="hidden" name="idSolicitudAudiencia" id="IdSolicitudAudiencia"
                           value="<?php echo $idSolicitud; ?>"/>

                    <input type="hidden" name="cveEtapaProcesal" id="cveEtapaProcesal"/>

                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="fecha_audiencia">Fecha/Hora de Audiencia</label>
                                <input type="text" class="form-control" name="fecha_audiencia" id="fecha_audiencia"/>
                            </div>
                        </div>

                        <div class="col-lg-7 col-lg-offset-1">
                            <div class="form-group">
                                <label for="sala">Sala</label>
                                <select class="form-control" name="cveSala" id="cveSala">
                                    <option value="">Selecciona una sala</option>
                                </select>
                            </div>
                        </div>

                    </div>


                    <hr/>
                    <br/>

                    <div class="form-group">
                        <label for="tribunal_por_ejercicio">Tribunal por ejercicio de facultad de atracción</label>
                        <input type="checkbox" name="tribunal_por_ejercicio" id="tribunal_por_ejercicio"
                               onchange="armajueces()"/>
                    </div>


                    <div id="si_tribunal_por_ejercicio" style="display: none;">
                        <div class="form-group">
                            <label for="jueztribunal" id="jueztribunalLabel"></label>
                            <select name="jueztribunal" id="jueztribunal" class="form-control">
                                <option value="">Selecciona un Magistrado</option>
                            </select>
                        </div>
                    </div>

                    <div id="no_tribunal_por_ejercicio">
                        <div class="form-group">
                            <label for="juez1">Magistrado Presidente</label>
                            <select name="juez1" id="juez1" class="form-control">
                                <option value="">Selecciona un Magistrado</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="juez2">Magistrado Secretario</label>
                            <select name="juez2" id="juez2" class="form-control">
                                <option value="">Selecciona un Magistrado</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="juez3">Magistrado Vocal</label>
                            <select name="juez3" id="juez3" class="form-control">
                                <option value="">Selecciona un Magistrado</option>
                            </select>
                        </div>
                    </div>


                    <br/>

                    <div class="form-group">
                        <div class="alert alert-success" id="alert-success" style="display: none;">
                            <a href="#" class="close">&times;</a>
                            <strong id="text-alert-success"></strong>
                        </div>
                        <div class="alert alert-warning" id="alert-warning" style="display: none;">
                            <a href="#" class="close">&times;</a>
                            <strong id="text-alert-warning"></strong>
                        </div>
                    </div>


                    <br/>

                    <div class="form-group">
                        <button id="btnAsignarAudiencia" class="btn btn-primary">Asignar audiencia a la solicitud</button>
                        <a href="" class="btn btn-primary" id="btnAcuse" style="display: none;"> Descargar acuse </a>
                    </div>


                </form>


            </div>


        </div>
    </div>
    </div>

    <script>

        getEtapaProcesal = function () {


            var idSolicitudAudiencia = $("#IdSolicitudAudiencia").val();


            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: 'seleccionar',
                    idSolicitudAudiencia: idSolicitudAudiencia,
                    activo: 'S',
                    cantxPag: 1,
                    pag: 1
                },
                success: function (datos) {
                    try {
                        if (datos.status == 'Ok') {

                            if (datos.totalCount > 0) {
                                $("#cveEtapaProcesal").val(datos.data[0].cveEtapaProcesal);
                            }

                        } else {
                            alert('ocurrio un error al obtener la etapa procesal de la solicitud de audiencia');
                        }
                    } catch (e) {
                        alert("Error al cargar la etapa procesal de la solicitu de audiencia:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error al cargar la etapa procesal de la solicitu de audiencia:\n\n" + otroobj);
                }
            });

        };

        comboSalas = function () {

            $.ajax('../fachadas/sigejupe/atencionsalas/AtencionsalasFacade.Class.php', {
                type: 'POST',
                data: {accion: 'getatencionsalasbycveadscripcion'},
                dataType: 'json',
                success: function (datos) {
                    if (datos.estatus == 'ok') {
                        $("#cveSala").html('<option value="">Seleccione una sala</option>');
                        $.each(datos.data, function (i, v) {
                            $("#cveSala").append('<option value="' + v.iId_Sala + '">' + v.sNombre + '</option>');
                        });
                    } else if (datos.estatus == 'error') {
                        alert(datos.mensaje);
                    }
                }
            }).error(function (jqXHR, textStatus, errorThrown) {
                alert('Ocurrio un error al obtener las salas. ' + errorThrown);
            });


        };

        comboJuzgadores = function () {
            var idSolicitudAudiencia = $("#IdSolicitudAudiencia").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: 'getJuzgadoresByCveJuzgado',
                    activo: 'S',
                    idSolicitudAudiencia: idSolicitudAudiencia
                },
                success: function (datos) {
                    try {

                        if (datos.estatus == 'ok') {

                            $('#juez1').html('<option value="">Seleccione un juez</option>');
                            $('#juez2').html('<option value="">Seleccione un juez</option>');
                            $('#juez3').html('<option value="">Seleccione un juez</option>');
                            $('#jueztribunal').html('<option value="">Seleccione un juez</option>');

                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {

                                    $('#juez1').append('<option value="' + object.id + '">' + object.nombre + '</option>');
                                    $('#juez2').append('<option value="' + object.id + '">' + object.nombre + '</option>');
                                    $('#juez3').append('<option value="' + object.id + '">' + object.nombre + '</option>');
                                    $('#jueztribunal').append('<option value="' + object.id + '">' + object.nombre + '</option>');
                                });
                            }
                        } else if (datos.estatus == 'error') {
                            $("#text-alert-warning").text(datos.mensaje);
                            $("#alert-warning").show();
                        }


                    } catch (e) {
                        alert("Error al cargar los juzgadores:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de obtener los juzgadores:\n\n" + otroobj);
                }
            });
        };

        validaJuez = function () {

            var juez1 = $("#juez1").val();
            var juez2 = $("#juez2").val();
            var juez3 = $("#juez3").val();
            var sala = $("#cveSala").val();
            var fecha_audiencia = $("#fecha_audiencia").val();

            var error = false;
            var mensaje = '';
            var count = 0;

            if (fecha_audiencia == '') {
                mensaje += '*Tienes que seleccionar la fecha/hora de la audiencia\n';
            }

            if (sala == '') {
                mensaje += '*Tienes que seleccionar una sala\n';
                error = true;
            }

            if ($("#tribunal_por_ejercicio").is(":checked")) {

                if (juez1 != '') {
                    count++;
                }
                if (juez2 != '') {
                    count++;
                }
                if (juez3 != '') {
                    count++;
                }

                if (count == 0) {
                    mensaje += '*Tienes que seleccionar al menos 1 juez\n';
                    error = true;
                }

                if (count == 2) {
                    mensaje += '*Tienes que seleccionar 1 o 3 jueces\n';
                    error = true;
                }


            } else {

                if ($("#jueztribunal").val() == '') {
                    mensaje += '*Tienes que seleccionar el ' + $("#jueztribunalLabel").text() + '\n';
                    error = true;
                }

            }


            if (error) {
                alert(mensaje);
                return false;
            } else {

                if ($("#tribunal_por_ejercicio").is(":checked")) {
                    return true;
                }

                if (juez1 != '') {
                    if ((juez1 == juez2) || (juez1 == juez3)) {
                        alert('*verifica que el juez 1 no este repetido');
                        return false;
                    }
                }

                if (juez2 != '') {
                    if ((juez2 == juez1) || (juez2 == juez3)) {
                        alert('*verifica que el juez 2 no este repetido');
                        return false;
                    }
                }

                if (juez3 != '') {
                    if ((juez3 == juez1) || (juez3 == juez2)) {
                        alert('*verifica que el juez 3 no este repetido');
                        return false;
                    }
                }
                return true;
            }

        };


        armajueces = function () {

            var cveEtapaProcesal = $("#cveEtapaProcesal").val();
            var label = '';
            if ($("#tribunal_por_ejercicio").is(":checked")) {

                $("#jueztribunal").val('');

                $("#si_tribunal_por_ejercicio").hide('fast');
                $("#no_tribunal_por_ejercicio").show();

            } else {

                $("#juez1").val('');
                $("#juez2").val('');
                $("#juez3").val('');

                switch (cveEtapaProcesal) {
                    case '3':
                        label = 'Juez de Juicio';
                        break;
                    case '4':
                        label = 'Juez de Ejecución';
                        break;
                    case '6':
                        label = 'Magistrado';
                        break;
                    default:
                        label = 'Juez de Control';
                }

                $("#jueztribunalLabel").text(label);
                $("#no_tribunal_por_ejercicio").hide('fast');
                $("#si_tribunal_por_ejercicio").show();

            }

        };




        $(function () {

            if ($("#divDatosAudiencias").text().length > 0) {
                $("#btnAcuse").show();
            }

            // accion para descargar el acuse
            $("#btnAcuse").on('click', function (e) {
                e.preventDefault();
                var idSolicitud = $("#hddIdSolicitudAudiencia").val();
                if (idSolicitud == '') {
                    $("#text-alert-warning").text('No se selecciono correctamente la solicitud de audiencia, intenta nuevamente.');
                    $("#alert-success").hide();
                    $("#alert-warning").show().delay('4000').fadeOut();
                }
                window.open("../fachadas/sigejupe/resumensolicitudaudiencia/ResumensolicitudaudienciaFacade.php?idSolicitud=" + idSolicitud + "&accion=consultaAcuse&toca=S", 'Reporte', '"scrollbars=1,width=800, height=1000');
            });

            getEtapaProcesal();
            comboSalas();
            comboJuzgadores();
            armajueces();

            $("#fecha_audiencia").datetimepicker({
                locale: 'es',
                sideBySide: false,
                format: "DD/MM/YYYY HH:mm"
            });

            $(".close").on('click', function (e) {
                e.preventDefault();
                $(this).closest('.alert').hide();
            });


            $("#guardar-solicitud-audiencia").on('submit', function (e) {

                e.preventDefault();

                if (validaJuez()) {

                    var idSolicitudAudiencia = $("#IdSolicitudAudiencia").val();

                    if (idSolicitudAudiencia == '') {
                        alert('no esta seleccionada una solicitud de audiencias');
                        return;
                    }

                    var data = $(this).serialize();

                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: data + '&imputadosReclusos=' + $("#hddImputadosReclusos").val(),
                        success: function (datos) {
                            try {

                                if (datos.estatus == 'ok') {

                                    $("#fecha_audiencia").val('');
                                    $("#cveSala").val('');
                                    $("#juez1").val('');
                                    $("#juez2").val('');
                                    $("#juez3").val('');
                                    $("#jueztribunal").val('');

                                    $("#text-alert-success").text(datos.mensaje);
                                    $("#alert-warning").hide();
                                    $("#alert-success").show().delay('4000').fadeOut();

                                    tieneAudiencia();

                                    $("#btnAcuse").show();

                                } else if (datos.estatus == 'error') {
                                    $("#text-alert-warning").text(datos.mensaje);
                                    $("#alert-success").hide();
                                    $("#alert-warning").show();
                                }


                            } catch (e) {
                                alert("Error al asignar la audiencia a la solicitud de audiencia :" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de asignar la audiencia a la solicitud de audiencia :\n\n" + otroobj);
                        }
                    });

                }

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