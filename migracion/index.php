<?php

include_once(dirname(__FILE__) . "/app/appConfig.php");

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm=""');
    header('HTTP/1.0 401 Unauthorized');
    echo '<h1>HTTP/1.0 401 Authorization Required<h1>';
    exit;
} else {
    $user = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];

    $mysqli = new mysqli(hostOrigen, $user, $password, "", portOrigen);

    if ($mysqli->connect_error) {
        die("Error en la conexion : " . $mysqli->connect_errno .
                "-" . $mysqli->connect_error);
        exit(0);
    }
    
    header('Location: migracion.php');
}
?>

