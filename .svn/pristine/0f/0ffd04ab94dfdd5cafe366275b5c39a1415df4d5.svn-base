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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/suspensioncondicionales/SuspensioncondicionalesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/suspensioncondicionales/SuspensioncondicionalesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class SuspensioncondicionalesController {
private $proveedor;
public function __construct() {
}
public function validarSuspensioncondicionales($SuspensioncondicionalesDto){
$SuspensioncondicionalesDto->setidSuspensionCondicional(strtoupper(str_ireplace("'","",trim($SuspensioncondicionalesDto->getidSuspensionCondicional()))));
$SuspensioncondicionalesDto->setidActuacion(strtoupper(str_ireplace("'","",trim($SuspensioncondicionalesDto->getidActuacion()))));
$SuspensioncondicionalesDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($SuspensioncondicionalesDto->getidImputadoCarpeta()))));
$SuspensioncondicionalesDto->setcveTipoSuspensionCondicional(strtoupper(str_ireplace("'","",trim($SuspensioncondicionalesDto->getcveTipoSuspensionCondicional()))));
$SuspensioncondicionalesDto->setApelada(strtoupper(str_ireplace("'","",trim($SuspensioncondicionalesDto->getApelada()))));
$SuspensioncondicionalesDto->setactivo(strtoupper(str_ireplace("'","",trim($SuspensioncondicionalesDto->getactivo()))));
$SuspensioncondicionalesDto->setfechaInicio(strtoupper(str_ireplace("'","",trim($SuspensioncondicionalesDto->getfechaInicio()))));
$SuspensioncondicionalesDto->setfechaTermina(strtoupper(str_ireplace("'","",trim($SuspensioncondicionalesDto->getfechaTermina()))));
return $SuspensioncondicionalesDto;
}
public function selectSuspensioncondicionales($SuspensioncondicionalesDto,$proveedor=null){
$SuspensioncondicionalesDto=$this->validarSuspensioncondicionales($SuspensioncondicionalesDto);
$SuspensioncondicionalesDao = new SuspensioncondicionalesDAO();
$SuspensioncondicionalesDto = $SuspensioncondicionalesDao->selectSuspensioncondicionales($SuspensioncondicionalesDto,$proveedor);
return $SuspensioncondicionalesDto;
}
public function insertSuspensioncondicionales($SuspensioncondicionalesDto,$proveedor=null){
$SuspensioncondicionalesDto=$this->validarSuspensioncondicionales($SuspensioncondicionalesDto);
$SuspensioncondicionalesDao = new SuspensioncondicionalesDAO();
$SuspensioncondicionalesDto = $SuspensioncondicionalesDao->insertSuspensioncondicionales($SuspensioncondicionalesDto,$proveedor);
return $SuspensioncondicionalesDto;
}
public function updateSuspensioncondicionales($SuspensioncondicionalesDto,$proveedor=null){
$SuspensioncondicionalesDto=$this->validarSuspensioncondicionales($SuspensioncondicionalesDto);
$SuspensioncondicionalesDao = new SuspensioncondicionalesDAO();
//$tmpDto = new SuspensioncondicionalesDTO();
//$tmpDto = $SuspensioncondicionalesDao->selectSuspensioncondicionales($SuspensioncondicionalesDto,$proveedor);
//if($tmpDto!=""){//$SuspensioncondicionalesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$SuspensioncondicionalesDto = $SuspensioncondicionalesDao->updateSuspensioncondicionales($SuspensioncondicionalesDto,$proveedor);
return $SuspensioncondicionalesDto;
//}
//return "";
}
public function deleteSuspensioncondicionales($SuspensioncondicionalesDto,$proveedor=null){
$SuspensioncondicionalesDto=$this->validarSuspensioncondicionales($SuspensioncondicionalesDto);
$SuspensioncondicionalesDao = new SuspensioncondicionalesDAO();
$SuspensioncondicionalesDto = $SuspensioncondicionalesDao->deleteSuspensioncondicionales($SuspensioncondicionalesDto,$proveedor);
return $SuspensioncondicionalesDto;
}
}
?>