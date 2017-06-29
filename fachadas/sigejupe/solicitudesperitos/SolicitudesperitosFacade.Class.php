<?php

//define('WP_DEBUG', true); // enable debugging mode
//ini_set("error_log", dirname(__FILE__) . "/../../../logs/SolicitudesperitosFacade.log");
//ini_set("log_errors", 1);
//ini_set('display_errors', 1);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesperitos/SolicitudesperitosDTO.Class.php");
    include_once(dirname(__FILE__) . '/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php');
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesperitos/SolicitudesperitosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class SolicitudesperitosFacade {

        private $proveedor; //

        public function __construct() {
            
        }

        public function validarSolicitudesperitos($SolicitudesperitosDto) {
            $SolicitudesperitosDto->setIdSolicitudPertioActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getIdSolicitudPertioActuacion(), "utf8") : strtoupper($SolicitudesperitosDto->getIdSolicitudPertioActuacion()))))));
            if ($this->esFecha($SolicitudesperitosDto->getIdSolicitudPertioActuacion())) {
                $SolicitudesperitosDto->setIdSolicitudPertioActuacion($this->fechaMysql($SolicitudesperitosDto->getIdSolicitudPertioActuacion()));
            }
            $SolicitudesperitosDto->setIdActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getIdActuacion(), "utf8") : strtoupper($SolicitudesperitosDto->getIdActuacion()))))));
            if ($this->esFecha($SolicitudesperitosDto->getIdActuacion())) {
                $SolicitudesperitosDto->setIdActuacion($this->fechaMysql($SolicitudesperitosDto->getnumActuacion()));
            }
            $SolicitudesperitosDto->setIdReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getIdReferencia(), "utf8") : strtoupper($SolicitudesperitosDto->getIdReferencia()))))));
            if ($this->esFecha($SolicitudesperitosDto->getIdReferencia())) {
                $SolicitudesperitosDto->setIdReferencia($this->fechaMysql($SolicitudesperitosDto->getIdReferencia()));
            }
            $SolicitudesperitosDto->setNumeroSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getNumeroSolicitud(), "utf8") : strtoupper($SolicitudesperitosDto->getNumeroSolicitud()))))));
            if ($this->esFecha($SolicitudesperitosDto->getNumeroSolicitud())) {
                $SolicitudesperitosDto->setNumeroSolicitud($this->fechaMysql($SolicitudesperitosDto->getNumeroSolicitud()));
            }
            $SolicitudesperitosDto->setAniSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getAniSolicitud(), "utf8") : strtoupper($SolicitudesperitosDto->getAniSolicitud()))))));
            if ($this->esFecha($SolicitudesperitosDto->getAniSolicitud())) {
                $SolicitudesperitosDto->setAniSolicitud($this->fechaMysql($SolicitudesperitosDto->getAniSolicitud()));
            }
            $SolicitudesperitosDto->setNumero(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getNumero(), "utf8") : strtoupper($SolicitudesperitosDto->getNumero()))))));
            if ($this->esFecha($SolicitudesperitosDto->getNumero())) {
                $SolicitudesperitosDto->setNumero($this->fechaMysql($SolicitudesperitosDto->getNumero()));
            }
            $SolicitudesperitosDto->setAnio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getAnio(), "utf8") : strtoupper($SolicitudesperitosDto->getAnio()))))));
            if ($this->esFecha($SolicitudesperitosDto->getAnio())) {
                $SolicitudesperitosDto->setAnio($this->fechaMysql($SolicitudesperitosDto->getAnio()));
            }
            $SolicitudesperitosDto->setCveTipoCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getCveTipoCarpeta(), "utf8") : strtoupper($SolicitudesperitosDto->getCveTipoCarpeta()))))));
            if ($this->esFecha($SolicitudesperitosDto->getCveTipoCarpeta())) {
                $SolicitudesperitosDto->setCveTipoCarpeta($this->fechaMysql($SolicitudesperitosDto->getCveTipoCarpeta()));
            }
            $SolicitudesperitosDto->setFechaSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getFechaSolicitud(), "utf8") : strtoupper($SolicitudesperitosDto->getFechaSolicitud()))))));
            if ($this->esFecha($SolicitudesperitosDto->getFechaSolicitud())) {
                $SolicitudesperitosDto->setFechaSolicitud($this->fechaMysql($SolicitudesperitosDto->getFechaSolicitud()));
            }
            $SolicitudesperitosDto->setIdPerito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getIdPerito(), "utf8") : strtoupper($SolicitudesperitosDto->getIdPerito()))))));
            if ($this->esFecha($SolicitudesperitosDto->getIdPerito())) {
                $SolicitudesperitosDto->setIdPerito($this->fechaMysql($SolicitudesperitosDto->getIdPerito()));
            }
            $SolicitudesperitosDto->setNombrePerito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getNombrePerito(), "utf8") : strtoupper($SolicitudesperitosDto->getNombrePerito()))))));
            if ($this->esFecha($SolicitudesperitosDto->getNombrePerito())) {
                $SolicitudesperitosDto->setNombrePerito($this->fechaMysql($SolicitudesperitosDto->getNombrePerito()));
            }
            $SolicitudesperitosDto->setMateriaPericial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getMateriaPericial(), "utf8") : strtoupper($SolicitudesperitosDto->getMateriaPericial()))))));
            if ($this->esFecha($SolicitudesperitosDto->getMateriaPericial())) {
                $SolicitudesperitosDto->setMateriaPericial($this->fechaMysql($SolicitudesperitosDto->getMateriaPericial()));
            }
            $SolicitudesperitosDto->setCveMateriaPericial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getCveMateriaPericial(), "utf8") : strtoupper($SolicitudesperitosDto->getCveMateriaPericial()))))));
            if ($this->esFecha($SolicitudesperitosDto->getCveMateriaPericial())) {
                $SolicitudesperitosDto->setCveMateriaPericial($this->fechaMysql($SolicitudesperitosDto->getCveMateriaPericial()));
            }
            $SolicitudesperitosDto->setCveRegionPericial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getCveRegionPericial(), "utf8") : strtoupper($SolicitudesperitosDto->getCveRegionPericial()))))));
            if ($this->esFecha($SolicitudesperitosDto->getCveRegionPericial())) {
                $SolicitudesperitosDto->setCveRegionPericial($this->fechaMysql($SolicitudesperitosDto->getCveRegionPericial()));
            }

            $SolicitudesperitosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SolicitudesperitosDto->getactivo(), "utf8") : strtoupper($SolicitudesperitosDto->getactivo()))))));
            if ($this->esFecha($SolicitudesperitosDto->getactivo())) {
                $SolicitudesperitosDto->setactivo($this->fechaMysql($SolicitudesperitosDto->getactivo()));
            }
            return $SolicitudesperitosDto;
        }

        public function selectSolicitudesperitos($SolicitudesperitosDto, $proveedor, $orden = "", $param, $fields = null) {
            $SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesperitosDto, $proveedor, $orden = "", $param, $fields = null);
            $SolicitudesperitosController = new SolicitudesperitosController();
            $SolicitudesperitosDto = $SolicitudesperitosController->selectSolicitudesperitos($SolicitudesperitosDto, $proveedor, $orden = "", $param, $fields = null);
            if ($SolicitudesperitosDto != "") {
                $dtoToJson = new DtoToJson($SolicitudesperitosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function generarJson($SolicitudesperitosDto, $cveTipoDocumento, $cveTipo, $param, $proveedor) {
            $SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesperitosDto, $proveedor, $orden = "", @$param, $fields = null);
            $SolicitudesperitosController = new SolicitudesperitosController();
            $SolicitudesperitosDto = $SolicitudesperitosController->generarJson($SolicitudesperitosDto, $cveTipoDocumento, $cveTipo, $param);
            if ($SolicitudesperitosDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $SolicitudesperitosDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function getPaginas($solicitudesperitosDto, $param) {
            $solicitudesperitosDto = $this->validarSolicitudesperitos($solicitudesperitosDto);
            $SolicitudesperitosController = new SolicitudesperitosController();
            $SolicitudesperitosDto = $SolicitudesperitosController->getPaginas($solicitudesperitosDto, $param);
            if ($SolicitudesperitosDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $SolicitudesperitosDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertSolicitudesperitos($SolicitudesperitosDto) {
            $SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesperitosDto);
            $SolicitudesperitosController = new SolicitudesperitosController();
            $SolicitudesperitosDto = $SolicitudesperitosController->insertSolicitudesperitos($SolicitudesperitosDto);
            if ($SolicitudesperitosDto != "") {
                $dtoToJson = new DtoToJson($SolicitudesperitosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateSolicitudesperitos($SolicitudesperitosDto) {
            $SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesperitosDto);
            $SolicitudesperitosController = new SolicitudesperitosController();
            $SolicitudesperitosDto = $SolicitudesperitosController->updateSolicitudesperitos($SolicitudesperitosDto);
            if ($SolicitudesperitosDto != "") {
                $dtoToJson = new DtoToJson($SolicitudesperitosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function ActualizarSolicitudesperitosWeb($SolicitudesperitosDto) {
            $SolicitudesPeritosDTO1 = new SolicitudesperitosDTO();
            $PeritosDTO1 = json_decode($SolicitudesperitosDto);
            $SolicitudesPeritosDTO1->setIdReferencia($PeritosDTO1->data[0]->idReferencia);
            $SolicitudesPeritosDTO1->setIdPerito($PeritosDTO1->data[0]->idPerito);
            $SolicitudesPeritosDTO1->setNombrePerito($PeritosDTO1->data[0]->nombrePerito);
            //$SolicitudesPeritosDTO1->setCveAdscripcion($PeritosDTO1->data[0]->cveAdscripcion);
            //$SolicitudesPeritosDTO1->setCveMateriaPericial($PeritosDTO1->data[0]->cveMateriaPericial);
            $SolicitudesPeritosDTO1->setActivo("S");
            //$SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesPeritosDTO1);
            $SolicitudesperitosController = new SolicitudesperitosController();
            $SolicitudesperitosDto = $SolicitudesperitosController->ActualizarSolicitudesperitosWeb($SolicitudesPeritosDTO1);
            if ($SolicitudesperitosDto != "") {
                $dtoToJson = new DtoToJson($SolicitudesperitosDto);
                return utf8_encode($dtoToJson->toJson("REGISTRO ACTUALIZADO"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteSolicitudesperitos($SolicitudesperitosDto) {
            $SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesperitosDto);
            $SolicitudesperitosController = new SolicitudesperitosController();
            $SolicitudesperitosDto = $SolicitudesperitosController->deleteSolicitudesperitos($SolicitudesperitosDto);
            if ($SolicitudesperitosDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        private function obtenerIdsActuacionHija($idActuacionPadre) {
            /*             * OBTIENE LOS IDS DE LAS ACTUACIONES HIJAS, A TRAVES DEL ID ACTUACION PADRE (en la tabla de antecedes)
             * * */
            $selectDao = new SelectDAO();
            $params["fields"] = "idActuacionHija";
            $params["tables"] = "tblantecedesactuaciones";
            $params["conditions"] = "activo='S' AND idActuacionPadre=" . $idActuacionPadre;
            $respuesta = $selectDao->selectDAOv2($params);
            $respuesta = json_decode($respuesta);
            if (!isset($respuesta->resultados)) {
                return "";
            }
            $aux = "";
            for ($i = 0; $i < $respuesta->totalCount; $i++) {
                $aux .= "idActuacion=" . $respuesta->resultados[$i]->idActuacionHija . " OR ";
            }
            return substr($aux, 0, -4);
        }

        public function consultarIdSolicitudPertioActuacion($idActuacionPerito) {
            /*             * Obtiene el idReferencia (idSolicitudPerito de la tabla solicitudesperitos del sistema de peritos) */
            if ($idActuacionPerito == "") {
                return '{"Estatus":"fail","totalCount":"0","mnj":"ERROR. NO SE PROPORCIONO EL IDACTUACIONPERITO"}';
            }
            $selectDao = new SelectDAO();
            $params["fields"] = "idSolicitudPertioActuacion,idReferencia";
            $params["tables"] = "tblsolicitudesperitosactuaciones";
            $params["conditions"] = "activo='S' AND idActuacion='" . $idActuacionPerito . "'";
            return $selectDao->selectDAOv2($params);
        }

        public function consultarSolicitudesPeritosProtestas($datos, $paginacion) {
            ini_set("default_socket_timeout", 600);
            ini_set("soap.wsdl_cache_enabled", "0");
            $soapCliente = new SoapClient("http://dticursos.pjedomex.gob.mx/peritos/webservice/servidor/solicitudesperitos/SolicitudesPeritosServer.php?wsdl");
            $json = '{"data":[{';
            $json .= '"numero":"' . $datos["numero"] . '",';
            $json .= '"anio":"' . $datos["anio"] . '",';
            $json .= '"cveTipoNumero":"' . $datos["cveTipoCarpeta"] . '",';
            $json .= '"cveAdscripcion":"' . $datos["cveAdscripcion"] . '",';
            $json .= '"cveMateriaPericial":"' . $datos["cveMateriaPericial"] . '",';
            $json .= '"nvaInstancia":"' . $datos["nvaInstancia"] . '",';
            $json .= '"cveMateria":"' . $datos["cveMateria"] . '"';
            $json .= '}],"paginacion":[{';
            $json .= '"paginacion":"' . $paginacion["paginacion"] . '",';
            $json .= '"pag":"' . $paginacion["pag"] . '",';
            $json .= '"cantxPag":"' . $paginacion["cantxPag"] . '",';
            $json .= '"fechaDesde":"' . $paginacion["fechaDesde"] . '",';
            $json .= '"fechaHasta":"' . $paginacion["fechaHasta"] . '"}]}';
            return $soapCliente->consultarSolicitudesProtestas($json, "", "");
        }

        public function consultarSolicitudesPeritos($solicitudesperitosDto, $paginacion) {
            $solicitudesperitosDto = $this->validarSolicitudesperitos($solicitudesperitosDto);
            $params = array();
            $selectDao = new SelectDAO();
            $params["fields"] = "idSolicitudPertioActuacion,idActuacion,idReferencia,numeroSolicitud,aniSolicitud,numero,anio,
            cveTipoCarpeta,fechaSolicitud,idPerito,nombrePerito,materiaPericial,cveMateriaPericial,cveRegionPericial,
            observaciones,cveJuzgado,idReferenciaActuacionHija,observaciones,activo,fechaRegistro,fechaActualizacion";
            $params["tables"] = "tblsolicitudesperitosactuaciones";
            $params["conditions"] = "activo='S'";
            if ($solicitudesperitosDto->getIdSolicitudPertioActuacion() != "") {
                $params["conditions"] .= " AND idSolicitudPertioActuacion=" . $solicitudesperitosDto->getIdSolicitudPertioActuacion();
            }
            if ($solicitudesperitosDto->getIdActuacion() != "") {
                $idsActuaciones = $this->obtenerIdsActuacionHija($solicitudesperitosDto->getIdActuacion());
                if ($idsActuaciones != "") {
                    $params["conditions"] .= " AND (" . $idsActuaciones . ")"; // son los ids del acuerdo o de las actas minimas
                }
            }
            if ($solicitudesperitosDto->getCveJuzgado() != "") {
                $params["conditions"] .= " AND cveJuzgado=" . $solicitudesperitosDto->getCveJuzgado();
            }
            if ($solicitudesperitosDto->getCveTipoCarpeta() != "") {
                $params["conditions"] .= " AND cveTipoCarpeta=" . $solicitudesperitosDto->getCveTipoCarpeta();
            }
            if ($solicitudesperitosDto->getCveMateriaPericial() != "") {
                $params["conditions"] .= " AND cveMateriaPericial=" . $solicitudesperitosDto->getCveMateriaPericial();
            }
            if ($solicitudesperitosDto->getNumero() != "") {
                $params["conditions"] .= " AND numero=" . $solicitudesperitosDto->getNumero();
            }
            if ($solicitudesperitosDto->getAnio() != "") {
                $params["conditions"] .= " AND anio=" . $solicitudesperitosDto->getAnio();
            }
            if (isset($paginacion["fechaDesde"]) && $paginacion["fechaDesde"] != "") {
                $fechaInicio = explode("/", $paginacion["fechaDesde"]);
                $params["conditions"] .= " AND fechaRegistro >='" . $fechaInicio[2] . "-" . $fechaInicio[1] . "-" . $fechaInicio[0] . " 00:00:00' ";
            }
            if (isset($paginacion["fechaHasta"]) && $paginacion["fechaHasta"] != "") {
                $fechaFinal = explode("/", $paginacion["fechaHasta"]);
                $params["conditions"] .= " AND fechaRegistro <= '" . $fechaFinal[2] . "-" . $fechaFinal[1] . "-" . $fechaFinal[0] . " 23:59:59 ' ";
            }
            $params["orders"] = "fechaRegistro DESC";
            $datos = $selectDao->selectDAOv2($params, null, $paginacion);
            $datos = json_decode($datos);
            if (!isset($datos->resultados)) {
                return json_encode($datos);
            }
            $paginacion["paginacion"] = false;
            $params["fields"] = "count(*) as totalCount";
            $totalReg = $selectDao->selectDAOv2($params, null, $paginacion);
            $totalReg = json_decode($totalReg);
            $datos->totalRegistros = $totalReg->resultados[0]->totalCount;
            return json_encode($datos);
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

    @$accion = $_POST["accion"];
    @$idActuacion = $_POST["idActuacion"];
    @$numActuacion = $_POST["numActuacion"];
    @$aniActuacion = $_POST["aniActuacion"];
    @$cveJuzgado = $_POST["cveJuzgado"];
    @$idReferencia = $_POST["idSolicitudPertioActuacion"];
    @$numero = $_POST["numero"];
    @$anio = $_POST["anio"];
    @$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
    @$cveTipoDocumento = $_POST["cveTipoNumero"];
    @$cveTipo = $_POST["cveTipo"];
    @$consultarProtestas = $_POST["consultarProtestas"];
    $param = array();
    @$param["paginacion"] = $_POST['paginacion'];
    @$param["pag"] = $_POST['pag'];
    @$param["cantxPag"] = $_POST['cantxPag'];
    @$param["paginacion"] = $_POST['paginacion'];
    @$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
    @$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
    @$param["generico"] = $_POST['generico'];
    @$param["asigNumero"] = $_POST['asigNumero'];
    @$param["Observaciones"] = $_POST['Observaciones'];

    $usuario = "";
    if (isset($_POST["usuario"])) {
        $usuario = $_POST["usuario"];
    }
    $solicitudesperitosFacade = new SolicitudesperitosFacade();
    $solicitudesperitosDto = new SolicitudesperitosDTO();
    $solicitudesperitosDto->setIdSolicitudPertioActuacion(@$idSolicitudPertioActuacion);
    $solicitudesperitosDto->setIdActuacion(@$idActuacion);
    $solicitudesperitosDto->setIdReferencia(@$idReferencia);
    $solicitudesperitosDto->setNumeroSolicitud(@$numeroSolicitud);
    $solicitudesperitosDto->setAniSolicitud(@$aniSolicitud);
    if ($numero > 0) {
        $solicitudesperitosDto->setNumero(@$numero);
    }
    if ($anio > 0) {
        $solicitudesperitosDto->setAnio(@$anio);
    }
    if ($cveTipoCarpeta > 0) {
        $solicitudesperitosDto->setCveTipoCarpeta(@$cveTipoCarpeta);
    }
    $solicitudesperitosDto->setFechaSolicitud(@$fechaSolicitud);
    $solicitudesperitosDto->setIdPerito(@$idPerito);
    $solicitudesperitosDto->setNombrePerito(@$nombrePerito);
    $solicitudesperitosDto->setMateriaPericial(@$materiaPericial);
    $solicitudesperitosDto->setCveJuzgado(@$cveJuzgado);
    if (@$cveMateriaPericial > 0) {
        $solicitudesperitosDto->setCveMateriaPericial(@$cveMateriaPericial);
    }
    $solicitudesperitosDto->setCveRegionPericial(@$cveRegionPericial);
    $solicitudesperitosDto->setActivo(@$activo);
    $solicitudesperitosDto->setPagina(@$_POST['pag']);
    if (($accion == "guardar") && ($idActuacion == "")) {
        $solicitudesperitosDto = $solicitudesperitosFacade->insertSolicitudesperitos($solicitudesperitosDto);
        echo $solicitudesperitosDto;
    } else if (($accion == "guardar") && ($idActuacion != "")) {
        $solicitudesperitosDto = $solicitudesperitosFacade->updateSolicitudesperitos($solicitudesperitosDto);
        echo $solicitudesperitosDto;
    } else if ($accion == "consultar") {
        $param["paginacion"] = true;
        $solicitudesperitosDto = $solicitudesperitosFacade->selectSolicitudesperitos($solicitudesperitosDto, @$proveedor, @$orden = "", $param, $fields = null);
        echo $solicitudesperitosDto;
    } else if (($accion == "baja") && ($idActuacion != "")) {
        $solicitudesperitosDto = $solicitudesperitosFacade->deleteSolicitudesperitos($solicitudesperitosDto);
        echo $solicitudesperitosDto;
    } else if ($accion == "getPaginas") {
//    $param["pag"] = 1;
//    $param["cantxPag"] = 4;
        $param["paginacion"] = true;
        $solicitudesperitosDto = $solicitudesperitosFacade->getPaginas($solicitudesperitosDto, $param);
        echo $solicitudesperitosDto;
    } else if ($accion == "generarJson") {
        @$cveTipoDocumento = $_POST['cveTipoDocumento'];
        @$cveTipo = $_POST['cveTipo'];
        $solicitudesperitosDto = $solicitudesperitosFacade->generarJson($solicitudesperitosDto, $cveTipoDocumento, $cveTipo, @$param, @$proveedor);
        echo $solicitudesperitosDto;
    } else if ($accion == "consultarSolicitudesPeritos") {
        if ($consultarProtestas != "") {
            $datos = array();
            $datos["numero"] = $numero;
            $datos["anio"] = $anio;
            $datos["cveTipoCarpeta"] = $cveTipoCarpeta;
            $datos["cveAdscripcion"] = $cveJuzgado;
            @$datos["cveMateriaPericial"] = $_POST["cveMateriaPericial"];
            @$datos["nvaInstancia"] = $_POST["nvaInstancia"];
            $datos["cveMateria"] = "3";
            echo $solicitudesperitosFacade->consultarSolicitudesPeritosProtestas($datos, $param);
        } else {
            echo $solicitudesperitosFacade->consultarSolicitudesPeritos($solicitudesperitosDto, $param);
        }
        exit;
    } else if ($accion == "consultarIdSolicitudPertioActuacion") {
        echo $solicitudesperitosFacade->consultarIdSolicitudPertioActuacion(@$_POST["idActuacionPerito"]);
        exit;
    }
//echo "-".$accion."-";
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
