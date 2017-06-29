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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitosmuestras/DelitosmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/delitosmuestras/DelitosmuestrasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DelitosmuestrasController {
private $proveedor;
public function __construct() {
}
public function validarDelitosmuestras($DelitosmuestrasDto){
$DelitosmuestrasDto->setidDelitoMuestra(strtoupper(str_ireplace("'","",trim($DelitosmuestrasDto->getidDelitoMuestra()))));
$DelitosmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'","",trim($DelitosmuestrasDto->getidSolicitudMuestra()))));
$DelitosmuestrasDto->setcveDelito(strtoupper(str_ireplace("'","",trim($DelitosmuestrasDto->getcveDelito()))));
$DelitosmuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim($DelitosmuestrasDto->getactivo()))));
$DelitosmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DelitosmuestrasDto->getfechaRegistro()))));
$DelitosmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DelitosmuestrasDto->getfechaActualizacion()))));
return $DelitosmuestrasDto;
}
public function selectDelitosmuestras($DelitosmuestrasDto,$proveedor=null){
$DelitosmuestrasDto=$this->validarDelitosmuestras($DelitosmuestrasDto);
$DelitosmuestrasDao = new DelitosmuestrasDAO();
$DelitosmuestrasDto = $DelitosmuestrasDao->selectDelitosmuestras($DelitosmuestrasDto,$proveedor);
return $DelitosmuestrasDto;
}
public function insertDelitosmuestras($DelitosmuestrasDto,$proveedor=null){
$DelitosmuestrasDto=$this->validarDelitosmuestras($DelitosmuestrasDto);
$DelitosmuestrasDao = new DelitosmuestrasDAO();
$DelitosmuestrasDto = $DelitosmuestrasDao->insertDelitosmuestras($DelitosmuestrasDto,$proveedor);
return $DelitosmuestrasDto;
}
public function updateDelitosmuestras($DelitosmuestrasDto,$proveedor=null){
$DelitosmuestrasDto=$this->validarDelitosmuestras($DelitosmuestrasDto);
$DelitosmuestrasDao = new DelitosmuestrasDAO();
//$tmpDto = new DelitosmuestrasDTO();
//$tmpDto = $DelitosmuestrasDao->selectDelitosmuestras($DelitosmuestrasDto,$proveedor);
//if($tmpDto!=""){//$DelitosmuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DelitosmuestrasDto = $DelitosmuestrasDao->updateDelitosmuestras($DelitosmuestrasDto,$proveedor);
return $DelitosmuestrasDto;
//}
//return "";
}
public function deleteDelitosmuestras($DelitosmuestrasDto,$proveedor=null){
$DelitosmuestrasDto=$this->validarDelitosmuestras($DelitosmuestrasDto);
$DelitosmuestrasDao = new DelitosmuestrasDAO();
$DelitosmuestrasDto = $DelitosmuestrasDao->deleteDelitosmuestras($DelitosmuestrasDto,$proveedor);
return $DelitosmuestrasDto;
}
}
?>