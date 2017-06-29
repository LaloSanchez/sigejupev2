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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ministeriosresponsablesordenes/MinisteriosresponsablesordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ministeriosresponsablesordenes/MinisteriosresponsablesordenesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class MinisteriosresponsablesordenesController {
private $proveedor;
public function __construct() {
}
public function validarMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto){
$MinisteriosresponsablesordenesDto->setidMinisterioResponsableOrden(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesordenesDto->getidMinisterioResponsableOrden()))));
$MinisteriosresponsablesordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesordenesDto->getidSolicitudOrden()))));
$MinisteriosresponsablesordenesDto->setnombre(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesordenesDto->getnombre()))));
$MinisteriosresponsablesordenesDto->setpaterno(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesordenesDto->getpaterno()))));
$MinisteriosresponsablesordenesDto->setmaterno(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesordenesDto->getmaterno()))));
$MinisteriosresponsablesordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesordenesDto->getfechaRegistro()))));
$MinisteriosresponsablesordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($MinisteriosresponsablesordenesDto->getfechaActualizacion()))));
return $MinisteriosresponsablesordenesDto;
}
public function selectMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto,$proveedor=null){
$MinisteriosresponsablesordenesDto=$this->validarMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
$MinisteriosresponsablesordenesDao = new MinisteriosresponsablesordenesDAO();
$MinisteriosresponsablesordenesDto = $MinisteriosresponsablesordenesDao->selectMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto,$proveedor);
return $MinisteriosresponsablesordenesDto;
}
public function insertMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto,$proveedor=null){
$MinisteriosresponsablesordenesDto=$this->validarMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
$MinisteriosresponsablesordenesDao = new MinisteriosresponsablesordenesDAO();
$MinisteriosresponsablesordenesDto = $MinisteriosresponsablesordenesDao->insertMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto,$proveedor);
return $MinisteriosresponsablesordenesDto;
}
public function updateMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto,$proveedor=null){
$MinisteriosresponsablesordenesDto=$this->validarMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
$MinisteriosresponsablesordenesDao = new MinisteriosresponsablesordenesDAO();
//$tmpDto = new MinisteriosresponsablesordenesDTO();
//$tmpDto = $MinisteriosresponsablesordenesDao->selectMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto,$proveedor);
//if($tmpDto!=""){//$MinisteriosresponsablesordenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$MinisteriosresponsablesordenesDto = $MinisteriosresponsablesordenesDao->updateMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto,$proveedor);
return $MinisteriosresponsablesordenesDto;
//}
//return "";
}
public function deleteMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto,$proveedor=null){
$MinisteriosresponsablesordenesDto=$this->validarMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
$MinisteriosresponsablesordenesDao = new MinisteriosresponsablesordenesDAO();
$MinisteriosresponsablesordenesDto = $MinisteriosresponsablesordenesDao->deleteMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto,$proveedor);
return $MinisteriosresponsablesordenesDto;
}
}
?>