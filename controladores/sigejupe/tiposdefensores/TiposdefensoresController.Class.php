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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposdefensores/TiposdefensoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposdefensores/TiposdefensoresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposdefensoresController {
private $proveedor;
public function __construct() {
}
public function validarTiposdefensores($TiposdefensoresDto){
$TiposdefensoresDto->setcveTipoDefensor(strtoupper(str_ireplace("'","",trim($TiposdefensoresDto->getcveTipoDefensor()))));
$TiposdefensoresDto->setdesTipoDefensor(strtoupper(str_ireplace("'","",trim($TiposdefensoresDto->getdesTipoDefensor()))));
$TiposdefensoresDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposdefensoresDto->getactivo()))));
$TiposdefensoresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposdefensoresDto->getfechaRegistro()))));
$TiposdefensoresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposdefensoresDto->getfechaActualizacion()))));
return $TiposdefensoresDto;
}
public function selectTiposdefensores($TiposdefensoresDto,$proveedor=null){
$TiposdefensoresDto=$this->validarTiposdefensores($TiposdefensoresDto);
$TiposdefensoresDao = new TiposdefensoresDAO();
$TiposdefensoresDto = $TiposdefensoresDao->selectTiposdefensores($TiposdefensoresDto,$proveedor);
return $TiposdefensoresDto;
}
public function insertTiposdefensores($TiposdefensoresDto,$proveedor=null){
$TiposdefensoresDto=$this->validarTiposdefensores($TiposdefensoresDto);
$TiposdefensoresDao = new TiposdefensoresDAO();
$TiposdefensoresDto = $TiposdefensoresDao->insertTiposdefensores($TiposdefensoresDto,$proveedor);
return $TiposdefensoresDto;
}
public function updateTiposdefensores($TiposdefensoresDto,$proveedor=null){
$TiposdefensoresDto=$this->validarTiposdefensores($TiposdefensoresDto);
$TiposdefensoresDao = new TiposdefensoresDAO();
//$tmpDto = new TiposdefensoresDTO();
//$tmpDto = $TiposdefensoresDao->selectTiposdefensores($TiposdefensoresDto,$proveedor);
//if($tmpDto!=""){//$TiposdefensoresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposdefensoresDto = $TiposdefensoresDao->updateTiposdefensores($TiposdefensoresDto,$proveedor);
return $TiposdefensoresDto;
//}
//return "";
}
public function deleteTiposdefensores($TiposdefensoresDto,$proveedor=null){
$TiposdefensoresDto=$this->validarTiposdefensores($TiposdefensoresDto);
$TiposdefensoresDao = new TiposdefensoresDAO();
$TiposdefensoresDto = $TiposdefensoresDao->deleteTiposdefensores($TiposdefensoresDto,$proveedor);
return $TiposdefensoresDto;
}
}
?>