<?php

session_start();


include_once (dirname(__FILE__) . "/../../../webservice/cliente/login/LoginCliente.php");

include_once (dirname(__FILE__) . "/../../../tribunal/juzgadosGestion/juzgadosGestion.php");
include_once (dirname(__FILE__) . "/../../../tribunal/adscripcionesGestion/adscripcionesGestion.php");

class LoginFacade {

    public function __construct() {
        
    }

    public function getLoginFull($usuario, $password) {
        $LoginCliente = new LoginCliente();
        return $LoginCliente->loginFull($usuario, $password);
    }

}

$_SESSION["cveSistema"] = 38;
@$usuario = $_POST["usuario"];
@$password = $_POST["password"];

if (trim($usuario) !== "" && trim($password) !== "") {
    $login = new LoginFacade();



    $jsonLogin = $login->getLoginFull($usuario, $password);

    $json = "";
    if ($jsonLogin != "") {
        $jsonResponse = json_decode($jsonLogin);
//        print_r($jsonLogin);
        @$cveUsuario = $jsonResponse->cveUsuario;
        @$perfiles = count($jsonResponse->perfiles);
        if ($perfiles > 0) {
            $file = fopen(dirname(__FILE__) . "/../../../archivos/" . $cveUsuario . ".json", "w");
            fwrite($file, $jsonLogin);
            fclose($file);
            $_SESSION['cveUsuarioSistema'] = $jsonResponse->cveUsuario;
            $_SESSION['NumEmpleado'] = $jsonResponse->numEmpleado;
            $_SESSION['Nombre'] = $jsonResponse->nombre . " " . $jsonResponse->paterno . " " . $jsonResponse->materno;
            $json .= '{"estatus":"ok","location":"inicio.php","cveUsuario":"' . $cveUsuario . '"}';
        } else {
            $json .= '{"estatus":"fail"}';
        }
    } else {
        $json .= '{"estatus":"fail"}';
    }

    echo $json;
}
