<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/generacionNip/GeneracionNipController.Class.php");

    class GeneracionNipFacade {

        /**
         * Generacion de codigo
         * @param int $tipo Tipo de carpeta 1-Cateo 2-Orden
         * @return array Arreglo de resultados
         */
        public function generaCodigo($tipo) {
            if ((int) $tipo > 0) {
                $generacionController = new GeneracionNipController();
                return $generacionController->generaCodigo($tipo);
            }
            return array('type' => 'Error', 'text' => 'IDENTIFICADOR NO VALIDO');
        }

        /**
         * Busca los Nips Generados
         * @param array $datos Parametros de Entrada
         * @return array Resultado
         */
        public function getNips($datos) {
            if (is_array($datos) && (count($datos) > 0)) {
                $generacionController = new GeneracionNipController();
                return $generacionController->getNips($datos);
            }
            return array('type' => 'Error', 'text' => 'NO HAY RESULTADOS');
        }

    }

    @$accion = $_POST['accion'];
    @$tipo = $_POST['tipo'];
    @$nip = $_POST['nip'];
    @$fechaInicial = $_POST['fechaInicial'];
    @$fechaFinal = $_POST['fechaFinal'];
    $generacionFacade = new GeneracionNipFacade();

    if (($accion != "")) {
        if (($accion == 'getCodigo')) {
            $tmp = $generacionFacade->generaCodigo($tipo);
            echo json_encode($tmp);
        } else if ($accion == 'getNips') {
            $datos = array(
                'nip' => $nip,
                'fechaInicial' => $fechaInicial,
                'fechaFinal' => $fechaFinal
            );
            $tmp = $generacionFacade->getNips($datos);
            echo json_encode($tmp);
        }
    } else {
        echo json_encode(array('type' => 'Error', 'text' => 'No se puede realizar la accion'));
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}