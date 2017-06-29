<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/sentidosresoluciones/SentidosresolucionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/sentidosresoluciones/SentidosresolucionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class SentidosresolucionesController {
private $proveedor;
public function __construct() {
}
public function validarSentidosresoluciones($SentidosresolucionesDto){
$SentidosresolucionesDto->setcveSentido(strtoupper(str_ireplace("'","",trim($SentidosresolucionesDto->getcveSentido()))));
$SentidosresolucionesDto->setdesSentido(strtoupper(str_ireplace("'","",trim($SentidosresolucionesDto->getdesSentido()))));
$SentidosresolucionesDto->setactivo(strtoupper(str_ireplace("'","",trim($SentidosresolucionesDto->getactivo()))));
$SentidosresolucionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($SentidosresolucionesDto->getfechaRegistro()))));
$SentidosresolucionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($SentidosresolucionesDto->getfechaActualizacion()))));
return $SentidosresolucionesDto;
}
public function selectSentidosresoluciones($SentidosresolucionesDto,$proveedor=null){
$SentidosresolucionesDto=$this->validarSentidosresoluciones($SentidosresolucionesDto);
$SentidosresolucionesDao = new SentidosresolucionesDAO();
$SentidosresolucionesDto = $SentidosresolucionesDao->selectSentidosresoluciones($SentidosresolucionesDto,$proveedor);
return $SentidosresolucionesDto;
}
public function insertSentidosresoluciones($SentidosresolucionesDto,$proveedor=null){
$SentidosresolucionesDto=$this->validarSentidosresoluciones($SentidosresolucionesDto);
$SentidosresolucionesDao = new SentidosresolucionesDAO();
$SentidosresolucionesDto = $SentidosresolucionesDao->insertSentidosresoluciones($SentidosresolucionesDto,$proveedor);
return $SentidosresolucionesDto;
}
public function updateSentidosresoluciones($SentidosresolucionesDto,$proveedor=null){
$SentidosresolucionesDto=$this->validarSentidosresoluciones($SentidosresolucionesDto);
$SentidosresolucionesDao = new SentidosresolucionesDAO();
//$tmpDto = new SentidosresolucionesDTO();
//$tmpDto = $SentidosresolucionesDao->selectSentidosresoluciones($SentidosresolucionesDto,$proveedor);
//if($tmpDto!=""){//$SentidosresolucionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$SentidosresolucionesDto = $SentidosresolucionesDao->updateSentidosresoluciones($SentidosresolucionesDto,$proveedor);
return $SentidosresolucionesDto;
//}
//return "";
}
public function deleteSentidosresoluciones($SentidosresolucionesDto,$proveedor=null){
$SentidosresolucionesDto=$this->validarSentidosresoluciones($SentidosresolucionesDto);
$SentidosresolucionesDao = new SentidosresolucionesDAO();
$SentidosresolucionesDto = $SentidosresolucionesDao->deleteSentidosresoluciones($SentidosresolucionesDto,$proveedor);
return $SentidosresolucionesDto;
}
}
?>