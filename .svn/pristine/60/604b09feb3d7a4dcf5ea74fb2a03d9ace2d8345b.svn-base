<?php

class ConnectWS {
    #public $base_WS = "http://207..lexsys.net";

    public $base_WS = "http://pgjemsigi.edomex.gob.mx:3001";
    public $app_Secret = "20519b9d01d2e6b6e40b80523f3591630b1e759fe103fe7fea424d6a499069ed";
    public $app_Key = "cbbaf202-cc23-4bef-8ff2-b5f2c4c5bde3";
    public $secure_key = "";
    public $user_WS = "SIGEJUPE";
    public $password = "Tr1bun4l2016";
    public $method = "POST";

    public function __construct($user = "") {
        if ($user != "")
            $this->user_WS = $user;
        $this->secure_key = $this->loginWS();
    }

    /**
     * Inicia sesion para obtener el Sesion Key
     */
    private function loginWS() {
        $timestamp = $this->fechaUTC();
        $ruta = "/sessions";
        $parametros = '{"sessionKey":null,"expiration":null,"user":{},"position":{},"username":"' . $this->user_WS . '","authMethod":"P","positions":[],"password":"' . $this->password . '","session_key":null,"auth_method":"P"}';
        $digest = $this->method . "|" . $ruta . "|" . $timestamp . "|" . $this->app_Secret . "|" . $parametros;
        $digest = hash('sha256', $digest);
        $authorization = "WRT " . $this->app_Key . ":" . $digest;
        $url = $this->base_WS . $ruta;

        $resultadoLogin = $this->sendRequest($url, $parametros, $timestamp, $authorization);
        if ($resultadoLogin["meta"]["status"] == "ERROR") {
            return "";
        } else {
            return $resultadoLogin["response"]["session_key"];
        }
    }

    /**
     * Convierte una fecha en formato UTC
     * 
     * @param string $fecha Fecha en formato Y-m-d
     * @param string $hora Hora en formato H:i:s
     * @return string Fecha en formato UTC
     */
    public function fechaUTC($fecha = "", $hora = "") {
        date_default_timezone_set("UTC");

        if (empty($fecha))
            $fecha = date("Y-m-d");
        if (empty($hora))
            $hora = date("H:i:s");

        return $fecha . "T" . $hora . ".001Z";
    }

    /**
     * Inicia Session en el WS
     * 
     * @param type $url URL a la que se realizara la peticion
     * @param type $parametros Parametros que seran enviados a la peticion en formato json
     * @param type $timestamp Tiempo en el que se realiza la peticion
     * @param type $authorization Llave para el inicio de sesion
     * @return array 
     */
    public function sendRequest($url, $parametros, $timestamp, $authorization) {
        ob_start();
        $resultRequest = array();
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => $this->method,
                CURLOPT_POSTFIELDS => $parametros,
                CURLOPT_HTTPHEADER => array(
                    "Timestamp: " . $timestamp,
                    "Authorization:" . $authorization,
                    "content-type: application/json"
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $resultRequest = json_decode($response, true);
        } catch (Exception $e) {
            ob_end_clean();
            $resultRequest["meta"]["status"] = "Error";
            $resultRequest["meta"]["error_message"] = "Ocurrio un Error en el consumo del WS";
        }
        return $resultRequest;
    }

}

?>