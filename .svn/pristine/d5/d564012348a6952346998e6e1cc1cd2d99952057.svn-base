<?php

session_start();
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/CancelacionPeritoCliente.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesperitos/SolicitudesperitosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesperitos/SolicitudesperitosDTO.Class.php");
@$idSolicitudPerito = $_POST["idSolicitudPerito"];
@$idPerito = $_POST["idPerito"]; 
@$motivo = strtoupper($_POST["motivo"]);   
$SolicitudPeritoCliente = new SolicitudPeritoCliente();
$json = '{
  "type": "cancelarSolicitud",
  "data": [
  {
  "idSolicitudePerito": "' . utf8_encode($idSolicitudPerito) . '", 
  "idPerito": "' . utf8_encode($idPerito) . '",   
  "motivo": "' . utf8_encode($motivo) . '"
  }
  ]
  }';
$jsonTMP = $json;
$json = $SolicitudPeritoCliente->ServiceSolicitudesPeritos($json);
echo $json;  
if ($json != "" || $json == "") {
  $jsonOK = $json;  
  $json = json_decode($jsonTMP);
  $SolicitudesPeritosActuacionesDAO = new SolicitudesperitosDAO();
  $SolicitudesPeritosActuacionesDTO = new SolicitudesperitosDTO();
  $SolicitudesPeritosActuacionesDTO->setIdReferencia($idSolicitudPerito);      
  $rs = $SolicitudesPeritosActuacionesDAO->selectSolicitudesperitos($SolicitudesPeritosActuacionesDTO, $proveedor = null);
  if($rs!=""){  
    $SolicitudesPeritosActuacionesDTO->setActivo("N");
    $SolicitudesPeritosActuacionesDTO->setIdReferencia($_POST["idSolicitudPerito"]);
    $rs = $SolicitudesPeritosActuacionesDAO->updateSolicitudesperitos($SolicitudesPeritosActuacionesDTO, $proveedor = null);
  }
  }  
?>
