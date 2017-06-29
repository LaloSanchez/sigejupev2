<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reporteSolicitudesAudiencias
 *
 * @author alejandro
 */
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/resumensolicitudaudiencia/ResumensolicitudaudienciaController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/audiencias/AudienciasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesaudiencias/SolicitudesaudienciasController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudes/EstatussolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudes/EstatussolicitudesDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");



include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/grupos/GruposCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/perfil/PerfilCliente.php");
define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/Resumen2.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);

class reporteSolicitudesAudiencias {

    private $param = array();
    private $imputadosReclusos;
    private $idSolicitudAudiencia;
    private $solicitudesaudienciasDto;

    public function __construct() {

        @$idSolicitudAudiencia = $_POST["idSolicitudAudiencia"];
        @$cveCatAudiencia = $_POST["cveCatAudiencia"];
        @$cveJuzgadoDesahoga = $_POST["cveJuzgadoDesahoga"];
        @$cveJuzgado = $_POST["cveJuzgado"];
        @$cveConsignacion = $_POST["cveConsignacion"];
        @$cveEtapaProcesal = $_POST["cveEtapaProcesal"];
        @$idReferencia = $_POST["idReferencia"];
        @$fechaRegistro = $_POST["fechaRegistro"];
        @$fechaActualizacion = $_POST["fechaActualizacion"];
        @$fechaEnvio = $_POST["fechaEnvio"];
        @$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
        @$numero = $_POST["numero"];
        @$anio = $_POST["anio"];
        @$activo = $_POST["activo"];
        @$carpetaInv = $_POST["carpetaInv"];
        @$nuc = $_POST["nuc"];
        @$cveUsuario = "";
        @$manual = $_POST["manual"];
//@$cveUsuario = $_POST["cveUsuario"];
        @$cveAdscripcionSolicita = $_POST["cveAdscripcionSolicita"];
        @$mismoJuzgador = $_POST["mismoJuzgador"];
        @$tribunal = $_POST["tribunal"];
        @$cveEstatusSolicitud = $_POST["cveEstatusSolicitud"];
        @$observaciones = $_POST["observaciones"];
        @$numImputados = $_POST["numImputados"];
        @$numDelitos = $_POST["numDelitos"];
        @$numOfendidos = $_POST["numOfendidos"];
        @$cveNaturaleza = $_POST["cveNaturaleza"];
        @$cveTipoAudiencia = $_POST["cveTipoAudiencia"];
        @$accion = $_POST["accion"];

        if (@$_POST['fechaInicio'] != "") {
            $this->param["fechaInicialConsulta"] = $this->fechaMysql($_POST['fechaInicio']);
        } else {
            $this->param["fechaInicialConsulta"] = ("");
        }
        if (@$_POST['fechaFin'] != "") {
            $this->param["fechaFinalConsulta"] = $this->fechaMysql($_POST['fechaFin']);
        } else {
            $this->param["fechaFinalConsulta"] = ("");
        }
        @$this->param["pag"] = $_POST['pag'];
        @$this->param["cantxPag"] = $_POST['cantxPag'];
        @$this->param["paginacion"] = $_POST['paginacion'];
        @$this->param["generico"] = $_POST['generico'];

        $param = array();
        $this->idSolicitudAudiencia = $_POST['idSolicitud'];
        $this->imputadosReclusos = $_POST['imputadosReclusos'];
        $this->param["idSolicitudAudienca"] = $_POST['idSolicitud'];
        $this->param["idSolicitudAudiencaGet"] = $_GET['idSolicitud'];
        $this->param["idAudienciaGet"] = $_GET['idAudiencia'];
        $this->param["mismoJuzgador"] = (isset($_POST['mismoJuzgador'])) ? $_POST['mismoJuzgador'] : "N";
        $this->param["tribunal"] = (isset($_POST['tribunal']) ? $_POST['tribunal'] : "N");
        $this->param["toca"] = isset($_GET['toca']) ? $_GET['toca'] : 'N';
        $this->param["leyendajuez"] = isset($_GET['leyendajuez']) ? $_GET['leyendajuez'] : '';
        $accion = $_POST['accion'];
        $accionGet = $_GET['accion'];
        $solicitudesaudienciasDto = new SolicitudesaudienciasDTO();

        $solicitudesaudienciasDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
        $solicitudesaudienciasDto->setCveCatAudiencia($cveCatAudiencia);
        $solicitudesaudienciasDto->setCveJuzgadoDesahoga($cveJuzgadoDesahoga);
        $solicitudesaudienciasDto->setCveJuzgado($cveJuzgado);
        $solicitudesaudienciasDto->setCveConsignacion($cveConsignacion);
        $solicitudesaudienciasDto->setCveEtapaProcesal($cveEtapaProcesal);
        $solicitudesaudienciasDto->setIdReferencia($idReferencia);
        $solicitudesaudienciasDto->setFechaRegistro($fechaRegistro);
        $solicitudesaudienciasDto->setFechaActualizacion($fechaActualizacion);
        $solicitudesaudienciasDto->setFechaEnvio($fechaEnvio);
        $solicitudesaudienciasDto->setCveTipoCarpeta($cveTipoCarpeta);
        $solicitudesaudienciasDto->setNumero($numero);
        $solicitudesaudienciasDto->setAnio($anio);
        $solicitudesaudienciasDto->setActivo($activo);
        $solicitudesaudienciasDto->setCarpetaInv($carpetaInv);
        $solicitudesaudienciasDto->setNuc($nuc);
        $solicitudesaudienciasDto->setCveUsuario($cveUsuario);
        $solicitudesaudienciasDto->setCveAdscripcionSolicita($cveAdscripcionSolicita);
        $solicitudesaudienciasDto->setMismoJuzgador($mismoJuzgador);
        $solicitudesaudienciasDto->setTribunal($tribunal);
        $solicitudesaudienciasDto->setCveEstatusSolicitud($cveEstatusSolicitud);
        $solicitudesaudienciasDto->setObservaciones($observaciones);
        $solicitudesaudienciasDto->setNumImputados($numImputados);
        $solicitudesaudienciasDto->setNumDelitos($numDelitos);
        $solicitudesaudienciasDto->setNumOfendidos($numOfendidos);
        $solicitudesaudienciasDto->setCveNaturaleza($cveNaturaleza);
        $solicitudesaudienciasDto->setCveTipoAudiencia($cveTipoAudiencia);

        $this->solicitudesaudienciasDto = $solicitudesaudienciasDto;


        if ($accion != "") {
            echo $this->$accion();
        } else if ($accionGet != "") {
            echo $this->$accionGet();
        }
    }

    public function consultaAcuseAudiencia() {


        $audienciasDto = new AudienciasDTO();
        $audienciasDto->setActivo("S");
        $audienciasDto->setIdSolicitudAudiencia($this->param["idSolicitudAudiencaGet"]);

        $audienciasController = new AudienciasController();
        $audiencias = $audienciasController->selectAudiencias($audienciasDto);
        $response = "";
        if ($audiencias != "") {

            $idAudiencia = "";
//        $this->param["idSolicitudAudiencaGet"]=$idAudiencia;
            $resumenSolicitudAudienciaController = new ResumensolicitudaudienciaController();
//         echo "idSolicitudAudiencia => ".$this->param["idSolicitudAudiencaGet"];
            $this->param["idSolicitudAudiencaGet"] = $audiencias[0]->getIdAudiencia();
            $response = $resumenSolicitudAudienciaController->consultaAcuseAudiencia($this->param);
//  print_r($Solicitud);
//          $this->param["idSolicitudAudiencaGet"]=$idAudiencia;
//        $response = $resumenSolicitudAudienciaController->consultaAcuseAudiencia($this->param);
        } else {
            return $html .= "La solicitud no se encuentra enviada.";
        }
        return $response;
    }

    public function consultarConGrupo() {
        $SolicitudesaudienciasDto = $this->solicitudesaudienciasDto;
        $param = $this->param;
        $f1 = $param["fechaInicialConsulta"];
        $f2 = $param["fechaFinalConsulta"];
        $detenido = false;
        if ($f1 > $f2) {
            $mensaje = array("estatus" => "Fail", "mnj" => "La Fecha Inicial no puede ser mayor a la Fecha Final");
            return json_encode($mensaje);
        }
        $SolicitudesaudienciasDto->setCveUsuario("");
//        $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($SolicitudesaudienciasDto);
        $SolicitudesaudienciasController = new SolicitudesaudienciasController();
        $SolicitudesaudienciasDto = $SolicitudesaudienciasController->selectSolicitudesaudiencias($SolicitudesaudienciasDto, $param);

        $juzgadosDto = new JuzgadosDTO ();
        $juzgadosDao = new JuzgadosDAO ();
        $catAudienciasDto = new CataudienciasDTO();
        $catAudienciasDao = new CataudienciasDAO();

        $estatusSolictudesDto = new EstatussolicitudesDTO();
        $estatusSolictudesDao = new EstatussolicitudesDAO();

        $imputadossolicitudesDto = new ImputadossolicitudesDTO();
        $imputadossolicitudesDao = new ImputadossolicitudesDAO();

        $tiposcarpetasDto = new TiposcarpetasDTO();
        $tiposcarpetasDao = new TiposcarpetasDAO();

        $json = "";
        $x = 1;
        if ($SolicitudesaudienciasDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($SolicitudesaudienciasDto) . '",';
            $json .= '"data":[';

//            $grupos = new GruposCliente();
//            $grupos = $grupos->getGrupos();
//            $grupos = json_decode($grupos, true);


            $cvesUsuario = "";
            foreach ($SolicitudesaudienciasDto as $Solicitudaudiencia) {
                $cvesUsuario.=$Solicitudaudiencia->getCveUsuario() . ",";
            }
            $usuarios = new UsuarioCliente();
            $cvesUsuario = trim($cvesUsuario, ",");
            $usuarios = $usuarios->getUsuarios($cvesUsuario);
            $usuarios = json_decode($usuarios, true);
            error_log(print_r($usuarios, true));

            $perfil = new PerfilCliente();
//            $cvesUsuario="179";
            $perfiles = $perfil->getPerfilesDisponiblesSistema($cvesUsuario);
            error_log(print_r($perfiles, true));
            $perfiles = json_decode($perfiles, true);

            error_log(print_r($perfiles, true));
            foreach ($SolicitudesaudienciasDto as $Solicitudaudiencia) {
                $desgrupo = "";
                $desUsuario = "";
                foreach ($usuarios["data"] as $usuario) {
                    if ($Solicitudaudiencia->getCveUsuario() == $usuario["cveUsuario"]) {
                        $desUsuario = $usuario["nombre"] . " " . $usuario["paterno"] . " " . $usuario["materno"];
                        foreach ($perfiles["data"] as $perfil) {
                            if ($perfil["cveUsuario"] == $usuario["cveUsuario"]) {
                                $desgrupo = $perfil["cveGrupo"];
                                break;
                            }
                        }
                        break;
                    }
                }



                $juzgadosDto->setCveJuzgado($Solicitudaudiencia->getCveJuzgado());
                $rsJuzgado = $juzgadosDao->selectJuzgados($juzgadosDto);

                $catAudienciasDto->setCveCatAudiencia($Solicitudaudiencia->getCveCatAudiencia());
                $rsCatAudiencias = $catAudienciasDao->selectCataudiencias($catAudienciasDto);

                $estatusSolictudesDto->setCveEstatusSolicitud($Solicitudaudiencia->getCveEstatusSolicitud());
                $rsEstatusSolicitud = $estatusSolictudesDao->selectEstatussolicitudes($estatusSolictudesDto);
                if ($Solicitudaudiencia->getCveTipoCarpeta() != 0 && $Solicitudaudiencia->getCveTipoCarpeta() != "" && $Solicitudaudiencia->getCveTipoCarpeta() != null) {
                    $tiposcarpetasDto->setCveTipoCarpeta($Solicitudaudiencia->getCveTipoCarpeta());
                    $rsTipoCarpeta = $tiposcarpetasDao->selectTiposcarpetas($tiposcarpetasDto);
                } else {
                    $rsTipoCarpeta = "";
                }

                $imputadossolicitudesDto->setIdSolicitudAudiencia($Solicitudaudiencia->getIdSolicitudAudiencia());
                $rsimputadosSolicitudes = $imputadossolicitudesDao->selectimputadossolicitudes($imputadossolicitudesDto);
                if ($rsimputadosSolicitudes != "") {
                    foreach ($rsimputadosSolicitudes as $rsimputadoSolicitud) {
                        if ($rsimputadoSolicitud->getDetenido() == "S") {
                            $detenido = true;
                        }
                    }
                }

                $json .= "{";
                $json .= '"idSolicitudAudiencia":' . json_encode(utf8_encode($Solicitudaudiencia->getIdSolicitudAudiencia())) . ",";
                $json .= '"cveCatAudiencia":' . json_encode(utf8_encode($Solicitudaudiencia->getCveCatAudiencia())) . ",";
                if ($rsCatAudiencias != "") {
                    $json .= '"desAudiencia":' . json_encode(utf8_encode($rsCatAudiencias[0]->getDesCatAudiencia())) . ",";
                } else {
                    $json .= '"desAudiencia": "",';
                }
                $json .= '"cveJuzgadoDesahoga":' . json_encode(utf8_encode($Solicitudaudiencia->getCveJuzgadoDesahoga())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($Solicitudaudiencia->getCveJuzgado())) . ",";
                if ($rsJuzgado != "") {
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($rsJuzgado[0]->getDesJuzgado())) . ",";
                } else {
                    $json .= '"desJuzgado": "",';
                }

                if ($detenido == true) {
                    $json .= '"detenido":' . json_encode(utf8_encode("S")) . ",";
                } else {
                    $json .= '"detenido":' . json_encode(utf8_encode("N")) . ",";
                }

                $json .= '"cveConsignacion":' . json_encode(utf8_encode($Solicitudaudiencia->getCveConsignacion())) . ",";
                $json .= '"cveEtapaProcesal":' . json_encode(utf8_encode($Solicitudaudiencia->getCveEtapaProcesal())) . ",";
                $json .= '"idReferencia":' . json_encode(utf8_encode($Solicitudaudiencia->getIdReferencia())) . ",";
                $fecha = explode(" ", $Solicitudaudiencia->getFechaRegistro());
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($this->fechaNormal($fecha[0]))) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($Solicitudaudiencia->getFechaActualizacion())) . ",";
                $json .= '"fechaEnvio":' . json_encode(utf8_encode($Solicitudaudiencia->getFechaEnvio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($Solicitudaudiencia->getCveTipoCarpeta())) . ",";
                if ($rsTipoCarpeta != "") {
                    $json .= '"desTipoCarpeta":' . json_encode(utf8_encode($rsTipoCarpeta[0]->getDesTipoCarpeta())) . ",";
                } else {
                    $json .= '"desTipoCarpeta": "N/A",';
                }
                $json .= '"numero":' . json_encode(utf8_encode($Solicitudaudiencia->getNumero())) . ",";
                $json .= '"anio":' . json_encode(utf8_encode($Solicitudaudiencia->getAnio())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Solicitudaudiencia->getActivo())) . ",";
                $json .= '"carpetaInv":' . json_encode(utf8_encode($Solicitudaudiencia->getCarpetaInv())) . ",";
                $json .= '"nuc":' . json_encode(utf8_encode($Solicitudaudiencia->getNuc())) . ",";
                $json .= '"cveUsuario":' . json_encode(utf8_encode($Solicitudaudiencia->getCveUsuario())) . ",";
                $json .= '"cveAdscripcionSolicita":' . json_encode(utf8_encode($Solicitudaudiencia->getCveAdscripcionSolicita())) . ",";
                $json .= '"mismoJuzgador":' . json_encode(utf8_encode($Solicitudaudiencia->getMismoJuzgador())) . ",";
                $json .= '"tribunal":' . json_encode(utf8_encode($Solicitudaudiencia->getTribunal())) . ",";
                $json .= '"cveEstatusSolicitud":' . json_encode(utf8_encode($Solicitudaudiencia->getCveEstatusSolicitud())) . ",";
                if ($rsEstatusSolicitud != "") {
                    $json .= '"desEstatusSolictud":' . json_encode(utf8_encode($rsEstatusSolicitud[0]->getDesEstatusSolicitud())) . ",";
                } else {
                    $json .= '"desEstatusSolictud": "",';
                }
                $json .= '"observaciones":' . json_encode(utf8_encode($Solicitudaudiencia->getObservaciones())) . ",";
                $json .= '"numImputados":' . json_encode(utf8_encode($Solicitudaudiencia->getNumImputados())) . ",";
                $json .= '"numOfendidos":' . json_encode(utf8_encode($Solicitudaudiencia->getNumOfendidos())) . ",";
                $json .= '"numDelitos":' . json_encode(utf8_encode($Solicitudaudiencia->getNumDelitos())) . ",";
                $json .= '"cveNaturaleza":' . json_encode(utf8_encode($Solicitudaudiencia->getCveNaturaleza())) . ",";
                $json .= '"cveTipoAudiencia":' . json_encode(utf8_encode($Solicitudaudiencia->getCveTipoAudiencia())) . ",";
                $json .= '"Grupo":"' . $desgrupo . '",';
                $json .= '"Usuario":"' . $desUsuario . '"';

                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($SolicitudesaudienciasDto)) {
                    $json .= ",";
                }
            }
//            $json .= "]";
//            $json .= "}";
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($SolicitudesaudienciasDto) . '"';
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }
    
    public function getPaginas() {
          $SolicitudesaudienciasDto = $this->solicitudesaudienciasDto;
        $param = $this->param;
        $SolicitudesaudienciasDao = new SolicitudesaudienciasDAO();
        $numTot = $SolicitudesaudienciasDao->selectSolicitudesaudienciasGeneral($SolicitudesaudienciasDto, null, "", $param, " count(idSolicitudAudiencia) as totalCount ");

        $Pages = (int) $numTot[0] / $param["cantxPag"];
        $restoPages = $numTot[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot[0] . '",';
        $json .= '"data":[';
        $x = 1;

        if ($totPages >= 1) {
            for ($index = 1; $index <= $totPages; $index ++) {
                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
                $x ++;
                if ($x <= ($totPages)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":{"total":""},';
            $json .= '"total":"' . ($index - 1) . '"';
            $json .= "}";
        }


        return $json;
    }
    
    private function esFecha($fecha) {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }

    public function esFechaMysql($fecha) {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }
        return false;
    }

    public function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    public function fechaNormal($fecha) {
        list($year, $mes, $dia) = explode("-", $fecha);
        return $dia . "/" . $mes . "/" . $year;
    }

}

new reporteSolicitudesAudiencias();
//print_r($param);

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>

