<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <!doctype html>
    <html>
        <head>            
            <meta name="description" content="Dashboard" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="shortcut icon" href="../../img/logoColorPJEM.png" type="image/x-icon">

            <title>SIGEJUPE v2.0</title>       

            <link type="text/css" href="../../css/bootstrap.min.css" rel="stylesheet" />        
            <link type="text/css" href="../../css/jquery.smartmenus.bootstrap.css" rel="stylesheet" />  
            <link type="text/css" href="../../css/bootstrap.min.css" rel="stylesheet" />        
            <link type="text/css" href="../../css/font-awesome.min.css" rel="stylesheet" />
            <link type="text/css" href="../../css/weather-icons.min.css" rel="stylesheet" />
            <link type="text/css" href="../../css/beyond.min.css" rel="stylesheet" type="text/css" />        
            <link type="text/css" href="../../css/typicons.min.css" rel="stylesheet" />
            <link type="text/css" href="../../css/animate.min.css" rel="stylesheet" />        
            <link type="text/css" href="../../css/dataTables.bootstrap.css" rel="stylesheet" />                
            <link type="text/css" href="../../css/loadercss.css" rel="stylesheet" />

            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">        

            <script type="text/javascript" src="../../js/jquery-1.10.2.min.js"></script>
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <script src="../../js/jquery-ui-1.10.4.custom.js"></script>        
            <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../../js/jquery.smartmenus.js"></script>
            <script type="text/javascript" src="../../js/jquery.smartmenus.bootstrap.js"></script>
            <script type="text/javascript" src="../../js/datatable/jquery.dataTables.js"></script>
            <script type="text/javascript" src="../../js/datatable/dataTables.tableTools.js"></script>
            <script type="text/javascript" src="../../js/datatable/dataTables.bootstrap.js"></script>
            <!--Jquery Select2-->
            <script src="../../js/select2/select2.js"></script>

            <style type="text/css">
                #divImgFotoUsr{
                    width: 45px;
                    height: 45px;
                    border-radius: 35px;
                    border: solid 1px;
                    background: #FF0000;
                }
            </style>

            <script type="text/javascript">
                $(function () {
                    getPerfiles();
                });
                getPerfiles = function () {
                    var url = "../../../archivos/<?php echo $_SESSION["cveUsuarioSistema"]; ?>.json";
                    $.getJSON(url, function (json) {
                        if (json !== "") {
                            var lenPerfiles = json.perfiles.length;
                            if (lenPerfiles > 0) {
                                var html = "";
                                for (var i = 0; i < lenPerfiles; i++) {
                                    json.perfiles[i].cvePerfil;
                                    json.perfiles[i].cveGrupo;
                                    json.perfiles[i].cveAdscripcion;
    //                                html += '<div class="card card-inverse">';
    //                                html += '<img class="card-img" data-src="img/logoPj.png:Card image" alt="Card image">';
    //                                html += '<div class="card-img-overlay">';
    //                                html += '<h4 class="card-title">Card title</h4>';
    //                                html += '<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>';
    //                                html += '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
    //                                html += '</div>';
    //                                html += '</div>';

                                    html += '<div class="card card-block" style="width: 20rem;">';
                                    html += '<h3 class="card-title">Special title treatment</h3>';
                                    html += '<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>';
                                    html += '</div>';
                                }
    //                            $("#areadetrabajo").html(html);
                            }
                        }
                    });
                };

                ToggleLoading = function (opc) {
                    if (opc === 1) {
                        $("#divHideForm").show("slide");
                    } else if (opc === 2) {
                        $("#divHideForm").hide("fade");
                    }
                };
            </script>

            <style>
                .control-label{                
                    color: #23473f;
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

                input { 
                    text-transform: uppercase;
                }

            </style>
        </head>
        <body>

            <!-- Static navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-header pull-left">
                        <a href="#" class="navbar-brand">
                            <small>
                                <img src="../../img/logoPj.png" alt="" id="logo_empresa"/>
                            </small>
                        </a>
                    </div>
                </div>

                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">
                    </ul>

                    <ul class="nav navbar-nav navbar-right">

                        <a href="#" class="navbar-brand">                        
                            <label style="color: #000"><?php echo $_SESSION["Nombre"]; ?></label>
                        </a>                    
                    </ul>
                </div>
            </div>      

            <div class="main-container container-fluid">
                <div class="page-container" id="areadetrabajo">                
                    <div id="divHideForm">
                        <div id="divMenssage">
                            Por favor espere
                        </div>
                        <div id="divImgloading"></div>
                    </div>
                    <!--<div class="page-content" id="areadetrabajo">-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">                                                            
                                DELITOS
                            </h5>
                        </div>
                        <div class="panel-body">
                            <!--------------------AQUI COMIEZA EL CUERPO DEL FORMULARIO------------------>
                            <input type="text" name="idSolicitud" id="idSolicitud" value="242" />
                                <div class="widget-body padding-5">
                                    <form role="form" id="historia_filtros">
                                        <div class="row">
                                            <div class="col-lg-10 col-sm-10 col-xs-10 col-md-offset-1" id="datos-juzgado">
                                                <div class="well with-header">
                                                    <div class="header" style="background-color: #00695C; color: white;">
                                                        DELITOS <strong id="nombre-delito"></strong>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-xs-4">
                                                        <input type="hidden" name="numDelitos" id="numDelitos" readonly="readonly"/>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span
                                                                    class="input-group-addon no-padding-top no-padding-bottom padding-left-5 padding-right-5">
                                                                </span>
                                                                <input type="hidden" style="width:100%;" id="filtro_delito" data-accion="delito" name="filtro_delito" class="selecto2" placeholder="Buscar Delito..."/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <table class="table table-hover" id="tablaDelitos">
                                                        <thead class="bordered-darkorange">
                                                            <tr>
                                                                <th>DELITO</th>
                                                                <th>ELIMINAR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                    <br/>

                                                    <div id="paginadorJuzgadores"></div>
                                                    <br/>

                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAltaJuzgador" name="guardarDelitos" id="guardarDelitos">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- <div class="flip-scroll"> -->

                                    <!-- </div> -->


                                </div>
                            <!--------------------AQUI TERMINA EL CUERPO DEL FORMULARIO------------------>


                            <script type="text/javascript">

                            $.each($('.selecto2'),function(index)    {
                                var seleccion = this;
                                var facade = $(this).data('accion');
                                var url = "";
                                var accion = "";
                                if(facade == "delito"){
                                    url = "../../../fachadas/sigejupe/delitos/DelitosFacade.Class.php"
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
                                            if(facade == "delito"){
                                                return {
                                                    desDelito: term,
                                                    accion:"consultarLike",
                                                    activo: "S"
                                                };
                                            }
                                        },
                                        results: function (data) {
                                            if(facade == "delito"){
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
                                    initSelection: function(element, callback) {
                                    },
                                    escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
                                });

                            });
                            // Cada vez que se seleccione un valor en un select
                            $('.selecto2').on('change', function () {
                                var selector = $(this).attr('id');
                                var valor = $(this).val();
                                if(selector == "filtro_delito"){
                                    var tabla = "";
                                    var data = $('#'+selector).select2('data');
                                    var idDelito = data.id;
                                    var descDelito = data.text;
                                    var bandera = true;
                                    $("#tablaDelitos tbody tr").each(function() {
                                        var findDelito = $(this).find(".txtDelito").val();
                                        if(idDelito == findDelito){
                                            alert("Este delito ya se encuentra seleccionado");
                                            bandera = false;
                                        }
                                    });
                                    if(bandera == true){
                                        tabla += "<tr id='ref_"+idDelito+"'>";
                                            tabla += "<td style='display:none;'><input type='text' class='txtDelito' name='txtDelito_"+idDelito+"' id='txtDelito_"+idDelito+"' value='"+idDelito+"' /></td>";
                                            tabla += "<td>"+descDelito+"</td>";
                                            tabla += '<td><center><img class="eliminarDelito" refDelito="'+idDelito+'" src="../../img/eliminar.png" width="35px" style="cursor:pointer;"></center></td>';
                                        tabla += "</tr>";
                                        $("#tablaDelitos").append(tabla);
                                    }
                                }

                            });
                            ////////////////////////////////////////////////////////
                            /////////////////FUNCIONES DE JAVASCRIPT////////////////
                            ////////////////////////////////////////////////////////
                            $( "body" ).delegate( ".eliminarDelito", "click", function() {
                                var refDelito = $(this).attr("refDelito");
                                var valor = $("#ref_"+refDelito).find(".txtDelito").addClass('delitoEliminado');
                                var valor = $("#ref_"+refDelito).find(".txtDelito").removeClass('txtDelito');
                                $("#ref_"+refDelito).hide();
                            });
                            $( "body" ).delegate( "#guardarDelitos", "click", function() {
                                var idSolicitud = $("#idSolicitud").val();
                                var ndelitos = $("#numDelitos").val();
                                var idsAgregados = [];
                                var idsEliminados = [];
                                var rowCount = $("#tablaDelitos >tbody >tr").find(".txtDelito").length;
                                if(rowCount < ndelitos){
                                    alert("El numero de delitos no puede ser menor a "+ndelitos);
                                    return false;
                                }
                                if(rowCount > ndelitos){
                                    alert("El numero de delitos no puede ser mayor a "+ndelitos);
                                    return false;
                                }
                                $("#tablaDelitos tbody tr").each(function() {
                                    if($(this).find(".txtDelito").val() != undefined){
                                        idsAgregados.push($(this).find(".txtDelito").val());
                                    }
                                });
                                $("#tablaDelitos tbody tr").each(function() {
                                    if($(this).find(".delitoEliminado").val() != undefined){
                                        idsEliminados.push($(this).find(".delitoEliminado").val());
                                    }
                                });
                                if(idsAgregados.length > 0){
                                    $.ajax({
                                        type: "POST",
                                        url: "../../../fachadas/sigejupe/delitossolicitudes/DelitosSolicitudesFacade.Class.php",
                                        async: false,
                                        dataType: "json",
                                        data: {accion: "guardaDelitos", idSolicitudAudiencia:idSolicitud, cveDelito:idsAgregados},
                                        beforeSend: function (objeto) {
                                        },
                                        success: function (datos) {
                                            try {
                                                if(datos.totalCount >0){
                                                    //alert("Se actualizaron los registros");
                                                }
                                            } catch (e) {
                                                alert("Error al cargar audiencia:" + e);
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de audiencias:\n\n" + otroobj);
                                        }
                                    });
                                }
                                if(idsEliminados.length > 0){
                                    $.ajax({
                                        type: "POST",
                                        url: "../../../fachadas/sigejupe/delitossolicitudes/DelitosSolicitudesFacade.Class.php",
                                        async: false,
                                        dataType: "json",
                                        data: {accion: "eliminaDelitos", idSolicitudAudiencia:idSolicitud, cveDelito:idsEliminados},
                                        beforeSend: function (objeto) {
                                        },
                                        success: function (datos) {
                                            try {
                                                if(datos.totalCount >0){
                                                    //alert("Se Eliminaron los registros");
                                                }
                                            } catch (e) {
                                                alert("Error al cargar audiencia:" + e);
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de audiencias:\n\n" + otroobj);
                                        }
                                    });
                                }
                                alert("Se actualizaron los registros");
                                cargaDelitosSolicitudes();
                            });
                            cargaSolicitudAudiencias = function () {
                                var idSolicitud = $("#idSolicitud").val();
                                $.ajax({
                                    type: "POST",
                                    url: "../../../fachadas/sigejupe/solicitudesaudiencias/SolicitudesAudienciasFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "consultar", idSolicitudAudiencia:idSolicitud},
                                    beforeSend: function (objeto) {
                                    },
                                    success: function (datos) {
                                        try {
                                            if (datos.totalCount > 0) {
                                                $.each(datos.data, function (key, val) {
                                                    $("#numDelitos").val(val.numDelitos);
                                                });
                                            }else{
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
                                    url: "../../../fachadas/sigejupe/delitossolicitudes/DelitosSolicitudesFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "consultarDelitos", idSolicitudAudiencia:idSolicitud},
                                    beforeSend: function (objeto) {
                                    },
                                    success: function (datos) {
                                        try {
                                            if (datos.totalCount > 0) {
                                                $.each(datos.data, function (key, value) {
                                                    tabla += "<tr id='ref_"+value.cveDelito+"'>";
                                                        tabla += "<td style='display:none;'><input type='text' class='txtDelito' name='txtDelito_"+value.cveDelito+"' id='txtDelito_"+value.cveDelito+"' value='"+value.cveDelito+"' /></td>";
                                                        tabla += "<td>"+value.desDelito+"</td>";
                                                        tabla += '<td><center><img class="eliminarDelito" refDelito="'+value.cveDelito+'" src="../../img/eliminar.png" width="35px" style="cursor:pointer;"></center></td>';
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
                            comboSN = function () {
                                $('.cmbSN').empty();
                                $('.cmbSN').append('<option value="0">Seleccione una opcion</option>');
                                $('.cmbSN').append('<option value="S">SI</option>');
                                $('.cmbSN').append('<option value="N">NO</option>');
                            };
                            ////////////////////////////////////////////////////////
                            /////////////////INICIALIZA FUNCIONES///////////////////
                            ////////////////////////////////////////////////////////
                            cargaSolicitudAudiencias();
                            cargaDelitosSolicitudes();
                            clean = function () {
                                $.clearInput = function () {
                                    $('#divFormulario').find('input[type=text], input[type=password], input[type=number], input[type=email], textarea').val('');
                                    $('#divFormulario').find('select').val('');
                                };
                            };

                            guardar = function () {
                                ToggleLoading(1);
                            };

                            </script>


                        </div>
                    </div>
                    <!--</div>-->                
                </div>
            </div>

        </body>
    </html>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>