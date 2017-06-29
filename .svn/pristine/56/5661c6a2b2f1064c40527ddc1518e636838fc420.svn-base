<?php

ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <style type="text/css">
        .alert{
            display: none;
        }

        #divHideForm{
            display: none;
            position: absolute;
            width: 100%;
            height: 100vh;
            opacity: .5;
            z-index: 99999;
            background: #427468;
        }

        #divMenssage{                
            width: 100%;
            height: 40px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            margin-top: 40vh;
            margin-bottom: auto;
            color: #284740;
            background: #FFFFFF;
            text-transform: uppercase;

        }

        #divImgloading{                  
            background: #FFFFFF url(img/cargando_1.gif) no-repeat;
            background-position: center;
            width: 100%;
            height: 70px;
            margin-left: auto;
            margin-right: auto;
        }

        .panel panel-default{
            background: #427468;
            color: #ebf3f1;
        }

        .panel-heading{
            background: #427468;
            color: #ebf3f1;
        }

        .panel-group .panel-heading{
            background: #427468;
            color: #ebf3f1;
        }
        .panel-default > .panel-heading{
            background: #427468;        
            color: #ebf3f1;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Salas de audiencias
            </h5>
        </div>

        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">                             

                <input type="hidden" class="form-control" id="hddCveSala">          

                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Sala:</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="txtSala">                    
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Edificio:</label>
                    <div class="col-xs-9">
                        <select class="form-control"  id="cboEdificio" >
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Sorteo:</label>
                    <div class="col-xs-9">
                        <select class="form-control" id="txtSorteo">
                            <option value="">Selecciona</option>
                            <option value="S">Si</option>
                            <option value="N">No</option>
                        </select>
                    </div>                                
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Comodin:</label>
                    <div class="col-xs-9">
                        <select class="form-control" id="txtComodin">
                            <option value="">Selecciona</option>
                            <option value="S">Si</option>
                            <option value="N">No</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Activo:</label>
                    <div class="col-xs-9">
                        <select class="form-control" id="txtActivo">
                            <option value="">Selecciona</option>
                            <option value="S">Si</option>
                            <option value="N">No</option>
                        </select>
                    </div>                                
                </div>        

                <div class="form-group" >
                    <div id="divAlertWarningSolicitud" class="alert alert-warning alert-dismissable" style="display:none;">                    
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divAlertSuccesSolicitud" class="alert alert-success alert-dismissable" style="display:none;">

                        <strong>Correcto!</strong> Mensaje
                    </div>
                    <div id="divAlertDagerSolicitud" class="alert alert-danger alert-dismissable" style="display:none;">

                        <strong>Error!</strong> Mensaje
                    </div>
                    <div id="divAlertInfoSolicitud" class="alert alert-info alert-dismissable" style="display:none;">

                        <strong>Informaci&oacute;n!</strong> Mensaje
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <button id="insertar" type="button" class="btn btn-primary" value="insertar"onclick="insertSalas();">Guardar</button>
                        <button id="modificar" style="display:none;" type="button" class="btn btn-primary" value="modificar"onclick="modificarSala();">Actualizar</button>
                        <input id="consultar" type="button" class='btn btn-primary'  value="Consultar" onclick="consultarSala();">
                        <input id="limpiar" type="button" class='btn btn-primary'  value="limpiar" onclick="limpiar();">
                    </div>
                </div>

                <div id="divConsultaGrid" style="display: none" class="col-md-12">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="form-group col-md-3">
                            <label class="control-label" id="totalReg"></label>
                        </div>

                        <div id="divPaginador" class="form-group col-md-3" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarSala(0);">
                                <option value="1"></option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarSala(1);">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    <div id="divResultados" class="col-md-12"></div>
                </div>

            </div>              

            <div id="Resultados">   
            </div>

        </div>        
    </div>




    <script type="text/javascript">
        comboEdificios = function () {
            $.ajax({
                type: "POST",
                url: "../webservice/cliente/edificios/EdificiosCliente.php",
                data: {action: "getEdificios", region: ""},
                async: false,
                dataType: "json",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cboEdificio').empty();
                        $('#cboEdificio').append('<option value="">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cboEdificio').append('<option value="' + object.CveEdificio + '">' + object.NomEdificio + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar edificios:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de edificios:\n\n" + otroobj);
                }
            });
        };

        function insertSalas() {
            var error = false;
            if (!validateStep1()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/salas/SalasFacade.Class.php",
                    data: {accion: "guardar",
                        desSala: $('#txtSala').val().toUpperCase(),
                        cveEdificio: $('#cboEdificio').val(),
                        sorteo: $('#txtSorteo').val(),
                        comodin: $('#txtComodin').val(),
                        activo: $('#txtActivo').val()},
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        var datos1 = eval("(" + datos + ")");
                        $('#hddCveSala').val(datos1.data[0].cveSala);
                        if (datos1.totalCount > 0) {
                            alert("Registro Exitoso");
                            editar(datos1.data[0].cveSala);
                            consultarSala();
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                    }
                });
            } else {
                error = false;
            }
            return error;
        }

        getPaginas = function (pag, cantReg) {
            parent.$('#hddIdSolicitudAudiencia').val("");
            $('#hddIdSolicitudAudiencia').val("");
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/salas/SalasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "getPaginas",
                    cveSala: $('#hddCveSala').val(),
                    desSala: $('#txtSala').val().toUpperCase(),
                    cveEdificio: $('#cboEdificio').val(),
                    sorteo: $('#txtSorteo').val(),
                    comodin: $('#txtComodin').val(),
                    activo: "S",
                    cantxPag: cantReg},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = datos;
                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        $("#cmbPaginacion").val(pag);
                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();
                        $("#divAlertDager").html("Error EL NUMERO DE " + tipoNumero + " NO EXISTE");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };

        function consultarSala(pagAux) {
            var html = "";
            var pag = 0;
            if (pagAux == 0) {
                pag = $("#cmbPaginacion").val();
            } else {
                pag = 1;
            }
            var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/salas/SalasFacade.Class.php",
                data: {accion: "selectSalasGeneral",
                    cveSala: $('#hddCveSala').val(),
                    desSala: $('#txtSala').val().toUpperCase(),
                    cveEdificio: $('#cboEdificio').val(),
                    sorteo: $('#txtSorteo').val(),
                    comodin: $('#txtComodin').val(),
                    activo: "S",
                    pag: pag,
                    cantxPag: cantReg},
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                },
                success: function (datos1) {
                    if (datos1.totalCount > 0) {
                        html = "<table border='0'  width='100%' class='table table-bordered table-hover table-striped' id='searchable'>";
                        html += " <thead>";
                        html += " <tr><th>No</th>";
                        html += " <th>Sala</th>";
                        html += " <th>Edificio</th>";
                        html += " <th>Sorteo</th>";
                        html += " <th>Comodin</th>";
                        html += " <th>Activo</th>";
                        html += " <th>Eliminar</th>";
                        html += "</tr> ";
                        html += "</thead> ";
                        for (var i = 0; i < datos1.totalCount; i++) {
                            var ii = i + 1;
                            html += "<tbody> ";
                            html += "<tr> ";
                            html += "<td class='tdReporte' width='10' onclick='editar(" + datos1.data[i].cveSala + ")'> " + (i + 1) + "</td>";
                            html += "<td class='tdReporte' width='10' onclick='editar(" + datos1.data[i].cveSala + ")'> " + datos1.data[i].desSala + "</td>";
                            html += "<td class='tdReporte' width='15' onclick='editar(" + datos1.data[i].cveSala + ")'> " + datos1.data[i].edificio + "</td>";
                            html += "<td class='tdReporte' width='15' onclick='editar(" + datos1.data[i].cveSala + ")'> " + datos1.data[i].sorteo + "</td>";
                            html += "<td class='tdReporte' width='15' onclick='editar(" + datos1.data[i].cveSala + ")'> " + datos1.data[i].comodin + "</td>";
                            html += "<td class='tdReporte' width='15' onclick='editar(" + datos1.data[i].cveSala + ")'> " + datos1.data[i].activo + "</td>";
                            html += "<td class='tdReporte' width='15'> <img src='img/eliminar.png' style='width: 25px; cursor: pointer;'onclick='eliminar(" + datos1.data[i].cveSala + ")';></td>";
                            html += "</tr> ";
                            html += "</tbody> ";
                        }
                        html += "</table>";
                        $("#divConsultaGrid").show("");
                        $('#divResultados').html(html);
                        $("#tblResultados").DataTable({paging: false});
                        getPaginas(datos1.pagina, cantReg);
                    } else {
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#Rsultados").html("");
                    $("#divAlertSuccesSolicitud").html("");
                    $("#divAlertSuccesSolicitud").html("No se encontraron resultados");
                    $("#divAlertSuccesSolicitud").show("");
                    setTimeAlert("divAlertSuccesSolicitud");
                }

            });
        }

        function editar(id) {
            $('#hddCveSala').val(id);
            if (id != "") {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/salas/SalasFacade.Class.php",
                    data: {accion: "consultar",
                        cveSala: $('#hddCveSala').val(),
                        activo: "S"},
                    async: true, dataType: "json",
                    beforeSend: function (objeto) {
                    },
                    success: function (json) {
                        $("#txtSala").val(json.data[0].desSala);
                        $("#cboEdificio").val(json.data[0].cveEdificio);
                        $("#txtSorteo").val(json.data[0].sorteo);
                        $("#txtComodin").val(json.data[0].comodin);
                        $("#txtActivo").val(json.data[0].activo);
                        $('#modificar').show("");
                        $('#Resultados').hide("");
                        $('#insertar').hide("");


                        $('#divConsultaGrid').hide("");
                    },
                    error: function (objeto, quepaso, otroobj) {
                    }
                });
            }
        }

        function modificarSala(id) {
            var mensaje = confirm("Esta Seguro De Modificar?");
            if (mensaje) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/salas/SalasFacade.Class.php",
                    data: {accion: "update",
                        cveSala: $('#hddCveSala').val(),
                        desSala: $('#txtSala').val().toUpperCase(),
                        cveEdificio: $('#cboEdificio').val(),
                        sorteo: $('#txtSorteo').val(),
                        comodin: $('#txtComodin').val(),
                        activo: $('#txtActivo').val()
                    },
                    async: false,
                    dataType: "json",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.status == 'Ok') {
                            alert("El registro se modifico de forma correcta");
                            editar(datos.data[0].cveSala);
                            consultarSala();
                        } else {
                            alert("Ocurrio un error al modificar el registro");
                        }
                        //                       
                    },
                    error: function (objeto, quepaso, otroobj) {
                    }
                });
            }
        }

        function eliminar(id) {
            $('#hddCveSala').val(id);
            var mensaje = confirm("Esta Seguro De Eliminar?");
            if (mensaje) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/salas/SalasFacade.Class.php",
                    data: {
                        accion: "baja",
                        cveSala: $('#hddCveSala').val(),
                        activo: "S"
                    },
                    async: true, dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        alert("El registro se elimino de forma correcta");
                        limpiar();
                    },
                    error: function (objeto, quepaso, otroobj) {
                    }

                });
            } else {
                alert("Registro No Eliminado");
            }
        }

        function limpiar() {

            $("#txtSala").val("");
            $("#cboEdificio").val("");
            $("#txtSorteo").val("");
            $("#txtComodin").val("");
            $("#txtActivo").val("");
            $('#Resultados').hide("");
            $('#hddCveSala').val("");
            $('#insertar').show("");
            $('#modificar').hide("");
            $('#divConsultaGrid').hide("");
            $('#divResultados').html("");
        }

        validateStep1 = function () {
            var mensaje = "";
            var error = false;
            if ($('#txtSala').val() == "" || $('#txtSala').val() == "0") {
                mensaje += "*Ingrese nombre de la sala\n";
                error = true;
            }
            if ($('#cboEdificio').val() == "" || $('#cboEdificio').val() == "0") {
                mensaje += "*Seleccione un edificio \n";
                error = true;
            }
            if ($('#txtSorteo').val() == "" || $('#txtSorteo').val() == "0") {
                mensaje += "*Seleccione el tipo de sorteo \n";
                error = true;
            }
            if ($('#txtComodin').val() == "" || $('#txtComodin').val() == "0") {
                mensaje += "*Seleccione el tipo de comodin \n";
                error = true;
            }
            if ($('#txtActivo').val() == "" || $('#txtActivo').val() == "0") {
                mensaje += "*Seleccione el activo \n";
                error = true;
            }
            if (error) {
                alert(mensaje);
            }

            return error;
        };

        $(document).ready(function () {
            comboEdificios();

        });

    </script>
    <?php

} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>
