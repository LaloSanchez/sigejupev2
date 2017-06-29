
<?php
//session_start();
include_once(dirname(__FILE__)."/../../../webservice/cliente/materiaspericiales/MateriasPericialesCliente.php");
$materiaPericial = new MateriasPericialesCliente();
$jsonRequest = "";
echo $materiaPericial->ServiceMateriasPericiales($jsonRequest);
?>


