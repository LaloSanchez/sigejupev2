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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposestatus/TiposestatusDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposestatus/TiposestatusDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposestatusController {
private $proveedor;
public function __construct() {
}
public function validarTiposestatus($TiposestatusDto){
$TiposestatusDto->setcveTipoEstatus(strtoupper(str_ireplace("'","",trim($TiposestatusDto->getcveTipoEstatus()))));
$TiposestatusDto->setdescTipoEstatus(strtoupper(str_ireplace("'","",trim($TiposestatusDto->getdescTipoEstatus()))));
$TiposestatusDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposestatusDto->getactivo()))));
$TiposestatusDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposestatusDto->getfechaActualizacion()))));
$TiposestatusDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposestatusDto->getfechaRegistro()))));
return $TiposestatusDto;
}
public function selectTiposestatus($TiposestatusDto,$proveedor=null){
$TiposestatusDto=$this->validarTiposestatus($TiposestatusDto);
$TiposestatusDao = new TiposestatusDAO();
$TiposestatusDto = $TiposestatusDao->selectTiposestatus($TiposestatusDto,$proveedor);
return $TiposestatusDto;
}
public function insertTiposestatus($TiposestatusDto,$proveedor=null){
$TiposestatusDto=$this->validarTiposestatus($TiposestatusDto);
$TiposestatusDao = new TiposestatusDAO();
$TiposestatusDto = $TiposestatusDao->insertTiposestatus($TiposestatusDto,$proveedor);
return $TiposestatusDto;
}
public function updateTiposestatus($TiposestatusDto,$proveedor=null){
$TiposestatusDto=$this->validarTiposestatus($TiposestatusDto);
$TiposestatusDao = new TiposestatusDAO();
//$tmpDto = new TiposestatusDTO();
//$tmpDto = $TiposestatusDao->selectTiposestatus($TiposestatusDto,$proveedor);
//if($tmpDto!=""){//$TiposestatusDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposestatusDto = $TiposestatusDao->updateTiposestatus($TiposestatusDto,$proveedor);
return $TiposestatusDto;
//}
//return "";
}
public function deleteTiposestatus($TiposestatusDto,$proveedor=null){
$TiposestatusDto=$this->validarTiposestatus($TiposestatusDto);
$TiposestatusDao = new TiposestatusDAO();
$TiposestatusDto = $TiposestatusDao->deleteTiposestatus($TiposestatusDto,$proveedor);
return $TiposestatusDto;
}
}
?>