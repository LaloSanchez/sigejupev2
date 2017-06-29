<?php
session_start();
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/ConsultaPeritoCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/DiasFestivos.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
 @$numero = $_POST["numero"];       
 @$anio = $_POST["anio"];        
 @$cveAdscripcion = $_POST["cveAdscripcion"];         
 @$nvaInstancia = $_POST["nvaInstancia"]; 
 @$cveMateriaPericial = $_POST["cveMateriaPericial"]; 
 
  $SolicitudPeritoCliente = new SolicitudPeritoCliente();
  $json = '{
  "type": "selectSolicitud",
  "data": [
  {  
  "numero": ' . utf8_encode($numero) . ',  
  "anio": ' . utf8_encode($anio) . ',  
  "cveAdscripcion": ' . utf8_encode($cveAdscripcion) . ',    
  "cveMateriaPericial": ' . utf8_encode($cveMateriaPericial) . '      
  }
  ]
  }';        
  $json = $SolicitudPeritoCliente->ServiceSolicitudesPeritos($json);    
  if($json==""){
      $json .= '{"estatus":"empty"}';
  }
  echo $json;  
?>
