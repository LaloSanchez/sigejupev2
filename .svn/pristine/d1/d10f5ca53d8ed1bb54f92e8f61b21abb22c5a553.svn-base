<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idCarpetaJudicial = isset($_POST['idCarpetajudicial']) ? $_POST['idCarpetajudicial'] : '';
    ?>
    <style type="text/css">
        .requerido {
            color: darkred;
        }
        .tblGridAgrega{
            margin-top: 20px;
            font-family: arial;
            font-size: 14px;
            text-align: center;
        }
        .trGridAgrega{
            color: #ffffff;
            background-color: #881518;
        }
        .mayuscula{  
            text-transform: uppercase;  
        }  
        .trSeleccion:hover{
            background-color:#FFECED;
            cursor: pointer;
        } 
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Delitos(s) Carpetas Judiciales
            </h5>
        </div>
        <div class="panel-body bodyDelitos">
            <!--------------------AQUI COMIEZA EL CUERPO DEL FORMULARIO------------------>
            <input type="hidden" name="idCarpetaJudicial" id="idCarpetaJudicial" value="<?php echo $idCarpetaJudicial; ?>" />
            <div class="widget-body padding-5">
                <form role="form" id="historia_filtros">
                    <div class="row">
                        <div class="col-lg-10 col-sm-10 col-xs-10 col-md-offset-1" id="datos-juzgado">
                            <div class="col-lg-9">
                                <input type="hidden" name="numDelitos" id="numDelitos" readonly="readonly"/>
                                <div class="col-lg-12"><br>
                                    <div>
                                        <span
                                            class="input-group-addon no-padding-top no-padding-bottom padding-left-5 padding-right-5">
                                        </span>
                                        <!--<input type="hidden" style="width:100%;" id="filtro_delito" data-accion="delito" name="filtro_delito" class="selecto2" placeholder="Buscar Delito..."/>-->
                                        <!--<select name="cveDelito" id="cveDelito" class="form-control"></select>-->
                                        <input type="hidden" style="width:100%;" id="filtro_delito" data-accion="delito" name="filtro_delito" class="selecto2" placeholder="Buscar Delito..."/>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-3">
                                <button type="button" name="agregaDelito" id="agregaDelito" class="btn btn-primary">Agregar</button>
                                <button type="button" name="btnLimpiar" id="btnLimpiar" onclick="limpiar();" class="btn btn-primary">Limpiar</button>
                            </div>
                            <br/><br/><br />
                            <!--<table id="tablaDelitos" border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">
                                <tr class="trGridAgrega">
                                        <th>Delito</th>
                                        <th>Eliminar</th>
                                </tr>
                                <tbody>

                                </tbody>
                            </table>-->
                            <div style="text-align: center">
                                <label class="caption">LISTADO DE DELITOS</label>
                            </div>
                            <div id="divResultadosDelitos"></div>
                            <br/>
                            <!--<div style="display: none;" class="alert alert-success alert-dismissable mensaje"></div>-->
                            <div class="form-group" >
                                <div id="divAlertWarning" class="alert alert-warning alert-dismissable" style="display:none;">                    
                                    <strong>Advertencia!</strong> Mensaje
                                </div>
                                <div id="divAlertSucces" class="alert alert-success alert-dismissable" style="display:none;">

                                    <strong>Correcto!</strong> Mensaje
                                </div>
                                <div id="divAlertDager" class="alert alert-danger alert-dismissable" style="display:none;">

                                    <strong>Error!</strong> Mensaje
                                </div>
                                <div id="divAlertInfo" class="alert alert-info alert-dismissable" style="display:none;">

                                    <strong>Informaci&oacute;n!</strong> Mensaje
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


        cargaCrpetasJudiciales = function () {
            var idCarpetaJudicial = $("#idCarpetaJudicial").val();
            $.ajax({
                type: "POST",
                global: false,
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", idCarpetaJudicial: idCarpetaJudicial},
                beforeSend: function () {
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
        
        limpiar = function () {
            $(".selecto2").select2("val", '');
        };
        
        cargaDelitosCarpetas = function () {
            //$("#tablaDelitos tbody").empty();
            $('#divResultadosDelitos').html("");
            var idCarpetaJudicial = $("#idCarpetaJudicial").val();
            var tabla = "";
            var bandera = true;
            $.ajax({
                type: "POST",
                global: false,
                url: "../fachadas/sigejupe/delitoscarpetas/DelitoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", idCarpetaJudicial: idCarpetaJudicial, activo:'S'},
                beforeSend: function () {
                },
                success: function (datos) {
                    try {
                        if (datos.totalCount > 0) {
                            console.log(datos);
                            var tabla = "";
                            tabla += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                            tabla += '<tr class="trGridAgrega">';
                            tabla += '<th width="80%" >Delito</th>';
                            tabla += '<th width="20%">Eliminar</th></tr>';
                            $.each(datos.data, function (key, value) {
                                tabla += "<tr  class='trSeleccion'  id='ref_" + value.cveDelito + "'>";
                                tabla += "<td style='display:none;'><input type='text' class='txtDelito' name='txtDelito_" + value.cveDelito + "' id='txtDelito_" + value.cveDelito + "' value='" + value.cveDelito + "' /></td>";
                                tabla += "<td>" + value.desDelito + "</td>";
                                tabla += '<td><center><img class="eliminarDelito" onClick="eliminarDelito(' + value.idDelitoCarpeta + ')" src="img/eliminar.png" width="35px" style="cursor:pointer;"></center></td>';
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
            $("#tablaDelitos").append(tabla);
        };
        
        /*comboDelitos = function() {
            $.ajax({
                type: "POST",
                global: false,
                url: "../fachadas/sigejupe/delitos/DelitosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarLike", activo: 'S', obligaPermiso: "false"},
                beforeSend: function () {
                },
                success: function (datos) {
                    try {
                        $('#cveDelito').empty();
                        $('#cveDelito').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cveDelito').append('<option value="' + object.cveDelito + '">' + object.desDelito + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar delitos:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de delitos:\n\n" + otroobj);
                }
            });
        };*/
        ////////////////////////////////////////////////////////
        /////////////////INICIALIZA FUNCIONES///////////////////
        ////////////////////////////////////////////////////////
        function eliminarDelito(cve) {
            bootbox.dialog({
                message: "\u00bf Desea eliminar el delito seleccionado y sus registros relacionados (paso 5)?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $(".mensaje").empty();
                            var idCarpetaJudicial = $("#idCarpetaJudicial").val();
                            var idDelitoCarpeta = cve;
                            var mensaje = "";
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/delitoscarpetas/DelitoscarpetasFacade.Class.php",
                                async: false,
                                dataType: "json",
                                data: {accion: "eliminarDelito",
                                       idDelitoCarpeta: idDelitoCarpeta,
                                       idCarpetaJudicial: idCarpetaJudicial,  
                                       activo: 'N'},
                                beforeSend: function () {
                                },
                                success: function (datos) {
                                    mensaje = "";
                                    try {
                                        console.log(datos);
                                        if (datos.totalCount > 0) {
                                            $("#divAlertSucces").empty();
                                            mensaje += "<strong>" + datos.text + "</strong>";
                                            $("#divAlertSucces").append(mensaje);
                                            $("#divAlertSucces").show();
                                            setTimeout(function () {
                                                $("#divAlertSucces").hide();
                                            }, 4000);
                                        } else {
                                            $("#divAlertWarning").empty();
                                            mensaje += "<strong>" + datos.text + "</strong>";
                                            $("#divAlertWarning").append(mensaje);
                                            $("#divAlertWarning").show();
                                            setTimeout(function () {
                                                $("#divAlertWarning").hide();
                                            }, 4000);
                                        }
                                    } catch (e) {
                                        alert("Error al cargar datos:" + e);
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    alert("Error en la peticion de delitos:\n\n" + otroobj);
                                }
                            });
                            cargaDelitosCarpetas();
                            
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
                    url = "../fachadas/sigejupe/delitos/DelitosFacade.Class.php";
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
            
            $('#agregaDelito', 'body').click(function () {
                var select = $("#cveDelito").val();
                $("#divAlertWarning").empty();
                $("#divAlertSucces").empty();
                var idCarpetaJudicial = $("#idCarpetaJudicial").val();
                //var idDelito = $("#cveDelito").val();
                var idDelito = $(".selecto2").select2("val");
                var mensaje = "";
                var ndelitos = $("#numDelitos").val();
                var rowCount = $("#tablaDelitos >tbody >tr").find(".txtDelito").length;
    //            if (rowCount >= ndelitos) {
    //                mensaje += "<strong>SOLO PUEDES AGREGAR " + ndelitos + " DELITOS</strong>";
    //                $("#divAlertWarning").append(mensaje);
    //                $("#divAlertWarning").show();
    //                setTimeout(function () {
    //                    $("#divAlertWarning").hide();
    //                }, 4000);
    //                return false;
    //            }
                if(idDelito == ""){
                    mensaje += "<strong>DEBES ELEGIR UN DELITO</strong>";
                    $("#divAlertWarning").append(mensaje);
                    $("#divAlertWarning").show();
                    setTimeout(function () {
                        $("#divAlertWarning").hide();
                    }, 4000);
                    return false;
                }
                var tabla = "";
                var bandera = true;
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/delitoscarpetas/DelitoscarpetasFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "guardaDelitos", idCarpetaJudicial: idCarpetaJudicial, cveDelito: idDelito, activo: 'S'},
                    beforeSend: function () {
                    },
                    success: function (datos) {
                        mensaje = "";
                        try {
                            if (datos.status == "ok") {
                                mensaje += "<strong>" + datos.mensaje + "</strong>";
                                cargaDelitosCarpetas();
                                $("#divAlertSucces").append(mensaje);
                                $("#divAlertSucces").show();
                                setTimeout(function () {
                                    $("#divAlertSucces").hide();
                                }, 4000);
                                $(".selecto2").select2("val", '');
                            } else {
                                mensaje += "<strong>" + datos.mensaje + "</strong>";
                                //mensaje += "<strong>" + datos.text + "</strong>";
                                $("#divAlertWarning").append(mensaje);
                                $("#divAlertWarning").show();
                                setTimeout(function () {
                                    $("#divAlertWarning").hide();
                                }, 4000);
                            }
                        } catch (e) {
                            alert("Error al cargar audiencia:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de audiencias:\n\n" + otroobj);
                    }
                });
            });

            //comboDelitos();
            //cargaCrpetasJudiciales();
            cargaDelitosCarpetas();
        });

    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>