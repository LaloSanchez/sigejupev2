<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <style >
        td {
            text-align: center;
            font-size: 12px;
        }
        th {
            text-align: center;
            font-size: 12px;
        }
        .overflow {
            overflow-x: scroll;
        }
        .ordena {
            display: inline;
        }
    </style>

        <input type="hidden" id="cveTipoJuzgador">
        <input type="hidden" id="cveUsuarioSistema" value="<?=$_SESSION['cveUsuarioSistema'] ?>">
        <input type="hidden" id="cveJuzgado" value="<?=$_SESSION['cveAdscripcion']?>">
        <input type="hidden" id="nombreJuzgador" value="<?=$_SESSION['nombre']?>">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title" id="h5titulo">                                                            
                        Agenda de Audiencias
                    </h5>
            </div>
            <div class="panel-body">
                <div class="row alert alert-warning alert-dismissable" style="display:none" id="divAlertWarning"></div>
                <div class="form-group">
                    <div class="col-md-2 col-xs-12" align="left">
                </div>
                <div class="col-md-2 col-xs-12" align="left">
                    <label class="col-xs-12">Fecha de consulta:</label>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="col-md-4 col-xs-12">
                        <input type="text" placeholder="Fecha de consulta" name="fechaConsultar" id="fechaConsultar" class="form-control" size="10" value="<?php echo date('d/m/Y'); ?>" onchange="updateInput(this.value)">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="button" value="Consultar" class="form-control btn-primary" id="btncns" onclick="consultaaudiencias()">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <input type="button" value="Imprimir" class="form-control btn-primary" id="btncns" onclick="PrintElem('#tablac')">
                    </div>
                </div>
            </div>
            <br>
            <script src="sigejupe/agendaaudiencias/table.js"></script>
            <div class="list-group overflow">
                <div class="col-sm-12 col-xs-12">
                    <div class="col-sm-12" id="tablac" style="display: none;overflow-x: scroll;">
                    <p>&nbsp;</p>
                        <table class="table-autosort:1 table table table-hover table-striped table-bordered overflow" id="tab">
                            <thead>
                                <tr>
                                    <th colspan="9">
                            <center><span id="fechaseleccionada" /></center>
                            </th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th class="table-sortable:default">
                            <center>Horario <img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center>
                            </th>
                            <th class=" ">
                            <center>Audiencia<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center>
                            </th>
                            <th class=" ">
                            <center>Causa<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center>
                            </th>
                            <th class=" ">
                            <center>Tipo de carpeta<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center>
                            </th>
                            <th class=" ">
                            <center>Sala<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center>
                            </th>
                            <th class=" ">
                            <center>Detenido<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center>
                            </th>
                            <th class=" ">
                            <center>Estado<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center>
                            </th>
                            <!-- <th class="table-sortable:default ">
                                <center>Rol <img src="img/sort_both.png" class="orenda" style="cursor:pointer" title="Click para ordenar por este criterio"></center>
                            </th> -->
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="alert alert-info alert-dismissable" id="info" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Informaci&oacute;n!</strong> Mensaje
                </div>
            </div>
        </div>
    </div>

    <script>
        consultaaudiencias = function() {
            $("#tablac").hide();
            var fec = $('#fechaConsultar').val();
            $('#fechaseleccionada').text('Agenda para el: ' + fec);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/audienciasjuzgador/AudienciasjuzgadorFacade.Class.php",
                async: true,
                data: {
                    fecha: fec,
                    activo: 'S',
                    idJuzgador: $('#cveUsuarioSistema').val(),
                    cveJuzgado: $('#cveJuzgado').val(),
                    accion: 'seleccionaragenda'
                },
                beforeSend: function(objeto) {},
                success: function(datos) {
                    var json;
                    var tabla = "";
                    try {
                        json = eval("(" + datos + ")");
                        if (json.total == 0) {
                            $("#info").html(json.msg).fadeIn('slow').delay(2000).fadeOut('slow');
                            return;
                        }
                        $("#tab td").remove();
                        for (var i = 0; i < json.total; i++) {
                            tabla += '<tr>';
                            tabla += '<td><center>' + (i + 1) + '</center></td>';
                            tabla += ' <td><center>' + json.data[i].horario + '</center></td>';
                            tabla += '<td><center>' + json.data[i].audiencia + '</center></td>';
                            tabla += '<td><center>' + json.data[i].causa + '</center></td>';
                            tabla += ' <td><center>' + json.data[i].carpeta + '</center></td>';
                            tabla += '<td><center>' + json.data[i].sala + '</center></td>';
                            tabla += ' <td><center>' + json.data[i].detenido + '</center></td>';
                            tabla += ' <td><center>' + json.data[i].descEstatus + '</center></td>';
                            // tabla += ' <td><center>' + json.data[i].rol + '</center></td>';
                            tabla += ' </tr>';
                        }
                        tabla += ' </table>';
                        $("#tablac").show();
                        $("#tab").append(tabla);
                    } catch (e) {
                        $("#info").html(json.msg).fadeIn('slow').delay(2000).fadeOut('slow');

                    }
                },
            });
        }

        getTipoJuez = function() {
            var cveTipoJuzgador = 0;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                async: true,
                dataType: "json",
                data: {
                    cveUsuario: <?= $_SESSION['cveUsuarioSistema'] ?>,
                    accion: 'consultar'
                },
                beforeSend: function(objeto) {},
                success: function(json) {
                    try {
                        var fecha = fechaBD();
                        var d = new Date(fecha);
                        var m = new Date(fecha);
                        m.setDate(m.getDate() + 1);
                        if (json.data[0].cveTipoJuzgador == 1) {
                            $("#fechaConsultar").datetimepicker({
                                sideBySide: false,
                                locale: "es",
                                format: "DD/MM/YYYY",
                                date: d,
                                maxDate: m
                            });

                        } else {
                            $("#fechaConsultar").datetimepicker({
                                sideBySide: false,
                                locale: "es",
                                format: "DD/MM/YYYY",
                                date: d

                            });
                        }
                    } catch (e) {
                        $("#info").html(json.msg).fadeIn('slow').delay(2000).fadeOut('slow');
                    }
                },
            });
        };
        fechaBD = function(fechaJSON) {
            var fecha = "";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/comparecencias/ComparecenciasFacade.Class.php",
                data: {
                    accion: "getFecha"
                },
                async: false,
                dataType: "json",
                global: false,
                beforeSend: function(objeto) {

                },
                success: function(datos) {
                    if (datos.totalCount > 0) {
                        fecha = datos.resultados[0].fecha.split(" ");

                        fecha = fecha[0].split("-");

                    }
                }
            });
            return fecha;
        };

        function PrintElem(elem){
            Popup($(elem).html());
        }

        function Popup(data) {
            var mywindow = window.open('', 'my div', 'height=750,width=950');
            mywindow.document.write('<html><head><title>Mi Agenda - ' + $('#nombreJuzgador').val() + '</title>');
            // mywindow.document.write('<link rel="stylesheet" href="css/sigejupe/agendaaudiencias/printtable.css" type="text/css" />');
            mywindow.document.write('<style>th, td {border-style: groove; font-size:11px;}</style>');
            mywindow.document.write('</head><body >');
            mywindow.document.write(data);
            mywindow.document.write('</body></html>');

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10

            mywindow.print();
            mywindow.close();

            return true;
        }

        $(function() {
            getTipoJuez();
        });
    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>