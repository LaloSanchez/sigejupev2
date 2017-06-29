<?php

class ApelacionCateosServer {

    public function __construct() {
        
    }

    public function consultaSolicitudesApelacion($u, $p, $jsonsolicitudApelacionCateo) {
        require_once(dirname(__FILE__) . "/../../../controladores/sigejupe/apelacioncateos/ApelacioncateosController.Class.php");
        #USUARIO CONTRASEÑA: 3lectronic0_Poder2014--2014Poder_3lectronic0
//        if ($this->isValid(sha1($u), sha1($p))) {            
//        } else {
        if ($jsonsolicitudApelacionCateo != "") {
            if ($this->isJSON($jsonsolicitudApelacionCateo)) {

                $errorGeneral = false;
                $notfound = " No se encontro el campo: ";
                $mensaje = array();
                $solicitudApelacion = json_decode($jsonsolicitudApelacionCateo, true);

                #Valida clave usuario
                if (!array_key_exists("cveUsuario", $solicitudApelacion)) {
                    $errorGeneral = true;
                    $mensaje[] = $notfound . " cveUsuario";
                } else {
                    if ($solicitudApelacion["cveUsuario"] == "" || $solicitudApelacion["cveUsuario"] == "0") {
                        $errorGeneral = true;
                        $mensaje[] = "El campo cveUsuario no puede ser vacio o 0";
                    }
                }

                #Valida numero de cateo
                if (!array_key_exists("numeroCateo", $solicitudApelacion)) {
                    $errorGeneral = true;
                    $mensaje[] = $notfound . " numeroCateo";
                }

                #Valida anio de cateo
                if (!array_key_exists("anioCateo", $solicitudApelacion)) {
                    $errorGeneral = true;
                    $mensaje[] = $notfound . " anioCateo";
                }

                #Valida clave de Juzgado
                if (!array_key_exists("cveJuzgado", $solicitudApelacion)) {
                    $errorGeneral = true;
                    $mensaje[] = $notfound . " cveJuzgado";
                }

                if (!$errorGeneral) {
                    $solicitudApelacion["paginacion"] = true;
                    $ctr = new ApelacioncateosController();
                    $resultado = $ctr->consultaCateosInformacionApelacion("1", $solicitudApelacion, "WS");

                    return json_encode($resultado);
                } else {
                    $mensajeErrorArray = substr($mensajeErrorArray, 0, -2);
                    return json_encode(["type" => "ERROR", "text" => $mensaje]);
                }
            }
            return "ERROR: JSON INCORRECTO";
        } else {
            return "ERROR: JSON VACIO";
        }
//            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
//        }
    }

    public function guardarApelacion($u, $p, $jsonApelacionCateo) {
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/apelacioncateos/ApelacioncateosController.Class.php");
        include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelacioncateos/ApelacioncateosDTO.Class.php");
        #USUARIO CONTRASEÑA: 3lectronic0_Poder2014--2014Poder_3lectronic0
//        if ($this->isValid(sha1($u), sha1($p))) {            
        if ($jsonApelacionCateo != "") {
            if ($this->isJSON($jsonApelacionCateo)) {
                $errorGeneral = false;
                $notfound = " No se encontro el campo: ";
                $mensaje = array();

                $apelacion = json_decode($jsonApelacionCateo, true);

                #Valida clave usuario
                if (!array_key_exists("cveUsuario", $apelacion)) {
                    $errorGeneral = true;
                    $mensaje[] = $notfound . " cveUsuario";
                } else {
                    if ($apelacion["cveUsuario"] == "" || $apelacion["cveUsuario"] == "0") {
                        $errorGeneral = true;
                        $mensaje[] = "El campo cveUsuario no puede ser vacio o 0";
                    }
                }

                #Valida clave usuario
                if (!array_key_exists("idCateo", $apelacion)) {
                    $errorGeneral = true;
                    $mensaje[] = $notfound . " idCateo";
                } else {
                    if ($apelacion["idCateo"] == "" || $apelacion["idCateo"] == "0") {
                        $errorGeneral = true;
                        $mensaje[] = "El campo idCateo no puede ser vacio o 0";
                    }
                }

                #Valida clave usuario
                if (!array_key_exists("agravios", $apelacion)) {
                    $errorGeneral = true;
                    $mensaje[] = $notfound . " agravios";
                } else {
                    if ($apelacion["agravios"] == "" || $apelacion["agravios"] == "0") {
                        $errorGeneral = true;
                        $mensaje[] = "El campo agravios no puede ser vacio o 0";
                    }
                }

                #Valida clave usuario
                if (!array_key_exists("apelacion", $apelacion)) {
                    $errorGeneral = true;
                    $mensaje[] = $notfound . " apelacion";
                } else {
                    if ($apelacion["apelacion"] == "" || $apelacion["apelacion"] == "0") {
                        $errorGeneral = true;
                        $mensaje[] = "El campo agravios no puede ser vacio o 0";
                    }
                }

                if (!$errorGeneral) {
                    $apelacionDto = new ApelacioncateosDTO();
                    $apelacionDto->setIdCateo($apelacion["idCateo"]);
                    $apelacionDto->setAgravios($apelacion["agravios"]);
                    $apelacionDto->setEscritoApelacion($apelacion["apelacion"]);
                    $ctr = new ApelacioncateosController();
                    $resultado = $ctr->insertApelacioncateos($apelacionDto, [], "WS");

                    return json_encode($resultado);
                } else {
                    $mensajeErrorArray = substr($mensajeErrorArray, 0, -2);
                    return json_encode(["type" => "ERROR", "text" => $mensaje]);
                }
            }
            return json_encode(["type" => "Error", "text" => "JSON Incorrecto"]);
        }
        return json_encode(["type" => "Error", "text" => "JSON Vacio"]);


//        } else {
//            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
//        }
    }

    public function detalleCateo($u, $p, $jsonCateo) {
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/apelacioncateos/ApelacioncateosController.Class.php");
        #USUARIO CONTRASEÑA: 3lectronic0_Poder2014--2014Poder_3lectronic0
//        if ($this->isValid(sha1($u), sha1($p))) {            
        if ($jsonCateo != "") {
            if ($this->isJSON($jsonCateo)) {
                $errorGeneral = false;
                $notfound = " No se encontro el campo: ";
                $mensaje = array();

                $cateo = json_decode($jsonCateo, true);
                #Valida clave usuario
                if (!array_key_exists("idCateo", $cateo)) {
                    $errorGeneral = true;
                    $mensaje[] = $notfound . " idCateo";
                } else {
                    if ($cateo["idCateo"] == "" || $cateo["idCateo"] == "0") {
                        $errorGeneral = true;
                        $mensaje[] = "El campo idCateo no puede ser vacio o 0";
                    }
                }

                if (!$errorGeneral) {
                    $ctr = new ApelacioncateosController();
                    $resultado = $ctr->consultarDetalleCateoApelacionWS($cateo["idCateo"]);
                    return json_encode($resultado);
                } else {
                    $mensajeErrorArray = substr($mensajeErrorArray, 0, -2);
                    return json_encode(["type" => "ERROR", "text" => $mensaje]);
                }
            }
            return json_encode(["type" => "Error", "text" => "JSON Incorrecto"]);
        }
        return json_encode(["type" => "Error", "text" => "JSON Vacio"]);


//        } else {
//            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
//        }
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

    private function isJSON($string) {
        return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
    }

}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("ApelacionCateosServerScramble.wsdl");
$server->setClass("ApelacionCateosServer");
$server->handle();
?>

