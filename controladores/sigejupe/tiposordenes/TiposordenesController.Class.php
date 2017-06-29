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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposordenes/TiposordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposordenes/TiposordenesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposordenesController {
private $proveedor;
public function __construct() {
}
public function validarTiposordenes($TiposordenesDto){
$TiposordenesDto->setcveTipoOrden(strtoupper(str_ireplace("'","",trim($TiposordenesDto->getcveTipoOrden()))));
$TiposordenesDto->setdesTipoOrden(strtoupper(str_ireplace("'","",trim($TiposordenesDto->getdesTipoOrden()))));
$TiposordenesDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposordenesDto->getactivo()))));
$TiposordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposordenesDto->getfechaRegistro()))));
$TiposordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposordenesDto->getfechaActualizacion()))));
return $TiposordenesDto;
}
public function selectTiposordenes($TiposordenesDto,$proveedor=null){
$TiposordenesDto=$this->validarTiposordenes($TiposordenesDto);
$TiposordenesDao = new TiposordenesDAO();
$TiposordenesDto = $TiposordenesDao->selectTiposordenes($TiposordenesDto,$proveedor);
return $TiposordenesDto;
}
public function insertTiposordenes($TiposordenesDto,$proveedor=null){
$TiposordenesDto=$this->validarTiposordenes($TiposordenesDto);
$TiposordenesDao = new TiposordenesDAO();
$TiposordenesDto = $TiposordenesDao->insertTiposordenes($TiposordenesDto,$proveedor);
return $TiposordenesDto;
}
public function updateTiposordenes($TiposordenesDto,$proveedor=null){
$TiposordenesDto=$this->validarTiposordenes($TiposordenesDto);
$TiposordenesDao = new TiposordenesDAO();
//$tmpDto = new TiposordenesDTO();
//$tmpDto = $TiposordenesDao->selectTiposordenes($TiposordenesDto,$proveedor);
//if($tmpDto!=""){//$TiposordenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposordenesDto = $TiposordenesDao->updateTiposordenes($TiposordenesDto,$proveedor);
return $TiposordenesDto;
//}
//return "";
}
public function deleteTiposordenes($TiposordenesDto,$proveedor=null){
$TiposordenesDto=$this->validarTiposordenes($TiposordenesDto);
$TiposordenesDao = new TiposordenesDAO();
$TiposordenesDto = $TiposordenesDao->deleteTiposordenes($TiposordenesDto,$proveedor);
return $TiposordenesDto;
}
}
?>