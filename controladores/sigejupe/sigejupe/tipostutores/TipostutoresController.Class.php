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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipostutores/TipostutoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tipostutores/TipostutoresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TipostutoresController {
private $proveedor;
public function __construct() {
}
public function validarTipostutores($TipostutoresDto){
$TipostutoresDto->setcveTipoTutor(strtoupper(str_ireplace("'","",trim($TipostutoresDto->getcveTipoTutor()))));
$TipostutoresDto->setdesTipoTutor(strtoupper(str_ireplace("'","",trim($TipostutoresDto->getdesTipoTutor()))));
$TipostutoresDto->setactivo(strtoupper(str_ireplace("'","",trim($TipostutoresDto->getactivo()))));
$TipostutoresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TipostutoresDto->getfechaRegistro()))));
$TipostutoresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TipostutoresDto->getfechaActualizacion()))));
return $TipostutoresDto;
}
public function selectTipostutores($TipostutoresDto,$proveedor=null){
$TipostutoresDto=$this->validarTipostutores($TipostutoresDto);
$TipostutoresDao = new TipostutoresDAO();
$TipostutoresDto = $TipostutoresDao->selectTipostutores($TipostutoresDto,$proveedor);
return $TipostutoresDto;
}
public function insertTipostutores($TipostutoresDto,$proveedor=null){
$TipostutoresDto=$this->validarTipostutores($TipostutoresDto);
$TipostutoresDao = new TipostutoresDAO();
$TipostutoresDto = $TipostutoresDao->insertTipostutores($TipostutoresDto,$proveedor);
return $TipostutoresDto;
}
public function updateTipostutores($TipostutoresDto,$proveedor=null){
$TipostutoresDto=$this->validarTipostutores($TipostutoresDto);
$TipostutoresDao = new TipostutoresDAO();
//$tmpDto = new TipostutoresDTO();
//$tmpDto = $TipostutoresDao->selectTipostutores($TipostutoresDto,$proveedor);
//if($tmpDto!=""){//$TipostutoresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TipostutoresDto = $TipostutoresDao->updateTipostutores($TipostutoresDto,$proveedor);
return $TipostutoresDto;
//}
//return "";
}
public function deleteTipostutores($TipostutoresDto,$proveedor=null){
$TipostutoresDto=$this->validarTipostutores($TipostutoresDto);
$TipostutoresDao = new TipostutoresDAO();
$TipostutoresDto = $TipostutoresDao->deleteTipostutores($TipostutoresDto,$proveedor);
return $TipostutoresDto;
}
}
?>