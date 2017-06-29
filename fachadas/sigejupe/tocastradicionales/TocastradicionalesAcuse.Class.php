<?php

session_start();

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tocastradicionales/TocastradicionalesController.Class.php");

class RemisionapelacionesAcuse {

    

    public function consultaAcuseToca($param) {
        $tocastradicionalesController = new TocastradicionalesController();
        $response = $tocastradicionalesController->consultaAcuseToca($param);

        return $response;
    }
    public function consultaAcuseTocaNt($param) {
        $tocastradicionalesController = new TocastradicionalesController();
        $response = $tocastradicionalesController->consultaAcuseTocaNt($param);

        return $response;
    }
    public function consultaAcuseRevisionToca($param) {
        $tocastradicionalesController = new TocastradicionalesController();
        $response = $tocastradicionalesController->consultaAcuseRevisionToca($param);

        return $response;
    }

}

$param = array();
@$param["idReferencia"] = $_GET['idReferencia'];
@$param["idReferenciaOrigen"] = $_GET['idReferenciaOrigen'];
@$accion = $_GET['accion'];
@$param["option"] = $_GET['option'];
//@$paramAudiencia["idAudiencia"] = $_POST['idAudienciaInfo'];

$remisionapelacionesAcuse = new RemisionapelacionesAcuse();

if ($accion == "consultaAcuseToca") {
    $resumen = $remisionapelacionesAcuse->consultaAcuseToca($param);
    echo $resumen;
}else if ($accion == "consultaAcuseRevisionToca") {
    $resumen = $remisionapelacionesAcuse->consultaAcuseRevisionToca($param);
echo $resumen;
} else if ($accion == "consultaAcuseTocaNt") {
    $resumen = $remisionapelacionesAcuse->consultaAcuseTocaNt($param);
    echo $resumen;
}
