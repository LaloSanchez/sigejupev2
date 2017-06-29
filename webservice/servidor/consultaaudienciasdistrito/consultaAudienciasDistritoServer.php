<?php

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/salas/SalasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/defensoresimputadoscarpetas/DefensoresimputadoscarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/audiencias/AudienciasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class consultaAudienciasDistritoServer {
    
    public function validarAudiencias($AudienciasDto) {
        $AudienciasDto->setidAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getidAudiencia(), "utf8") : strtoupper($AudienciasDto->getidAudiencia()))))));
        if ($this->esFecha($AudienciasDto->getidAudiencia())) {
            $AudienciasDto->setidAudiencia($this->fechaMysql($AudienciasDto->getidAudiencia()));
        }
        $AudienciasDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getidSolicitudAudiencia(), "utf8") : strtoupper($AudienciasDto->getidSolicitudAudiencia()))))));
        if ($this->esFecha($AudienciasDto->getidSolicitudAudiencia())) {
            $AudienciasDto->setidSolicitudAudiencia($this->fechaMysql($AudienciasDto->getidSolicitudAudiencia()));
        }
        $AudienciasDto->setnumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getnumero(), "utf8") : strtoupper($AudienciasDto->getnumero()))))));
        if ($this->esFecha($AudienciasDto->getnumero())) {
            $AudienciasDto->setnumero($this->fechaMysql($AudienciasDto->getnumero()));
        }
        $AudienciasDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getanio(), "utf8") : strtoupper($AudienciasDto->getanio()))))));
        if ($this->esFecha($AudienciasDto->getanio())) {
            $AudienciasDto->setanio($this->fechaMysql($AudienciasDto->getanio()));
        }
        $AudienciasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveTipoCarpeta(), "utf8") : strtoupper($AudienciasDto->getcveTipoCarpeta()))))));
        if ($this->esFecha($AudienciasDto->getcveTipoCarpeta())) {
            $AudienciasDto->setcveTipoCarpeta($this->fechaMysql($AudienciasDto->getcveTipoCarpeta()));
        }
        $AudienciasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getactivo(), "utf8") : strtoupper($AudienciasDto->getactivo()))))));
        if ($this->esFecha($AudienciasDto->getactivo())) {
            $AudienciasDto->setactivo($this->fechaMysql($AudienciasDto->getactivo()));
        }
        $AudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getfechaRegistro(), "utf8") : strtoupper($AudienciasDto->getfechaRegistro()))))));
        if ($this->esFecha($AudienciasDto->getfechaRegistro())) {
            $AudienciasDto->setfechaRegistro($this->fechaMysql($AudienciasDto->getfechaRegistro()));
        }
        $AudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getfechaActualizacion(), "utf8") : strtoupper($AudienciasDto->getfechaActualizacion()))))));
        if ($this->esFecha($AudienciasDto->getfechaActualizacion())) {
            $AudienciasDto->setfechaActualizacion($this->fechaMysql($AudienciasDto->getfechaActualizacion()));
        }
        $AudienciasDto->setfechaInicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getfechaInicial(), "utf8") : strtoupper($AudienciasDto->getfechaInicial()))))));
        if ($this->esFecha($AudienciasDto->getfechaInicial())) {
            $AudienciasDto->setfechaInicial($this->fechaMysql($AudienciasDto->getfechaInicial()));
        }
        $AudienciasDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getfechaFinal(), "utf8") : strtoupper($AudienciasDto->getfechaFinal()))))));
        if ($this->esFecha($AudienciasDto->getfechaFinal())) {
            $AudienciasDto->setfechaFinal($this->fechaMysql($AudienciasDto->getfechaFinal()));
        }
        $AudienciasDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveCatAudiencia(), "utf8") : strtoupper($AudienciasDto->getcveCatAudiencia()))))));
        if ($this->esFecha($AudienciasDto->getcveCatAudiencia())) {
            $AudienciasDto->setcveCatAudiencia($this->fechaMysql($AudienciasDto->getcveCatAudiencia()));
        }
        $AudienciasDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveJuzgado(), "utf8") : strtoupper($AudienciasDto->getcveJuzgado()))))));
        if ($this->esFecha($AudienciasDto->getcveJuzgado())) {
            $AudienciasDto->setcveJuzgado($this->fechaMysql($AudienciasDto->getcveJuzgado()));
        }
        $AudienciasDto->setcveJuzgadoDesahoga(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveJuzgadoDesahoga(), "utf8") : strtoupper($AudienciasDto->getcveJuzgadoDesahoga()))))));
        if ($this->esFecha($AudienciasDto->getcveJuzgadoDesahoga())) {
            $AudienciasDto->setcveJuzgadoDesahoga($this->fechaMysql($AudienciasDto->getcveJuzgadoDesahoga()));
        }
        $AudienciasDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveAdscripcionSolicita(), "utf8") : strtoupper($AudienciasDto->getcveAdscripcionSolicita()))))));
        if ($this->esFecha($AudienciasDto->getcveAdscripcionSolicita())) {
            $AudienciasDto->setcveAdscripcionSolicita($this->fechaMysql($AudienciasDto->getcveAdscripcionSolicita()));
        }
        $AudienciasDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveUsuario(), "utf8") : strtoupper($AudienciasDto->getcveUsuario()))))));
        if ($this->esFecha($AudienciasDto->getcveUsuario())) {
            $AudienciasDto->setcveUsuario($this->fechaMysql($AudienciasDto->getcveUsuario()));
        }
        $AudienciasDto->setidReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getidReferencia(), "utf8") : strtoupper($AudienciasDto->getidReferencia()))))));
        if ($this->esFecha($AudienciasDto->getidReferencia())) {
            $AudienciasDto->setidReferencia($this->fechaMysql($AudienciasDto->getidReferencia()));
        }
        $AudienciasDto->setdetenido(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getdetenido(), "utf8") : strtoupper($AudienciasDto->getdetenido()))))));
        if ($this->esFecha($AudienciasDto->getdetenido())) {
            $AudienciasDto->setdetenido($this->fechaMysql($AudienciasDto->getdetenido()));
        }
        $AudienciasDto->setcveEstatusAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveEstatusAudiencia(), "utf8") : strtoupper($AudienciasDto->getcveEstatusAudiencia()))))));
        if ($this->esFecha($AudienciasDto->getcveEstatusAudiencia())) {
            $AudienciasDto->setcveEstatusAudiencia($this->fechaMysql($AudienciasDto->getcveEstatusAudiencia()));
        }
        $AudienciasDto->setcveSala(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getcveSala(), "utf8") : strtoupper($AudienciasDto->getcveSala()))))));
        if ($this->esFecha($AudienciasDto->getcveSala())) {
            $AudienciasDto->setcveSala($this->fechaMysql($AudienciasDto->getcveSala()));
        }
        $AudienciasDto->setpeso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getpeso(), "utf8") : strtoupper($AudienciasDto->getpeso()))))));
        if ($this->esFecha($AudienciasDto->getpeso())) {
            $AudienciasDto->setpeso($this->fechaMysql($AudienciasDto->getpeso()));
        }
        $AudienciasDto->setvariable(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AudienciasDto->getvariable(), "utf8") : strtoupper($AudienciasDto->getvariable()))))));
        if ($this->esFecha($AudienciasDto->getvariable())) {
            $AudienciasDto->setvariable($this->fechaMysql($AudienciasDto->getvariable()));
        }
        return $AudienciasDto;
    }
    
    public function consultaAudienciasDistritos($json, $user = '', $pass = '') {
        if ($this->isValid(sha1($user), sha1($pass))) {
            if ($json != '' && $this->isJSON($json)) {
                $data = json_decode($json, true);
                $audienciasDto = new AudienciasDTO();
                $audienciasDto->setFechaInicial(@$data['fechaInicial']);
                $audienciasDto = $this->validarAudiencias($audienciasDto);
                $cveDistrito = @$data['cveDistrito'];
                $audienciasController = new AudienciasController();
                $audienciasDto = $audienciasController->consultaAudienciasDistrito($audienciasDto, $cveDistrito);

                return json_encode($audienciasDto);
            } else {
                $response = [
                    'estatus'    => 'error',
                    'totalCount' => 0,
                    'mensaje'    => json_encode('el parámetro de entrada no puede estar vacío y tiene que ser un json válido')
                ];
                return json_encode($response);
            }
        } else {
            $response = [
                'estatus'    => 'error',
                'totalCount' => 0,
                'mensaje'    => 'Usuario y contraseña incorrectos, verifica con informatica'
            ];
            return json_encode($response);
        }
    }
    
    private function isJSON($string) {
        json_decode($string);

        return (json_last_error() == JSON_ERROR_NONE);
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
    
    private function esFecha($fecha) {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function esFechaMysql($fecha) {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaHoraMysql($fecha) {
        if ($fecha != "") {
            list ($fechaAux, $hora) = explode(" ", $fecha);
            list($dia, $mes, $year) = explode("/", $fechaAux);
            return $year . "-" . $mes . "-" . $dia . " " . $hora;
        }
    }
    
}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("consultaAudienciasDistritoScramble.wsdl");
$server->setClass("consultaAudienciasDistritoServer");
$server->handle();

/*$consulta = new consultaAudienciasDistritoServer();

$obj = [
    "fechaInicial" => "2016-05-05",
    "cveDistrito" => ""
];

$d = json_encode($obj);

$datos = $consulta->consultaAudienciasDistritos($d, 'archivos', '46');
print_r($datos);*/