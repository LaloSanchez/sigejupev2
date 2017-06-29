<?php

//ConfigutacionHojas
include_once(dirname(__FILE__) . "/../../../model/dto/configuracionhojas/ConfiguracionHojasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../model/dao/configuracionhojas/ConfiguracionHojasDAO.Class.php");

//Librerias
include_once(dirname(__FILE__) . "/../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");

class ConfiguracionHojasServer {

    public function insertConfiguracionHojas($json, $u = "", $p = "") {
        if ($this->isValid(sha1($u), sha1($p))) {
            if ($json != "") {
                $decode_JSON = new Decode_JSON();
                $json = $decode_JSON->decode($json, true);

                if (!is_null($json)) {
                    $configuracionHojasDTO = new ConfiguracionHojasDTO();
                    $configuracionHojasDTO->setTipoEscaner($json["tipoEscaner"]);
                    $configuracionHojasDTO->setTipoPapel($json["tipoPapel"]);
                    $configuracionHojasDAO = new ConfiguracionHojasDAO();
                    $tmp = $configuracionHojasDAO->selectConfiguracionHojas($configuracionHojasDTO);


                    if ($tmp == "") {
                        $configuracionHojasDTO->setPeso($json["peso"]);
                        $configuracionHojasDTO = $configuracionHojasDAO->insertConfiguracionHojas($configuracionHojasDTO);
                    } else {
                        $configuracionHojasDTO->setIdConfiguracionHojas($tmp[0]->getIdConfiguracionHojas());
                        $configuracionHojasDTO->setTipoEscaner($json["tipoEscaner"]);
                        $configuracionHojasDTO->setTipoPapel($json["tipoPapel"]);
                        $configuracionHojasDTO->setPeso($json["peso"]);
                        $configuracionHojasDTO = $configuracionHojasDAO->updateConfiguracionHojas($configuracionHojasDTO);
                    }

                    $dtoToJson = new DtoToJson($configuracionHojasDTO);
                    return $dtoToJson->toJsonConfig("Alta de Configuracion Hojas correcta", "OK");
                } else {
                    $json = new Encode_JSON();
                    return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON no tiene la estructura correcta")));
                }
            } else {
                $json = new Encode_JSON();
                return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON se encuentra en blanco")));
            }
        } else {
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
        }
    }

    public function consultarConfiguracionHojas($json, $u = "", $p = "") {
        if ($this->isValid(sha1($u), sha1($p))) {
            if ($json != "") {
                $decode_JSON = new Decode_JSON();
                $json = $decode_JSON->decode($json, true);

                if (!is_null($json)) {
                    $configuracionHojasDTO = new ConfiguracionHojasDTO();
                    $configuracionHojasDTO->setTipoEscaner($json["tipoEscaner"]);
                    $configuracionHojasDTO->setTipoPapel($json["tipoPapel"]);
                    $configuracionHojasDTO->setPeso($json["peso"]);
                    $configuracionHojasDAO = new ConfiguracionHojasDAO();
                    $configuracionHojasDTO = $configuracionHojasDAO->selectConfiguracionHojas($configuracionHojasDTO);
                    $dtoToJson = new DtoToJson($configuracionHojasDTO);
                    return $dtoToJson->toJsonConfig("Consulta correcta", "OK");
                } else {
                    $json = new Encode_JSON();
                    return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON no tiene la estructura correcta")));
                }
            } else {
                $json = new Encode_JSON();
                return utf8_encode($json->convert(array("Tipo" => "Error", "mensaje" => "El JSON se encuentra en blanco")));
            }
        } else {
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
        }
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

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("ConfiguracionHojasScramble.wsdl");
$server->setClass("ConfiguracionHojasServer");
$server->handle();

//$json = '{"tipoEscaner":"EPSON GT-S55","tipoPapel":"Carta", "peso":"50"}';
//$json='{"nombre":"direccionTemporal","valorAnterior":"","valor":"RUTA","usuario":"admin","cveEdificio":"15"}';
//$ConfiguracionHojasServer = new ConfiguracionHojasServer();
//echo $ConfiguracionHojasServer->insertConfiguracionHojas($json, "3lectronic0_Poder2014", "2014Poder_3lectronic0");
//echo $ConfiguracionHojasServer->consultaConstantes(17, "3lectronic0_Poder2014", "2014Poder_3lectronic0");
?>
