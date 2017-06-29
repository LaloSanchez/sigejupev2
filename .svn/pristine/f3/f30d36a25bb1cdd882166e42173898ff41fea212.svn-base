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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitosordenes/DelitosordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/delitosordenes/DelitosordenesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DelitosordenesController {
private $proveedor;
public function __construct() {
}
public function validarDelitosordenes($DelitosordenesDto){
$DelitosordenesDto->setidDelitoOrden(strtoupper(str_ireplace("'","",trim($DelitosordenesDto->getidDelitoOrden()))));
$DelitosordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'","",trim($DelitosordenesDto->getidSolicitudOrden()))));
$DelitosordenesDto->setcveDelito(strtoupper(str_ireplace("'","",trim($DelitosordenesDto->getcveDelito()))));
$DelitosordenesDto->setactivo(strtoupper(str_ireplace("'","",trim($DelitosordenesDto->getactivo()))));
$DelitosordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DelitosordenesDto->getfechaRegistro()))));
$DelitosordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DelitosordenesDto->getfechaActualizacion()))));
return $DelitosordenesDto;
}
public function selectDelitosordenes($DelitosordenesDto,$proveedor=null){
$DelitosordenesDto=$this->validarDelitosordenes($DelitosordenesDto);
$DelitosordenesDao = new DelitosordenesDAO();
$DelitosordenesDto = $DelitosordenesDao->selectDelitosordenes($DelitosordenesDto,$proveedor);
return $DelitosordenesDto;
}
public function insertDelitosordenes($DelitosordenesDto,$proveedor=null){
$DelitosordenesDto=$this->validarDelitosordenes($DelitosordenesDto);
$DelitosordenesDao = new DelitosordenesDAO();
$DelitosordenesDto = $DelitosordenesDao->insertDelitosordenes($DelitosordenesDto,$proveedor);
return $DelitosordenesDto;
}
public function updateDelitosordenes($DelitosordenesDto,$proveedor=null){
$DelitosordenesDto=$this->validarDelitosordenes($DelitosordenesDto);
$DelitosordenesDao = new DelitosordenesDAO();
//$tmpDto = new DelitosordenesDTO();
//$tmpDto = $DelitosordenesDao->selectDelitosordenes($DelitosordenesDto,$proveedor);
//if($tmpDto!=""){//$DelitosordenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DelitosordenesDto = $DelitosordenesDao->updateDelitosordenes($DelitosordenesDto,$proveedor);
return $DelitosordenesDto;
//}
//return "";
}
public function deleteDelitosordenes($DelitosordenesDto,$proveedor=null){
$DelitosordenesDto=$this->validarDelitosordenes($DelitosordenesDto);
$DelitosordenesDao = new DelitosordenesDAO();
$DelitosordenesDto = $DelitosordenesDao->deleteDelitosordenes($DelitosordenesDto,$proveedor);
return $DelitosordenesDto;
}
}
?>