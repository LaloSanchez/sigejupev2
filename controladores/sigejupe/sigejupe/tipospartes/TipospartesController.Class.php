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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipospartes/TipospartesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tipospartes/TipospartesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TipospartesController {
private $proveedor;
public function __construct() {
}
public function validarTipospartes($TipospartesDto){
$TipospartesDto->setcveTipoParte(strtoupper(str_ireplace("'","",trim($TipospartesDto->getcveTipoParte()))));
$TipospartesDto->setdescTipoParte(strtoupper(str_ireplace("'","",trim($TipospartesDto->getdescTipoParte()))));
$TipospartesDto->setactivo(strtoupper(str_ireplace("'","",trim($TipospartesDto->getactivo()))));
$TipospartesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TipospartesDto->getfechaRegistro()))));
$TipospartesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TipospartesDto->getfechaActualizacion()))));
return $TipospartesDto;
}
public function selectTipospartes($TipospartesDto,$proveedor=null){
$TipospartesDto=$this->validarTipospartes($TipospartesDto);
$TipospartesDao = new TipospartesDAO();
$TipospartesDto = $TipospartesDao->selectTipospartes($TipospartesDto,$proveedor);
return $TipospartesDto;
}
public function insertTipospartes($TipospartesDto,$proveedor=null){
$TipospartesDto=$this->validarTipospartes($TipospartesDto);
$TipospartesDao = new TipospartesDAO();
$TipospartesDto = $TipospartesDao->insertTipospartes($TipospartesDto,$proveedor);
return $TipospartesDto;
}
public function updateTipospartes($TipospartesDto,$proveedor=null){
$TipospartesDto=$this->validarTipospartes($TipospartesDto);
$TipospartesDao = new TipospartesDAO();
//$tmpDto = new TipospartesDTO();
//$tmpDto = $TipospartesDao->selectTipospartes($TipospartesDto,$proveedor);
//if($tmpDto!=""){//$TipospartesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TipospartesDto = $TipospartesDao->updateTipospartes($TipospartesDto,$proveedor);
return $TipospartesDto;
//}
//return "";
}
public function deleteTipospartes($TipospartesDto,$proveedor=null){
$TipospartesDto=$this->validarTipospartes($TipospartesDto);
$TipospartesDao = new TipospartesDAO();
$TipospartesDto = $TipospartesDao->deleteTipospartes($TipospartesDto,$proveedor);
return $TipospartesDto;
}
}
?>