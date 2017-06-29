<?php

session_start();
include_once(dirname(__FILE__) . "/../../webservice/cliente/solicitudperito/ConsultaPeritoCliente.php");
include_once(dirname(__FILE__) . "/../../webservice/cliente/solicitudperito/DiasFestivos.php");
include_once(dirname(__FILE__) . "/../../tribunal/json/JsonDecod.Class.php");

include_once(dirname(__FILE__) . "/../../model/dao/solicitudesperitosactuaciones/SolicitudesPeritosActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../model/dto/solicitudesperitosactuaciones/SolicitudesPeritosActuacionesDTO.Class.php");

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
  @$nvaInstancia = split("/", $_POST["cveAdscripcion"]);
  @$cveAdscripcion = $nvaInstancia[0];
  @$cveMateria = $_POST["cveMateria"];
  @$nvaInstancia = $nvaInstancia[1];
  @$PersonaSolicitante = $_POST["PersonaSolicitante"];
  @$cveUsuarioSolicitante = $_POST["cveUsuarioSolicitante"];
  @$cveTipoNumero = $_POST["cveTipoNumero"];
  @$idActuacion = $_POST["idActuacion"];
  @$cveMateriaPericial = $_POST["cveMateriaPericial"];
  @$Peritos = $_POST["Peritos"];  
  @$observaciones = strtoupper($_POST["observaciones"]);
  @$fechaSolicitud = $_POST["fechaSolicitud"];
  @$materiaPericial = $_POST["materiaPericial"];
  @$diasProtesta = $_POST["diasProtesta"];  
  @$idReferencia = $_POST["idReferencia"];  
  if ($fechaSolicitud != "") {
    $fechaSolicitud = split("/", $fechaSolicitud);
    @$fechaSolicitud = $fechaSolicitud[2] . "-" . $fechaSolicitud[1] . "-" . $fechaSolicitud[0];
  }
  if($diasProtesta!=""){
    @$fechaDiasProtesta = consultaCalendario(trim($diasProtesta));  
    if ($fechaDiasProtesta != "") {
      $fechaDiasProtesta = split("/", $fechaDiasProtesta);
      @$fechaDiasProtesta = $fechaDiasProtesta[2] . "-" . $fechaDiasProtesta[1] . "-" . $fechaDiasProtesta[0];
    }
  }  
  $SolicitudPeritoCliente = new SolicitudPeritoCliente();
  $json = '{
  "type": "selectSolicitud",
  "data": [
  {
  "idSolicitudePerito": "",
  "numeroSolicitud": "",
  "anioSolicitud": "",
  "numero": "' . utf8_encode($numero) . '",
  "idReferencia": "' . utf8_encode($idReferencia) . '",      
  "anio": "' . utf8_encode($anio) . '",
  "cveAdscripcion": "' . utf8_encode($cveAdscripcion) . '",
  "cveMateriaPericial": "' . utf8_encode($cveMateriaPericial) . '",  
  "Peritos": "' . utf8_encode($Peritos) . '",        
  "materiaPericial": "' . utf8_encode($materiaPericial) . '"  
  }
  ]
  }';    
  $json = $SolicitudPeritoCliente->ServiceSolicitudesPeritos($json);
  echo $json;  
?>
