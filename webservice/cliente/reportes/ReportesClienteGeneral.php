<?php

class ReportesClienteGeneral {

    public function selectDAO($json, $fuente) {
        ini_set("default_socket_timeout", 200);
        ini_set("soap.wsdl_cache_enabled", "0");
        /* $fuente  1 = SIGEJUPE
         *          2 = MASC
         *          3 =  electronico
         *          4 = gestion  */
        switch ($fuente) {
            case 1:
                $indicadorCliente = new SoapClient("http://localhost/sigejupe/desarrollo/webservice/servidor/indicadores/ReportesServerScramble.wsdl");
                break;
            case 2:
                $indicadorCliente = new SoapClient("http://localhost/mediacion/webservice/servidor/indicadores/ReportesServerScramble.wsdl");
                break;
            case 3:
                $indicadorCliente = new SoapClient("http://dticursos.pjedomex.gob.mx/electronico/webservice/servidor/indicadores/IndicadoresServerScramble.wsdl");
                break;
            case 4:
                $json = substr($json,0, -1);
                $json.=',"nameResults":"resultados"}';
                $indicadorCliente = new SoapClient("http://gestion.pjedomex.gob.mx/gestion2/gestion3/webservice/servidor/indicadores/ReportesServerScramble.wsdl");
                break;
        }

        return @$indicadorCliente->selectDAO($json);
    }

    public function cargarCombos($json,$fuente) {
        ini_set("default_socket_timeout", 200);
        ini_set("soap.wsdl_cache_enabled", "0");
        $reporteCliente=null;
        switch ($fuente) {
            case 1:
                $indicadorCliente = new SoapClient("http://localhost/sigejupe/desarrollo/webservice/servidor/indicadores/IndicadoresServerScramble.wsdl");
                $reporteCliente=$indicadorCliente->cargarCombos($json);
                break;
            case 2://aun no implementado
                //$indicadorCliente = new SoapClient("http://localhost:8080/mediacion/webservice/servidor/indicadores/IndicadoresServerScramble.wsdl");
                break;
            case 3://aun no implementado
                //$indicadorCliente = new SoapClient("http://localhost:8080/electronico/desarrollo/electronico/webservice/servidor/indicadores/IndicadoresServerScramble.wsdl");
                break;
            case 4:
                $indicadorCliente = new SoapClient("http://localhost/gestion3/webservice/servidor/indicadores/ReportesServerScramble.wsdl");
                $reporteCliente=$indicadorCliente->cargarCombos($json);
                break;
        }
        if($reporteCliente==null){
            return '{"type":"fail","mensaje":"No se ha desarrollado el cargar combos para el sistema: '.$fuente.'"}';
        }
        return $reporteCliente;
    }

}

?>
