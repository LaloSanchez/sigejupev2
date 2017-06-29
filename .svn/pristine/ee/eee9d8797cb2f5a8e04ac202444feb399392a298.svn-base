<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {


include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/remisionapelaciones/RemisionapelacionesController.Class.php");

class RemisionapelacionesAcuse {

    

    public function consultaAcuseRemisionToca($param) {
        $remisionapelacionesController = new RemisionapelacionesController();
        $response = $remisionapelacionesController->consultaAcuseRemisionToca($param);

        return $response;
    }
    public function consultaAcuseRemision($param) {
        $remisionapelacionesController = new RemisionapelacionesController();
        $response = $remisionapelacionesController->consultaAcuseRemision($param);

        return $response;
    }

}

$param = array();
@$param["idActuacion"] = $_GET['idActuacion'];
@$accion = $_GET['accion'];
//@$paramAudiencia["idAudiencia"] = $_POST['idAudienciaInfo'];

$remisionapelacionesAcuse = new RemisionapelacionesAcuse();

if ($accion == "consultaAcuse") {
    $resumen = $remisionapelacionesAcuse->consultaAcuseRemisionToca($param);
    echo $resumen;
}else if ($accion == "consultaAcuseRemisionCausa") {
    $resumen = $remisionapelacionesAcuse->consultaAcuseRemision($param);
    echo $resumen;
} 
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>