<?php

 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionsalas/AtencionsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/atencionsalas/AtencionsalasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class AtencionsalasFacade {

    public function validarAtencionsalas($AtencionsalasDto) {
        $AtencionsalasDto->setidAtencionSala(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionsalasDto->getidAtencionSala(), "utf8") : strtoupper($AtencionsalasDto->getidAtencionSala()))))));
        if ($this->esFecha($AtencionsalasDto->getidAtencionSala())) {
            $AtencionsalasDto->setidAtencionSala($this->fechaMysql($AtencionsalasDto->getidAtencionSala()));
        }
        $AtencionsalasDto->setcveSala(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionsalasDto->getcveSala(), "utf8") : strtoupper($AtencionsalasDto->getcveSala()))))));
        if ($this->esFecha($AtencionsalasDto->getcveSala())) {
            $AtencionsalasDto->setcveSala($this->fechaMysql($AtencionsalasDto->getcveSala()));
        }
        $AtencionsalasDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionsalasDto->getcveJuzgado(), "utf8") : strtoupper($AtencionsalasDto->getcveJuzgado()))))));
        if ($this->esFecha($AtencionsalasDto->getcveJuzgado())) {
            $AtencionsalasDto->setcveJuzgado($this->fechaMysql($AtencionsalasDto->getcveJuzgado()));
        }
        $AtencionsalasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionsalasDto->getfechaRegistro(), "utf8") : strtoupper($AtencionsalasDto->getfechaRegistro()))))));
        if ($this->esFecha($AtencionsalasDto->getfechaRegistro())) {
            $AtencionsalasDto->setfechaRegistro($this->fechaMysql($AtencionsalasDto->getfechaRegistro()));
        }
        $AtencionsalasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionsalasDto->getfechaActualizacion(), "utf8") : strtoupper($AtencionsalasDto->getfechaActualizacion()))))));
        if ($this->esFecha($AtencionsalasDto->getfechaActualizacion())) {
            $AtencionsalasDto->setfechaActualizacion($this->fechaMysql($AtencionsalasDto->getfechaActualizacion()));
        }
        $AtencionsalasDto->setcveCondicion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionsalasDto->getcveCondicion(), "utf8") : strtoupper($AtencionsalasDto->getcveCondicion()))))));
        if ($this->esFecha($AtencionsalasDto->getcveCondicion())) {
            $AtencionsalasDto->setcveCondicion($this->fechaMysql($AtencionsalasDto->getcveCondicion()));
        }

        return $AtencionsalasDto;
    }

    public function procesar($idJuzgado) {
        $atencionSalasController = new AtencionsalasController();
        $atencionSalasResponse = $atencionSalasController->procesar($idJuzgado);

        return json_encode($atencionSalasResponse);
    }

    public function guardar($data) {
        $atencionSalasController = new AtencionsalasController();
        $atencionSalasResponse = $atencionSalasController->guardar($data);

        return json_encode($atencionSalasResponse);
    }

    public function selectAtencionsalas($AtencionsalasDto) {
        $AtencionsalasDto = $this->validarAtencionsalas($AtencionsalasDto);
        $AtencionsalasController = new AtencionsalasController();
        $AtencionsalasDto = $AtencionsalasController->selectAtencionsalas($AtencionsalasDto);
        if ($AtencionsalasDto != "") {
            $dtoToJson = new DtoToJson($AtencionsalasDto);

            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertAtencionsalas($AtencionsalasDto) {
        $AtencionsalasDto = $this->validarAtencionsalas($AtencionsalasDto);
        $AtencionsalasController = new AtencionsalasController();
        $AtencionsalasDto = $AtencionsalasController->insertAtencionsalas($AtencionsalasDto);
        if ($AtencionsalasDto != "") {
            $dtoToJson = new DtoToJson($AtencionsalasDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateAtencionsalas($AtencionsalasDto) {
        $AtencionsalasDto = $this->validarAtencionsalas($AtencionsalasDto);
        $AtencionsalasController = new AtencionsalasController();
        $AtencionsalasDto = $AtencionsalasController->updateAtencionsalas($AtencionsalasDto);
        if ($AtencionsalasDto != "") {
            $dtoToJson = new DtoToJson($AtencionsalasDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteAtencionsalas($AtencionsalasDto) {
        $AtencionsalasDto = $this->validarAtencionsalas($AtencionsalasDto);
        $AtencionsalasController = new AtencionsalasController();
        $AtencionsalasDto = $AtencionsalasController->deleteAtencionsalas($AtencionsalasDto);
        if ($AtencionsalasDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function getatencionsalasbycveadscripcion() {
        $atencionSalasController = new AtencionsalasController();
        $atencionSalasResponse = $atencionSalasController->getatencionsalasbycveadscripcion();
        return json_encode($atencionSalasResponse);
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

}

@$idAtencionSala = $_POST["idAtencionSala"];
@$cveSala = $_POST["cveSala"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$cveCondicion = $_POST["cveCondicion"];
@$accion = $_POST["accion"];
@$idJuzgado = $_POST['idJuzgado'];

$atencionsalasFacade = new AtencionsalasFacade();
$atencionsalasDto = new AtencionsalasDTO();

if (isset($_POST['accion']) && $_POST['accion'] != 'guardar') {

    $atencionsalasDto->setIdAtencionSala($idAtencionSala);
    $atencionsalasDto->setCveSala($cveSala);
    $atencionsalasDto->setCveJuzgado($cveJuzgado);
    $atencionsalasDto->setFechaRegistro($fechaRegistro);
    $atencionsalasDto->setFechaActualizacion($fechaActualizacion);
    $atencionsalasDto->setCveCondicion($cveCondicion);
}


if ($accion === 'procesar') {
    $atencionsalas = $atencionsalasFacade->procesar($idJuzgado);
    echo $atencionsalas;
} else if (isset($_POST['accion']) && $_POST['accion'] === 'guardar') {
    $data = $_POST;
    $response = $atencionsalasFacade->guardar($data);
    echo $response;
} else if ($accion == "consultar") {
    $atencionsalasDto = $atencionsalasFacade->selectAtencionsalas($atencionsalasDto);
    echo $atencionsalasDto;
} else if ($accion == 'getatencionsalasbycveadscripcion') {
    $atencionsalasDto = $atencionsalasFacade->getatencionsalasbycveadscripcion();
    echo $atencionsalasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}