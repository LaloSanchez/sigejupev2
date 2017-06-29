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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ministeriosresponsables/MinisteriosresponsablesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ministeriosresponsables/MinisteriosresponsablesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class MinisteriosresponsablesController {
private $proveedor;
public function __construct() {
}
public function validarMinisteriosresponsables($MinisteriosresponsablesDto){
$MinisteriosresponsablesDto->setidMinisterioResponsable(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesDto->getidMinisterioResponsable()))));
$MinisteriosresponsablesDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesDto->getidSolicitudCateo()))));
$MinisteriosresponsablesDto->setnombre(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesDto->getnombre()))));
$MinisteriosresponsablesDto->setpaterno(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesDto->getpaterno()))));
$MinisteriosresponsablesDto->setmaterno(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesDto->getmaterno()))));
$MinisteriosresponsablesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesDto->getfechaRegistro()))));
$MinisteriosresponsablesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesDto->getfechaActualizacion()))));
return $MinisteriosresponsablesDto;
}
public function selectMinisteriosresponsables($MinisteriosresponsablesDto,$proveedor=null){
$MinisteriosresponsablesDto=$this->validarMinisteriosresponsables($MinisteriosresponsablesDto);
$MinisteriosresponsablesDao = new MinisteriosresponsablesDAO();
$MinisteriosresponsablesDto = $MinisteriosresponsablesDao->selectMinisteriosresponsables($MinisteriosresponsablesDto,$proveedor);
return $MinisteriosresponsablesDto;
}
public function insertMinisteriosresponsables($MinisteriosresponsablesDto,$proveedor=null){
$MinisteriosresponsablesDto=$this->validarMinisteriosresponsables($MinisteriosresponsablesDto);
$MinisteriosresponsablesDao = new MinisteriosresponsablesDAO();
$MinisteriosresponsablesDto = $MinisteriosresponsablesDao->insertMinisteriosresponsables($MinisteriosresponsablesDto,$proveedor);
return $MinisteriosresponsablesDto;
}
public function updateMinisteriosresponsables($MinisteriosresponsablesDto,$proveedor=null){
$MinisteriosresponsablesDto=$this->validarMinisteriosresponsables($MinisteriosresponsablesDto);
$MinisteriosresponsablesDao = new MinisteriosresponsablesDAO();
//$tmpDto = new MinisteriosresponsablesDTO();
//$tmpDto = $MinisteriosresponsablesDao->selectMinisteriosresponsables($MinisteriosresponsablesDto,$proveedor);
//if($tmpDto!=""){//$MinisteriosresponsablesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$MinisteriosresponsablesDto = $MinisteriosresponsablesDao->updateMinisteriosresponsables($MinisteriosresponsablesDto,$proveedor);
return $MinisteriosresponsablesDto;
//}
//return "";
}
public function deleteMinisteriosresponsables($MinisteriosresponsablesDto,$proveedor=null){
$MinisteriosresponsablesDto=$this->validarMinisteriosresponsables($MinisteriosresponsablesDto);
$MinisteriosresponsablesDao = new MinisteriosresponsablesDAO();
$MinisteriosresponsablesDto = $MinisteriosresponsablesDao->deleteMinisteriosresponsables($MinisteriosresponsablesDto,$proveedor);
return $MinisteriosresponsablesDto;
}
}
?>