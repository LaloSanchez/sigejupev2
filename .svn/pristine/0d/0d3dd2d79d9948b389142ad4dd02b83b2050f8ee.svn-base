<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    	$id = addslashes($_GET["id"]);
    ?>
    <!doctype html>
    <html>
        <head>            
            <meta name="description" content="Dashboard" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
            <style>
                body {
                    /* el tamaño por defecto es 14px */
                    font-size: 156px;
                }
                .border{
                    -moz-box-shadow: 0 0 2px black;
                    -webkit-box-shadow: 0 0 2px black;
                    box-shadow: 0 0 2px black;
                }
            </style>


            <script type="text/javascript">
                audiencia = function () {
                    var idAudiencia = <?php echo $id; ?>;
                    var tablaA = "";
                    var tablaS = "";
                    var tablaI = "";
                    var tablaO = "";
                    var tablaD = "";
                    $.ajax({
                        type: "POST",
                        url: "../../../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultarReporte", idAudiencia: idAudiencia, activo: "S"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                console.log(datos);
                            	$.each(datos, function (key, val) {
                                    $("#idSolicitud").val(val.idSolicitudAudiencia);
                                    tablaA += "<tr>";
                                        tablaA += "<td>Causa:</td>";
                                        var numero = (val.numero ==  null) ? "" : val.numero;
                                        var anio = (val.anio ==  null) ? "" : val.anio;
                                        tablaA += "<td>"+numero+"/"+anio+"</td>";
                                        tablaA += "<td>Num Auxiliar:</td>";
                                        tablaA += "<td>"+numero+"/"+anio+"</td>";
                                    tablaA += "</tr>";
                                    tablaA += "<tr>";
                                        tablaA += "<td colspan='1'>Audiencia:</td>";
                                        tablaA += "<td colspan='3'>"+val.cataudiencias.descripcion+"</td>";
                                    tablaA += "</tr>";
                                    tablaA += "<tr>";
                                        tablaA += "<td>Fecha Audiencia:</td>";
                                        tablaA += "<td>"+val.fechaInicial+"</td>";
                                        tablaA += "<td>Fecha Final:</td>";
                                        tablaA += "<td>"+val.fechaFinal+"</td>";
                                    tablaA += "</tr>";
                                    tablaA += "<tr>";
                                        tablaA += "<td>Sala:</td>";
                                        tablaA += "<td>"+val.salas.descripcion+"</td>";
                                        tablaA += "<td>Carpeta Inv:</td>";
                                        tablaA += "<td>"+val.solicitudes.carpetaInv+"</td>";
                                    tablaA += "</tr>";
                                    tablaA += "<tr>";
                                        tablaA += "<td>Naturaleza:</td>";
                                        tablaA += "<td>"+val.naturalezas.desNaturaleza+"</td>";
                                        tablaA += "<td>¿Detenido?</td>";
                                        var detenidoAudiencia = (val.detenido ==  "S") ? "SI" : "NO";
                                        tablaA += "<td>"+detenidoAudiencia+"</td>";
                                    tablaA += "</tr>";
                                    tablaA += "<tr>";
                                        tablaA += "<td>Usuario que Solicito:</td>";
                                        tablaA += "<td>"+val.solicitante+"</td>";
                                        tablaA += "<td>Status</td>";
                                        tablaA += "<td>"+val.estatusAudiencia.descripcion+"</td>";
                                    tablaA += "</tr>";
                                    tablaA += "<tr>";
                                        tablaA += "<td colspan='1'>Notas:</td>";
                                        var observaciones = (val.solicitudes.observaciones ==  null) ? "" : val.solicitudes.observaciones;
                                        tablaA += "<td colspan='3'>"+observaciones+"</td>";
                                    tablaA += "</tr>";
                                    ///////////////////////////////////////////////////////////////////////
                                    tablaS += "<tr>";
                                        tablaS += "<td>Status:</td>";
                                        tablaS += "<td>"+val.estatussolicitudes.desEstatusSolicitud+"</td>";
                                        tablaS += "<td>Detenido:</td>";
                                        var detenidoSolicitud = (val.detenido ==  "S") ? "SI" : "NO";
                                        tablaS += "<td>"+detenidoSolicitud+"</td>";
                                    tablaS += "</tr>";
                                    tablaS += "<tr>";
                                        tablaS += "<td>Tipo de Audiencia:</td>";
                                        tablaS += "<td>"+val.tiposaudienciassolicitudes.desTipoAudiencia+"</td>";
                                        tablaS += "<td>Naturaleza:</td>";
                                        tablaS += "<td>"+val.naturalezassolicitudes.desNaturaleza+"</td>";
                                    tablaS += "</tr>";
                                    tablaS += "<tr>";
                                        tablaS += "<td>Fase del Proceso:</td>";
                                        tablaS += "<td>"+val.etapaProcesal.desc+"</td>";
                                        tablaS += "<td>Usuario que solicito:</td>";
                                        tablaS += "<td>"+val.solicitante+"</td>";
                                    tablaS += "</tr>";
                                    var fecha = val.solicitudes.fechaSolicitud.split(" ");
                                    var fechaFormato = fecha[0].split("-");
                                    var hora = fecha[1].split(":");
                                    tablaS += "<tr>";
                                        tablaS += "<td>Fecha Solicitud:</td>";
                                        tablaS += "<td>"+fechaFormato[2]+"/"+fechaFormato[1]+"/"+fechaFormato[0]+"</td>";
                                        tablaS += "<td>Hora Solicitud:</td>";
                                        tablaS += "<td>"+hora[0]+":"+hora[1]+"</td>";
                                    tablaS += "</tr>";
                                    //////////////////////////////////////////////////////////////////////////////////
                                    $.each(val.imputadossolicitudes, function (keyImputados, valImputados) {
                                        tablaI += "<tr>";
                                            tablaI += "<td>Imputado: "+valImputados.nombre+"</td>";
                                            tablaI += "<td>";
                                                $.each(valImputados.domicilios, function (keyImputadosDomicilios, valImputadosDomicilios) {
                                                    tablaI += "Dirección: "+valImputadosDomicilios.direccion+" Colonia: "+valImputadosDomicilios.colonia+" Num Ext:"+valImputadosDomicilios.numExterior+" Num Int: "+valImputadosDomicilios.numInterior+" CP: "+valImputadosDomicilios.cp+"</br>";
                                                });
                                            tablaI += "</td>";
                                        tablaI += "</tr>";
                                    });
                                    //////////////////////////////////////////////////////////////////////////////////
                                    $.each(val.ofendidossolicitudes, function (keyOfendidos, valOfendidos) {
                                        tablaO += "<tr>";
                                            tablaO += "<td>Ofendido: "+valOfendidos.nombre+"</td>";
                                            tablaO += "<td>";
                                                $.each(valOfendidos.domicilios, function (keyOfendidosDomicilios, valOfendidosDomicilios) {
                                                    tablaO += "Dirección: "+valOfendidosDomicilios.direccion+" Colonia: "+valOfendidosDomicilios.colonia+" Num Ext:"+valOfendidosDomicilios.numExterior+" Num Int: "+valOfendidosDomicilios.numInterior+" CP: "+valOfendidosDomicilios.cp+"</br>";
                                                });
                                            tablaO += "</td>";
                                        tablaO += "</tr>";
                                    });
                                    //////////////////////////////////////////////////////////////////////////////////
                                    $.each(val.delitossolicitudes, function (keyDelitos, valDelitos) {
                                        tablaD += "<tr>";
                                            tablaD += "<td>Delito: </td>";
                                            tablaD += "<td>";
                                                $.each(valDelitos.delitos, function (keyDelitosDomicilios, valDelitosDomicilios) {
                                                    tablaD += valDelitosDomicilios.desDelito;
                                                });
                                            tablaD += "</td>";
                                        tablaD += "</tr>";
                                    });
                            	});
                            } catch (e) {
                                alert("Error al cargar Datos de la Audiencia:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion Datos de la Audiencia:\n\n" + otroobj);
                        }
                    });
                    $("#tablaAudiencia tbody").append(tablaA);
                    $("#tablaSolicitud tbody").append(tablaS);
                    $("#tablaImputados tbody").append(tablaI);
                    $("#tablaOfendidos tbody").append(tablaO);
                    $("#tablaDelitos tbody").append(tablaD);
                };
    			imprimirER = function () {
    		        w = window.open("", 'Print_Page', 'scrollbars=yes');
    		        w.document.write($('#reporte').html());
    		        w.document.close();
    		        w.print();
    		        w.close();
    			};
                $(function () {
                	audiencia();
                });
            </script>

        </head>
        <body>    

            <div class="main-container container-fluid">
            	<button type="button" name="imprimir" id="imprimir" onclick="imprimirER();">IMPRIMIR</button>
            	<input type="hidden" id="idSolicitud" name="idSolicitud"></input>
                <div id="reporte">
                    <div class="page-container" id="areadetrabajo">                
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-md-4">
                                            <img src="../../img/EscudoEstadoMexico.png" height="90" width="90"></img>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <img src="../../img/PJ-Leyenda-2.png" height="90" width="250"></img>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="divFormulario" class="form-horizontal">
        				        <link type="text/css" href="../../css/bootstrap.min.css" rel="stylesheet" media="all"/>
        				        <link type="text/css" href="../../css/print.css" rel="stylesheet" media="all" />
        							<div class="container-fluid">
                                        <table class="table table-hover table-bordered" id="tablaAudiencia">
                                            <thead class="bordered-darkorange">
                                                <th colspan="4">DATOS DE LA AUDIENCIA</th>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <table class="table table-hover table-bordered" id="tablaSolicitud">
                                            <thead class="bordered-darkorange">
                                                <th colspan="4">DATOS DE LA SOLICITUD</th>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <table class="table table-hover" id="tablaImputados">
                                            <thead class="bordered-darkorange">
                                            	<th colspan="2">IMPUTADO(S)</th>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <table class="table table-hover" id="tablaOfendidos">
                                            <thead class="bordered-darkorange">
                                            	<th colspan="2">OFENDIDO(S)</th>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <table class="table table-hover" id="tablaDelitos">
                                            <thead class="bordered-darkorange">
                                            	<th colspan="2">DELITO(S)</th>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
        							</div>
                                </div>              
                            </div>
                        </div>
                    </div>
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