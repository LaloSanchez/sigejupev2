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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipossuspensioncondicionales/TipossuspensioncondicionalesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tipossuspensioncondicionales/TipossuspensioncondicionalesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TipossuspensioncondicionalesController {
private $proveedor;
public function __construct() {
}
public function validarTipossuspensioncondicionales($TipossuspensioncondicionalesDto){
$TipossuspensioncondicionalesDto->setcveTipoSuspensionCondicional(strtoupper(str_ireplace("'","",trim($TipossuspensioncondicionalesDto->getcveTipoSuspensionCondicional()))));
$TipossuspensioncondicionalesDto->setdesTipoSuspensionCondicional(strtoupper(str_ireplace("'","",trim($TipossuspensioncondicionalesDto->getdesTipoSuspensionCondicional()))));
$TipossuspensioncondicionalesDto->setactivo(strtoupper(str_ireplace("'","",trim($TipossuspensioncondicionalesDto->getactivo()))));
$TipossuspensioncondicionalesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TipossuspensioncondicionalesDto->getfechaRegistro()))));
$TipossuspensioncondicionalesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TipossuspensioncondicionalesDto->getfechaActualizacion()))));
return $TipossuspensioncondicionalesDto;
}
public function selectTipossuspensioncondicionales($TipossuspensioncondicionalesDto,$proveedor=null){
$TipossuspensioncondicionalesDto=$this->validarTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
$TipossuspensioncondicionalesDao = new TipossuspensioncondicionalesDAO();
$TipossuspensioncondicionalesDto = $TipossuspensioncondicionalesDao->selectTipossuspensioncondicionales($TipossuspensioncondicionalesDto,' ORDER BY desTipoSuspensionCondicional ASC',$proveedor);
return $TipossuspensioncondicionalesDto;
}
public function insertTipossuspensioncondicionales($TipossuspensioncondicionalesDto,$proveedor=null){
$TipossuspensioncondicionalesDto=$this->validarTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
$TipossuspensioncondicionalesDao = new TipossuspensioncondicionalesDAO();
$TipossuspensioncondicionalesDto = $TipossuspensioncondicionalesDao->insertTipossuspensioncondicionales($TipossuspensioncondicionalesDto,$proveedor);
return $TipossuspensioncondicionalesDto;
}
public function updateTipossuspensioncondicionales($TipossuspensioncondicionalesDto,$proveedor=null){
$TipossuspensioncondicionalesDto=$this->validarTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
$TipossuspensioncondicionalesDao = new TipossuspensioncondicionalesDAO();
//$tmpDto = new TipossuspensioncondicionalesDTO();
//$tmpDto = $TipossuspensioncondicionalesDao->selectTipossuspensioncondicionales($TipossuspensioncondicionalesDto,$proveedor);
//if($tmpDto!=""){//$TipossuspensioncondicionalesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TipossuspensioncondicionalesDto = $TipossuspensioncondicionalesDao->updateTipossuspensioncondicionales($TipossuspensioncondicionalesDto,$proveedor);
return $TipossuspensioncondicionalesDto;
//}
//return "";
}
public function deleteTipossuspensioncondicionales($TipossuspensioncondicionalesDto,$proveedor=null){
$TipossuspensioncondicionalesDto=$this->validarTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
$TipossuspensioncondicionalesDao = new TipossuspensioncondicionalesDAO();
$TipossuspensioncondicionalesDto = $TipossuspensioncondicionalesDao->deleteTipossuspensioncondicionales($TipossuspensioncondicionalesDto,$proveedor);
return $TipossuspensioncondicionalesDto;
}
}
?>