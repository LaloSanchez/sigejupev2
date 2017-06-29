<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

error_reporting(E_ALL);
error_reporting(-1);

ini_set('memory_limit', '2048M');

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/bitacoraMovimientosController.Class.php");


class reporteBitacoraMovimientosFacade {

    public function validarDatos($bitacoraMovimientosDto)
    {
        return $bitacoraMovimientosDto;
    }

    public function consultar($bitacoraMovimientosDto)
    {
        $bitacoraMovimientosDto = $this->validarDatos($bitacoraMovimientosDto);
        $bitacoraMovimientosController = new BitacoramovimientosController();
	//var_dump($bitacoraMovimientosController->consultar($bitacoraMovimientosDto));
        return json_encode($bitacoraMovimientosController->consultar($bitacoraMovimientosDto));
    }

}


$bitacoraMovimientos = new reporteBitacoraMovimientosFacade();


@$accion = $_POST['accion'];
@$offset = $_POST['offset'];
@$pagina = $_POST['pagina'];
@$porPagina = $_POST['porPagina'];
@$cveAdscripcion = $_POST['cveAdscripcion'];
@$cveAccion = $_POST['cveAccion'];
@$fechaInicio = $_POST['fechaInicio'];
@$fechaFin = $_POST['fechaFin'];

$bitacoraMovimientosDto = (object) [
    'offset'         => $offset,
    'pagina'         => $pagina,
    'porPagina'      => $porPagina,
    'cveAdscripcion' => $cveAdscripcion,
    'cveAccion'      => $cveAccion,
    'fechaInicio'    => $fechaInicio,
    'fechaFin'       => $fechaFin
];

if ($accion == 'consultar') {
    echo $bitacoraMovimientos->consultar($bitacoraMovimientosDto);
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>