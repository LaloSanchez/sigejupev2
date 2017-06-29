<?php
 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {


include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoraasignacionesaudiencias/BitacoraasignacionesaudienciasController.Class.php");

class BitacoraasignacionaudienciasFacade {

    public function validar($bitacoraAsignacionDto)
    {
        $bitacoraAsignacionDto->cveJuzgado(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $bitacoraAsignacionDto->cveJuzgado())))));
        $bitacoraAsignacionDto->numero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $bitacoraAsignacionDto->numero())))));
        $bitacoraAsignacionDto->anio(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $bitacoraAsignacionDto->anio())))));
        $bitacoraAsignacionDto->cveTipoCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $bitacoraAsignacionDto->cveTipoCarpeta())))));
        $bitacoraAsignacionDto->carpetaInv(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $bitacoraAsignacionDto->carpetaInv())))));
        $bitacoraAsignacionDto->nuc(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $bitacoraAsignacionDto->nuc())))));
        $bitacoraAsignacionDto->fechaInicial(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $bitacoraAsignacionDto->fechaInicial())))));
        $bitacoraAsignacionDto->fechaFinal(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $bitacoraAsignacionDto->fechaFinal())))));
        $bitacoraAsignacionDto->offset(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $bitacoraAsignacionDto->offset())))));
        $bitacoraAsignacionDto->pagina(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $bitacoraAsignacionDto->pagina())))));

        return $bitacoraAsignacionDto;

    }

    public function consultar($bitacoraAsignacionDto)
    {
        $bitacoraAsignacionAudienciasController = new BitacoraasignacionesaudienciasController();
        $response = $bitacoraAsignacionAudienciasController->consultar($bitacoraAsignacionDto);

        return json_encode($response);
    }

}


@$cveJuzgado = $_POST['cveJuzgado'];
@$numero = $_POST['numero'];
@$anio = $_POST['anio'];
@$cveTipoCarpeta = $_POST['cveTipoCarpeta'];
@$carpetaInv = $_POST['carpetaInv'];
@$nuc = $_POST['nuc'];
@$fechaInicial = $_POST['fechaInicial'];
@$fechaFin = $_POST['fechaFin'];
@$accion = $_POST['accion'];
@$offset = $_POST['offset'];
@$pagina = $_POST['pagina'];
@$porPagina = $_POST['porPagina'];

$bitacoraAsignacionDto = (object) [
    'cveJuzgado'     => $cveJuzgado,
    'numero'         => $numero,
    'anio'           => $anio,
    'cveTipoCarpeta' => $cveTipoCarpeta,
    'carpetaInv'     => $carpetaInv,
    'nuc'            => $nuc,
    'fechaInicial'   => $fechaInicial,
    'fechaFinal'     => $fechaFin,
    'offset'         => $offset,
    'pagina'         => $pagina,
    'porPagina'        => $porPagina
];

if (isset($accion) && $accion != '') {

    $bitacoraFacade = new BitacoraasignacionaudienciasFacade();

    if ($accion == 'consultar') {

        echo $bitacoraFacade->consultar($bitacoraAsignacionDto);
    }

}



} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
