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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ministeriosresponsablesmuestras/MinisteriosresponsablesmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ministeriosresponsablesmuestras/MinisteriosresponsablesmuestrasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class MinisteriosresponsablesmuestrasController {
private $proveedor;
public function __construct() {
}
public function validarMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto){
$MinisteriosresponsablesmuestrasDto->setidMinisterioResponsableMuestras(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesmuestrasDto->getidMinisterioResponsableMuestras()))));
$MinisteriosresponsablesmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesmuestrasDto->getidSolicitudMuestra()))));
$MinisteriosresponsablesmuestrasDto->setnombre(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesmuestrasDto->getnombre()))));
$MinisteriosresponsablesmuestrasDto->setpaterno(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesmuestrasDto->getpaterno()))));
$MinisteriosresponsablesmuestrasDto->setmaterno(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesmuestrasDto->getmaterno()))));
$MinisteriosresponsablesmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesmuestrasDto->getfechaRegistro()))));
$MinisteriosresponsablesmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesmuestrasDto->getfechaActualizacion()))));
return $MinisteriosresponsablesmuestrasDto;
}
public function selectMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto,$proveedor=null){
$MinisteriosresponsablesmuestrasDto=$this->validarMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
$MinisteriosresponsablesmuestrasDao = new MinisteriosresponsablesmuestrasDAO();
$MinisteriosresponsablesmuestrasDto = $MinisteriosresponsablesmuestrasDao->selectMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto,$proveedor);
return $MinisteriosresponsablesmuestrasDto;
}
public function insertMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto,$proveedor=null){
$MinisteriosresponsablesmuestrasDto=$this->validarMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
$MinisteriosresponsablesmuestrasDao = new MinisteriosresponsablesmuestrasDAO();
$MinisteriosresponsablesmuestrasDto = $MinisteriosresponsablesmuestrasDao->insertMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto,$proveedor);
return $MinisteriosresponsablesmuestrasDto;
}
public function updateMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto,$proveedor=null){
$MinisteriosresponsablesmuestrasDto=$this->validarMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
$MinisteriosresponsablesmuestrasDao = new MinisteriosresponsablesmuestrasDAO();
//$tmpDto = new MinisteriosresponsablesmuestrasDTO();
//$tmpDto = $MinisteriosresponsablesmuestrasDao->selectMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto,$proveedor);
//if($tmpDto!=""){//$MinisteriosresponsablesmuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$MinisteriosresponsablesmuestrasDto = $MinisteriosresponsablesmuestrasDao->updateMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto,$proveedor);
return $MinisteriosresponsablesmuestrasDto;
//}
//return "";
}
public function deleteMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto,$proveedor=null){
$MinisteriosresponsablesmuestrasDto=$this->validarMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
$MinisteriosresponsablesmuestrasDao = new MinisteriosresponsablesmuestrasDAO();
$MinisteriosresponsablesmuestrasDto = $MinisteriosresponsablesmuestrasDao->deleteMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto,$proveedor);
return $MinisteriosresponsablesmuestrasDto;
}
}
?>