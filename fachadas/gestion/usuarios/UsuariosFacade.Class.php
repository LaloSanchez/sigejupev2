<?php

include_once dirname(__FILE__) . '/../../../webservice/cliente/usuarios/UsuarioCliente.php';
session_start();

if (isset($_POST)) {
    if (isset($_POST['cveUsuario']) && isset($_POST['pwd'])) {
        $usuarioWs = new UsuarioCliente();
        echo $usuarioWs->cambiarPwd($_POST['cveUsuario'], $_POST['pwd']);
    } else {
        echo "{\"status\": \"error\"}";
    }
} else {
    echo "{\"status\": \"error\"}";
}
?>