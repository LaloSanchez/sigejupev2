<?php

session_start();


include_once (dirname(__FILE__) . "/../../../webservice/cliente/gestion3/Gestion3Cliente.php");


class UsuariosGestion3 {

    public function __construct() {
        
    }

    public function validaUsuario($usuario) {
        $Gestion3Cliente = new Gestion3Cliente();
        return $Gestion3Cliente->validarUsuario($usuario);
    }

    public function guardaUsuario($data_usr,$id_zimbra) {
        $Gestion3Cliente = new Gestion3Cliente();
        return $Gestion3Cliente->guardaUsuario($data_usr,$id_zimbra);
    }

    public function consultaGrupo($grupo_activo) {
        $Gestion3Cliente = new Gestion3Cliente();
        return $Gestion3Cliente->consultaGrupo($grupo_activo);
    }

    public function consultaAdscripcion($grupo,$grupo_activo) {
        $Gestion3Cliente = new Gestion3Cliente();
        return $Gestion3Cliente->consultaAdscripcion($grupo,$grupo_activo);
    }

    public function cargaUsuario($cve_usuario) {
        $Gestion3Cliente = new Gestion3Cliente();
        return $Gestion3Cliente->cargaUsuario($cve_usuario);
    }

    public function consultaUsuarios($data_usr) {
        $Gestion3Cliente = new Gestion3Cliente();
        return $Gestion3Cliente->consultaUsuarios($data_usr);
    }

}

@$action = $_POST["action"];
@$usuario = $_POST["usuario"];
@$data_usr = $_POST["data_usr"];
@$grupo_activo = $_POST["grupo_activo"];
@$grupo = $_POST["grupo"];
@$id_zimbra = $_POST["id_zimbra"];
@$cve_usuario = $_POST["cve_usuario"];


if ($action !== '') {
    $usuariosg3 = new UsuariosGestion3();

    switch ($action) {
        case 'validaUsuario':
            $result = $usuariosg3->validaUsuario($usuario);
            echo $result;
            break;
        case 'guardaUsuario':
            $result = $usuariosg3->guardaUsuario($data_usr,$id_zimbra);
            echo $result;
            break;
        case 'consultaGrupo':
            $result = $usuariosg3->consultaGrupo($grupo_activo);
            echo $result;
            break;
        case 'consultar_adscripcion':
            $result = $usuariosg3->consultaAdscripcion($grupo,$grupo_activo);
            echo $result;
            break;
        case 'cargaUsuario':
            $user = $usuariosg3->cargaUsuario($cve_usuario);
            echo $user;
            break;
        case 'consultaUsuarios':
            $usuarios = $usuariosg3->consultaUsuarios($data_usr);
            echo $usuarios;
            break;
        default:
            # code...
            break;
    }



}
