<?php
//include_once(dirname(__FILE__) . "../../../controller/personasautorizadas/PersonasAutorizadasNotificacionesController.Class.php");
include_once '../../../controller/autorizarpersonas/AutorizaPersonasNotificacionesController.php';
class AutorizaPersonasServer {

    public function ServiceAutorizaPersonas($jsonRequest = "", $u, $p) {
        $autorizaPersonasNotificacionesController = new AutorizaPersonasNotificacionesController();
        $jsonResponse = $autorizaPersonasNotificacionesController->webService($jsonRequest);
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
    "type": "insert",
    "AutorizadaPersonas": [
        {
            "idtblRelacionExpedienteJuzgado": "",
            "fk_idtblJuzgados": "10160",
            "fk_idtblPersonaAutorizadas": "1",
            "fk_idtblTipoPersonaAsunto": "1",
            "fk_idtblTipoParteAsunto": "1",
            "CodigoBarras": "123",
            "NumExpediente": "1",
            "AnioExpediente": "2015",
            "FechaAlta": "2015-05-12",
            "FechaModificacion": "2015-05-12",
            "FechaBaja": "2015-05-12",
            "Observaciones": "2015-05-12",
            "Activo": "1",
            "TipoDocumento": "X",
            "Cedula": "123"
        }
    ]
}';
$autorizaPersonasServer = new AutorizaPersonasServer();
echo $autorizaPersonasServer->ServiceAutorizaPersonas($jsonRequest, $u, $p)
*/
ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("AutorizaPersonasServerScramble.wsdl");
$server->setClass("AutorizaPersonasServer");
$server->handle();
?>
