<?php
class ReportesCliente {
    public function selectDAO($json) {
        ini_set("default_socket_timeout", 200);
        ini_set("soap.wsdl_cache_enabled", "0");
        $reporteCliente = new SoapClient("http://localhost/sigejupe/desarrollo/webservice/servidor/reportes/ReportesServerScramble.wsdl");
        return $reporteCliente->selectDAO($json);
    }
    public function cargarCombos($json) {
        ini_set("default_socket_timeout", 200);
        ini_set("soap.wsdl_cache_enabled", "0");
        $reporteCliente = new SoapClient("http://localhost/sigejupe/desarrollo/webservice/servidor/reportes/ReportesServerScramble.wsdl");
        return $reporteCliente->cargarCombos($json); 
    }
}
?>
