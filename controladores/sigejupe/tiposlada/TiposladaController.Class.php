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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposlada/TiposladaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposlada/TiposladaDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposladaController {
private $proveedor;
public function __construct() {
}
public function validarTiposlada($TiposladaDto){
$TiposladaDto->setcveTipoLada(strtoupper(str_ireplace("'","",trim($TiposladaDto->getcveTipoLada()))));
$TiposladaDto->setdesTipoLada(strtoupper(str_ireplace("'","",trim($TiposladaDto->getdesTipoLada()))));
$TiposladaDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposladaDto->getactivo()))));
$TiposladaDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposladaDto->getfechaRegistro()))));
$TiposladaDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposladaDto->getfechaActualizacion()))));
return $TiposladaDto;
}
public function selectTiposlada($TiposladaDto,$proveedor=null){
$TiposladaDto=$this->validarTiposlada($TiposladaDto);
$TiposladaDao = new TiposladaDAO();
$TiposladaDto = $TiposladaDao->selectTiposlada($TiposladaDto,$proveedor);
return $TiposladaDto;
}
public function insertTiposlada($TiposladaDto,$proveedor=null){
$TiposladaDto=$this->validarTiposlada($TiposladaDto);
$TiposladaDao = new TiposladaDAO();
$TiposladaDto = $TiposladaDao->insertTiposlada($TiposladaDto,$proveedor);
return $TiposladaDto;
}
public function updateTiposlada($TiposladaDto,$proveedor=null){
$TiposladaDto=$this->validarTiposlada($TiposladaDto);
$TiposladaDao = new TiposladaDAO();
//$tmpDto = new TiposladaDTO();
//$tmpDto = $TiposladaDao->selectTiposlada($TiposladaDto,$proveedor);
//if($tmpDto!=""){//$TiposladaDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposladaDto = $TiposladaDao->updateTiposlada($TiposladaDto,$proveedor);
return $TiposladaDto;
//}
//return "";
}
public function deleteTiposlada($TiposladaDto,$proveedor=null){
$TiposladaDto=$this->validarTiposlada($TiposladaDto);
$TiposladaDao = new TiposladaDAO();
$TiposladaDto = $TiposladaDao->deleteTiposlada($TiposladaDto,$proveedor);
return $TiposladaDto;
}
}
?>