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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitoselectronico/DelitoselectronicoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/delitoselectronico/DelitoselectronicoDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DelitoselectronicoController {
private $proveedor;
public function __construct() {
}
public function validarDelitoselectronico($DelitoselectronicoDto){
$DelitoselectronicoDto->setidDelitoElectronico(strtoupper(str_ireplace("'","",trim($DelitoselectronicoDto->getidDelitoElectronico()))));
$DelitoselectronicoDto->setidMateriaLiti(strtoupper(str_ireplace("'","",trim($DelitoselectronicoDto->getidMateriaLiti()))));
$DelitoselectronicoDto->setcveDelito(strtoupper(str_ireplace("'","",trim($DelitoselectronicoDto->getcveDelito()))));
$DelitoselectronicoDto->setactivo(strtoupper(str_ireplace("'","",trim($DelitoselectronicoDto->getactivo()))));
$DelitoselectronicoDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DelitoselectronicoDto->getfechaRegistro()))));
$DelitoselectronicoDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DelitoselectronicoDto->getfechaActualizacion()))));
return $DelitoselectronicoDto;
}
public function selectDelitoselectronico($DelitoselectronicoDto,$proveedor=null){
$DelitoselectronicoDto=$this->validarDelitoselectronico($DelitoselectronicoDto);
$DelitoselectronicoDao = new DelitoselectronicoDAO();
$DelitoselectronicoDto = $DelitoselectronicoDao->selectDelitoselectronico($DelitoselectronicoDto,$proveedor);
return $DelitoselectronicoDto;
}
public function insertDelitoselectronico($DelitoselectronicoDto,$proveedor=null){
$DelitoselectronicoDto=$this->validarDelitoselectronico($DelitoselectronicoDto);
$DelitoselectronicoDao = new DelitoselectronicoDAO();
$DelitoselectronicoDto = $DelitoselectronicoDao->insertDelitoselectronico($DelitoselectronicoDto,$proveedor);
return $DelitoselectronicoDto;
}
public function updateDelitoselectronico($DelitoselectronicoDto,$proveedor=null){
$DelitoselectronicoDto=$this->validarDelitoselectronico($DelitoselectronicoDto);
$DelitoselectronicoDao = new DelitoselectronicoDAO();
//$tmpDto = new DelitoselectronicoDTO();
//$tmpDto = $DelitoselectronicoDao->selectDelitoselectronico($DelitoselectronicoDto,$proveedor);
//if($tmpDto!=""){//$DelitoselectronicoDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DelitoselectronicoDto = $DelitoselectronicoDao->updateDelitoselectronico($DelitoselectronicoDto,$proveedor);
return $DelitoselectronicoDto;
//}
//return "";
}
public function deleteDelitoselectronico($DelitoselectronicoDto,$proveedor=null){
$DelitoselectronicoDto=$this->validarDelitoselectronico($DelitoselectronicoDto);
$DelitoselectronicoDao = new DelitoselectronicoDAO();
$DelitoselectronicoDto = $DelitoselectronicoDao->deleteDelitoselectronico($DelitoselectronicoDto,$proveedor);
return $DelitoselectronicoDto;
}
}
?>