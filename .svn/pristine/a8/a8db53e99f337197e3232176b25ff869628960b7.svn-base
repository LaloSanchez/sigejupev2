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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipossentencias/TipossentenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tipossentencias/TipossentenciasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TipossentenciasController {
private $proveedor;
public function __construct() {
}
public function validarTipossentencias($TipossentenciasDto){
$TipossentenciasDto->setcveTipoSentencia(strtoupper(str_ireplace("'","",trim($TipossentenciasDto->getcveTipoSentencia()))));
$TipossentenciasDto->setdesTipoSentencia(strtoupper(str_ireplace("'","",trim($TipossentenciasDto->getdesTipoSentencia()))));
$TipossentenciasDto->setcveInstancia(strtoupper(str_ireplace("'","",trim($TipossentenciasDto->getcveInstancia()))));
$TipossentenciasDto->setactivo(strtoupper(str_ireplace("'","",trim($TipossentenciasDto->getactivo()))));
$TipossentenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TipossentenciasDto->getfechaRegistro()))));
$TipossentenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TipossentenciasDto->getfechaActualizacion()))));
return $TipossentenciasDto;
}
public function selectTipossentencias($TipossentenciasDto,$proveedor=null){
$TipossentenciasDto=$this->validarTipossentencias($TipossentenciasDto);
$TipossentenciasDao = new TipossentenciasDAO();
$TipossentenciasDto = $TipossentenciasDao->selectTipossentencias($TipossentenciasDto,$proveedor);
return $TipossentenciasDto;
}
public function insertTipossentencias($TipossentenciasDto,$proveedor=null){
$TipossentenciasDto=$this->validarTipossentencias($TipossentenciasDto);
$TipossentenciasDao = new TipossentenciasDAO();
$TipossentenciasDto = $TipossentenciasDao->insertTipossentencias($TipossentenciasDto,$proveedor);
return $TipossentenciasDto;
}
public function updateTipossentencias($TipossentenciasDto,$proveedor=null){
$TipossentenciasDto=$this->validarTipossentencias($TipossentenciasDto);
$TipossentenciasDao = new TipossentenciasDAO();
//$tmpDto = new TipossentenciasDTO();
//$tmpDto = $TipossentenciasDao->selectTipossentencias($TipossentenciasDto,$proveedor);
//if($tmpDto!=""){//$TipossentenciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TipossentenciasDto = $TipossentenciasDao->updateTipossentencias($TipossentenciasDto,$proveedor);
return $TipossentenciasDto;
//}
//return "";
}
public function deleteTipossentencias($TipossentenciasDto,$proveedor=null){
$TipossentenciasDto=$this->validarTipossentencias($TipossentenciasDto);
$TipossentenciasDao = new TipossentenciasDAO();
$TipossentenciasDto = $TipossentenciasDao->deleteTipossentencias($TipossentenciasDto,$proveedor);
return $TipossentenciasDto;
}
}
?>