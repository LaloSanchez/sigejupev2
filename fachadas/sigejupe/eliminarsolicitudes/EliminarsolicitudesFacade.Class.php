<?php
 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/eliminarsolicitud/EliminarsolicitudController.Class.php");

class EliminarsolicitudesFacade {

    private function validar($consultaSolicitud)
    {
        if ($consultaSolicitud->fechaInicial != '') {
            $consultaSolicitud->fechaInicial = $this->convertirFecha($consultaSolicitud->fechaInicial);
        }

        if ($consultaSolicitud->fechaFinal != '') {
            $consultaSolicitud->fechaFinal = $this->convertirFecha($consultaSolicitud->fechaFinal);
        }

        return $consultaSolicitud;
    }

    public function consultar($consultaSolicitud)
    {
        $eliminarSolicitudesController = new EliminarsolicitudController();
        $consultaSolicitud = $this->validar($consultaSolicitud);
        $response = $eliminarSolicitudesController->consultar($consultaSolicitud);

        return json_encode($response);
    }

    public function eliminar($idSolicitudesAudiencia)
    {
        $eliminarSolicitudesController = new EliminarsolicitudController();
        $response = $eliminarSolicitudesController->eliminar($idSolicitudesAudiencia);

        return json_encode($response);
    }

    public function convertirFecha($fecha)
    {
        $date = str_replace('/', '-', $fecha);
        $fecha = date('Y-m-d', strtotime($date));

        return $fecha;
    }

}

@$accion = $_POST['accion'];

if (isset($accion) && $accion != '') {

    $eliminarSolicitud = new EliminarsolicitudesFacade();

    if ($accion == 'consultar') {

        @$nuc = $_POST['nuc'];
        @$carpetaInv = $_POST['carpetaInv'];
        @$fechaInicial = $_POST['fechaInicial'];
        @$fechaFin = $_POST['fechaFin'];
        @$offset = $_POST['offset'];
        @$pagina = $_POST['pagina'];

        $consultaSolicitud = (object) [
            'nuc'          => $nuc,
            'carpetaInv'   => $carpetaInv,
            'fechaInicial' => $fechaInicial,
            'fechaFinal'   => $fechaFin,
            'offset'       => $offset,
            'pagina'       => $pagina
        ];


        echo $eliminarSolicitud->consultar($consultaSolicitud);

    } else if ($accion == 'eliminar') {
        @$idSolicitudesAudiencia = $_POST['solicitud'];
        echo $eliminarSolicitud->eliminar($idSolicitudesAudiencia);
    }

}



} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
