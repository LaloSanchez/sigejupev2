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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatusaudiencias/EstatusaudienciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatusaudiencias/EstatusaudienciasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstatusaudienciasController {
private $proveedor;
public function __construct() {
}
public function validarEstatusaudiencias($EstatusaudienciasDto){
$EstatusaudienciasDto->setcveEstatusAudiencia(strtoupper(str_ireplace("'","",trim($EstatusaudienciasDto->getcveEstatusAudiencia()))));
$EstatusaudienciasDto->setdesEstatusAudiencia(strtoupper(str_ireplace("'","",trim($EstatusaudienciasDto->getdesEstatusAudiencia()))));
$EstatusaudienciasDto->setactivo(strtoupper(str_ireplace("'","",trim($EstatusaudienciasDto->getactivo()))));
$EstatusaudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstatusaudienciasDto->getfechaRegistro()))));
$EstatusaudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstatusaudienciasDto->getfechaActualizacion()))));
return $EstatusaudienciasDto;
}
public function selectEstatusaudiencias($EstatusaudienciasDto,$proveedor=null){
$EstatusaudienciasDto=$this->validarEstatusaudiencias($EstatusaudienciasDto);
$EstatusaudienciasDao = new EstatusaudienciasDAO();
$EstatusaudienciasDto = $EstatusaudienciasDao->selectEstatusaudiencias($EstatusaudienciasDto,$proveedor);
return $EstatusaudienciasDto;
}
public function insertEstatusaudiencias($EstatusaudienciasDto,$proveedor=null){
$EstatusaudienciasDto=$this->validarEstatusaudiencias($EstatusaudienciasDto);
$EstatusaudienciasDao = new EstatusaudienciasDAO();
$EstatusaudienciasDto = $EstatusaudienciasDao->insertEstatusaudiencias($EstatusaudienciasDto,$proveedor);
return $EstatusaudienciasDto;
}
public function updateEstatusaudiencias($EstatusaudienciasDto,$proveedor=null){
$EstatusaudienciasDto=$this->validarEstatusaudiencias($EstatusaudienciasDto);
$EstatusaudienciasDao = new EstatusaudienciasDAO();
//$tmpDto = new EstatusaudienciasDTO();
//$tmpDto = $EstatusaudienciasDao->selectEstatusaudiencias($EstatusaudienciasDto,$proveedor);
//if($tmpDto!=""){//$EstatusaudienciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstatusaudienciasDto = $EstatusaudienciasDao->updateEstatusaudiencias($EstatusaudienciasDto,$proveedor);
return $EstatusaudienciasDto;
//}
//return "";
}
public function deleteEstatusaudiencias($EstatusaudienciasDto,$proveedor=null){
$EstatusaudienciasDto=$this->validarEstatusaudiencias($EstatusaudienciasDto);
$EstatusaudienciasDao = new EstatusaudienciasDAO();
$EstatusaudienciasDto = $EstatusaudienciasDao->deleteEstatusaudiencias($EstatusaudienciasDto,$proveedor);
return $EstatusaudienciasDto;
}
}
?>