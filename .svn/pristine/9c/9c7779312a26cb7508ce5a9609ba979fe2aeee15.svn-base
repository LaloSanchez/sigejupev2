<?php
session_start();
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/ConsultaIDPeritoCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/DiasFestivos.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");



//include_once(dirname(__FILE__) . "/../../model/dao/solicitudesperitosactuaciones/SolicitudesPeritosActuacionesDAO.Class.php");
//include_once(dirname(__FILE__) . "/../../model/dto/solicitudesperitosactuaciones/SolicitudesPeritosActuacionesDTO.Class.php");

/*include_once(dirname(__FILE__) . "/../../controller/actuaciones/ActuacionesController.php");
include_once(dirname(__FILE__) . "/../../model/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../model/dto/actuaciones/ActuacionesDTO.Class.php");*/

 @$idReferencia = $_POST["idReferencia"];       
 @$idSolicitudePerito = $_POST["idSolicitudePerito"];        
  $SolicitudPeritoCliente = new SolicitudPeritoCliente();
  $json = '{
  "type": "selectPeritoSolicitudPerito",
  "data": [
  {  
  "idReferencia": "' . utf8_encode($idReferencia) . '",  
  "idSolicitudePerito": "' . utf8_encode($idSolicitudePerito) . '"  
  }
  ]
  }';    
  $json = $SolicitudPeritoCliente->ServiceSolicitudesPeritos($json);  
  echo $json;  
?>
