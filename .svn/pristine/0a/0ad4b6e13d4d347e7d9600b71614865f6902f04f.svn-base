<?php

session_start();
header('Content-type: application/json; charset=iso-8859-1');
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/SolicitudPeritoCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/ActualizarRefPeritoCliente.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/DiasFestivos.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesperitos/SolicitudesperitosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesperitos/SolicitudesperitosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesperitos/SolicitudesperitosDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/antecedesactuaciones/AntecedesactuacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedesactuaciones/AntecedesactuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedesactuaciones/AntecedesactuacionesDTO.Class.php");

/*
  include_once(dirname(__FILE__) . "/../../model/dao/solicitudesperitosactuaciones/SolicitudesPeritosActuacionesDAO.Class.php");
  include_once(dirname(__FILE__) . "/../../model/dto/solicitudesperitosactuaciones/SolicitudesPeritosActuacionesDTO.Class.php");

  include_once(dirname(__FILE__) . "/../../controller/actuaciones/ActuacionesController.php");
  include_once(dirname(__FILE__) . "/../../model/dao/actuaciones/ActuacionesDAO.Class.php");
  include_once(dirname(__FILE__) . "/../../model/dto/actuaciones/ActuacionesDTO.Class.php");

  include_once(dirname(__FILE__) . "/../../model/dao/antecedesactuaciones/AntecedesActuacionesDAO.Class.php");
  include_once(dirname(__FILE__) . "/../../model/dto/antecedesactuaciones/AntecedesActuacionesDTO.Class.php"); */

function consultaCalendario($Dias) {
    $strJSON = "{";
    $strJSON .= "\"type\": \"countDays\",";
    $strJSON .= "\"calendario\": {";
    $strJSON .= "\"idDiasFestivos\": \"\",";
    $strJSON .= "\"Tipo\": \"\",";
    $strJSON .= "\"Fecha\": \"\",";
    $strJSON .= "\"Descripcion\": \"\"";
    $strJSON .= "},";
    $strJSON .= "\"params\": {";
    $strJSON .= "\"fechaInicio\": \"\","; // ejem. 2015-07-01, fecha inicial, si va vacia toma la fecha de hoy
    $strJSON .= "\"numeroDias\": \"$Dias\","; // Número de días a contabilizar. Si va vacio o cero, cuenta un (1) día
    $strJSON .= "\"contarSabados\": \"false\","; // Si se quiere que cuente los sábados. Si va vacio es false
    $strJSON .= "\"contarDomingos\": \"false\","; // Si se quiere que cuente los domingos. Si va vacio es false
    $strJSON .= "\"contarFestivos\": \"false\","; // Si se quiere que cuente los días festivos. Si va vacio es false
    $strJSON .= "\"Orden\": \"Fecha ASC\""; // Fecha ASC
    $strJSON .= "}";
    $strJSON .= "}";
    $calendario = new Calendario();
    $login = $calendario->getCalendario($strJSON);
    $login = json_decode($login);
    return $login->fechaLimite;
}

@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$numerox = $_POST["numerox"];
@$aniox = $_POST["aniox"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$nvaInstancia = split("/", $_POST["cveAdscripcion"]);
@$cveAdscripcion = $nvaInstancia[0];
@$cveMateria = $_POST["cveMateria"];
@$nvaInstancia = $nvaInstancia[1];
@$PersonaSolicitante = strtoupper($_POST["PersonaSolicitante"]);
@$cveUsuarioSolicitante = $_POST["cveUsuarioSolicitante"];
@$cveTipoNumero = $_POST["cveTipoNumero"];
@$idActuacion = $_POST["idActuacion"];
@$cveMateriaPericial = $_POST["cveMateriaPericial"];
@$observaciones = $_POST["observaciones"];
@$fechaSolicitud = $_POST["fechaSolicitud"];
@$materiaPericial = $_POST["materiaPericial"];
@$diasProtesta = $_POST["diasProtesta"];
@$Peritos = $_POST["Peritos"];
@$idReferencia = $_POST["idReferencia"];
@$idActuacionAcuerdo = $_POST["idActuacionAcuerdo"];
@$idPerito = $_POST["idPerito"];
if ($fechaSolicitud != "") {
    $fechaSolicitud = explode("/", $fechaSolicitud);
    @$fechaSolicitud = $fechaSolicitud[2] . "-" . $fechaSolicitud[1] . "-" . $fechaSolicitud[0];
}
if ($diasProtesta != "") {
    @$fechaDiasProtesta = consultaCalendario(trim($diasProtesta));
    if ($fechaDiasProtesta != "") {
        $fechaDiasProtesta = explode("/", $fechaDiasProtesta);
        @$fechaDiasProtesta = $fechaDiasProtesta[2] . "-" . $fechaDiasProtesta[1] . "-" . $fechaDiasProtesta[0];
    }
}
//$observaciones = trim($observaciones,"[\n|\r|\n\r]");        
$SolicitudPeritoCliente = new SolicitudPeritoCliente();
$ActualizarRefPeritoCliente = new ActualizarRefPeritoCliente();
$observaciones = ($observaciones);

$json = '{
  "type": "insertSolicitud",
  "data": [
  {
  "idSolicitudePerito": "",
  "numeroSolicitud": "",
  "anioSolicitud": "",
  "numero": "' . utf8_encode($numero) . '",
  "anio": "' . utf8_encode($anio) . '",
  "cveAdscripcion": "' . utf8_encode($cveAdscripcion) . '",
  "cveMateria": "' . utf8_encode($cveMateria) . '",
  "nvaInstancia": "' . utf8_encode($nvaInstancia) . '",
  "idReferencia": "' . utf8_encode($_POST["idActuacionAcuerdo"]) . '",
  "cveUsuarioSolicitante": "' . utf8_encode($cveUsuarioSolicitante) . '",
  "nomSolicitante": "' . utf8_encode($PersonaSolicitante) . '",
  "cveTipoNumero": "' . utf8_encode($cveTipoNumero) . '",
  "cveMateriaPericial": "' . utf8_encode($cveMateriaPericial) . '",
  "materiaPericial": "' . utf8_encode($materiaPericial) . '",
  "diasProtesta": "' . utf8_encode($diasProtesta) . '",
  "fechaDiasProtesta": "' . utf8_encode($fechaDiasProtesta) . '",
  "idActuacionAcuerdo": "' . utf8_encode($idActuacionAcuerdo) . '",      
  "idPerito": "' . utf8_encode($idPerito) . '",      
  "nomPerito": "",
  "observaciones": ' . json_encode($observaciones) . ',
  "Estatus": "",
  "fechaSolicitud": "' . utf8_encode($fechaSolicitud . " " . date("G:H:s")) . '",
  "fechaSolicitudOri": "",
  "fechaNotificacion": "",
  "fechaNotificacionOri": "",
  "fechaProtesta": "",
  "fechaProtestaOri": "",
  "fechaConclusion": "",
  "fechaConclusionOri": "",
  "Peritos": "' . utf8_encode($Peritos) . '",
  "activo": "S",
  "fechaRegistro": "2015-11-12 19:19:37",
  "fechaHora": "",
  "fechaActualizacion": "2015-11-12 19:19:37"
  }
  ]
  }';
$json = $SolicitudPeritoCliente->ServiceSolicitudesPeritos($json);
 echo $json;
 if ($json != "") {
  $jsonOK = $json;
  $json = json_decode($json);  
  $SolicitudesPeritosActuacionesDAO = new SolicitudesperitosDAO();
  $SolicitudesPeritosActuacionesDTO = new SolicitudesperitosDTO();
  $solicitudesPeritosController = new SolicitudesperitosController();
  $SolicitudesPeritosActuacionesDTO->setIdActuacion($idActuacion);
  $SolicitudesPeritosActuacionesDTO->setIdReferencia($json->resultados[0]->idSolicitudePerito);
  $SolicitudesPeritosActuacionesDTO->setNumeroSolicitud($json->resultados[0]->numeroSolicitud);
  $SolicitudesPeritosActuacionesDTO->setAniSolicitud($json->resultados[0]->anioSolicitud);
  $SolicitudesPeritosActuacionesDTO->setNumero($numerox);
  $SolicitudesPeritosActuacionesDTO->setAnio($aniox);
  $SolicitudesPeritosActuacionesDTO->setCveTipoCarpeta($cveTipoCarpeta);
  $SolicitudesPeritosActuacionesDTO->setFechaSolicitud($json->resultados[0]->fechaSolicitud);
  $SolicitudesPeritosActuacionesDTO->setIdPerito(utf8_decode($json->resultados[0]->idPerito));
  $SolicitudesPeritosActuacionesDTO->setNombrePerito(utf8_decode($json->resultados[0]->nomPerito));
  $SolicitudesPeritosActuacionesDTO->setMateriaPericial(utf8_decode($json->resultados[0]->MateriaPericial));
  $SolicitudesPeritosActuacionesDTO->setCveRegionPericial($json->resultados[0]->cveRegionPericial);
  $SolicitudesPeritosActuacionesDTO->setCveMateriaPericial($json->resultados[0]->cveMateriaPericial);
  $SolicitudesPeritosActuacionesDTO->setCveJuzgado($json->resultados[0]->cveAdscripcion);
  $SolicitudesPeritosActuacionesDTO->setObservaciones($json->resultados[0]->observaciones);
  $SolicitudesPeritosActuacionesDTO->setActivo("S");


  $ActuacionesDao = new ActuacionesDAO();
  $ActuacionesDto = new ActuacionesDTO();
  $ActuacionesController = new ActuacionesController();
  $ActuacionesDto->setNumActuacion($json->resultados[0]->numeroSolicitud);
  $ActuacionesDto->setAniActuacion($json->resultados[0]->anioSolicitud);
  $ActuacionesDto->setCveTipoActuacion("18");
  $ActuacionesDto->setIdReferencia($idActuacion);    //Carpeta judicial de donde viene  segun Jesus
  $ActuacionesDto->setNumero($json->resultados[0]->numero);
  $ActuacionesDto->setAnio($json->resultados[0]->anio);
  $ActuacionesDto->setCveTipoCarpeta($json->resultados[0]->cveTipoNumero);
  $ActuacionesDto->setCveJuzgado($json->resultados[0]->cveAdscripcion);
  $ActuacionesDto->setSintesis("SOLICITUD DE PERITO");
  $ActuacionesDto->setObservaciones(json_encode($observaciones));
  $ActuacionesDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
  $ActuacionesDto->setActivo("S");
  $rs = $ActuacionesController->insertActuaciones($ActuacionesDto);

  $AntecedesDao = new AntecedesactuacionesDAO();
  $AntecedesDto = new AntecedesactuacionesDTO();
  $AntecedesController = new AntecedesactuacionesController();
  $AntecedesDto->setIdActuacionPadre($_POST["idActuacionAcuerdo"]);    //Acuerdo de donde viene segun Jesus
  $AntecedesDto->setIdActuacionHija($rs[0]->getIdActuacion());

  //Falta poner Json
  $json = '{
  "type": "actualizarSolicitud",
  "data": [
  {
  "idSolicitudePerito": "' . utf8_encode($json->resultados[0]->idSolicitudePerito) . '",
  "idReferencia": "' . utf8_encode($rs[0]->getIdActuacion()) . '"
  }
  ]
  }';
  $json = $ActualizarRefPeritoCliente->ActualizarRefPeritoCliente($json);
  //echo $json;


  $AntecedesDto->setActivo("S");
  $AntecedesController->insertAntecedesactuaciones($AntecedesDto);
  $SolicitudesPeritosActuacionesDTO->setIdReferenciaActuacionHija($rs[0]->getIdActuacion());
  $rs = $solicitudesPeritosController->insertSolicitudesperitos($SolicitudesPeritosActuacionesDTO);
  } 
?>
