<?php

class FirmaElectronicaCliente {

    public function registrarDigestionWeb($datos, $datosActualizar) {
        $auxD = array();
        $auxD["datos"] = $datos;
        $auxD["datosActualizar"] = $datosActualizar;
        ini_set("default_socket_timeout", 300);
        ini_set("soap.wsdl_cache_enabled", "0");
        //$aux = new SoapClient("http://localhost:8080/electronicoB/webservice/servidor/firmaElectronica/FirmaElectronicaScramble.wsdl");
        $aux = new SoapClient("http://dticursos.pjedomex.gob.mx/electronico/webservice/servidor/firmaElectronica/FirmaElectronicaScramble.wsdl");
        return @$aux->registrarDigestionWeb(json_encode($auxD),'3lectronic0_Poder2014','2014Poder_3lectronic0');
    }
    
    public function actualizarDocumentosFirmados($datos, $datosActualizar) {
        $auxD = array();
        $auxD["datos"] = $datos;
        $auxD["datosActualizar"] = $datosActualizar;
        ini_set("default_socket_timeout", 300);
        ini_set("soap.wsdl_cache_enabled", "0");
        //$aux = new SoapClient("http://localhost:8080/electronicoB/webservice/servidor/firmaElectronica/FirmaElectronicaScramble.wsdl");
        $aux = new SoapClient("http://dticursos.pjedomex.gob.mx/electronico/webservice/servidor/firmaElectronica/FirmaElectronicaScramble.wsdl");
        return @$aux->actualizarDocumentoFirmado(json_encode($auxD),'3lectronic0_Poder2014','2014Poder_3lectronic0');
    }
    
    public function registrarDocumentosFirmados($datos) {
        $auxD = array();
        $auxD["datos"] = $datos;
        ini_set("default_socket_timeout", 300);
        ini_set("soap.wsdl_cache_enabled", "0");
        //$aux = new SoapClient("http://localhost:8080/electronicoB/webservice/servidor/firmaElectronica/FirmaElectronicaScramble.wsdl");
        $aux = new SoapClient("http://dticursos.pjedomex.gob.mx/electronico/webservice/servidor/firmaElectronica/FirmaElectronicaScramble.wsdl");
        return @$aux->registrarDocumentoFirmado(json_encode($auxD),'3lectronic0_Poder2014','2014Poder_3lectronic0');
    }

}

?>
