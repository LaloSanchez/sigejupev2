<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idSolicitud = isset($_POST['idSolicitud']) ? $_POST['idSolicitud'] : '';
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
                Resumen de la Solicitud de Audiencia.
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <div class="tab-content tabs-flat">
                    <div class="tabbable tabs-left">

                        <div class="tab-content">

                            <input type="hidden" name="IdSolicitudAudiencia" id="IdSolicitudAudiencia"
                                   value="<?php echo $idSolicitud; ?>"/>


                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <!-- inicia solicitud audiencia-->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne" role="button"
                                         data-toggle="collapse" data-parent="#accordion"
                                         href="#collapseAudiencia" aria-expanded="true"
                                         aria-controls="collapseAudiencia" style="cursor: pointer;">
                                        <h4 class="panel-title">
                                            <a style="color: #666673;">
                                                Solicitud de la Audiencia
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseAudiencia" class="panel-collapse collapse in" role="tabpanel"
                                         aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="text-center">
                                                <h4>
                                                    <strong><p id="desCatAudiencia"></p></strong>
                                                </h4>
                                            </div>


                                            <h5><strong>Juzgado: </strong></h5>

                                            <p id="desJuzgado"></p>
                                            <hr/>

                                            <h5><strong>Tipo de Carpeta: </strong></h5>

                                            <p id="tipoCarpeta"></p>
                                            <hr/>

                                            <h5><strong>Número: </strong></h5>

                                            <p id="numero"></p>
                                            <hr/>

                                            <h5><strong>Carpeta de Investigación: </strong></h5>

                                            <p id="carpetaInvestigacion"></p>
                                            <hr/>

                                            <h5><strong>NUC (Número unico de causa): </strong></h5>

                                            <p id="nuc"></p>
                                            <hr/>

                                            <div class="text-center text-justify">
                                                <h5><strong>Observaciones: </strong></h5>

                                                <p id="observaciones"></p>
                                                <hr/>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!--termina solicitud audiencia-->

                                <!-- inicia imputados -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne" class="collapsed" role="button"
                                         data-toggle="collapse"
                                         data-parent="#accordion" href="#collapseImputados" aria-expanded="false"
                                         aria-controls="collapseImputados" style="cursor: pointer;">
                                        <h4 class="panel-title">
                                            <a style="color:#666673;">
                                                Imputados
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseImputados" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <table class="table table-hover table-bordered" id="tablaImputados">
                                                <thead>
                                                    <tr>
                                                        <th>Tipo Persona</th>
                                                        <th>Nombre</th>
                                                        <th>Genero</th>
                                                        <th>Domicilio(s)</th>

                                                    </tr>
                                                </thead>
                                                <tbody id="cuerpoTablaImputados">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- termina imputados -->

                                <!-- inicia ofendidos -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo" class="collapsed" role="button"
                                         data-toggle="collapse"
                                         data-parent="#accordion" href="#collapseOfendidos" aria-expanded="false"
                                         aria-controls="collapseOfendidos" style="cursor: pointer;">
                                        <h4 class="panel-title">
                                            <a style="color:#666673;">
                                                Sujetos Pasivos del Delito
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOfendidos" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <table class="table table-hover table-bordered" id="tablaOfendidos">
                                                <thead>
                                                    <tr>
                                                        <th>Tipo Persona</th>
                                                        <th>Nombre</th>
                                                        <th>Genero</th>
                                                        <th>Domicilio(s)</th>

                                                    </tr>
                                                </thead>
                                                <tbody id="cuerpoTablaOfendidos">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--termina ofendidos-->

                                <!-- inicia delitos-->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree" class="collapsed" role="button"
                                         data-toggle="collapse"
                                         data-parent="#accordion" href="#collapseDelitos" aria-expanded="false"
                                         aria-controls="collapseDelitos" style="cursor: pointer;">
                                        <h4 class="panel-title">
                                            <a style="color:#666673;">
                                                Delitos
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseDelitos" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <div id="divDelitos"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--termina delitos-->

                                <!-- inicia relación-->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree" class="collapsed" role="button"
                                         data-toggle="collapse"
                                         data-parent="#accordion" href="#collapseRelacion" aria-expanded="false"
                                         aria-controls="collapseRelacion" style="cursor: pointer;">
                                        <h4 class="panel-title">
                                            <a style="color:#666673;">
                                                Relaci&oacute;n
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseRelacion" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <table id="tablaRelacion" class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Imputado</th>
                                                        <th>Ofendido</th>
                                                        <th>Delito</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="cuerpoTablaRelacion">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--termina relacion-->


                                <!-- inicia violencia-->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree" class="collapsed" role="button"
                                         data-toggle="collapse"
                                         data-parent="#accordion" href="#collapseViolencia" aria-expanded="false"
                                         aria-controls="collapseViolencia" style="cursor: pointer;">
                                        <h4 class="panel-title">
                                            <a style="color:#666673;">
                                                Violencia de Género
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseViolencia" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="panel-body" id="body-violencia">

                                        </div>
                                    </div>
                                </div>
                                <!--termina violencia-->
                                <!-- inicia presos-->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTen" class="collapsed" role="button"
                                         data-toggle="collapse"
                                         data-parent="#accordion" href="#collapsePresos" aria-expanded="false"
                                         aria-controls="collapsePresos" style="cursor: pointer;">
                                        <h4 class="panel-title">
                                            <a style="color:#666673;">
                                                Imputados - Reclusos 
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsePresos" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingTen">
                                        <div class="panel-body" id="body-Recusos">
                                            <div class="col-lg-5" id="divImputadosSolicitudes"></div>
                                            <div class="col-lg-5"  id="divReclusos"></div>
                                            <div class="col-lg-12">
                                                <button  class="btn btn-primary" onclick="agregaimputados()">Agregar</button>
                                                <button  class="btn btn-primary" onclick="limpiarImputados()" >Limpiar</button>
                                            </div>
                                            <div  class="col-lg-10"  id="divResultadosImputados"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--termina presos-->

                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

    <script>
        TotalImputados = [];
        arraygralImputados = [];
        arraygralReclusos = [];
        comboImputados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadossolicitudes/ImputadossolicitudesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {action: "consultar",
                    activo: "S",
                    idSolicitudAudiencia: $("#IdSolicitudAudiencia").val()
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.status == "Ok") {
                        var x = 0;
                        for (var i = 0; i < datos.totalCount; i++) {
                            arraygralImputados[x] = datos.data[i];
                            x++;
                        }
                        var table = "";
                        table += '<table id="tblRelacion" border="1" align="center"  width="50%"  class="table table-bordered tblGridAgrega">';
                        table += "<tr><td colspan='3' align='center'><b> Imputados solicitudes</b></td></tr>";
                        table += '<tr class="trGridAgregaTabla">';
                        table += "<th>Seleccionar</th>";
                        table += "<th>Nombre</th>";
                        table += "<th>Alias</th>";
                        table += "</tr>";
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += "<tr>";
                            table += "<td><input type='radio' id='chbxRalacion' name='chbxRalacion' value='" + datos.data[i].idImputadoSolicitud + "'></td>";
                            if (datos.data[i].cveTipoPersona == "1") {
                                table += "<td>" + datos.data[i].nombre + " " + datos.data[i].paterno + " " + datos.data[i].materno + "</td>";
                            } else {
                                table += "<td>" + datos.data[i].nombreMoral + "</td>";
                            }
                            table += "<td>" + datos.data[i].alias + "</td>";
                            table += "</tr>";
                        }
                        table += "<table>";
                        $("#divImputadosSolicitudes").html(table);
                        $("#divImputadosSolicitudes").show("");

                    } else {
                        alert("No se encontraron imputados solicitudes");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipos personas imputados:\n\n" + otroobj);
                }
            });
        };

        comboImputadosReclusos = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reclusos/ReclusosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "reclusosSolicitudes",
                    activo: "S",
                    idSolicitudAudiencia: $("#IdSolicitudAudiencia").val()
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.status == "ok") {
                        var x = 0;
                        for (var i = 0; i < datos.data.length; i++) {
                            arraygralReclusos[x] = datos.data[i];
                            x++;
                        }
                        var table = "";
                        table += '<table id="tblRelacion" border="1" align="center"  width="50%"  class="table table-bordered tblGridAgrega">';
                        table += "<tr><td colspan='3' align='center'><b> Imputados reclusos</b></td></tr>";
                        table += '<tr class="trGridAgregaTabla">';
                        table += "<th>Seleccionar</th>";
                        table += "<th>Nombre</th>";
                        table += "<th>Alias</th>";
                        table += "</tr>";
                        for (var i = 0; i < datos.data.length; i++) {
                            table += "<tr>";
                            table += "<td><input type='radio' id='chbxRalacionRecluso' name='chbxRalacionRecluso' value='" + datos.data[i].idRecluso + "');'></td>";
                            table += "<td>" + datos.data[i].nombre + " " + datos.data[i].paterno + " " + datos.data[i].materno + "</td>";
                            table += "<td>" + datos.data[i].alias + "</td>";
                            table += "</tr>";
                        }
                        table += "<table>";
                        $("#divReclusos").html(table);
                        $("#divReclusos").show("");

                    } else {
                        $("#divReclusos").html("<center>No se encontraron reclusos</center>");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipos personas imputados:\n\n" + otroobj);
                }
            });
        };



        validateRelacion = function () {
            var mensaje = "";
            var error = true;
            //se verifica que no exista la relacion
            if (arraygralReclusos.length == 0) {
                mensaje += "*No se puede agregar, ya que no existen reclusos. Verifique \n";
                error = false;
            }
            if (arraygralImputados.length == 0) {
                mensaje += "*No se puede agregar, ya que no existen imputados. Verifique \n";
                error = false;
            }
            if ($("input[name='chbxRalacion']:radio").is(':checked')) {
            } else {
                mensaje += "*Seleccione un imputado \n";
                error = false;
            }
            if ($("input[name='chbxRalacionRecluso']:radio").is(':checked')) {
            } else {
                mensaje += "*Seleccione un recluso \n";
                error = false;
            }

            for (var i = 0; i < TotalImputados.length; i++) {
                if ((TotalImputados[i]["idImputadoSolicitud"] == $('input:radio[name=chbxRalacion]:checked').val()) && (TotalImputados[i]["idRecluso"] == $('input:radio[name=chbxRalacionRecluso]:checked').val())) {
                    mensaje += "*La relacion ya existe. Verifique \n";
                    error = false;
                }
            }
            for (var i = 0; i < TotalImputados.length; i++) {
                if ((TotalImputados[i]["idImputadoSolicitud"] == $('input:radio[name=chbxRalacion]:checked').val())) {
                    mensaje += "*el imputado ya se encuentra relacionado \n";
                    error = false;
                }
            }
            for (var i = 0; i < TotalImputados.length; i++) {
                if ((TotalImputados[i]["idRecluso"] == $('input:radio[name=chbxRalacionRecluso]:checked').val())) {
                    mensaje += "*el recluso ya se encuentra relacionado \n";
                    error = false;
                }
            }
            if (!error) {
                alert(mensaje);
            }
            return error;
        };


        agregaimputados = function () {
            console.log(arraygralImputados);
            var error = true;
            if (validateRelacion()) {
                var ListaImputRecluso = new Array();
                ///Generamos arreglos con el id de imputado y el id de recluso relacionado
                ListaImputRecluso = {
                    idImputadoSolicitud: $('input:radio[name=chbxRalacion]:checked').val(),
                    idRecluso: $('input:radio[name=chbxRalacionRecluso]:checked').val()
                };
                TotalImputados[TotalImputados.length] = ListaImputRecluso;
                ///Se conviernte el arreglo de los imputados en json
                var ImputadoJson = JSON.stringify(TotalImputados);
                ImputadoJson = decodeURIComponent(ImputadoJson);
                parent.$("#hddImputadosReclusos").val("");
                parent.$("#hddImputadosReclusos").val(ImputadoJson);
                ///Limpiamos los radios
                $('input:radio[name=chbxRalacion]').attr('checked', false);
                $('input:radio[name=chbxRalacionRecluso]').attr('checked', false);
                ////Creamos tabla de relacion
                var tabla = "";
                tabla += '<table id="tblRelacionImpuRecluso" border="1" align="center"  width="80%"  class="table table-bordered">';
                tabla += "<tr>";
                tabla += "<td><b>Nombre Imputado</b></td>";
                tabla += "<td><b>Alias</b></td>";
                tabla += "<td><b>Nombre recluso</b></td>";
                tabla += "<td><b>Alias</b></td>";
                tabla += "</tr>";

                //MOstramos los datos de las relaciones existentes
                for (var x = 0; x < TotalImputados.length; x++) {
                    tabla += "<tr>";
                    //Mostramos los datos del imputado seleccionado para relacion
                    for (var i = 0; i < arraygralImputados.length; i++) {
                        if (TotalImputados[x]["idImputadoSolicitud"] == arraygralImputados[i]["idImputadoSolicitud"]) {
                            if (arraygralImputados[i]["cveTipoPersona"] == "1") {
                                tabla += "<td>" + arraygralImputados[i]["nombre"] + " " + arraygralImputados[i]["paterno"] + " " + arraygralImputados[i]["materno"] + "</td>";
                            } else {
                                tabla += "<td>" + arraygralImputados[i]["nombreMoral"] + "</td>";
                            }
                            tabla += "<td>" + arraygralImputados[i]["alias"] + "</td>";
                        }
                    }

                    //Mostramos los datos del recluso seleccionado para relacion
                    for (var r = 0; r < arraygralReclusos.length; r++) {
                        if (TotalImputados[x]["idRecluso"] == arraygralReclusos[r]["idRecluso"]) {
                            tabla += "<td>" + arraygralReclusos[r]["nombre"] + " " + arraygralReclusos[r]["paterno"] + " " + arraygralReclusos[r]["materno"] + "</td>";
                            tabla += "<td>" + arraygralReclusos[r]["alias"] + "</td>";
                        }
                    }
                }
                tabla += "</tr>";
                tabla += "</table>";
                $("#divResultadosImputados").html(tabla);
                $("#divResultadosImputados").show("");

            } else {
                error = false;
            }
            return error;
        };


        limpiarImputados = function () {
            parent.$("#hddImputadosReclusos").val("");
            TotalImputados = [];
            $("#divResultadosImputados").html("");
            $('input:radio[name=chbxRalacion]').attr('checked', false);
            $('input:radio[name=chbxRalacionRecluso]').attr('checked', false);
        };

        $(function () {
            comboImputados();
            comboImputadosReclusos();

            var url_resumen_solicitud = "../fachadas/sigejupe/resumensolicitudaudiencia/ResumensolicitudaudienciaFacade.php";
            var id_solicitud_audiencia = $("#IdSolicitudAudiencia").val();
            $.ajax(url_resumen_solicitud, {
                type: 'POST',
                data: {accion: 'consultarResumen', idSolicitud: id_solicitud_audiencia},
                dataType: 'json',
                success: function (data) {

                    try {

                        $("#desCatAudiencia").text(data.datosAudiencia.desCatAudiencia);
                        $("#desJuzgado").text(data.datosAudiencia.desJuzgado);
                        $("#tipoCarpeta").text(data.datosAudiencia.desTipoCarpeta);
                        $("#numero").text(data.datosAudiencia.numero);
                        $("#carpetaInvestigacion").text(data.datosAudiencia.carpetaInvestigacion);
                        $("#nuc").text(data.datosAudiencia.nuc);
                        $("#observaciones").text(data.datosAudiencia.observaciones);

                        //imputados
                        var imputados = "";
                        $.each(data.imputados, function (i, v) {

                            var domicilio = "";

                            if (v.domicilio.length) {
                                $.each(v.domicilio, function (i, v) {
                                    domicilio += "<p>" + (i + 1) + ".- " + v + "</p>";
                                });
                            } else {
                                domicilio = 'N/A';
                            }
                            imputados += "<tr>";
                            imputados += "<td>" + v.tipoPersona + "</td>";
                            imputados += "<td>" + v.nombre + "</td>";
                            imputados += "<td>" + v.genero + "</td>";
                            imputados += "<td>" + domicilio + "</td>";
                            imputados += "</tr>";
                        });

                        $("#cuerpoTablaImputados").html(imputados);

                        //ofendidos
                        var ofendidos = "";
                        $.each(data.ofendidos, function (i, v) {

                            var domicilio = "";

                            if (v.domicilio.length) {
                                $.each(v.domicilio, function (i, v) {
                                    domicilio += "<p>" + (i + 1) + ".- " + v + "</p>";
                                });
                            } else {
                                domicilio = 'N/A';
                            }

                            ofendidos += "<tr>";
                            ofendidos += "<td>" + v.tipoPersona + "</td>";
                            ofendidos += "<td>" + v.nombre + "</td>";
                            ofendidos += "<td>" + v.genero + "</td>";
                            ofendidos += "<td>" + domicilio + "</td>";
                            ofendidos += "</tr>";
                        });
                        $("#cuerpoTablaOfendidos").html(ofendidos);


                        //delitos
                        var delitos = "";
                        delitos += '<table class="table table-hover table-bordered table-striped">';
                        delitos += '<thead>';
                        delitos += '<tr>';
                        delitos += '<th>No.</th>';
                        delitos += '<th>Delito</th>';
                        delitos += '</tr>';
                        delitos += '</thead>';
                        delitos += '<tbody>';

                        $.each(data.delitos, function (i, v) {
                            delitos += '<tr>';
                            delitos += '<td>' + (i + 1) + '</td>';
                            delitos += '<td>' + v + '</td>';
                            delitos += '</tr>';
                        });

                        delitos += '</tbody>';

                        delitos += '</table>';

                        $("#divDelitos").html(delitos);


                        //relacion
                        var relacion = '';
                        $.each(data.relacion, function (i, v) {
                            relacion += '<tr>';
                            relacion += '<td>' + v.imputado + '</td>';
                            relacion += '<td>' + v.ofendido + '</td>';
                            relacion += '<td>' + v.delito + '</td>';
                            relacion += '</tr>';
                        });

                        $("#cuerpoTablaRelacion").html(relacion);

                        $.each(data.violencia, function (i, v) {

                            var idImpOfeDelSolicitud = v.idImpOfeDelSolicitud;

                            var body_violencia_relacion = '<tr>' +
                                    '<td>' + v.imputado + '</td>' +
                                    '<td>' + v.ofendido + '</td>' +
                                    '<td>' + v.delito + '</td>' +
                                    '</tr>';


                            var body_violencia_de_genero = '';

                            var hay_violencia_genero = v.violenciaGenero.length;

                            $.each(v.violenciaGenero, function (i, v) {
                                body_violencia_de_genero += '<tr>';
                                body_violencia_de_genero += '<td>' + v.desEfecto + '</td>';

                                var detalle_efectos = '';

                                $.each(v.dataDetalle, function (i, v) {
                                    detalle_efectos += (i + 1) + '.- ' + v.desDetalleEfecto + '<br>';
                                });


                                var factor_social = '';

                                $.each(v.factorSocial, function (i, v) {
                                    factor_social += (i + 1) + '.- ' + v.desFactorCultural + '<br>';
                                });

                                var homicidio_doloso = '';

                                $.each(v.homicidioDoloso, function (i, v) {
                                    homicidio_doloso += (i + 1) + '.- ' + v.desHomicidioDoloso + '<br>';
                                });

                                body_violencia_de_genero += '<td>' + detalle_efectos + '</td>';
                                body_violencia_de_genero += '<td>' + factor_social + '</td>';
                                body_violencia_de_genero += '<td>' + homicidio_doloso + '</td>';
                                body_violencia_de_genero += '</tr>';
                            });


                            //trata personas

                            var body_violencia_relacion_trata_personas = '';

                            var hay_trata_personas = v.trataPersonas.length;
                            $.each(v.trataPersonas, function (i, v) {
                                body_violencia_relacion_trata_personas += '<tr>' +
                                        '<td>' + v.paisOrigen + '</td>' +
                                        '<td>' + v.estadoOrigen + '</td>' +
                                        '<td>' + v.municipioOrigen + '</td>' +
                                        '<td>' + v.paisDestino + '</td>' +
                                        '<td>' + v.estadoDestino + '</td>' +
                                        '<td>' + v.municipioDestino + '</td>' +
                                        '<td>' + v.tipoTrata + '</td>' +
                                        '<td>' + v.transportacion + '</td>' +
                                        '</tr>';
                            });


                            //efectos


                            var body_violencia_efectos = '';

                            var hay_efectos = v.efectos.length;

                            $.each(v.efectos, function (i, v) {
                                body_violencia_efectos += '<tr>' +
                                        '<td>' + v.desModalidad + '</td>' +
                                        '<td>' + v.desAmbito + '</td>';

                                var conductas = '';

                                $.each(v.conducta, function (i, v) {
                                    conductas += '<tr>' +
                                            '<td>' + v.desConducta + '</td>';
                                    var detalles_conducta = '';
                                    $.each(v.dataDetalle, function (i, v) {
                                        detalles_conducta += (i + 1) + '.- ' + v.desDetalleConducta + '<br>';
                                    });
                                    conductas += '<td>' + detalles_conducta + '</td>';
                                    conductas += '</tr>';
                                });

                                var table_conducta = '<table class="table">' +
                                        '<thead>' +
                                        '<tr>' +
                                        '<th>Conducta</th>' +
                                        '<th>Detalle</th>' +
                                        '</tr>' +
                                        '</thead>' +
                                        '<tbody>' +
                                        conductas +
                                        '</tbody>' +
                                        '</table>';

                                var testigos = '';

                                $.each(v.testigos, function (i, v) {
                                    testigos += (i + 1) + '.- ' + v.nombre + ' ' + v.paterno + ' ' + v.materno + ' <br>';
                                });

                                body_violencia_efectos += '<td>' + table_conducta + '</td>' +
                                        '<td>' + testigos + '</td>' +
                                        '</tr>';
                            });


                            var html_violencia = (parseInt(i) + parseInt(1)) + '.- ' + '<table id="tablaViolencia" class="table table-hover table-bordered">' +
                                    '<thead>' +
                                    '<tr>' +
                                    '<th>Imputado</th>' +
                                    '<th>Ofendido</th>' +
                                    '<th>Delito</th>' +
                                    '</tr>' +
                                    '</thead>' +
                                    '<tbody>' +
                                    body_violencia_relacion +
                                    '</tbody>' +
                                    '</table>' +
                                    '<div>' +
                                    '<ul id="myTab3" class="nav nav-tabs">';


                            var hay_link_activo = false;

                            if (hay_violencia_genero) {

                                html_violencia += '<li class="tab-sky ' + ((hay_link_activo) ? '' : 'active') + '">' +
                                        '<a href="#divViolenciaGenero-' + idImpOfeDelSolicitud + '" data-toggle="tab" aria-expanded="false">Violencia de género</a>' +
                                        '</li>';
                                hay_link_activo = true;
                            }


                            if (hay_trata_personas) {

                                html_violencia += '<li class="tab-sky ' + ((hay_link_activo) ? "" : "active") + '">' +
                                        '<a href="#divTrataPersonas-' + idImpOfeDelSolicitud + '" data-toggle="tab" aria-expanded="false"> Trata de personas</a>' +
                                        '</li>';
                                hay_link_activo = true;
                            }


                            if (hay_efectos) {

                                html_violencia += '<li class="tab-sky ' + ((hay_link_activo) ? "" : "active") + '">' +
                                        '<a id="efectossecualeslink" href="#divEfectosSecuales-' + idImpOfeDelSolicitud + '" data-toggle="tab" aria-expanded="false">Efectos </a>' +
                                        '</li>';

                            }


                            html_violencia += '</ul>' +
                                    '<div class="tab-content">';

                            var hay_tab_activa = false;
                            if (hay_violencia_genero) {
                                html_violencia += '<div class="tab-pane ' + ((hay_tab_activa) ? "" : "active") + '" id="divViolenciaGenero-' + idImpOfeDelSolicitud + '">' +
                                        '<table class="table table-striped table-hover table-bordered">' +
                                        '<thead>' +
                                        '<tr>' +
                                        '<th>Efecto</th>' +
                                        '<th>Detalle del Efecto</th>' +
                                        '<th>Factor Social</th>' +
                                        '<th>Homicidio Doloso</th>' +
                                        '</tr>' +
                                        '</thead>' +
                                        '<tbody>' +
                                        body_violencia_de_genero +
                                        '</tbody>' +
                                        '</table>' +
                                        '</div>';

                                hay_tab_activa = true;
                            }


                            if (hay_trata_personas) {

                                html_violencia += '<div class="tab-pane ' + ((hay_tab_activa) ? "" : "active") + '" id="divTrataPersonas-' + idImpOfeDelSolicitud + '">' +
                                        '<table class="table table-striped table-hover table-bordered">' +
                                        '<thead>' +
                                        '<tr>' +
                                        '<th>País Origen</th>' +
                                        '<th>Estado Origen</th>' +
                                        '<th>Municipio Origen</th>' +
                                        '<th>País Destino</th>' +
                                        '<th>Estado Destino</th>' +
                                        '<th>Municipio Destino</th>' +
                                        '<th>Tipo de Trata</th>' +
                                        '<th>Transportación</th>' +
                                        '</tr>' +
                                        '</thead>' +
                                        '<tbody>' +
                                        body_violencia_relacion_trata_personas +
                                        '</tbody>' +
                                        '</table>' +
                                        '</div>' +
                                        '<br>';

                                hay_tab_activa = true;
                            }


                            if (hay_efectos) {
                                html_violencia += '<div class="tab-pane ' + ((hay_tab_activa) ? "" : "active") + '" id="divEfectosSecuales-' + idImpOfeDelSolicitud + '">' +
                                        '<div>' +
                                        '<h5><strong>General</strong></h5>' +
                                        '</div>' +
                                        '<table class="table table-hover table-bordered">' +
                                        '<thead>' +
                                        '<tr>' +
                                        '<th>Modalidad</th>' +
                                        '<th>�?mbito</th>' +
                                        '<th>Conducta</th>' +
                                        '<th>Testigos</th>' +
                                        '</tr>' +
                                        '</thead>' +
                                        '<tbody>' +
                                        body_violencia_efectos +
                                        '</tbody>' +
                                        '</table>' +
                                        '</div>';
                            }


                            html_violencia += '</div>' +
                                    '<br>' +
                                    '<hr>';

                            $("#body-violencia").append(html_violencia);


                        });


                    } catch (e) {
                        alert("Error al solicitar resumen de solicitud de audiencia:" + e);
                    }


                }, error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de resumen de solicitud:\n\n" + otroobj);
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