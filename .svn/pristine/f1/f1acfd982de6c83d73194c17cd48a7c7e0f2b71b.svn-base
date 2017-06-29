<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 VIEWS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

session_start();
include_once(dirname(__FILE__)."/../../../tribunal/tagXml/TagXml.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
$tagXml = new TagXml();
$tagXml->cargaXml(dirname(__FILE__) . "/../../../vistas/sigejupe//ordenes/frmOrdenesView.xml", "frmOrdenesView");
?>
<!DOCTYPE html>
<html lang = "es">
<head>
<meta charset = "ISO-8859-1">
<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale=1">
<!--The above 3 meta tags *must* come first in the head;
any other head content must come *after* these tags -->
<title>Formulario de Ordenes</title>
<!--Bootstrap -->
<link href = "../../js/bootstrap/css/bootstrap.min.css" rel = "stylesheet">
<link href = "../../css/datetimepicker/bootstrap-datetimepicker.css" rel = "stylesheet"><link href = "../../css/datagrid/jsonGrid.css" rel = "stylesheet">
<link href = "../../css/normalize.css" rel = "stylesheet">
<!--HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="../../js/html5shiv/html5shiv.min.js"></script>
<script src="../../js/respond/respond.min.js"></script>
<![endif]-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src = "../../js/jquery/jquery.min.js"></script>
<script src = "../../js/moment/moment.min.js"></script><!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../js/bootstrap/js/bootstrap.min.js"></script>
<script src="../../js/datetimepicker/bootstrap-datetimepicker.min.js"></script><script src="../../js/datagrid/jsonMyDatagrid.js"></script>
<script src="../../js/funciones.js"></script>
<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
});
guardarOrdenes = function(){
var <?php echo $tagXml->getAttribut("idOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("idSolicitudOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idSolicitudOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("numeroOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("numeroOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("anioOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("anioOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("solicitud", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("solicitud", "id"); ?>");
var <?php echo $tagXml->getAttribut("negada", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("negada", "id"); ?>");
var <?php echo $tagXml->getAttribut("concedida", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("concedida", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("horaPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horaPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("horasPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horasPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("horaInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horaInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("horasInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horasInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaRespuesta", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRespuesta", "id"); ?>");
var <?php echo $tagXml->getAttribut("qr", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("qr", "id"); ?>");
var <?php echo $tagXml->getAttribut("firmaDigital", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("firmaDigital", "id"); ?>");
var <?php echo $tagXml->getAttribut("selloDigital", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("selloDigital", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>");
var <?php echo $tagXml->getAttribut("email", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("email", "id"); ?>");
var <?php echo $tagXml->getAttribut("motivoCancelacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("motivoCancelacion", "id"); ?>");
$.ajax({
type: "POST",
url: "../../../fachadas/ordenes/OrdenesFacade.Class.php",
data: {
idOrden : <?php  echo $tagXml->getAttribut("idOrden","id" ); ?>.value,
idSolicitudOrden : <?php  echo $tagXml->getAttribut("idSolicitudOrden","id" ); ?>.value,
cveRespuestaSolicitudOrden : <?php  echo $tagXml->getAttribut("cveRespuestaSolicitudOrden","id" ); ?>.value,
numeroOrden : <?php  echo $tagXml->getAttribut("numeroOrden","id" ); ?>.value,
anioOrden : <?php  echo $tagXml->getAttribut("anioOrden","id" ); ?>.value,
solicitud : <?php  echo $tagXml->getAttribut("solicitud","id" ); ?>.value,
negada : <?php  echo $tagXml->getAttribut("negada","id" ); ?>.value,
concedida : <?php  echo $tagXml->getAttribut("concedida","id" ); ?>.value,
fechaPractica : <?php  echo $tagXml->getAttribut("fechaPractica","id" ); ?>.value,
horaPractica : <?php  echo $tagXml->getAttribut("horaPractica","id" ); ?>.value,
horasPractica : <?php  echo $tagXml->getAttribut("horasPractica","id" ); ?>.value,
fechaInforme : <?php  echo $tagXml->getAttribut("fechaInforme","id" ); ?>.value,
horaInforme : <?php  echo $tagXml->getAttribut("horaInforme","id" ); ?>.value,
horasInforme : <?php  echo $tagXml->getAttribut("horasInforme","id" ); ?>.value,
fechaRespuesta : <?php  echo $tagXml->getAttribut("fechaRespuesta","id" ); ?>.value,
qr : <?php  echo $tagXml->getAttribut("qr","id" ); ?>.value,
firmaDigital : <?php  echo $tagXml->getAttribut("firmaDigital","id" ); ?>.value,
selloDigital : <?php  echo $tagXml->getAttribut("selloDigital","id" ); ?>.value,
fechaRegistro : <?php  echo $tagXml->getAttribut("fechaRegistro","id" ); ?>.value,
fechaActualizacion : <?php  echo $tagXml->getAttribut("fechaActualizacion","id" ); ?>.value,
email : <?php  echo $tagXml->getAttribut("email","id" ); ?>.value,
motivoCancelacion : <?php  echo $tagXml->getAttribut("motivoCancelacion","id" ); ?>.value,
accion : "guardar"},
async: true,
dataType: "json",
beforeSend: function(objeto) {
document.getElementById('divOrdenes').innerHTML = "<img src='../../img/cargando.gif'/>";
},
success: function(datos) {
try {
if (datos.totalCount > 0) {
alert(datos.text);
<?php  echo $tagXml->getAttribut("idOrden","id" ); ?>.value=datos.data[0].idOrden;
<?php  echo $tagXml->getAttribut("idSolicitudOrden","id" ); ?>.value=datos.data[0].idSolicitudOrden;
<?php  echo $tagXml->getAttribut("cveRespuestaSolicitudOrden","id" ); ?>.value=datos.data[0].cveRespuestaSolicitudOrden;
<?php  echo $tagXml->getAttribut("numeroOrden","id" ); ?>.value=datos.data[0].numeroOrden;
<?php  echo $tagXml->getAttribut("anioOrden","id" ); ?>.value=datos.data[0].anioOrden;
<?php  echo $tagXml->getAttribut("solicitud","id" ); ?>.value=datos.data[0].solicitud;
<?php  echo $tagXml->getAttribut("negada","id" ); ?>.value=datos.data[0].negada;
<?php  echo $tagXml->getAttribut("concedida","id" ); ?>.value=datos.data[0].concedida;
<?php  echo $tagXml->getAttribut("fechaPractica","id" ); ?>.value=datos.data[0].fechaPractica;
<?php  echo $tagXml->getAttribut("horaPractica","id" ); ?>.value=datos.data[0].horaPractica;
<?php  echo $tagXml->getAttribut("horasPractica","id" ); ?>.value=datos.data[0].horasPractica;
<?php  echo $tagXml->getAttribut("fechaInforme","id" ); ?>.value=datos.data[0].fechaInforme;
<?php  echo $tagXml->getAttribut("horaInforme","id" ); ?>.value=datos.data[0].horaInforme;
<?php  echo $tagXml->getAttribut("horasInforme","id" ); ?>.value=datos.data[0].horasInforme;
<?php  echo $tagXml->getAttribut("fechaRespuesta","id" ); ?>.value=datos.data[0].fechaRespuesta;
<?php  echo $tagXml->getAttribut("qr","id" ); ?>.value=datos.data[0].qr;
<?php  echo $tagXml->getAttribut("firmaDigital","id" ); ?>.value=datos.data[0].firmaDigital;
<?php  echo $tagXml->getAttribut("selloDigital","id" ); ?>.value=datos.data[0].selloDigital;
<?php  echo $tagXml->getAttribut("fechaRegistro","id" ); ?>.value=datos.data[0].fechaRegistro;
<?php  echo $tagXml->getAttribut("fechaActualizacion","id" ); ?>.value=datos.data[0].fechaActualizacion;
<?php  echo $tagXml->getAttribut("email","id" ); ?>.value=datos.data[0].email;
<?php  echo $tagXml->getAttribut("motivoCancelacion","id" ); ?>.value=datos.data[0].motivoCancelacion;
alert(datos.text);
document.getElementById('divOrdenes').innerHTML = "";
} catch (e) {
alert(datos.text);
document.getElementById('divOrdenes').innerHTML = "";
}
},
error: function(objeto, quepaso, otroobj) {}
});
}
bajaOrdenes = function(){
var <?php echo $tagXml->getAttribut("idOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("idSolicitudOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idSolicitudOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("numeroOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("numeroOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("anioOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("anioOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("solicitud", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("solicitud", "id"); ?>");
var <?php echo $tagXml->getAttribut("negada", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("negada", "id"); ?>");
var <?php echo $tagXml->getAttribut("concedida", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("concedida", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("horaPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horaPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("horasPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horasPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("horaInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horaInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("horasInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horasInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaRespuesta", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRespuesta", "id"); ?>");
var <?php echo $tagXml->getAttribut("qr", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("qr", "id"); ?>");
var <?php echo $tagXml->getAttribut("firmaDigital", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("firmaDigital", "id"); ?>");
var <?php echo $tagXml->getAttribut("selloDigital", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("selloDigital", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>");
var <?php echo $tagXml->getAttribut("email", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("email", "id"); ?>");
var <?php echo $tagXml->getAttribut("motivoCancelacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("motivoCancelacion", "id"); ?>");
if(confirm("\¿ ESTAS SEGURO DE ELIMINAR EL REGISTRO ?")==true){
$.ajax({
type: "POST",
url: "../../../fachadas/ordenes/OrdenesFacade.Class.php",
data: {
idOrden : <?php  echo $tagXml->getAttribut("idOrden","id" ); ?>.value,
idSolicitudOrden : <?php  echo $tagXml->getAttribut("idSolicitudOrden","id" ); ?>.value,
cveRespuestaSolicitudOrden : <?php  echo $tagXml->getAttribut("cveRespuestaSolicitudOrden","id" ); ?>.value,
numeroOrden : <?php  echo $tagXml->getAttribut("numeroOrden","id" ); ?>.value,
anioOrden : <?php  echo $tagXml->getAttribut("anioOrden","id" ); ?>.value,
solicitud : <?php  echo $tagXml->getAttribut("solicitud","id" ); ?>.value,
negada : <?php  echo $tagXml->getAttribut("negada","id" ); ?>.value,
concedida : <?php  echo $tagXml->getAttribut("concedida","id" ); ?>.value,
fechaPractica : <?php  echo $tagXml->getAttribut("fechaPractica","id" ); ?>.value,
horaPractica : <?php  echo $tagXml->getAttribut("horaPractica","id" ); ?>.value,
horasPractica : <?php  echo $tagXml->getAttribut("horasPractica","id" ); ?>.value,
fechaInforme : <?php  echo $tagXml->getAttribut("fechaInforme","id" ); ?>.value,
horaInforme : <?php  echo $tagXml->getAttribut("horaInforme","id" ); ?>.value,
horasInforme : <?php  echo $tagXml->getAttribut("horasInforme","id" ); ?>.value,
fechaRespuesta : <?php  echo $tagXml->getAttribut("fechaRespuesta","id" ); ?>.value,
qr : <?php  echo $tagXml->getAttribut("qr","id" ); ?>.value,
firmaDigital : <?php  echo $tagXml->getAttribut("firmaDigital","id" ); ?>.value,
selloDigital : <?php  echo $tagXml->getAttribut("selloDigital","id" ); ?>.value,
fechaRegistro : <?php  echo $tagXml->getAttribut("fechaRegistro","id" ); ?>.value,
fechaActualizacion : <?php  echo $tagXml->getAttribut("fechaActualizacion","id" ); ?>.value,
email : <?php  echo $tagXml->getAttribut("email","id" ); ?>.value,
motivoCancelacion : <?php  echo $tagXml->getAttribut("motivoCancelacion","id" ); ?>.value,
accion : "baja"},
async: true,
dataType: "json",
beforeSend: function(objeto) {
document.getElementById('divOrdenes').innerHTML = "<img src='../../img/cargando.gif'/>";
},
success: function(datos) {
try {
alert(datos.text);
limpiaOrdenes();
document.getElementById('divOrdenes').innerHTML = "";
} catch (e) {
alert(datos.text);
document.getElementById('divOrdenes').innerHTML = "";
}
},
error: function(objeto, quepaso, otroobj) {}
});
}
}
consultaOrdenes = function(){
var <?php echo $tagXml->getAttribut("idOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("idSolicitudOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idSolicitudOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("numeroOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("numeroOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("anioOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("anioOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("solicitud", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("solicitud", "id"); ?>");
var <?php echo $tagXml->getAttribut("negada", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("negada", "id"); ?>");
var <?php echo $tagXml->getAttribut("concedida", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("concedida", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("horaPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horaPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("horasPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horasPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("horaInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horaInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("horasInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horasInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaRespuesta", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRespuesta", "id"); ?>");
var <?php echo $tagXml->getAttribut("qr", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("qr", "id"); ?>");
var <?php echo $tagXml->getAttribut("firmaDigital", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("firmaDigital", "id"); ?>");
var <?php echo $tagXml->getAttribut("selloDigital", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("selloDigital", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>");
var <?php echo $tagXml->getAttribut("email", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("email", "id"); ?>");
var <?php echo $tagXml->getAttribut("motivoCancelacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("motivoCancelacion", "id"); ?>");
$.ajax({
type: "POST",
url: "../../../fachadas/ordenes/OrdenesFacade.Class.php",
data: {
idOrden : <?php  echo $tagXml->getAttribut("idOrden","id" ); ?>.value,
idSolicitudOrden : <?php  echo $tagXml->getAttribut("idSolicitudOrden","id" ); ?>.value,
cveRespuestaSolicitudOrden : <?php  echo $tagXml->getAttribut("cveRespuestaSolicitudOrden","id" ); ?>.value,
numeroOrden : <?php  echo $tagXml->getAttribut("numeroOrden","id" ); ?>.value,
anioOrden : <?php  echo $tagXml->getAttribut("anioOrden","id" ); ?>.value,
solicitud : <?php  echo $tagXml->getAttribut("solicitud","id" ); ?>.value,
negada : <?php  echo $tagXml->getAttribut("negada","id" ); ?>.value,
concedida : <?php  echo $tagXml->getAttribut("concedida","id" ); ?>.value,
fechaPractica : <?php  echo $tagXml->getAttribut("fechaPractica","id" ); ?>.value,
horaPractica : <?php  echo $tagXml->getAttribut("horaPractica","id" ); ?>.value,
horasPractica : <?php  echo $tagXml->getAttribut("horasPractica","id" ); ?>.value,
fechaInforme : <?php  echo $tagXml->getAttribut("fechaInforme","id" ); ?>.value,
horaInforme : <?php  echo $tagXml->getAttribut("horaInforme","id" ); ?>.value,
horasInforme : <?php  echo $tagXml->getAttribut("horasInforme","id" ); ?>.value,
fechaRespuesta : <?php  echo $tagXml->getAttribut("fechaRespuesta","id" ); ?>.value,
qr : <?php  echo $tagXml->getAttribut("qr","id" ); ?>.value,
firmaDigital : <?php  echo $tagXml->getAttribut("firmaDigital","id" ); ?>.value,
selloDigital : <?php  echo $tagXml->getAttribut("selloDigital","id" ); ?>.value,
fechaRegistro : <?php  echo $tagXml->getAttribut("fechaRegistro","id" ); ?>.value,
fechaActualizacion : <?php  echo $tagXml->getAttribut("fechaActualizacion","id" ); ?>.value,
email : <?php  echo $tagXml->getAttribut("email","id" ); ?>.value,
motivoCancelacion : <?php  echo $tagXml->getAttribut("motivoCancelacion","id" ); ?>.value,
accion : "consultar"},
async: true,
dataType: "html",
beforeSend: function(objeto) {
document.getElementById('divOrdenes').innerHTML = "<img src='../../img/cargando.gif'/>";
},
success: function(datos) {
var result = eval("(" + datos + ")");
if (result.totalCount > 0) {
var datagrid = new JsonMyDatagrid();
datagrid.setClase(datagrid);
datagrid.setImagenPath("img/");
datagrid.setMouseOver("#CCCCCC");
datagrid.setMouseOut("#FFFFFF");
datagrid.setSizeTable("100%");
datagrid.setPaginacion(false);
datagrid.setBorder(1);
//datagrid.setTagImg("deposito");
datagrid.setShowPagina("buscar");
datagrid.setHeadersP("Ordenes");
datagrid.setColspanP("22"); // 90%
datagrid.setHeaders("No.","<?php  echo $tagXml->getTag("idSolicitudOrden" ); ?>","<?php  echo $tagXml->getTag("cveRespuestaSolicitudOrden" ); ?>","<?php  echo $tagXml->getTag("numeroOrden" ); ?>","<?php  echo $tagXml->getTag("anioOrden" ); ?>","<?php  echo $tagXml->getTag("solicitud" ); ?>","<?php  echo $tagXml->getTag("negada" ); ?>","<?php  echo $tagXml->getTag("concedida" ); ?>","<?php  echo $tagXml->getTag("fechaPractica" ); ?>","<?php  echo $tagXml->getTag("horaPractica" ); ?>","<?php  echo $tagXml->getTag("horasPractica" ); ?>","<?php  echo $tagXml->getTag("fechaInforme" ); ?>","<?php  echo $tagXml->getTag("horaInforme" ); ?>","<?php  echo $tagXml->getTag("horasInforme" ); ?>","<?php  echo $tagXml->getTag("fechaRespuesta" ); ?>","<?php  echo $tagXml->getTag("qr" ); ?>","<?php  echo $tagXml->getTag("firmaDigital" ); ?>","<?php  echo $tagXml->getTag("selloDigital" ); ?>","<?php  echo $tagXml->getTag("fechaRegistro" ); ?>","<?php  echo $tagXml->getTag("fechaActualizacion" ); ?>","<?php  echo $tagXml->getTag("email" ); ?>","<?php  echo $tagXml->getTag("motivoCancelacion" ); ?>");
datagrid.setTamCols('5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%','5%');
datagrid.setDocumentJson(datos);
datagrid.setDocumentDiv("divOrdenes");
datagrid.setTagShow("idSolicitudOrden","cveRespuestaSolicitudOrden","numeroOrden","anioOrden","solicitud","negada","concedida","fechaPractica","horaPractica","horasPractica","fechaInforme","horaInforme","horasInforme","fechaRespuesta","qr","firmaDigital","selloDigital","fechaRegistro","fechaActualizacion","email","motivoCancelacion");
datagrid.setTagHidden("idOrden");
datagrid.setTitle("Resultado de consulta");
datagrid.setOnclick("seleccionaOrdenes", "idOrden");
datagrid.loadJson();
$("#divOrdenes").show("slow");
ajustar(parent.parent.document.getElementById("Contenido"));
}else{
alert(result.text);
document.getElementById('divOrdenes').innerHTML = "";
}
},
error: function(objeto, quepaso, otroobj) {}
});
}
limpiaOrdenes = function(){
<?php  echo $tagXml->getAttribut("idOrden","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("idSolicitudOrden","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("cveRespuestaSolicitudOrden","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("numeroOrden","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("anioOrden","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("solicitud","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("negada","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("concedida","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("fechaPractica","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("horaPractica","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("horasPractica","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("fechaInforme","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("horaInforme","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("horasInforme","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("fechaRespuesta","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("qr","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("firmaDigital","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("selloDigital","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("fechaRegistro","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("fechaActualizacion","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("email","id" ); ?>.value="";
<?php  echo $tagXml->getAttribut("motivoCancelacion","id" ); ?>.value="";
}
seleccionaOrdenes = function(ididOrden){
var <?php echo $tagXml->getAttribut("idOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("idSolicitudOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idSolicitudOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("numeroOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("numeroOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("anioOrden", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("anioOrden", "id"); ?>");
var <?php echo $tagXml->getAttribut("solicitud", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("solicitud", "id"); ?>");
var <?php echo $tagXml->getAttribut("negada", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("negada", "id"); ?>");
var <?php echo $tagXml->getAttribut("concedida", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("concedida", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("horaPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horaPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("horasPractica", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horasPractica", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("horaInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horaInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("horasInforme", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("horasInforme", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaRespuesta", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRespuesta", "id"); ?>");
var <?php echo $tagXml->getAttribut("qr", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("qr", "id"); ?>");
var <?php echo $tagXml->getAttribut("firmaDigital", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("firmaDigital", "id"); ?>");
var <?php echo $tagXml->getAttribut("selloDigital", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("selloDigital", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>");
var <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>");
var <?php echo $tagXml->getAttribut("email", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("email", "id"); ?>");
var <?php echo $tagXml->getAttribut("motivoCancelacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("motivoCancelacion", "id"); ?>");
$.ajax({
type: "POST",
url: "../../../fachadas/ordenes/OrdenesFacade.Class.php",
data: {
idOrden : <?php  echo $tagXml->getAttribut("idOrden","id" ); ?> .value=ididOrden,
accion : "seleccionar"},
async: true,
dataType: "json",
beforeSend: function(objeto) {
document.getElementById('divOrdenes').innerHTML = "<img src='../../img/cargando.gif'/>";
},
success: function(datos) {
try {
if (datos.totalCount > 0) {
<?php  echo $tagXml->getAttribut("idOrden","id" ); ?>.value=datos.data[0].idOrden
<?php  echo $tagXml->getAttribut("idSolicitudOrden","id" ); ?>.value=datos.data[0].idSolicitudOrden
<?php  echo $tagXml->getAttribut("cveRespuestaSolicitudOrden","id" ); ?>.value=datos.data[0].cveRespuestaSolicitudOrden
<?php  echo $tagXml->getAttribut("numeroOrden","id" ); ?>.value=datos.data[0].numeroOrden
<?php  echo $tagXml->getAttribut("anioOrden","id" ); ?>.value=datos.data[0].anioOrden
<?php  echo $tagXml->getAttribut("solicitud","id" ); ?>.value=datos.data[0].solicitud
<?php  echo $tagXml->getAttribut("negada","id" ); ?>.value=datos.data[0].negada
<?php  echo $tagXml->getAttribut("concedida","id" ); ?>.value=datos.data[0].concedida
<?php  echo $tagXml->getAttribut("fechaPractica","id" ); ?>.value=datos.data[0].fechaPractica
<?php  echo $tagXml->getAttribut("horaPractica","id" ); ?>.value=datos.data[0].horaPractica
<?php  echo $tagXml->getAttribut("horasPractica","id" ); ?>.value=datos.data[0].horasPractica
<?php  echo $tagXml->getAttribut("fechaInforme","id" ); ?>.value=datos.data[0].fechaInforme
<?php  echo $tagXml->getAttribut("horaInforme","id" ); ?>.value=datos.data[0].horaInforme
<?php  echo $tagXml->getAttribut("horasInforme","id" ); ?>.value=datos.data[0].horasInforme
<?php  echo $tagXml->getAttribut("fechaRespuesta","id" ); ?>.value=datos.data[0].fechaRespuesta
<?php  echo $tagXml->getAttribut("qr","id" ); ?>.value=datos.data[0].qr
<?php  echo $tagXml->getAttribut("firmaDigital","id" ); ?>.value=datos.data[0].firmaDigital
<?php  echo $tagXml->getAttribut("selloDigital","id" ); ?>.value=datos.data[0].selloDigital
<?php  echo $tagXml->getAttribut("fechaRegistro","id" ); ?>.value=datos.data[0].fechaRegistro
<?php  echo $tagXml->getAttribut("fechaActualizacion","id" ); ?>.value=datos.data[0].fechaActualizacion
<?php  echo $tagXml->getAttribut("email","id" ); ?>.value=datos.data[0].email
<?php  echo $tagXml->getAttribut("motivoCancelacion","id" ); ?>.value=datos.data[0].motivoCancelacion
document.getElementById('divOrdenes').innerHTML = "";
consultaOrdenes();
}else{
alert(datos.text);
document.getElementById('divOrdenes').innerHTML = "";
}
} catch (e) {
alert(datos.text);
document.getElementById('divOrdenes').innerHTML = "";
}
},
error: function(objeto, quepaso, otroobj) {}
});
}
listaSolicitudesordenes = function (tabIndex) {
$.ajax({
type: "POST",
url: "../../../fachadas/solicitudesordenes/SolicitudesordenesFacade.Class.php",
data: {accion: "consultar"},
async: true,
dataType: "json",
beforeSend: function (objeto) {
document.getElementById('divSolicitudesordenes').innerHTML = "<img src='../../img/cargando.gif'/>";
},
success: function (datos) {
try {
var html = "";if (datos.totalCount > 0) {
html += '<select name="<?php echo $tagXml->getAttribut("idSolicitudOrden", "name"); ?>" id="<?php echo $tagXml->getAttribut("idSolicitudOrden", "id"); ?>" class="form-control text-uppercase" title="<?php echo $tagXml->getAttribut("idSolicitudOrden", "tooltip"); ?>" data-toggle="tooltip" tabIndex="tabIndex">';
for (var index = 0; index < datos.totalCount; index++) {
html += "<option value='" + datos.data[index].idSolicitudOrden + "'>" + datos.data[index].idSolicitudOrden + "</option>";
}
html += "</select>";
} else {
html = "Sin resultados";
}
document.getElementById('divSolicitudesordenes').innerHTML = html;
} catch (e) {
alert(e);
}
},
error: function (objeto, quepaso, otroobj) {
}
});
}
listaRespuestasolicitudorden = function (tabIndex) {
$.ajax({
type: "POST",
url: "../../../fachadas/respuestasolicitudorden/RespuestasolicitudordenFacade.Class.php",
data: {accion: "consultar"},
async: true,
dataType: "json",
beforeSend: function (objeto) {
document.getElementById('divRespuestasolicitudorden').innerHTML = "<img src='../../img/cargando.gif'/>";
},
success: function (datos) {
try {
var html = "";if (datos.totalCount > 0) {
html += '<select name="<?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "name"); ?>" id="<?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "id"); ?>" class="form-control text-uppercase" title="<?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "tooltip"); ?>" data-toggle="tooltip" tabIndex="tabIndex">';
for (var index = 0; index < datos.totalCount; index++) {
html += "<option value='" + datos.data[index].cveRespuestaSolicitudOrden + "'>" + datos.data[index].cveRespuestaSolicitudOrden + "</option>";
}
html += "</select>";
} else {
html = "Sin resultados";
}
document.getElementById('divRespuestasolicitudorden').innerHTML = html;
} catch (e) {
alert(e);
}
},
error: function (objeto, quepaso, otroobj) {
}
});
}
</script>
</head>
<body>
<div class="container">
<div class="starter-template">
<fieldset>
<legend>Registro de Ordenes</legend>
<p style="text-align: center;"><div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("idOrden", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("idOrden", "id"); ?>" class="caption" id="idOrden"><?php echo $tagXml->getTag("idOrden"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("idOrden", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("idOrden","name" ); ?>" id="<?php  echo $tagXml->getAttribut("idOrden","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("idOrden","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("idOrden","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="1">
<script>
$("#<?php  echo $tagXml->getAttribut("idOrden","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("idSolicitudOrden", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("idSolicitudOrden", "id"); ?>" class="caption" id="idSolicitudOrden"><?php echo $tagXml->getTag("idSolicitudOrden"); ?></label>
<div name="divSolicitudesordenes" id="divSolicitudesordenes">
<input type="<?php echo ($tagXml->getAttribut("idSolicitudOrden", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("idSolicitudOrden","name" ); ?>" id="<?php  echo $tagXml->getAttribut("idSolicitudOrden","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("idSolicitudOrden","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("idSolicitudOrden","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="2">
</div>
<script>
$("#<?php  echo $tagXml->getAttribut("idSolicitudOrden","name" ); ?>").keydown(posValue);
listaSolicitudesordenes(2);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("cveRespuestaSolicitudOrden", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("cveRespuestaSolicitudOrden", "id"); ?>" class="caption" id="cveRespuestaSolicitudOrden"><?php echo $tagXml->getTag("cveRespuestaSolicitudOrden"); ?></label>
<div name="divRespuestasolicitudorden" id="divRespuestasolicitudorden">
<input type="<?php echo ($tagXml->getAttribut("cveRespuestaSolicitudOrden", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("cveRespuestaSolicitudOrden","name" ); ?>" id="<?php  echo $tagXml->getAttribut("cveRespuestaSolicitudOrden","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("cveRespuestaSolicitudOrden","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("cveRespuestaSolicitudOrden","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="3">
</div>
<script>
$("#<?php  echo $tagXml->getAttribut("cveRespuestaSolicitudOrden","name" ); ?>").keydown(posValue);
listaRespuestasolicitudorden(3);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("numeroOrden", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("numeroOrden", "id"); ?>" class="caption" id="numeroOrden"><?php echo $tagXml->getTag("numeroOrden"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("numeroOrden", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("numeroOrden","name" ); ?>" id="<?php  echo $tagXml->getAttribut("numeroOrden","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("numeroOrden","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("numeroOrden","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="4">
<script>
$("#<?php  echo $tagXml->getAttribut("numeroOrden","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("anioOrden", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("anioOrden", "id"); ?>" class="caption" id="anioOrden"><?php echo $tagXml->getTag("anioOrden"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("anioOrden", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("anioOrden","name" ); ?>" id="<?php  echo $tagXml->getAttribut("anioOrden","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("anioOrden","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("anioOrden","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="5">
<script>
$("#<?php  echo $tagXml->getAttribut("anioOrden","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("solicitud", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("solicitud", "id"); ?>" class="caption" id="solicitud"><?php echo $tagXml->getTag("solicitud"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("solicitud", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("solicitud","name" ); ?>" id="<?php  echo $tagXml->getAttribut("solicitud","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("solicitud","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("solicitud","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="6">
<script>
$("#<?php  echo $tagXml->getAttribut("solicitud","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("negada", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("negada", "id"); ?>" class="caption" id="negada"><?php echo $tagXml->getTag("negada"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("negada", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("negada","name" ); ?>" id="<?php  echo $tagXml->getAttribut("negada","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("negada","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("negada","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="7">
<script>
$("#<?php  echo $tagXml->getAttribut("negada","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("concedida", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("concedida", "id"); ?>" class="caption" id="concedida"><?php echo $tagXml->getTag("concedida"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("concedida", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("concedida","name" ); ?>" id="<?php  echo $tagXml->getAttribut("concedida","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("concedida","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("concedida","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="8">
<script>
$("#<?php  echo $tagXml->getAttribut("concedida","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("fechaPractica", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("fechaPractica", "id"); ?>" class="caption" id="fechaPractica"><?php echo $tagXml->getTag("fechaPractica"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("fechaPractica", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("fechaPractica","name" ); ?>" id="<?php  echo $tagXml->getAttribut("fechaPractica","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("fechaPractica","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("fechaPractica","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="9">
<script>
$("#<?php  echo $tagXml->getAttribut("fechaPractica","name" ); ?>").keydown(posValue);
$('#<?php echo $tagXml->getAttribut("fechaPractica", "id"); ?>').datetimepicker({
format: 'DD/MM/YYYY'
});
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("horaPractica", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("horaPractica", "id"); ?>" class="caption" id="horaPractica"><?php echo $tagXml->getTag("horaPractica"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("horaPractica", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("horaPractica","name" ); ?>" id="<?php  echo $tagXml->getAttribut("horaPractica","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("horaPractica","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("horaPractica","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="10">
<script>
$("#<?php  echo $tagXml->getAttribut("horaPractica","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("horasPractica", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("horasPractica", "id"); ?>" class="caption" id="horasPractica"><?php echo $tagXml->getTag("horasPractica"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("horasPractica", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("horasPractica","name" ); ?>" id="<?php  echo $tagXml->getAttribut("horasPractica","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("horasPractica","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("horasPractica","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="11">
<script>
$("#<?php  echo $tagXml->getAttribut("horasPractica","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("fechaInforme", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("fechaInforme", "id"); ?>" class="caption" id="fechaInforme"><?php echo $tagXml->getTag("fechaInforme"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("fechaInforme", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("fechaInforme","name" ); ?>" id="<?php  echo $tagXml->getAttribut("fechaInforme","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("fechaInforme","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("fechaInforme","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="12">
<script>
$("#<?php  echo $tagXml->getAttribut("fechaInforme","name" ); ?>").keydown(posValue);
$('#<?php echo $tagXml->getAttribut("fechaInforme", "id"); ?>').datetimepicker({
format: 'DD/MM/YYYY'
});
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("horaInforme", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("horaInforme", "id"); ?>" class="caption" id="horaInforme"><?php echo $tagXml->getTag("horaInforme"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("horaInforme", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("horaInforme","name" ); ?>" id="<?php  echo $tagXml->getAttribut("horaInforme","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("horaInforme","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("horaInforme","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="13">
<script>
$("#<?php  echo $tagXml->getAttribut("horaInforme","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("horasInforme", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("horasInforme", "id"); ?>" class="caption" id="horasInforme"><?php echo $tagXml->getTag("horasInforme"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("horasInforme", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("horasInforme","name" ); ?>" id="<?php  echo $tagXml->getAttribut("horasInforme","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("horasInforme","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("horasInforme","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="14">
<script>
$("#<?php  echo $tagXml->getAttribut("horasInforme","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("fechaRespuesta", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("fechaRespuesta", "id"); ?>" class="caption" id="fechaRespuesta"><?php echo $tagXml->getTag("fechaRespuesta"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("fechaRespuesta", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("fechaRespuesta","name" ); ?>" id="<?php  echo $tagXml->getAttribut("fechaRespuesta","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("fechaRespuesta","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("fechaRespuesta","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="15">
<script>
$("#<?php  echo $tagXml->getAttribut("fechaRespuesta","name" ); ?>").keydown(posValue);
$('#<?php echo $tagXml->getAttribut("fechaRespuesta", "id"); ?>').datetimepicker();
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("qr", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("qr", "id"); ?>" class="caption" id="qr"><?php echo $tagXml->getTag("qr"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("qr", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("qr","name" ); ?>" id="<?php  echo $tagXml->getAttribut("qr","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("qr","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("qr","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="16">
<script>
$("#<?php  echo $tagXml->getAttribut("qr","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("firmaDigital", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("firmaDigital", "id"); ?>" class="caption" id="firmaDigital"><?php echo $tagXml->getTag("firmaDigital"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("firmaDigital", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("firmaDigital","name" ); ?>" id="<?php  echo $tagXml->getAttribut("firmaDigital","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("firmaDigital","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("firmaDigital","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="17">
<script>
$("#<?php  echo $tagXml->getAttribut("firmaDigital","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("selloDigital", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("selloDigital", "id"); ?>" class="caption" id="selloDigital"><?php echo $tagXml->getTag("selloDigital"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("selloDigital", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("selloDigital","name" ); ?>" id="<?php  echo $tagXml->getAttribut("selloDigital","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("selloDigital","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("selloDigital","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="18">
<script>
$("#<?php  echo $tagXml->getAttribut("selloDigital","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("fechaRegistro", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>" class="caption" id="fechaRegistro"><?php echo $tagXml->getTag("fechaRegistro"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("fechaRegistro", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("fechaRegistro","name" ); ?>" id="<?php  echo $tagXml->getAttribut("fechaRegistro","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("fechaRegistro","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("fechaRegistro","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" readonly tabIndex="19">
<script>
$("#<?php  echo $tagXml->getAttribut("fechaRegistro","name" ); ?>").keydown(posValue);
$('#<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>').datetimepicker();
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("fechaActualizacion", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>" class="caption" id="fechaActualizacion"><?php echo $tagXml->getTag("fechaActualizacion"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("fechaActualizacion", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("fechaActualizacion","name" ); ?>" id="<?php  echo $tagXml->getAttribut("fechaActualizacion","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("fechaActualizacion","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("fechaActualizacion","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" readonly tabIndex="20">
<script>
$("#<?php  echo $tagXml->getAttribut("fechaActualizacion","name" ); ?>").keydown(posValue);
$('#<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>').datetimepicker();
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("email", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("email", "id"); ?>" class="caption" id="email"><?php echo $tagXml->getTag("email"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("email", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("email","name" ); ?>" id="<?php  echo $tagXml->getAttribut("email","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("email","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("email","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="21">
<script>
$("#<?php  echo $tagXml->getAttribut("email","name" ); ?>").keydown(posValue);
</script>
</div>
<div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("motivoCancelacion", "hidden")=="true") ? "style=\"display:none;\"":""; ?> >
<label for="<?php echo $tagXml->getAttribut("motivoCancelacion", "id"); ?>" class="caption" id="motivoCancelacion"><?php echo $tagXml->getTag("motivoCancelacion"); ?></label>
<input type="<?php echo ($tagXml->getAttribut("motivoCancelacion", "hidden")=="true") ? "hidden":"text" ?>" name="<?php  echo $tagXml->getAttribut("motivoCancelacion","name" ); ?>" id="<?php  echo $tagXml->getAttribut("motivoCancelacion","id" ); ?>" placeholder="<?php  echo $tagXml->getAttribut("motivoCancelacion","placeholder" ); ?>" title="<?php  echo $tagXml->getAttribut("motivoCancelacion","tooltip" ); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="22">
<script>
$("#<?php  echo $tagXml->getAttribut("motivoCancelacion","name" ); ?>").keydown(posValue);
</script>
</div>
</p>
<p style="text-align: center;">
<button type="button" class="btn btn-success" value="Guardar" id="btnOrdenesGuardar" name="btnOrdenesGuardar" onclick="guardarOrdenes()" tabIndex="24" title="Boton para guadar cambios" data-toggle="tooltip" >Guardar</button>
<button type="button"  class="btn btn-default" value="Limpiar" id="btnOrdenesLimpiar" name="btnOrdenesLimpiar" onclick="limpiaOrdenes()" title="Boton para limpiar y realizar un registro nuevo" data-toggle="tooltip">Limpiar</button>
<button type="button"  class="btn btn-info" value="Consultar" id="btnOrdenesConsultar" name="btnOrdenesConsultar" onclick="consultaOrdenes()" title="Boton para consultar informacion" data-toggle="tooltip">Consultar</button>
<button type="button"  class="btn btn-danger" value="Eliminar" id="btnOrdenesEliminar" name="btnOrdenesEliminar" onclick="bajaOrdenes()" title="Boton para eliminar el registro actual" data-toggle="tooltip">Eliminar</button>
<script>
</script>
</p>
<div id="divOrdenes" name="divOrdenes" class="table-responsive" width="100%"></div>
<script>
</script>
</fieldset>
</div>
</div><!--.container -->
<script>
ajustar(parent.parent.document.getElementById("Contenido"));
</script>
</body>
</html>
