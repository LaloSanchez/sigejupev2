<?php
//include_once(dirname(__FILE__) . "../../../controller/personasautorizadas/PersonasAutorizadasNotificacionesController.Class.php");
include_once '../../../controller/personasautorizadas/PersonasAutorizadasNotificacionesController.php';
class PersonasAutorizadasServer {

    public function ServicePersonasAutorizadas($jsonRequest = "", $u, $p) {
        $personasAutorizadasNotificacionesController = new PersonasAutorizadasNotificacionesController();
        $jsonResponse = $personasAutorizadasNotificacionesController->webService($jsonRequest);
        return $jsonResponse;
    }

    private function isValid($user = "", $password = "") {
        $valido = false;
        if (is_dir("../" . $user) == true) {
            if (is_file("../" . $user . "/" . $password . ".pwsd") == true) {
                $valido = true;
            } else {
                $valido = false;
            }
        } else {
            $valido = false;
        }
        return $valido;
    }

}
/*
$jsonRequest = '{
    "type": "delete",
    "PersonaAutorizada": [
        {
            "idtblPersonaAutorizadas": "10",
            "Nombre": "a",
            "Paterno": "a",
            "Materno": "a",
            "Titulo": "a",
            "FechaNacimiento": "2015-05-12",
            "CURP": "1",
            "Cedula": "1",
            "email": "a",
            "Observaciones": "a",
            "FechaAlta": "2015-05-12",
            "FechaBaja": "2015-05-12",
            "FechaModificacion": "2015-05-12",
            "Activo": "1",
            "emailAlternativo": "a",
            "CveTipoAbogado": "1",
            "Usuario": "a",
            "Password": "b",
            "Subcuentas": "1",
            "Saldo": "1",
            "Direccion": "a",
            "Telefono": "1",
            "BuffeteNombre": "a",
            "BuffeteDireccion": "a",
            "BuffeteTelefono": "a",
            "UsuarioRegistro": "1",
            "JuzgadoRegistro": "1",
            "PasswordReg": "a",
            "Perito": "1",
            "CveEstado": "1",
            "CveEstatusRegistro": "2",
            "CveRegistroComprobante": "2",
            "StatusGenercionCorreo": "2",
            "NombreServidor": "a",
            "PasswordCifrado": "b",
            "SelloDigital": "a",
            "Ciudad": "1"
        }
    ]
}';
$personasAutorizadasServer = new PersonasAutorizadasServer();
echo $personasAutorizadasServer->ServicePersonasAutorizadas($jsonRequest, $u, $p)
*/
ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("PersonasAutorizadasServerScramble.wsdl");
$server->setClass("PersonasAutorizadasServer");
$server->handle();
?>
