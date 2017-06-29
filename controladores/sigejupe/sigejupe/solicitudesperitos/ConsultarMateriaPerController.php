<?php
session_start();
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/ConsultarMateriaPerCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/DiasFestivos.php");
//include_once(dirname(__FILE__) . "/../../tribunal/json/JsonDecod.Class.php");

/*include_once(dirname(__FILE__) . "/../../model/dao/solicitudesperitosactuaciones/SolicitudesPeritosActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../model/dto/solicitudesperitosactuaciones/SolicitudesPeritosActuacionesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../controller/actuaciones/ActuacionesController.php");
include_once(dirname(__FILE__) . "/../../model/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../model/dto/actuaciones/ActuacionesDTO.Class.php");*/

 @$cveMateriaPericial = $_POST["cveMateriaPericial"];       
 @$cveMateria = $_POST["cveMateria"];       
  $SolicitudPeritoCliente = new SolicitudPeritoCliente();
  $json = '{
  "type": "selectDiaMateriaPericial",
  "data": [
  {  
  "cveMateriaPericial": "' . utf8_encode($cveMateriaPericial) . '",  
  "cveMateria": "' . utf8_encode($cveMateria) . '"  
  }
  ]
  }';    
  $json = $SolicitudPeritoCliente->ServiceSolicitudesPeritos($json);  
  echo $json;  
?>
