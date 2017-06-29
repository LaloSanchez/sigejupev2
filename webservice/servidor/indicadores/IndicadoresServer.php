<?php

include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

class IndicadoresServer {

    public function selectDAO($json = "", $u, $c) {
        if ($json != "") {
            $decode_JSON = new Decode_JSON();
            $json = $decode_JSON->decode($json, true);
            if (!is_null($json)) {
                $paginacion = array();
                $bandera=0;
                if ($json["pag"] != "") {
                    $paginacion["pag"] = $json["pag"];
                    $bandera=1;
                }
                if ($json["cantxPag"] != "") {
                    $paginacion["cantxPag"] = $json["cantxPag"];
                    $bandera=1;
                }
                if ($json["paginacion"] != "") {
                    $paginacion["paginacion"] = $json["paginacion"];
                    $bandera=1;
                }
                if($bandera==0){
                    $paginacion=null;
                }
                $query = array();
                $query["fields"] = $json['fields'];
                if ($json['tables'] != "") {
                    $query["tables"] = $json['tables'];
                }
                if ($json['conditions'] != "") {
                    $query["conditions"] = $json['conditions'];
                }
                if ($json['orders'] != "") {
                    $query["orders"] = $json["orders"];
                }
                if ($json['groups'] != "") {
                    $query["groups"] = $json["groups"];
                }
                $SelectDao = new SelectDAO();
                return $SelectDao->selectDAO($query, null, $paginacion);
//                return $SelectDao->selectDAO($query, null, $paginacion,false,true); //Imprime el query
            } else {
                $json = new Encode_JSON();
                return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON no tiene la estructura correcta")));
            }
        }
    }

    private function acciones($accion, $datos) {

        return $resultado . ',"fechaBaseDatos":"' . $this->getFechaBaseDatos() . '"}';
    }

    private function getFechaBaseDatos() {
        $params = array();
        $select = new SelectDAO();
        $params["fields"] = "DATE_FORMAT(now(),'%d/%m/%Y %H:%i') AS fecha";
        $json = $select->selectDAO($params);
        $decode_JSON = new Decode_JSON();
        $json = $decode_JSON->decode($json, true);
        return $json["resultados"][0]->fecha;
    }

}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("IndicadoresServerScramble.wsdl");
$server->setClass("IndicadoresServer");
$server->handle();
?>
