<?php

include_once(dirname(__FILE__) . "/../../../webservice/cliente/perfil/PerfilCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/leyenda/LeyendaCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/imagenes/ImagenesCliente.Class.php");
$img = "";
if($_POST["numEmpleado"]>0){
    $imgCliente = new ImagenesCliente();
    $img = $imgCliente->getImgEmployee($_POST["numEmpleado"]);
    if ($img != "") {    
        $url = "http://gestion.pjedomex.gob.mx/gestion2/" . $img;
    } else {
        $url = "Sin foto";
    }
    $json = '{"url":"'.$url.'"}';
    echo $json;
}
?>

