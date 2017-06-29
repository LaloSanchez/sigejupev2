<?php
 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/autojuiciooral/AutojuicioOralController.Class.php");

class AutoJuicioOralFacade {

    /**
     * @return string
     */
    public function consultaJuzgadosEnCarpetas() {
        $autojuiciooralController = new AutojuicioOralController();
        $response = $autojuiciooralController->consultaJuzgadosEnCarpetas();

        return $response;
    }

    /**
     * metodo para obtener los imputados de una carpeta de control
     * @param $autoJuicioOralDto
     * @return string
     */
    public function consultarImputados($autoJuicioOralDto) {

        $autojuiciooralController = new AutojuicioOralController();
        $response = $autojuiciooralController->consultarImputados($autoJuicioOralDto);

        return json_encode($response);
    }

    /**
     * metodo para generar auto de juicio oral
     * @param $data
     * @return array
     */
    public function generarAutoJuicioOral($data) {
        $autojuiciooralController = new AutojuicioOralController();
        $response = $autojuiciooralController->generarAutoJuicioOral($data);

        return json_encode($response);
    }

    public function editarAutoJuicioOral($data) {

        $autojuiciooralController = new AutojuicioOralController();
        $response = $autojuiciooralController->editarAutoJuicioOral($data);

        return json_encode($response);
    }

    public function consulta($data) {
        $autojuiciooralController = new AutojuicioOralController();
        $response = $autojuiciooralController->consulta($data);

        return json_encode($response);
    }

}

//carpeta de control por default;
@$accion = $_POST['accion'];
@$cveTipoCarpeta = 2;
@$activo = "S";
@$cveJuzgado = $_POST['cveJuzgado'];
if (!isset($_POST["cveJuzgado"])) {
    @$cveJuzgado = $_POST['cveJuzgadoTree'];
} else {
    @$cveJuzgado = $_POST['cveJuzgado'];
}
@$numero = $_POST['numero'];
@$anio = $_POST['anio'];


$autoJuicioOralDto = (object) [

            'cveJuzgado' => $cveJuzgado,
            'cveTipoCarpeta' => $cveTipoCarpeta,
            'activo' => $activo,
            'numero' => $numero,
            'anio' => $anio
];


if ($accion != '') {


    $autoJuicioOralFacade = new AutoJuicioOralFacade();

    if ($accion == 'consultaJuzgadosEnCarpetas') {

        $response = $autoJuicioOralFacade->consultaJuzgadosEnCarpetas();

        echo $response;
    }

    if ($accion == 'consultarImputados') {

        $response = $autoJuicioOralFacade->consultarImputados($autoJuicioOralDto);

        echo $response;
    }

    if ($accion == 'generarAutoJuicioOral') {

        $data = $_POST;

        $response = $autoJuicioOralFacade->generarAutoJuicioOral($data);

        echo $response;
    }

    if ($accion == 'editarAutoJuicioOral') {

        $data = $_POST;

        $response = $autoJuicioOralFacade->editarAutoJuicioOral($data);

        echo $response;
    }

    if ($accion == 'consulta') {

        $data = $_POST;

        $response = $autoJuicioOralFacade->consulta($data);

        echo $response;
    }
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}